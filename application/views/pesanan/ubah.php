<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Pesanan
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_pesan" value="<?= $pesanan['id_pesan']; ?>">
                        <input type="hidden" name="id_keberangkatan" value="<?= $pesanan['id_keberangkatan']; ?>">
                        <input type="hidden" name="id_kursi" value="<?= $pesanan['id_kursi']; ?>">
                        
                 
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $pesanan['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $pesanan['alamat']; ?>">
                            <small class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $pesanan['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pesan">Tanggal Pesan</label>
                            <input type="date" name="tanggal_pesan" class="form-control" id="tanggal_pesan" value="<?= $pesanan['tanggal_pesan']; ?>">
                           
                        </div>                      

                        
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>