<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Jadwal Keberangkatan
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Tanggal Keberangkatan</th>
                                <td>:</td>
                                <td><?= $keberangkatan['tanggal_keberangkatan']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jam Keberangkatan</th>
                                <td>:</td>
                                <td><?= $keberangkatan['jam_keberangkatan']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Rute Awal</th>
                                <td>:</td>
                                <td><?= $keberangkatan['rute_awal']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Rute Tujuan</th>
                                <td>:</td>
                                <td><?= $keberangkatan['rute_tujuan']; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Harga</th>
                                <td>:</td>
                                <td><?= $keberangkatan['harga']; ?></td>
                            </tr>
                                                
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>keberangkatan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>