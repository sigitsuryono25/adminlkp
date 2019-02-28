<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-12 col-sm-12"><h2><?php
                if (empty($title)) {
                    echo "Tambah Profil";
                } else {
                    echo $title;
                }
                ?></h2>
        </div>
        <div class="col-md-6 col-12 col-sm-12 text-right">
            <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_kelas/!#kelas') ?>"><span class="fa fa-list-alt"></span> Edit Profile</a>
        </div>
    </div>
    <div class="col-12 col-md-12 col-sm-12">
        <hr></div>
    <div class="col-md-12" id="kelas">
        <form id="form-kelas">
            <label>Konten Profil</label>
            <?php echo form_textarea(array("name" => "konten", 'id' => 'konten', 'value' => $kontenKelas->deskripsi_kelas)) ?><br>
            <script>
                var editor = CKEDITOR.replace('konten', {
                    removeButtons: 'Save,Print,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                    filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                    filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                });
                CKFinder.setupCKEditor(editor, '../../assets/ckfinder/');
            </script>
        </form>
        <div class="col-md-12">
            <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </div>
</div>
<script>

    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-kelas')[0]);

        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_class') === -1) {
            url = '<?php echo site_url("dash/add_profile_proc") ?>';
            pesan = "Penambahan Profil Berhasil";
        } else {
            url = '<?php echo site_url("update/update_class") ?>';
            pesan = "Profil Berhasil Diupdate";
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

    $("#kategori-select").change(function () {
        $.ajax({
            url: '<?php echo site_url('tools/get_kategori/') ?>' + $("#kategori-select").val(),
            dataType: 'json',
            success: function (r) {
                $("#harga-value").val(toCommas(r.harga))
            },
            error: function (j, t, e) {
            }
        });
    });
    $(".tambah-kelas").click(function () {
        $('.tambah-modal').modal('show');
    });
    function toCommas(value) {
        return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    }
</script>