<div class="row">
    <div class="col-md-6 col-12 col-sm-12"><h2>Edit Kategori Kelas</h2>
    </div>
    <div class="col-md-6 col-12 col-sm-12 text-right">
        <a class="btn btn-info" href="<?php echo site_url('daftar/daftar_kategori/kelas/!#KatKelas') ?>"><span class="fa fa-list-alt"></span> Daftar Kategori</a>
    </div>
    <div class="col-12 col-md-12 col-sm-12">
        <hr></div>
</div>
<div class="row">
    <div class="col-md-12">
        <form id="form-tambah-kat-kelas">
            <div class="modal-body">
                <label>Pilih Tujuan</label>
                <select id="select-kelas" name="tujuan-kategori" class="form-control mb-3">
                    <option value="kategori_kelas" >Kategori Kelas</option>
                    <option value="kategori_gallery" >Kategori Gallery</option>
                    <option value="kategori_portofolio">Kategori Porfolio</option>
                </select>
                <label>Nama Kategori</label>
                <input type="text" name="nama-kategori" placeholder="" class="form-control mb-3" value="<?php echo ($content->nama == "" ? '' : $content->nama) ?>"/>
                <div id="khusus-kelas">
                    <label>Harga</label>
                    <input type="text" name="harga" placeholder="" class="form-control mb-3 formatUang" value="<?php echo ($content->harga == "" ? '' : $content->harga) ?>"/>
                    <?php echo form_textarea(array("name" => "deskripsi_kelas", 'id' => 'deskripsi_kelas', 'value' => $content->deskripsi == "" ? '' : $content->deskripsi)) ?><br>
                    <script>
                        var editortambah = CKEDITOR.replace('deskripsi_kelas', {
                            removeButtons: 'Save,Print,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley',
                            filebrowserBrowseUrl: '<?php echo base_url() ?>assets/ckfinder/ckfinder.html',
                            filebrowserUploadUrl: '<?php echo base_url() ?>assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
                        });
                        CKFinder.setupCKEditor(editortambah, '../../assets/ckfinder/');
                    </script>
                    <label>Foto</label>
                    <input type="file" name="file" placeholder="" class="form-control mb-3" />
                    <?php echo ($content->foto == '' ? '' : '<img width="150" src="' . base_url('assets/uploads/kelas/') . $content->foto . '"/>') ?>
                    <?php echo ($content->foto == '' ? '' : '<input type="hidden" name="file-foto" value="' . $content->foto . '" />') ?>
                    <?php echo ($content->id == '' ? '' : '<input type="hidden" name="id_kat" value="' . $content->id . '" />') ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" id="btn-subm-edit">Simpan</button>
            </div>
        </form>
    </div>
</div>
<script>
    var pesan;
    $(document).ready(function () {
        if (getActive === '#KatKelas') {
            $('#select-kelas').val("kategori_kelas");
            pesan = "Update Kategori Kelas Berhasil";
        } else if (getActive === '#KatGallery') {
            $('#select-kelas').val("kategori_gallery");
            pesan = "Update Kategori Gallery Berhasil";
        } else if (getActive === '#KatPortofolio') {
            $('#select-kelas').val("kategori_portofolio");
            pesan = "Update Kategori Portofolio Berhasil";
        }
    });
    $("#btn-subm-edit").click(function () {
        var data = new FormData($("#form-tambah-kat-kelas")[0]);
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("update/update_kategori") ?>',
            cache: false,
            contentType: false,
            processData: false,
            success: function (j, t, e) {
                if (j == 0) {
                    $('.tambah-posisi').modal('hide');
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