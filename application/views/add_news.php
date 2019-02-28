<div class="row" id="news">
    <div class="col-8 col-lg-8 col-md-8 col-sm-12">
        <h2><?php
            if (empty($title)) {
                echo "Tambah Berita";
            } else {
                echo $title;
            }
            ?></h2>
    </div>
    <div class="col-4 col-lg-4 col-md-4 col-sm-12 text-right">
        <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_news/!#news') ?>"><span class="fa fa-list-alt"></span> Daftar Berita</a>
    </div>
    <div class="col-12 col-md-12 col-sm-12">
        <hr></div>
    <div class="col-md-12 col-sm-12 col-lg-12 col-12">
        <form id="form-news" class="row">
            <div class="col-md-6">
                <label >Judul</label>
                <textarea name="judul" class="form-control"><?php echo ($news->judul_berita == "" ? '' : $news->judul_berita) ?></textarea> <br>
                <label >Feature Image </label>
                <input type="file" name="file" class="form-control"/> <br>
                <span>Kosongkah Bila tidak ingin mengganti foto</span>
                <div style="clear: both"  class="mb-4"></div>
                <?php echo ($news->side_image == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/news/') . $news->side_image . '"/>') ?>
                <?php echo ($news->side_image == '' ? '' : '<input type="hidden" name="file-foto" value="' . $news->side_image . '" />') ?>
                <?php echo ($news->id == '' ? '' : '<input type="hidden" name="id_berita" value="' . $news->id . '" />') ?>
            </div>
            <div class="col-md-6">
                <label>Konten Berita</label>
                <?php echo form_textarea(array("name" => "konten", "value" => ($news->judul_berita == "" ? '' : $news->judul_berita))) ?><br>
                <script>
                    var editor = CKEDITOR.replace('konten', {
                        removeButtons: 'Save,Print,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                        filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                        filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                    });
                    CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
                </script>
            </div>
        </form>
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <button class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-news')[0]);
        console.log(data);
        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_news_blog') === -1) {
            url = '<?php echo site_url("dash/add_news_blog_proc") ?>';
            pesan = "Penambahan Berita Berhasil";
        } else {
            url = '<?php echo site_url("update/update_news") ?>';
            pesan = "Berita Berhasil Diupdate";
        }
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