<div class="container-fluid">
    <div class="table-responsive">
        <table id="kelas-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th width="200">Nama</th>
                    <th>Ringkasan Deskripsi</th>
                    <th>Posisi</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($team as $value) {

                    $string = strip_tags($value->deskripsi);
                    if (strlen($string) > 50) {

                        // truncate string
                        $stringCut = substr($string, 0, 50);
                        $endPoint = strrpos($stringCut, ' ');

                        //if the string doesn't contain any space then it will cut without word basis.
                        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                        $string .= '...';
                    }
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td width="200"><?php echo $value->nama ?></td>
                        <td><?php echo $string ?></td>
                        <td><?php echo $value->nama_posisi ?></td>
                        <td><img width="100%" src="<?php echo base_url('assets/uploads/trainer/' . $value->foto) ?>" /></td>
                        <td>
                            <a class="btn btn-success mr-4 text-white" href="<?php echo site_url('edit/edit_team/' . $value->id . "/!#team") ?>">Edit</a>
                            <a onclick="return confirm('Hapus team ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_team/') . $value->id . "/!#team" ?>" >Hapus Team</a></td>
                    </tr>
                    <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
    $("#kelas-table").dataTable();
</script>