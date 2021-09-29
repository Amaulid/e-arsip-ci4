<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6">
        <div class="box box-primary box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Arsip</h3>

                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php
                $errors = session()->getFlashdata('errors');
                if (!empty($errors)) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <h4>Ada Kesalahan</h4>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php foreach ($errors as $key => $value) { ?>
                            <li><?= esc($value); ?></li>
                        <?php } ?>
                    </div>
                <?php } ?>
                <?= form_open_multipart('Arsip/update/' . $arsip['id_arsip']); ?>
                
                <div class="form-group">
                    <label>No Arsip</label>
                    <input name="no_arsip" class="form-control" value="<?= $arsip["no_arsip"] ?>" readonly>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <select name="id_kategori" class="form-control">
                        <option value="<?= $arsip["id_kategori"] ?>"><?= $arsip["nama_kategori"] ?></option>
                        <?php foreach ($kategori as $key => $value) { ?>
                            <option value="<?= $value['id_kategori']; ?>"><?= $value['nama_kategori']; ?></option>

                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Arsip</label>
                    <input name="nama_arsip" class="form-control" placeholder="Masukan Nama Arsip" value="<?= $arsip["nama_arsip"] ?>">
                </div>

                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi file"><?= $arsip["deskripsi"] ?></textarea>
                </div>

                <div class="form-group">
                    <label>Ganti File Arsip</label>
                    <input type="file" name="file_arsip" class="form-control">
                    <label class="text-danger">*File harus format .PDF</label>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('arsip') ?>" class="btn btn-default">Kembali</a>
                </div>

                <?= form_close() ?>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <div class="col-md-3">
    </div>
</div>