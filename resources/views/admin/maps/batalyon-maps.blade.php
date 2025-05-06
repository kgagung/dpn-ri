<x-admin.layout>
    <div class="card" id="batalyonTableSection">
        <div class="card-header">
            <h3 class="card-title">Daftar Persebaran Batalyon Pangan</h3>
            <button type="button" class="btn btn-primary" id="showAddForm" style="margin-top: auto; margin-bottom: auto; margin-right: -38%;" data-bs-toggle="modal" data-bs-target="#addBatalyonModal">
                Tambah Data
            </button>
            <input type="text" id="customSearch" style="margin-top: auto; margin-bottom: auto;" placeholder="Cari data...">
        </div>
        <div class="card-body">
            <table id="batalyonTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Provinsi</th>
                        <th>Kabupaten/Kota</th>
                        <th>Klasifikasi Terhadap Kab/Kota Prioritas Batalyon Produksi</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <!-- Form Tambah Batalyon (Disembunyikan Awalnya) -->
    <div class="card mt-4" id="addBatalyonSection" style="display: none;">
        <div class="card-header">
            <h5 class="card-title">Tambah Data Batalyon</h5>
        </div>
        <div class="card-body">
            <form id="addBatalyonForm" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="add_WADMKK" class="form-label">Nama Kabupaten/Kota</label>
                        <input type="text" class="form-control" id="add_WADMKK" name="WADMKK" required>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="add_WADMPR" class="form-label">Nama Provinsi</label>
                        <input type="text" class="form-control" id="add_WADMPR" name="WADMPR" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_to5" class="form-label">Klasifikasi Terhadap Kab/Kota Prioritas Batalyon Produksi/label>
                            <input type="text" class="form-control" id="edit_Kelas_To_5" name="Kelas_To_5" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_x" class="form-label">Koordinat X</label>
                        <input type="number" class="form-control" id="add_X" name="X" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_y" class="form-label">Koordinat Y</label>
                        <input type="number" class="form-control" id="add_Y" name="Y" required>
                    </div>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" id="cancelAdd">Batal</button>
                </div>
            </form>
        </div>
    </div>



    <!-- Form Edit Batalyon (Disembunyikan Awalnya) -->
    <div class="card mt-4" id="editBatalyonSection" style="display: none;">
        <div class="card-header">
            <h5 class="card-title">Edit Data Batalyon</h5>
        </div>
        <div class="card-body">
            <form id="editBatalyonForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="edit_id" name="id">

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="edit_wadmpr" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="edit_WADMPR" name="WADMPR" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_wadmkk" class="form-label">Kabupaten/Kota</label>
                        <input type="text" class="form-control" id="edit_WADMKK" name="WADMKK" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_to5" class="form-label">Klasifikasi Terhadap Kab/Kota Prioritas Batalyon Produksi/label>
                            <input type="text" class="form-control" id="edit_Kelas_To_5" name="Kelas_To_5" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_x" class="form-label">Koordinat X</label>
                        <input type="number" step="any" class="form-control" id="edit_X" name="X" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_y" class="form-label">Koordinat Y</label>
                        <input type="number" step="any" class="form-control" id="edit_Y" name="Y" required>
                    </div>

                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    <button type="button" id="cancelEdit" class="btn btn-secondary">Batal</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts_page')
    <script>
        $(document).ready(function() {

            // Inisialisasi DataTable
            var table = $('#batalyonTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('batalyon-maps.list') }}",
                    dataSrc: function(json) {
                        console.log("Data diterima dari server:", json);
                        return json.data;
                    },
                    error: function(xhr, error, thrown) {
                        console.error("Error Ajax:", error, thrown);
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'WADMPR',
                        name: 'WADMPR'
                    },
                    {
                        data: 'WADMKK',
                        name: 'WADMKK'
                    },
                    {
                        data: 'Kelas_To_5',
                        name: 'Kelas_To_5'
                    },
                    {
                        data: 'X',
                        name: 'X'
                    },
                    {
                        data: 'Y',
                        name: 'Y'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#customSearch').on('keyup', function() {
                table.search(this.value).draw();
            });


            // Event setelah DataTable load selesai (xhr)
            table.on('xhr', function() {
                var loadedData = table.data().toArray();
                console.log('DataTable Loaded:', loadedData);
            });

            // Tampilkan form tambah data
            $('#showAddForm').click(function() {
                $('#batalyonTableSection').hide();
                $('#addBatalyonSection').show();

                $('html, body').animate({
                    scrollTop: $('#addBatalyonSection').offset().top
                }, 'slow');
            });

            // Batal tambah data
            $('#cancelAdd').click(function() {
                $('#addBatalyonSection').hide();
                $('#batalyonTableSection').show();
                $('#addBatalyonForm')[0].reset();
            });

            // Submit form tambah data
            $('#addBatalyonForm').submit(function(e) {
                e.preventDefault();

                var formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    type: "POST",
                    url: "{{ url('/admin/batalyon-maps/store') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response.success || 'Data berhasil ditambahkan!');
                        $('#addBatalyonSection').hide();
                        $('#batalyonTableSection').show();
                        $('#addBatalyonForm')[0].reset();
                        table.ajax.reload();
                    },
                    error: function(xhr) {
                        alert("Gagal menambahkan data! Periksa inputan Anda.");
                    }
                });
            });

            // Klik tombol edit
            $(document).on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.get("{{ url('/admin/batalyon-maps/edit') }}/" + id, function(data) {
                    console.log("Data dari server:", data);
                    // Populate form edit
                    $('#editBatalyonForm').find('input, select, textarea').each(function() {
                        var idAttr = $(this).attr('id');
                        if (idAttr && idAttr.startsWith('edit_')) {
                            var fieldName = idAttr.replace('edit_', '');
                            if (data.hasOwnProperty(fieldName)) {
                                $(this).val(data[fieldName]);
                            }
                        }
                    });

                    // Set nilai ID tersembunyi
                    $('#edit_id').val(data.id);

                    // Tampilkan form edit
                    $('#batalyonTableSection').hide();
                    $('#editBatalyonSection').show();

                    // Scroll ke atas form
                    $('html, body').animate({
                        scrollTop: $('#editBatalyonSection').offset().top
                    }, 'slow');
                });
            });

            // Submit form edit
            $('#editBatalyonForm').submit(function(e) {
                e.preventDefault();
                var id = $('#edit_id').val();
                var formData = new FormData(this);

                formData.append('_method', 'PUT');
                formData.append('_token', '{{ csrf_token() }}');

                $.ajax({
                    type: "POST",
                    url: "{{ url('/admin/batalyon-maps/update') }}/" + id,
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        alert(response.success);

                        // Reset tampilan
                        $('#editBatalyonSection').hide();
                        $('#batalyonTableSection').show();
                        table.ajax.reload();
                    },
                    error: function(xhr) {
                        alert("Gagal memperbarui data! Periksa inputan Anda.");
                    }
                });
            });

            // Tombol batal edit
            $('#cancelEdit').click(function() {
                $('#editBatalyonSection').hide();
                $('#batalyonTableSection').show();
            });

            // Klik tombol hapus
            $(document).on('click', '.delete-btn', function() {
                var id = $(this).data('id');

                if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    $.ajax({
                        url: "{{ url('/admin/batalyon-maps/destroy') }}/" + id,
                        type: "POST",
                        data: {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            alert(response.success);
                            table.ajax.reload();
                        },
                        error: function(xhr) {
                            alert("Gagal menghapus data! Coba lagi.");
                        }
                    });
                }
            });

        });
    </script>
    @endpush

</x-admin.layout>