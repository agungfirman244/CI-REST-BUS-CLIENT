<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
    <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>bus/tambah" class="btn btn-primary">Tambah
                Data Bus</a>
        </div>
    </div>

    

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Bus</h3>
            
            <ul class="list-group">
                <?php foreach ($bus as $bs) : ?>
                <li class="list-group-item">
                    <?= $bs['no_polis']; ?>
                    <a href="<?= base_url(); ?>bus/hapus/<?= $bs['id_bus']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>bus/ubah/<?=$bs['id_bus']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>bus/detail/<?= $bs['id_bus']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>