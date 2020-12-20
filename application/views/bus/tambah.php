<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Bus
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_bus">Id Bus</label>
                            <input type="text" name="id_bus" class="form-control" id="id_bus">
                            <small class="form-text text-danger"><?= form_error('id_bus'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_polis">No Polis</label>
                            <input type="text" name="no_polis" class="form-control" id="no_polis">
                            <small class="form-text text-danger"><?= form_error('no_polis'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas Bus</label>
                            <input type="text" name="kelas" class="form-control" id="kelas">
                            <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_supir">Nama Supir</label>
                            <input type="text" name="nama_supir" class="form-control" id="nama_supir">
                            <small class="form-text text-danger"><?= form_error('nama_supir'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_kenek">Nama Kenek</label>
                            <input type="text" name="nama_kenek" class="form-control" id="nama_kenek">
                            <small class="form-text text-danger"><?= form_error('nama_kenek'); ?></small>
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>