<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BERITA</h3>
    <?php foreach ($info as $ino) : ?>

        <form method="post" action="<?php echo base_url('info/update') ?>">

            <div class="form-group">
                <label>Judul</label>
                <input type="text" name="judul" class="form-control" value="<?php echo $ino->judul ?>">
            </div>

            <div class="form-group">
                <label>tanggal</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $ino->id ?>">
                <input type="text" name="tanggal" class="form-control" value="<?php echo $ino->tanggal ?>">
            </div>

            <div class="form-group">
                <label>kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $ino->kategori ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
            </from>
        <?php endforeach; ?>
</div>