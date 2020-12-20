<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Kursi
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Kode Kursi</th>
                                <td>:</td>
                                <td><?= $kursi['kode_kursi'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Urutan Kursi</th>
                                <td>:</td>
                                <td><?= $kursi['urutan'] ?></td>
                            </tr>                          
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>kursi" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>