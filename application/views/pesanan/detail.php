<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pesanan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $pesanan['id_pesan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pesanan['nama']; ?></h6>
                    <p class="card-text"><?= $pesanan['alamat']; ?></p>
                    <p class="card-text"><?= $pesanan['no_hp']; ?></p>
                    <p class="card-text"><?= $pesanan['tanggal_pesan']; ?></p>
                    <a href="<?= base_url(); ?>pesanan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>