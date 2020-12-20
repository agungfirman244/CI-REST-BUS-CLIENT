<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kursi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_kursi" value="<?= $kursi['id_kursi']; ?>">
                        
                      
                        
                        <div class="form-group">
                            <label for="kode_kursi">Kode Kursi</label>
                            <input type="text" name="kode_kursi" class="form-control" id="kode_kursi" value="<?= $kursi['kode_kursi']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode_kursi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="urutan">Urutan</label>
                            <input type="text" name="urutan" class="form-control" id="urutan" value="<?= $kursi['urutan']; ?>">
                            <small class="form-text text-danger"><?= form_error('urutan'); ?></small>
                        </div>


                     
                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>