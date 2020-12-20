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
            <a href="<?= base_url(); ?>kursi/tambah" class="btn btn-primary">Tambah
                Data Kursi</a>
        </div>
    </div>

   

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Nomor Kursi</h3>
            
            <ul class="list-group">
                <?php foreach ($kursi as $ks) : ?>
                <li class="list-group-item">
                    <?= $ks['urutan']; ?>
                    <a href="<?= base_url(); ?>kursi/hapus/<?= $ks['id_kursi']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>kursi/ubah/<?= $ks['id_kursi']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>kursi/detail/<?= $ks['id_kursi']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>