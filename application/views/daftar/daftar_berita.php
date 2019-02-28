<div class="container-fluid">
    <div class="table-responsive">
        <table id="kelas-table" class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>NO</th>
                    <th width="200">Judul Berita</th>
                    <th>Ringkasan Konten</th>
                    <th>Tanggal</th>
                    <th>Side Image</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $value) {

                    $string = strip_tags($value->konten);
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
                        <td width="200"><?php echo $value->judul_berita ?></td>
                        <td><?php echo $string ?></td>
                        <td><?php echo date_format(date_create($value->tanggal), 'd-M-Y') ?></td>
                        <td><img width="100%" src="<?php echo base_url('assets/uploads/news/' . $value->side_image) ?>" /></td>
                        <td>
                            <a class="btn btn-success mr-4 text-white" href="<?php echo site_url('edit/edit_news_blog/' . $value->id . "/!#news") ?>">Edit</a>
                            <a onclick="return confirm('Hapus berita ini ?')" class="btn btn-danger text-white" href="<?php echo site_url('delete/delete_news/') . $value->id . "/!#kelas" ?>" >Hapus Berita</a></td>
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