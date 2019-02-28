<div class="container-fluid row">
    <div class="col-12 col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <h2><?php
            if (empty($title)) {
                echo "Tambah Gallery";
            } else {
                echo $title;
            }
            ?>
        </h2>
    </div>

    <?php // print_r($gallery) ?>
    <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">
        <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_gallery/!#gallery') ?>"><span class="fa fa-list-alt"></span> Daftar Gallery</a>
    </div>
    <div class="col-12 col-md-12 col-sm-12 col-xs-12">
        <hr></div>
    <!--<form id="form-gallery" action="<?php echo site_url("dash/add_gallery_proc") ?>" method="POST" enctype="multipart/form-data">-->
    <form id="form-gallery" >
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <h4>Judul Foto</h4>
                <hr />
                <input type="text" name="judul-kegiatan" accept="image/*" class="form-control mb-3" value="<?php echo ($gallery->judul == "" ? '' : $gallery->judul) ?>"/>
                <h4>Pilih foto</h4>
                <hr />
                <input type="file" name="file" accept="image/*" class="form-control mb-3"/>
                <?php echo ($gallery->nama_file == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/gallery/') . $gallery->nama_file . '"/>') ?>
                <?php echo ($gallery->nama_file == '' ? '' : '<input type="hidden" name="file-foto" value="' . $gallery->nama_file . '" />') ?>
                <?php echo ($gallery->id == '' ? '' : '<input type="hidden" name="id_gallery" value="' . $gallery->id . '" />') ?>
                <br>                
                <br>
                <h4>Kategori</h4>
                <hr />
                <select name="kategori" class="form-control mb-3">
                    <option value="">-Pilih Kategori-</option>
                    <?php foreach ($kategori as $value) { ?>
                        <option value="<?php echo $value->id ?>" <?php echo ($gallery->kategori == $value->id ? 'selected' : '') ?>><?php echo $value->nama_kategori ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-8 col-sm-12">
                <h4>Deskripsi Foto</h4>
                <hr />
                <?php echo form_textarea(array("name" => "konten", 'value' => $gallery->deskripsi)) ?><br>
                <script>
                    var editor = CKEDITOR.replace('konten', {
                        removeButtons: 'Save,Print,Image,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
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
            <a class="btn btn-info" id="btn-submit" type="button">Simpan</a>
        </div>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-gallery')[0]);
//        var data = $("#form-gallery").serialize();
        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_gallery') === -1) {
            url = '<?php echo site_url("dash/add_gallery_proc") ?>';
            pesan = "Penambahan Gallery Berhasil";
        } else {
            url = '<?php echo site_url("update/update_gallery") ?>';
            pesan = "Gallery Berhasil Diupdate";
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