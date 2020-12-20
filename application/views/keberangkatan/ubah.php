<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                     Form Ubah Jadwal Keberangkatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_keberangkatan" value="<?= $keberangkatan['id_keberangkatan']; ?>">
                        <input type="hidden" name="id_bus" value="<?= $keberangkatan['id_bus']; ?>">
                                              
                     
                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" name="tujuan" class="form-control" id="tujuan" value="<?= $keberangkatan['tujuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                            <input type="date" name="tanggal_keberangkatan" class="form-control" id="tanggal_keberangkatan" value="<?= $keberangkatan['tanggal_keberangkatan']; ?>">
                           
                        </div>
                        <div class="form-group">
                            <label for="jam_keberangkatan">Jam Keberangkatan</label>
                            <input type="time" name="jam_keberangkatan" class="form-control" id="jam_keberangkatan" value="<?= $keberangkatan['jam_keberangkatan']; ?>">
                           
                        </div>
                        <div class="form-group">
                            <label for="rute_awal">Rute Awal</label>
                            <input type="text" name="rute_awal" class="form-control" id="rute_awal" value="<?= $keberangkatan['rute_awal']; ?>">
                            <small class="form-text text-danger"><?= form_error('rute_awal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="rute_tujuan">Rute Tujuan</label>
                            <input type="text" name="rute_tujuan" class="form-control" id="rute_tujuan" value="<?= $keberangkatan['rute_tujuan']; ?>">
                            <small class="form-text text-danger"><?= form_error('rute_tujuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $keberangkatan['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>




                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>