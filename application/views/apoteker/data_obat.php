<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>
        <?php if (!empty($this->session->flashdata('pesan'))) {; ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <span class="alert-text"> <?php echo $this->session->flashdata('pesan'); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <?php if (!empty($this->session->flashdata('pesan2'))) {; ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span class="alert-text"> <?php echo $this->session->flashdata('pesan2'); ?></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php } ?>
        <div class="row">

            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Halaman Data Obat</h2>

                        <div class="clearfix"></div>
                    </div>
                    <a href="<?php echo site_url('Obat/add_obat'); ?>" class="btn btn-primary">Tambah Data Obat</a>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Kode Obat</th>
                                                <th>Nama Obat</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($obat as $item) { ?>

                                                <tr>
                                                    <td><?php echo $item->kd_obat; ?></td>
                                                    <td><?php echo $item->nama_obat; ?></td>
                                                    <td><?php echo $item->stok; ?></td>
                                                    <td><?php echo $item->harga; ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Aksi
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="<?php echo site_url('Obat/edit_obat/' . $item->kd_obat . ''); ?>">Edit</a>
                                                                <a class="dropdown-item" href="<?php echo site_url('Obat/delete/' . $item->kd_obat . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"'); ?>">Hapus</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /page content -->
    </div>
</div>