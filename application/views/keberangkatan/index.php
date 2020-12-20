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
            <a href="<?= base_url(); ?>keberangkatan/tambah" class="btn btn-primary">Tambah
                Data Jadwal Keberangkatan</a>
        </div>
    </div>

    

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Jadwal Keberangkatan</h3>
            
            <ul class="list-group">
                <?php foreach ($keberangkatan as $kbk) : ?>
                <li class="list-group-item">
                <?= $kbk['tanggal_keberangkatan']; ?> <td>:</td> <?= $kbk['tujuan']; ?> 
                    <a href="<?= base_url(); ?>keberangkatan/hapus/<?= $kbk['id_keberangkatan']; ?>"
                        class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>keberangkatan/ubah/<?= $kbk['id_keberangkatan']; ?>"
                        class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>keberangkatan/detail/<?= $kbk['id_keberangkatan']; ?>"
                        class="badge badge-primary float-right">detail</a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>