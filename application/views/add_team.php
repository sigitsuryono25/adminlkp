<div class="row" id="kelas">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-lg-8 col-sm-8">
                <h2><?php
                    if (empty($title)) {
                        echo "Tambah Team";
                    } else {
                        echo $title;
                    }
                    ?></h2>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-4 text-right">
                <a href="<?php echo site_url('daftar/daftar_team/!#team') ?>" class="btn btn-info"><span class="fa fa-list-alt"></span> Daftar Team</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-md-12 col-sm-12 col-lg-12 col-12 mt-4">
        <form id="form-team" class="row">
            <div class="col-md-6">
                <label >Nama </label>
                <input type="text" name="nama-trainer" class="form-control" value="<?php echo ($team->nama == "" ? '' : $team->nama) ?>"/> <br>
                <label >Posisi</label>
                <select name="posisi" class="form-control">
                    <option value="">-Pilih Posisi-</option>
                    <?php foreach ($posisi as $value) { ?>
                        <option value="<?php echo $value->id_posisi ?>" <?php echo ($team->posisi == $value->id_posisi ? 'selected' : '') ?>><?php echo $value->nama_posisi ?></option>
                    <?php }
                    ?>
                </select> <br>
                <label >Foto</label>
                <input type="file" name="file" class="form-control"/> <br> 
                <span>Kosongkah Bila tidak ingin mengganti foto</span>
                <div style="clear: both"  class="mb-4"></div>
                <?php echo ($team->foto == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/trainer/') . $team->foto . '"/>') ?>
                <?php echo ($team->foto == '' ? '' : '<input type="hidden" name="file-foto" value="' . $team->foto . '" />') ?>
                <?php echo ($team->id == '' ? '' : '<input type="hidden" name="id" value="' . $team->id . '" />') ?>
            </div>
            <div class="col-md-6">
                <label>Deskripsi</label>
                <?php echo form_textarea(array("name" => "konten", "value" => ($team->deskripsi == "" ? '' : $team->deskripsi))) ?><br>
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
        var data = new FormData($('#form-team')[0]);

        var href = window.location.href;
        var url, pesan;
        if (href.search('edit_team') === -1) {
            url = '<?php echo site_url("dash/add_team_proc") ?>';
            pesan = "Penambahan Team Berhasil";
        } else {
            url = '<?php echo site_url("update/update_team") ?>';
            pesan = "Team Berhasil Diupdate";
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