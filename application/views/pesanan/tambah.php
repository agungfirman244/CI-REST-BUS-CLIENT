<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pesanan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_pesan">Id pesan</label>
                            <input type="text" name="id_pesan" class="form-control" id="id_pesan">
                            <small class="form-text text-danger"><?= form_error('id_pesan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_keberangkatan">Id Keberangkatan</label>
                            <input type="text" name="id_keberangkatan" class="form-control" id="id_keberangkatan">
                            <small class="form-text text-danger"><?= form_error('id_keberangkatan'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="id_kursi">Id Kursi</label>
                            <input type="text" name="id_kursi" class="form-control" id="id_kursi">
                            <small class="form-text text-danger"><?= form_error('id_kursi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pesan">Tanggal Pesan</label>
                            <input type="date" name="tanggal_pesan" class="form-control" id="tanggal_pesan">
                        </div>
                   
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>