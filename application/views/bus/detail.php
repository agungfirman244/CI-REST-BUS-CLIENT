<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Bus
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $bus['no_polis']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $bus['kelas']; ?></h6>
                    <p class="card-text"><?= $bus['nama_supir']; ?></p>
                    <p class="card-text"><?= $bus['nama_kenek']; ?></p>
                    <a href="<?= base_url(); ?>bus" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>