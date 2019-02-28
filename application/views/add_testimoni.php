<div class="row" id="kelas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8">
                <h2><?php
                    if (empty($title)) {
                        echo "Tambah Testimoni";
                    } else {
                        echo $title;
                    }
                    ?></h2>
            </div>
            <?php print_r($testimoni) ?>
            <div class="col-md-4 col-lg-4 col-sm-4 text-right">
                <a href="<?php echo site_url('daftar/daftar_testimoni/!#testimoni') ?>" class="btn btn-info"><span class="fa fa-list-alt"></span> Daftar Testimoni</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-12 col-sm-12 col-lg-12 col-12 mt-4">
        <form id="form-testimoni" class="row">
            <div class="col-md-6">
                <label >Nama Pemberi Testimoni</label>
                <input type="text" name="nama-pemberi" placeholder="nama kelas" value="<?php echo ($testimoni->nama_pemberi == "" ? '' : $testimoni->nama_pemberi) ?>" class="form-control"/> <br>
                <label >Foto</label>
                <input type="file" name="file" class="form-control"/> <br>
                <span>Kosongkah Bila tidak ingin mengganti foto</span>
                <div style="clear: both"  class="mb-4"></div>
                <?php echo ($testimoni->foto == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/testimoni/') . $testimoni->foto . '"/>') ?>
                <?php echo ($testimoni->foto == '' ? '' : '<input type="hidden" name="file-foto" value="' . $testimoni->foto . '" />') ?>
                <?php echo ($testimoni->id == '' ? '' : '<input type="hidden" name="id_testimoni" value="' . $testimoni->id . '" />') ?>
            </div>
            <div class="col-md-6">
                <label>Konten</label>
                <?php echo form_textarea(array("name" => "konten", "value" => $testimoni->testimoni == "" ? '' : $testimoni->testimoni)) ?><br>
                <script>
                    var editor = CKEDITOR.replace('konten', {
                        removeButtons: 'Save,Print,Source,Image,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                        filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    });
                    CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
                </script>

            </div>
        </form>
        <div class="col-md-12 col-sm-12 col-lg-12 col-12 mt-4">
            <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-testimoni')[0]);
//        var data = $("#form-testimoni").serialize();
        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_testimoni') === -1) {
            url = '<?php echo site_url("dash/add_testimoni_proc") ?>';
            pesan = "Penambahan Tesimoni Berhasil";
        } else {
            url = '<?php echo site_url("update/update_testimoni") ?>';
            pesan = "Testimoni Berhasil Diupdate";
        }
        console.log(data);
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
                swal(t + "{ " + e + " }", '', 'error');
            }
        });
    });
</script>