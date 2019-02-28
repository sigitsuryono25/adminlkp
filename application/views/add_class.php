<div class="row" id="kelas">
    <div class="col-md-6 col-12 col-sm-12"><h2><?php
            if (empty($title)) {
                echo "Tambah Kelas";
            } else {
                echo $title;
            }
            ?></h2>
    </div>
    <div class="col-md-6 col-12 col-sm-12 text-right">
        <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_kelas/!#kelas') ?>"><span class="fa fa-list-alt"></span> Daftar Kelas</a>
        <a class="btn btn-info tambah-kelas text-white" ><span class="fa fa-plus"></span> Tambah Kat. Kelas</a>
    </div>
    <div class="col-12 col-md-12 col-sm-12">
        <hr></div>
    <?php print_r($kontenKelas) ?>
    <form id="form-kelas" class="row">
        <div class="col-md-4">
            <label >Nama Kelas</label>
            <textarea name="nama-kelas" class="form-control" required><?php echo ($kontenKelas->nama_kelas == "" ? '' : $kontenKelas->nama_kelas) ?></textarea> <br>
            <label>kategori</label>
            <select class="form-control" name="kategori" id="kategori-select" required>
                <option value="">-Plilh Kategori-</option>
                <?php foreach ($kategori as $value) { ?>
                    <option value="<?php echo $value->id ?>" <?php echo ($kontenKelas->id_kategori == $value->id ? 'selected' : '') ?>><?php echo $value->nama ?></option>
                <?php } ?>
            </select><br>
            <label>Harga</label>
            <input id="harga-value" type="text" name="harga-kelas" placeholder="nama kelas" class="form-control formatUang" required value="<?php echo ($kontenKelas->harga == '' ? '0' : str_replace("Rp", "", $this->currency->currencyRP($kontenKelas->harga))) ?>"/><br>
            <label>Side Image (Halaman Depan)</label>
            <input type="file" name="file" accept="image/*" class="form-control" required/><br>
            <?php echo ($kontenKelas->foto_kelas == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/kelas/') . $kontenKelas->foto_kelas . '"/>') ?>
            <?php echo ($kontenKelas->foto_kelas == '' ? '' : '<input type="hidden" name="file-foto" value="' . $kontenKelas->foto_kelas . '" />') ?>
            <?php echo ($kontenKelas->id_kelas == '' ? '' : '<input type="hidden" name="id_kelas" value="' . $kontenKelas->id_kelas . '" />') ?>

        </div>
        <div class="col-md-8">
            <label>Deskripsi Kelas</label>
            <?php echo form_textarea(array("name" => "konten", "required" => "required", 'id' => 'konten', 'value' => $kontenKelas->deskripsi_kelas)) ?><br>
            <script>
                var editor = CKEDITOR.replace('konten', {
                    removeButtons: 'Save,Print,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                    filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                    filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                });
                CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
            </script>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </form>
</div>
<script>

    $("#form-kelas").submit(function (e) {
        e.preventDefault();
//        $('#form-kelas').validate();
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-kelas')[0]);

        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_class') === -1) {
            url = '<?php echo site_url("dash/add_kelas_proc") ?>';
            pesan = "Penambahan Kelas Berhasil";
        } else {
            url = '<?php echo site_url("update/update_class") ?>';
            pesan = "Kelas Berhasil Diupdate";
        }
        console.log(url);
        $.ajax({
            data: data,
            type: 'POST',
            url: url,
            cache: false,
            contentType: false,
            processData: false,
            success: function (j, t, e) {
                if (j == 0) {
                    swal(pesan, '', 'success');
                } else {

                }
            },
            error: function (j, t, e) {

            }
        });
    });

//    $("#kategori-select").change(function () {
//        $.ajax({
//            url: '<?php echo site_url('tools/get_kategori/') ?>' + $("#kategori-select").val(),
//            dataType: 'json',
//            success: function (r) {
//                $("#harga-value").val(toCommas(r.harga))
//            },
//            error: function (j, t, e) {
//            }
//        });
//    });
    $(".tambah-kelas").click(function () {
        $('.tambah-modal').modal('show');
    });
    function toCommas(value) {
        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>