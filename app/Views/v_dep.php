<div class="row">

    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data Departemen</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-success btn-sm btn-flat" data-toggle="modal" data-target="#add"><i class="fa fa-plus">Add</i>
                    </button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo session()->getFlashdata('pesan');
                    echo '</div>';
                }
                ?>
                <table class="table table-bordered" id="example1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Departemen</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($departemen as $key => $value) { ?>

                            <tr>
                                <td width="50px"><?= $no++; ?></td>
                                <td><?= $value['nama_dep']; ?></td>
                                <td class="text-center">
                                    <button class=" btn btn-xs btn-warning" data-toggle="modal" data-target="#edit<?= $value['id_dep'] ?>">Edit</button>
                                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_dep'] ?>">Delete</button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

</div>

<!-- Modal Add -->
<div class="modal fade" id="add">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Departemen</h4>
            </div>
            <div class="modal-body">
                <?= form_open('departemen/add') ?>
                <div class="form-group">
                    <label>Departemen</label>
                    <input name="nama_dep" class="form-control" placeholder="Masukan Nama Departemen" required>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /. end modal add-->

<!-- Modal Edit -->
<?php foreach ($departemen as $key => $value) { ?>
    <div class="modal fade" id="edit<?= $value['id_dep']; ?>">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Departemen</h4>
                </div>
                <div class="modal-body">
                    <?= form_open('departemen/edit/' . $value['id_dep']) ?>
                    <div class="form-group">
                        <label>Departemen</label>
                        <input name="nama_dep" value="<?= $value['nama_dep']; ?>" class="form-control" placeholder="Masukan Nama Departemen" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

                <?= form_close() ?>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal Edit end-->

<!-- Modal delete -->
<?php foreach ($departemen as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_dep']; ?>">
        <div class="modal-dialog modal-sm modal-danger">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Departemen</h4>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus <?= $value['nama_dep']; ?> ..?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('departemen/delete/' . $value['id_dep']) ?>" type="submit" class="btn btn-primary">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->