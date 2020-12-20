<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Jadwal Keberangkatan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $keberangkatan['id_keberangkatan']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $keberangkatan['id_bus']; ?></h6>
                    <p class="card-text"><?= $keberangkatan['tujuan']; ?></p>
                    <p class="card-text"><?= $keberangkatan['tanggal_keberangkatan']; ?></p>
                    <p class="card-text"><?= $keberangkatan['jam_keberangkatan']; ?></p>
                    <p class="card-text"><?= $keberangkatan['rute_awal']; ?></p>
                    <p class="card-text"><?= $keberangkatan['rute_tujuan']; ?></p>
                    <p class="card-text"><?= $keberangkatan['harga']; ?></p>

                    <a href="<?= base_url(); ?>keberangkatan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>