<div class="row">

    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data User</h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-sm btn-flat"><i class="fa fa-plus">Add</i>
                    </a>
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
                            <th>Nama User</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Departemen</th>
                            <th>Foto</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($user as $key => $value) { ?>

                            <tr>
                                <td width="50px"><?= $no++; ?></td>
                                <td><?= $value['nama_user']; ?></td>
                                <td><?= $value['email']; ?></td>
                                <td><?= $value['password']; ?></td>
                                <td>
                                    <?php if ($value['level'] == 1) {
                                        echo 'Admin';
                                    } else {
                                        echo 'User';
                                    } ?></td>
                                <td><?= $value['nama_dep']; ?></td>
                                <td><img src="<?= base_url('foto/' . $value['foto']) ?>" width="80px"></td>
                                <td class="text-center">
                                    <a href="<?= base_url('user/edit/' . $value['id_user']) ?>" class=" btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_user'] ?>">Delete</button>
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

<!-- Modal delete -->
<?php foreach ($user as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_user']; ?>">
        <div class="modal-dialog modal-sm modal-danger">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus User</h4>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus <?= $value['nama_user']; ?> ..?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('user/delete/' . $value['id_user']) ?>" type="submit" class="btn btn-primary">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->