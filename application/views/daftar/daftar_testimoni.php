<div class="container-fluid">
    <div class="table-responsive">
        <table id="kelas-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th width="200">Nama Pemberi</th>
                    <th>Ringkasan Testimoni</th>
                    <th>Foto</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($testimoni as $value) {

                    $string = strip_tags($value->testimoni);
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
                        <td width="200"><?php echo $value->nama_pemberi ?></td>
                        <td><?php echo $string ?></td>
                        <td><img width="50%" src="<?php echo base_url('assets/uploads/testimoni/' . $value->foto) ?>" /></td>
                        <td><?php echo date_format(date_create($value->tanggal), 'd-M-Y') ?></td>
                        <td>
                            <a class="btn btn-success mr-4 text-white" href="<?php echo site_url('edit/edit_testimoni/' . $value->id . "/!#testimoni") ?>">Edit</a>
                            <a onclick="return confirm('Hapus testimoni ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_testimoni/') . $value->id . "/!#testimoni" ?>" >Hapus Kelas</a></td>
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