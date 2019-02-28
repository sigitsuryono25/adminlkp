<div class="container-fluid">
    <?php foreach ($detail as $value) { ?>
        <h4 class="text-center"><?php echo $value->nama_kelas ?></h4><br/>
        <?php
        echo $value->deskripsi;
    }
    ?>
</div>
