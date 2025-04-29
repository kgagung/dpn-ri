<x-admin.layout>
    <div class="card" id="batalyonTableSection">
        <div class="card-header">
            <h3 class="card-title">Daftar Persebaran Batalyon</h3>
        </div>
        <div class="card-body">
            <table id="batalyonTable" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>WADMKK</th>
                        <th>WADMPR</th>
                        <th>Shape Leng</th>
                        <th>Pulau</th>
                        <th>Luas Ha</th>
                        <th>Skor Produ</th>
                        <th>Kelas Prod</th>
                        <th>Ketahanan</th>
                        <th>Kelas Ketahanan</th>
                        <th>Luas Sawit</th>
                        <th>Skor Sawit</th>
                        <th>Kelas Sawit</th>
                        <th>Risiko Bencana</th>
                        <th>Kelas Risiko</th>
                        <th>Rasio LBS</th>
                        <th>Kelas Rasio</th>
                        <th>Persentase</th>
                        <th>Kelas Persentase</th>
                        <th>Persen Pdd</th>
                        <th>Kelas pddk</th>
                        <th>RPJMN FE</th>
                        <th>Kelas RPJM</th>
                        <th>Total 5</th>
                        <th>Kelas to 5</th>
                        <th>Jumlah Tit</th>
                        <th>ORIG FID</th>
                        <th>Longitude</th>
                        <th>Latitude</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
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
                        <label for="edit_wadmkk" class="form-label">WADMKK</label>
                        <input type="text" class="form-control" id="edit_wadmkk" name="wadmkk" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_wadmpr" class="form-label">WADMPR</label>
                        <input type="text" class="form-control" id="edit_wadmpr" name="wadmpr" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_shape_leng" class="form-label">Shape Length</label>
                        <input type="number" step="any" class="form-control" id="edit_shape_leng" name="shape_leng" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_pulau" class="form-label">Pulau</label>
                        <input type="text" class="form-control" id="edit_pulau" name="pulau" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_luas_ha" class="form-label">Luas (Ha)</label>
                        <input type="number" step="any" class="form-control" id="edit_luas_ha" name="luas_ha" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_skor_produ" class="form-label">Skor Produksi</label>
                        <input type="number" step="any" class="form-control" id="edit_skor_produ" name="skor_produ" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_prod" class="form-label">Kelas Produksi</label>
                        <input type="text" class="form-control" id="edit_kelas_prod" name="kelas_prod" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_ketahanan" class="form-label">Ketahanan</label>
                        <input type="text" class="form-control" id="edit_ketahanan" name="ketahanan" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_ketahanan" class="form-label">Kelas Ketahanan</label>
                        <input type="text" class="form-control" id="edit_kelas_ketahanan" name="kelas_ketahanan" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_luas_sawit" class="form-label">Luas Sawit</label>
                        <input type="number" step="any" class="form-control" id="edit_luas_sawit" name="luas_sawit" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_skor_sawit" class="form-label">Skor Sawit</label>
                        <input type="number" step="any" class="form-control" id="edit_skor_sawit" name="skor_sawit" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_sawit" class="form-label">Kelas Sawit</label>
                        <input type="text" class="form-control" id="edit_kelas_sawit" name="kelas_sawit" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_risiko_bencana" class="form-label">Risiko Bencana</label>
                        <input type="text" class="form-control" id="edit_risiko_bencana" name="risiko_bencana" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_risiko" class="form-label">Kelas Risiko</label>
                        <input type="text" class="form-control" id="edit_kelas_risiko" name="kelas_risiko" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_rasio_lbs" class="form-label">Rasio LBS</label>
                        <input type="number" step="any" class="form-control" id="edit_rasio_lbs" name="rasio_lbs" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_rasio" class="form-label">Kelas Rasio</label>
                        <input type="text" class="form-control" id="edit_kelas_rasio" name="kelas_rasio" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_persentase" class="form-label">Persentase</label>
                        <input type="number" step="any" class="form-control" id="edit_persentase" name="persentase" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_persentase" class="form-label">Kelas Persentase</label>
                        <input type="text" class="form-control" id="edit_kelas_persentase" name="kelas_persentase" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_persen_pdd" class="form-label">Persen PDD</label>
                        <input type="number" step="any" class="form-control" id="edit_persen_pdd" name="persen_pdd" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_pddk" class="form-label">Kelas PDDK</label>
                        <input type="text" class="form-control" id="edit_kelas_pddk" name="kelas_pddk" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_rpjmn_fe" class="form-label">RPJMN FE</label>
                        <input type="text" class="form-control" id="edit_rpjmn_fe" name="rpjmn_fe" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_rpjm" class="form-label">Kelas RPJM</label>
                        <input type="text" class="form-control" id="edit_kelas_rpjm" name="kelas_rpjm" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_total_5" class="form-label">Total 5</label>
                        <input type="number" step="any" class="form-control" id="edit_total_5" name="total_5" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_kelas_to5" class="form-label">Kelas Total 5</label>
                        <input type="text" class="form-control" id="edit_kelas_to5" name="kelas_to5" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_jumlah_tit" class="form-label">Jumlah Titik</label>
                        <input type="number" class="form-control" id="edit_jumlah_tit" name="jumlah_tit" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_orig_fid" class="form-label">ORIG FID</label>
                        <input type="number" class="form-control" id="edit_orig_fid" name="orig_fid" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="edit_x" class="form-label">Koordinat X</label>
                        <input type="number" step="any" class="form-control" id="edit_x" name="x" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="edit_y" class="form-label">Koordinat Y</label>
                        <input type="number" step="any" class="form-control" id="edit_y" name="y" required>
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
                        data: 'WADMKK',
                        name: 'WADMKK'
                    },
                    {
                        data: 'WADMPR',
                        name: 'WADMPR'
                    },
                    {
                        data: 'Shape_Leng',
                        name: 'Shape_Leng'
                    },
                    {
                        data: 'Pulau',
                        name: 'Pulau'
                    },
                    {
                        data: 'Luas_Ha',
                        name: 'Luas_Ha'
                    },
                    {
                        data: 'Skor_Produ',
                        name: 'Skor_Produ'
                    },
                    {
                        data: 'Kelas_Prod',
                        name: 'Kelas_Prod'
                    },
                    {
                        data: 'Ketahanan_',
                        name: 'Ketahanan_'
                    },
                    {
                        data: 'Kelas_Kthn',
                        name: 'Kelas_Kthn'
                    },
                    {
                        data: 'Luas_Sawit',
                        name: 'Luas_Sawit'
                    },
                    {
                        data: 'Skor_Sawit',
                        name: 'Skor_Sawit'
                    },
                    {
                        data: 'Kelas_Sawi',
                        name: 'Kelas_Sawi'
                    },
                    {
                        data: 'Risiko_Ben',
                        name: 'Risiko_Ben'
                    },
                    {
                        data: 'Kelas_rsk_',
                        name: 'Kelas_rsk_'
                    },
                    {
                        data: 'Rasio_LBS',
                        name: 'Rasio_LBS'
                    },
                    {
                        data: 'Kelas_Rso_',
                        name: 'Kelas_Rso_'
                    },
                    {
                        data: 'Persentase',
                        name: 'Persentase'
                    },
                    {
                        data: 'Kelas_Prsn',
                        name: 'Kelas_Prsn'
                    },
                    {
                        data: 'Persen_Pdd',
                        name: 'Persen_Pdd'
                    },
                    {
                        data: 'Kelas_pddk',
                        name: 'Kelas_pddk'
                    },
                    {
                        data: 'RPJMN_FE',
                        name: 'RPJMN_FE'
                    },
                    {
                        data: 'Kelas_RPJM',
                        name: 'Kelas_RPJM'
                    },
                    {
                        data: 'Total_5',
                        name: 'Total_5'
                    },
                    {
                        data: 'Kelas_To_5',
                        name: 'Kelas_To_5'
                    },
                    {
                        data: 'Jumlah_Tit',
                        name: 'Jumlah_Tit'
                    },
                    {
                        data: 'ORIG_FID',
                        name: 'ORIG_FID'
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

            // Event setelah DataTable load selesai (xhr)
            table.on('xhr', function() {
                var loadedData = table.data().toArray();
                console.log('DataTable Loaded:', loadedData);
            });

            // Klik tombol edit
            $(document).on('click', '.edit-btn', function() {
                var id = $(this).data('id');
                $.get("{{ url('/admin/batalyon-maps/edit') }}/" + id, function(data) {
                    // Populate form edit
                    $('#editBatalyonForm').find('input, select, textarea').each(function() {
                        var fieldName = $(this).attr('id').replace('edit_', '');
                        if (data[fieldName] !== undefined) {
                            $(this).val(data[fieldName]);
                        }
                    });

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