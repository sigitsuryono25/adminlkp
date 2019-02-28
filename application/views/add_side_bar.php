<div class="row" id="kelas">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <h2>Sidebar Infor</h2>
        <hr>
    </div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-12">
        <form id="form-side-bar" class="row">
            <div class="col-md-6">
                <label>Pilih Kelas</label>
                <select name="kelas-tujuan" class="form-control mb-3">
                    <option value="">-Pilih Kelas-</option>
                    <?php foreach ($kelas as $value) { ?>
                        <option value="<?php echo $value->id_kelas ?>"><?php echo $value->nama_kelas ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-6">
                <div class="container-fluid">
                    <div class="form-group">
                        <label>Untuk Kapan ? (Weekday/Weekend)</label>
                        <select class="form-control" name="the-day" required>
                            <option value="">--Silahkan Pilih Satu--</option>
                            <option value="0">Weekdays</option>
                            <option value="1">Weekend</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="text" name="tanggal-mulai" class="form-control datepicker" required/>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="text" name="tanggal-selesai" class="form-control datepicker" required/>
                    </div>
                    <div class="form-group">
                        <label>Hari</label>
                        <select class="form-control" name="hari" required>
                            <option value="">--Silahkan Pilih Satu--</option>
                            <option value="Senin">Senin</option>
                            <option value="Selasa">Selasa</option>
                            <option value="Rabu">Rabu</option>
                            <option value="Kamis">Kamis</option>
                            <option value="Jumat">Jumat</option>
                            <option value="Sabtu">Sabtu</option>
                            <option value="Minggu">Minggu</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Durasi</label>
                        <input type="text" name="durasi" placeholder="1 Bulan Misalnya" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input type="text" name="lokasi" value="Ruang Training LKP Unikom Yogyakarta" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label>Peserta Minimal</label>
                        <input type="text" name="peserta" placeholder="Min 3 Orang Misalnya   " class="form-control" required/>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12 col-12">
                <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        var data = $("#form-side-bar").serialize();
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("dash/add_side_bar_proc") ?>',
            success: function (data, textStatus, jqXHR) {
                swal(textStatus, "Informasi Berhasil Ditambahkan", textStatus);
            }
            , error: function (jqXHR, textStatus, errorThrown) {
                console.log(textStatus + errorThrown);
            }
        });
    });
</script>