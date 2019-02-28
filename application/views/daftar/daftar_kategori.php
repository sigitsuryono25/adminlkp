<div class="container-fluid">
    <div class="table-responsive">
        <table id="kelas-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th width="200">Judul</th>
                    <?php if ($this->uri->segment(3) === 'kelas') { ?>
                        <th>Ringkasan Konten</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                    <?php } ?>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($content as $value) {
                    if ($this->uri->segment(3) === 'kelas') {
                        $string = strip_tags($value->deskripsi);
                        if (strlen($string) > 50) {

                            // truncate string
                            $stringCut = substr($string, 0, 50);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $string .= '...';
                        }
                    }
                    ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td width="200"><?php echo $value->nama ?></td>
                        <?php if ($this->uri->segment(3) === 'kelas') { ?>
                            <td><?php echo $string ?></td>
                            <td><?php echo $this->currency->currencyRP($value->harga) ?></td>
                            <td><img width="100%" src="<?php echo base_url('assets/uploads/kelas/' . $value->foto) ?>" /></td>
                            <td><?php echo date_format(date_create($value->timestamp), 'd-M-Y') ?></td>
                        <?php } ?>
                        <td>
                            <a class="btn btn-success text-white" href="<?php echo site_url('edit/edit_kategori/' . $value->id . "/!#Kat" . $this->uri->segment(3)) ?>">Edit</a>
                            <a onclick="return confirm('Hapus baris ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_gallery/') . $value->id . "/!#gallery" ?>" >Hapus Berita</a></td>
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