<div class="container-fluid">
    <div class="table-responsive">
        <table id="kelas-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th width="200">Nama Kelas</th>
                    <th>Kategori Kelas</th>
                    <th>Harga</th>
                    <th>Foto Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $value) {
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td width="200"><?php echo $value->nama_kelas ?></td>
                        <td><?php echo $value->nama_kategori ?></td>
                        <td><?php echo $this->currency->currencyRP($value->harga) ?></td>
                        <td><img width="100%" src="<?php echo base_url('assets/uploads/kelas/' . $value->foto) ?>" /></td>
                        <td>
                            <a class="btn btn-success mr-4 text-white" href="<?php echo site_url('edit/edit_class/' . $value->id_kelas . "/!#kelas") ?>">Edit</a>
                            <a onclick="return confirm('Hapus kelas ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_class/') . $value->id_kelas . "/!#kelas" ?>" >Hapus Kelas</a></td>
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