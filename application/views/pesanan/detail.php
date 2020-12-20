<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pesanan
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Nama</th>
                                <td>:</td>
                                <td><?= $pesanan['nama'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Alamat</th>
                                <td>:</td>
                                <td><?= $pesanan['alamat'] ?></td>
                            </tr>    
                            <tr>
                                <th scope="row">No Hp</th>
                                <td>:</td>
                                <td><?= $pesanan['no_hp'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Pemesanan</th>
                                <td>:</td>
                                <td><?= $pesanan['tanggal_pesan'] ?></td>
                            </tr>                         
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>pesanan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>