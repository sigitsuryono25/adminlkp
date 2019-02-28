<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-12 col-sm-12"><h2><?php
                if (empty($title)) {
                    echo "Tambah Portofolio";
                } else {
                    echo $title;
                }
                ?></h2>
        </div>
        <div class="col-md-6 col-12 col-sm-12 text-right">
            <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_portofolio/!#portofolio') ?>"><span class="fa fa-list-alt"></span> Daftar Portofolio</a>
        </div>
        <div class="col-12 col-md-12 col-sm-12">
            <hr></div>
    </div>
    <form id="form-portofolio">
        <div class="row">
            <div class="col-md-4 col-sm-12"> 
                <h4>Judul Foto</h4>
                <hr />
                <input type="text" name="judul-kegiatan" accept="image/*" value="<?php echo ($content->judul == "" ? '' : $content->judul) ?>" class="form-control mb-3"/>
                <h4>Pilih foto</h4>
                <hr />
                <input type="file" name="file" accept="image/*" class="form-control mb-3"/>
                <?php echo ($content->nama_file == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/portofolio/') . $content->nama_file . '"/>') ?>
                <?php echo ($content->nama_file == '' ? '' : '<input type="hidden" name="file-foto" value="' . $content->nama_file . '" />') ?>
                <?php echo ($content->id == '' ? '' : '<input type="hidden" name="id_porto" value="' . $content->id . '" />') ?>
                <h4 class="mt-4">Kategori</h4>
                <hr />
                <select name="kategori" class="form-control mb-3">
                    <option value="">-Pilih Kategori-</option>
                    <?php foreach ($kategori as $value) { ?>
                        <option value="<?php echo $value->id ?>" <?php echo ($content->kategori == $value->id ? 'selected' : '') ?>><?php echo $value->nama ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>Deskripsi Foto</h4>
                <hr />
                <?php echo form_textarea(array("name" => "konten", 'value' => ($content->deskripsi == "" ? '' : $content->deskripsi))) ?><br>
                <script>
                    var editor = CKEDITOR.replace('konten', {
                        removeButtons: 'Save,Print,Source,Image,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                        filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    });
                    CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
                </script>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-md-12 col-sm-12 text-center">
            <button class="btn btn-info" id="btn-submit-porto">Simpan</button>
        </div>
    </div>
</div>
<script>
    $("#btn-submit-porto").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-portofolio')[0]);
        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_portofolio') === -1) {
            url = '<?php echo site_url("dash/add_portofolio_proc") ?>';
            pesan = "Penambahan Portofolio Berhasil";
        } else {
            url = '<?php echo site_url("update/update_portofolio") ?>';
            pesan = "Portofolio Berhasil Diupdate";
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