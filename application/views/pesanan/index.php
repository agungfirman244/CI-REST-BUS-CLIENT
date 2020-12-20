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
            <a href="<?= base_url(); ?>pesanan/tambah" class="btn btn-primary">Tambah
                Data Pesanan</a>
        </div>
    </div>

    

    <div class="row mt-3">
    <div class="col-md-6">
            <h3>Daftar Nomor Pesanan</h3>
            
            <ul class="list-group">
                <?php foreach ($pesanan as $ps) : ?>
                <li class="list-group-item">
                    <?= $ps['nama']; ?>
                    <a href="<?= base_url(); ?>pesanan/hapus/<?= $ps['id_pesan']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                    <a href="<?= base_url(); ?>pesanan/ubah/<?= $ps['id_pesan']; ?>"
                        class="badge badge-success float-right">ubah</a>
                    <a href="<?= base_url(); ?>pesanan/detail/<?= $ps['id_pesan']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>