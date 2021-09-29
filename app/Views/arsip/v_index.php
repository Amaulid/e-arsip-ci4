<div class="row">

    <div class="col-md-12">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Data User</h3>

                <div class="box-tools pull-right">
                    <a href="<?= base_url('Arsip/add') ?>" class="btn btn-success btn-sm btn-flat"><i class="fa fa-plus">Add</i>
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
                            <th>No Arsip</th>
                            <th>Nama Arsip</th>
                            <th>Kategori</th>
                            <th>Upload</th>
                            <th>Update</th>
                            <th>User</th>
                            <th>Departemen</th>
                            <th>File</th>
                            <th width="100px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($arsip as $key => $value) { ?>

                            <tr>
                                <td width="50px"><?= $no++; ?></td>
                                <td><?= $value['no_arsip']; ?></td>
                                <td><?= $value['nama_arsip']; ?></td>
                                <td><?= $value['nama_kategori']; ?></td>
                                <td><?= $value['tgl_upload']; ?></td>
                                <td><?= $value['tgl_update']; ?></td>
                                <td><?= $value['nama_user']; ?></td>
                                <td><?= $value['nama_dep']; ?></td>
                                <td><a href="<?= base_url('Arsip/viewpdf/' . $value['id_arsip']) ?>"><i class="fa fa-file-pdf-o fa-2x label-danger"></i></a><br>
                                <?= number_format($value['ukuran_file']); ?> Byte
                            </td>
                                <td class="text-center">
                                   <a href="<?= base_url('Arsip/edit/' . $value['id_arsip']) ?>" class=" btn btn-warning">Edit</a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $value['id_arsip'] ?>">Delete</button>
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
<?php foreach ($arsip as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value['id_arsip']; ?>">
        <div class="modal-dialog modal-sm modal-danger">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Hapus Arsip</h4>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus <?= $value['nama_arsip']; ?> ..?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tidak</button>
                    <a href="<?= base_url('Arsip/delete/' . $value['id_arsip']) ?>" type="submit" class="btn btn-primary">Ya</a>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php } ?>
<!-- /.modal -->