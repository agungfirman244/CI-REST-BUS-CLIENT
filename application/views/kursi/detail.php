<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Kursi
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $kursi['kode_kursi']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $kursi['urutan']; ?></h6>
                    <a href="<?= base_url(); ?>kursi" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>