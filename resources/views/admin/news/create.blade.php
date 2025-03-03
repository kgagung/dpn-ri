<x-admin.layout>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tambah Berita</h3>
        </div>
        <div class="card-body">
            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-10">
                    <label for="title">Judul Berita</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="form-group mb-10">
                    <label for="" class="form-label">Tanggal Berita</label>
                    <input name="news_date" class="form-control" placeholder="Pilih Tanggal Berita" id="kt_datepicker_1" />
                </div>
                <div class="form-group mb-10">
                    <label for="content">Isi Berita</label>
                    <div class="py-5" data-bs-theme="light">
                        <textarea name="content" id="kt_docs_ckeditor_classic"></textarea>
                    </div>
                </div>
                <div class="form-group mb-10">
                    <label for="image">Gambar Berita</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    @push('scripts_page')
    <!-- CKEditor -->
    <script src="{{ asset('plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#kt_docs_ckeditor_classic'))
            .then(editor => {
                console.log("CKEditor loaded:", editor);
            })
            .catch(error => {
                console.error("CKEditor Error:", error);
            });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let titleInput = document.querySelector("input[name='title']");
            let submitButton = document.querySelector("button[type='submit']");
            let errorMessage = document.createElement("div");
            errorMessage.classList.add("alert", "alert-danger");
            errorMessage.style.display = "none";
            titleInput.parentNode.appendChild(errorMessage);

            titleInput.addEventListener("input", function() {
                let title = this.value.trim();

                if (title.length > 0) {
                    fetch("{{ route('news.checkSlug') }}?title=" + encodeURIComponent(title))
                        .then(response => response.json())
                        .then(data => {
                            if (data.exists) {
                                errorMessage.textContent = "Judul berita sudah ada! Silakan gunakan judul lain.";
                                errorMessage.style.display = "block";
                                submitButton.disabled = true;
                            } else {
                                errorMessage.style.display = "none";
                                submitButton.disabled = false;
                            }
                        })
                        .catch(error => console.error("Slug check error:", error));
                } else {
                    errorMessage.style.display = "none";
                    submitButton.disabled = false;
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#kt_datepicker_1", {
                enableTime: false,
                dateFormat: "Y-m-d"
            });
        });
    </script>

    @endpush
</x-admin.layout>