<div class="row">
    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?= $tot_arsip ?></h3>

                <p>Arsip</p>
            </div>
            <div class="icon">
                <i class="fa fa-file-pdf-o"></i>
            </div>
            <a href="<?= base_url('Arsip') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?= $tot_kategori ?></h3>

                <p>Kategori</p>
            </div>
            <div class="icon">
                <i class="fa fa-bookmark-o"></i>
            </div>
            <a href="<?= base_url('Kategori') ?>" class="small-box-footer"> View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?= $tot_dep ?></h3>

                <p>Departemen</p>
            </div>
            <div class="icon">
                <i class="fa fa-building-o"></i>
            </div>
            <a href="<?= base_url('Departemen') ?>" class="small-box-footer">View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?= $tot_user ?></h3>

                <p>User</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="<?= base_url('user') ?>" class="small-box-footer"> View Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>