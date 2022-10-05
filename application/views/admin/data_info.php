<div class="container-fluid">
    <div class="h1 mt-3 mb-3">Data Info</div>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i>Tambah Data</button>
    <table class="table table-bordered table-hover table-striped table-borderless">
        <tr>
            <th>no </th>
            <th>judul</th>
            <th>tanggal</th>
            <th>kategori</th>
            <th colspan="2">edit</th>
        </tr>
        <?php
        foreach ($info as $ino) : ?>
            <tr>
                <td><?php echo $ino->id?></td>
                <td><?php echo $ino->judul ?></td>
                <td><?php echo $ino->tanggal ?></td>
                <td><?php echo $ino->kategori ?></td>
                <td><?php echo anchor('info/edit/' . $ino->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
                <td><?php echo anchor('info/hapus/' . $ino->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Berita</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('info/tambah'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form=group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control">
                    </div>

                    <div class="form=group">
                        <label>Tanggal</label>
                        <input type="text" name="tanggal" class="form-control">
                    </div>
                    <div class="form=group">
                        <label>Kategori</label>
                        <input type="text" name="kategori" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>