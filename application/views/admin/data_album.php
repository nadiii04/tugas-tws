<div class="container-fluid">
    <div class="h1 mt-3 mb-3">Data Album</div>
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i>Tambah Data</button>
    <table class="table table-bordered table-hover table-striped table-borderless">
        <tr>
            <th>no </th>
            <th>gambar</th>
            <th colspan="2">edit</th>
        </tr>
        <?php
        foreach ($album as $alm) : ?>
            <tr>
                <td><?php echo $alm->id?></td>
                <td><img class="img-thumbnail w-25 " src="<?php echo base_url("uploads/") . $alm->gambar ?>"></td>
                <td><?php echo anchor('album/hapus/' . $alm->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
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
                <form action="<?php echo base_url('album/tambah'); ?>" method="POST" enctype="multipart/form-data">

                    <div class="form=group">
                        <label>Gambar</label>
                        <input type="file" name="gambar" class="form-control">
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