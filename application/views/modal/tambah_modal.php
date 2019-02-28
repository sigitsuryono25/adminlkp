<div class="modal fade tambah-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 100%">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--<form id="form-tambah-kat" action="<?php echo site_url('dash/add_category_proc') ?>" method="POST">-->
            <form id="form-tambah-kat">
                <div class="modal-body">
                    <label>Pilih Tujuan</label>
                    <select id="select-kelas" name="tujuan-kategori" class="form-control mb-3">
                        <option value="kategori_kelas">Kategori Kelas</option>
                        <option value="kategori_gallery">Kategori Gallery</option>
                        <option value="kategori_portofolio">Kategori Porfolio</option>
                    </select>
                    <label>Nama Kategori</label>
                    <input type="text" name="nama-kategori" placeholder="" class="form-control mb-3" />
                    <div id="khusus-kelas">
                        <label>Harga</label>
                        <input type="text" name="harga" placeholder="" class="form-control mb-3 formatUang" />
                        <?php echo form_textarea(array("name" => "kontenTambah", 'id' => 'kontenTambah')) ?><br>
                        <script>
                            var editortambah = CKEDITOR.replace('kontenTambah', {
                                removeButtons: 'Save,Print,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                                filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                                filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                            });
                            CKFinder.setupCKEditor(editortambah, '../../assets/ckfinder/');
                        </script>
                        <label>Foto</label>
                        <input type="file" name="file" placeholder="" class="form-control mb-3" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" id="btn-tambah-submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $("#select-kelas").change(function () {
        if ($("#select-kelas").val() === 'kategori_kelas') {
            $("#khusus-kelas").css("display", "inline");
        } else {
            $("#khusus-kelas").css("display", "none");
        }
    });
    $("#btn-tambah-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = new FormData($('#form-tambah-kat')[0]);
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("dash/add_category_proc") ?>',
            cache: false,
            contentType: false,
            processData: false,
            success: function (j, t, e) {
                if (j == 0) {
                    $('.tambah-modal').modal('hide');
                    swal('Penambahan Kategori Berhasil', '', 'success');
                } else {

                }
            },
            error: function (j, t, e) {
                swal(t + "{ " + e + " }", '', 'error');
            }
        });
    });
</script>

<div class="modal fade tambah-posisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--<form id="form-tambah-kat" action="<?php echo site_url('dash/add_category_proc') ?>" method="POST">-->
            <form id="form-tambah-pos">
                <div class="modal-body">
                    <label>Nama Posisi</label>
                    <input type="text" name="nama-posisi" placeholder="" class="form-control" /><br/>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="btn-tambah-posisi">Simpan</button>
            </div>
        </div>
    </div>
</div>
<script>
    $("#btn-tambah-posisi").click(function () {
        var data = $("#form-tambah-pos").serialize();
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("dash/add_posisi_proc") ?>',
//            success: function(parameters) {
//                swal(parameters, '', 'success');
//            },
            success: function (j, t, e) {
                if (j == 0) {
                    $('.tambah-posisi').modal('hide');
                    swal('Penambahan Posisi Berhasil', '', 'success');
                } else {

                }
            },
            error: function (j, t, e) {
                swal(t + "{ " + e + " }", '', 'error');
            }
        });
    });
</script>