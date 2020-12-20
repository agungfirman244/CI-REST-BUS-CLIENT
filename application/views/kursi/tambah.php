<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Kursi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_kursi">Id Kursi</label>
                            <input type="text" name="id_kursi" class="form-control" id="id_kursi">
                            <small class="form-text text-danger"><?= form_error('id_kursi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kode_kursi">Kode Kursi</label>
                            <input type="text" name="kode_kursi" class="form-control" id="kode_kursi">
                            <small class="form-text text-danger"><?= form_error('kode_kursi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="urutan">Urutan</label>
                            <input type="text" name="urutan" class="form-control" id="urutan">
                            <small class="form-text text-danger"><?= form_error('urutan'); ?></small>
                        </div>
                        
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>