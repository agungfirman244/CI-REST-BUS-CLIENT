<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Jadwal Keberangkatan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_keberangkatan">Id Keberangkatan</label>
                            <input type="text" name="id_keberangkatan" class="form-control" id="id_keberangkatan">
                            <small class="form-text text-danger"><?= form_error('id_keberangkatan'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="id_bus">Id Bus</label>
                            <input type="text" name="id_bus" class="form-control" id="id_bus">
                            <small class="form-text text-danger"><?= form_error('id_bus'); ?></small>
                        </div> 
                       

                        <div class="form-group">
                            <label for="tujuan">Tujuan</label>
                            <input type="text" name="tujuan" class="form-control" id="tujuan">
                            <small class="form-text text-danger"><?= form_error('tujuan'); ?></small>
                        </div>

                        
                        <div class="form-group">
                            <label for="tanggal_keberangkatan">Tanggal Keberangkatan</label>
                            <input type="date" name="tanggal_keberangkatan" class="form-control" id="tanggal_keberangkatan">
                           
                        </div>
                        <div class="form-group">
                            <label for="jam_keberangkatan">Jam Keberangkatan</label>
                            <input type="time" name="jam_keberangkatan" class="form-control" id="jam_keberangkatan">
                           
                        </div>

                        
                        <div class="form-group">
                            <label for="rute_awal">Rute Awal</label>
                            <input type="text" name="rute_awal" class="form-control" id="rute_awal">
                            <small class="form-text text-danger"><?= form_error('rute_awal'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="rute_tujuan">Rute Tujuan</label>
                            <input type="text" name="rute_tujuan" class="form-control" id="rute_tujuan">
                            <small class="form-text text-danger"><?= form_error('rute_tujuan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>