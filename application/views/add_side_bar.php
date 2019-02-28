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
                <label>Informasi</label>
                <?php echo form_textarea(array("name" => "konten", 'id' => 'konten')) ?><br>
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
        <div class="col-md-12 col-sm-12 col-lg-12 col-12">
            <button type="button" class="btn btn-primary" id="btn-submit">Simpan</button>
        </div>
    </div>
</div>
<script>
    $("#btn-submit").click(function () {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
        }
        var data = $("#form-side-bar").serialize();
        console.log(data);
        $.ajax({
            data: data,
            type: 'POST',
            url: '<?php echo site_url("dash/add_side_bar_proc") ?>',
            success: function (j, t, e) {
                if (j == 0) {
                    swal({
                        title: 'Penambahan Sidebar Info Berhasil',
                        text: "You won't be able to revert this!",
                        type: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.value) {
                            swal(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                    )
                        }
                    })
                    swal('', '', 'success');
                } else {

                }
            },
            error: function (j, t, e) {
                swal(t + "{ " + e + " }", '', 'error');
            }
        });
    });
</script>