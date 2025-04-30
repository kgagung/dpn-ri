<x-admin.layout>
    <div class="card" id="newsTableSection">
        <div class="card-header">
            <h3 class="card-title">Daftar Berita</h3>
        </div>
        <div class="card-body">
            <table id="newsTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Tanggal Berita</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <!-- Form Edit Berita (Disembunyikan Awalnya) -->
    <div class="card mt-4" id="editNewsSection" style="display: none;">
        <div class="card-header">
            <h5 class="card-title">Edit Berita</h5>
        </div>
        <div class="card-body">
            <form id="editNewsForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="edit_id">
                <div class="mb-3">
                    <label for="edit_title" class="form-label">Judul Berita</label>
                    <input type="text" class="form-control" id="edit_title" required>
                </div>
                <div class="mb-3">
                    <label for="edit_news_date" class="form-label">Tanggal Berita</label>
                    <input type="date" class="form-control" id="edit_news_date" required>
                </div>
                <div class="mb-3">
                    <label for="content">Isi Berita</label>
                    <div class="py-5" data-bs-theme="light">
                        <textarea name="content" id="kt_docs_ckeditor_classic"></textarea>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="edit_image" class="form-label">Gambar Berita</label>
                    <input type="file" class="form-control" id="edit_image">

                    <!-- Preview gambar yang sudah ada -->
                    <div id="currentImagePreview" class="mt-3">
                        <img id="edit_image_preview" src="" alt="Gambar Berita Saat Ini" style="max-height: 200px;">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <button type="button" id="cancelEdit" class="btn btn-secondary">Batal</button>
            </form>
        </div>
    </div>

    @push('scripts_page')

    <script>
        let ckeditorInstance;
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                ckeditorInstance = editor;
            })
            .catch(error => {
                console.error("CKEditor Error:", error);
            });
    </script>

    <script>
        $(document).ready(function() {
            $('#newsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('news.list') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'content',
                        name: 'content',
                        render: function(data, type, row) {
                            // Menghapus tag HTML dan memotong jadi 50 kata
                            let text = $('<div>').html(data).text(); // strip HTML
                            let words = text.split(/\s+/).slice(0, 50).join(' ');
                            return `<div>${words}...</div>`;
                        }
                    },
                    {
                        data: 'news_date',
                        name: 'news_date'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Ketika tombol edit ditekan
            $(document).on('click', '.edit-btn', function() {
                let newsId = $(this).data('id');

                $.get("{{ url('/admin/newsList/edit') }}/" + newsId, function(data) {
                    $('#edit_id').val(data.id);
                    $('#edit_title').val(data.title);
                    $('#edit_news_date').val(data.news_date);

                    // Tunggu CKEditor terinisialisasi
                    if (ckeditorInstance) {
                        ckeditorInstance.setData(data.content);
                    }

                    // Tampilkan gambar lama jika ada
                    if (data.image) {
                        const fullImageUrl = "https://dpnri.web.id/storage/" + data.image;
                        $('#edit_image_preview').attr('src', fullImageUrl).show();
                    } else {
                        $('#edit_image_preview').hide();
                    }

                    // Tampilkan kembali form edit
                    $('#newsTableSection').hide();
                    $('#editNewsSection').show();

                    // Scroll ke form edit
                    $('html, body').animate({
                        scrollTop: $('#editNewsSection').offset().top
                    }, 'slow');
                });
            });

            // Proses Update Berita dengan AJAX
            $('#editNewsForm').submit(function(e) {
                e.preventDefault();

                let newsId = $('#edit_id').val();
                let formData = new FormData(this);

                formData.append('_method', 'PUT');
                formData.append('_token', '{{ csrf_token() }}');
                formData.append('title', $('#edit_title').val());
                formData.append('news_date', $('#edit_news_date').val());

                // Ambil data dari CKEditor
                let content = ckeditorInstance.getData();
                formData.append('content', content);

                let file = $('#edit_image')[0]?.files[0];
                if (file) {
                    formData.append('image', file);
                }

                $.ajax({
                    type: "POST",
                    url: "{{ url('/admin/newsList/update') }}/" + newsId,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response.success);
                        $('#editNewsSection').hide();
                        $('#newsTableSection').show();
                        $('#newsTable').DataTable().ajax.reload();
                    },
                    error: function(xhr) {
                        alert("Gagal memperbarui berita! Periksa kembali inputan Anda.");
                    }
                });
            });

            // Tombol Batal untuk menyembunyikan form dan menampilkan kembali tabel
            $('#cancelEdit').click(function() {
                $('#editNewsSection').hide();
                $('#newsTableSection').show();
            });

            $(document).on('click', '.delete-btn', function() {
                let newsId = $(this).data('id');

                if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
                    $.ajax({
                        url: "{{ url('/admin/newsList/destroy') }}/" + newsId,
                        type: "POST", // Laravel hanya menerima POST, lalu kita spoof ke DELETE
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.success);
                            $('#newsTable').DataTable().ajax.reload(); // Reload tabel setelah delete
                        },
                        error: function(xhr) {
                            alert("Gagal menghapus berita! Coba lagi.");
                        }
                    });
                }
            });
        });
    </script>
    @endpush
</x-admin.layout>