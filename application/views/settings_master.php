<div class="container-fluid">
    <div class="my-2 mx-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="" class="active nav-link" data-toggle="tab" data-target="#regular">Daftar User</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link" data-toggle="tab" data-target="#private">Tambah User</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-2">
                        <div class="tab-pane fade show active" id="regular" role="tabpanel">
                            <table class="table table-striped table-hover table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Last Login</th>
                                        <th>Last Update</th>
                                        <th>Update By</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($credentials as $value) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no ?></td>
                                            <td><?php echo $value->nama_lengkap ?></td>
                                            <td><?php echo $value->username ?></td>
                                            <td><?php echo $value->last_login ?></td>
                                            <td><?php echo $value->last_update ?></td>
                                            <td><?php echo $value->update_by ?></td>
                                            <td><a class="btn btn-warning mr-2" href="#">Edit</a><a class="btn btn-danger ml-2" href="#">Hapus</a></td>
                                        </tr>
                                        <?php
                                        $no++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="private" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12 col-12 col-sm-12">
                                    <form id="form-reg">
                                        <div class="form-group">
                                            <label class="">Username</label><br>
                                            <input class="form-control" type="text" name="username" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" type="password" name="passwords" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" type="password" name="co-passwords" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" type="text" name="nama-lengkap" required/>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-12 col-12 col-sm-12">
                                    <button class="btn btn-info" id="btn-registration">Simpan !!!</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $("#btn-registration").click(function () {
        var url = '<?php echo site_url('setting/add_user') ?>';
        var data = $("#form-reg").serialize();
        console.log(url);
        $.ajax({
            data: data,
            type: 'POST',
            url: url,
            success: function (j, t, e) {
                swal(t, '', 'success');
            },
            error: function (j, t, e) {
                swal(t + "{" + e + "}", "", "error");
            }
        });
    });
</script>
