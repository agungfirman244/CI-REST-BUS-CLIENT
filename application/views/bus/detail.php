<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Bus
                </div>
                <div class="card-body">
                <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th scope="row">Nomor Polisi</th>
                                <td>:</td>
                                <td><?= $bus['no_polis'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Kelas Layanan Bus</th>
                                <td>:</td>
                                <td><?= $bus['kelas'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Supir Bus</th>
                                <td>:</td>
                                <td><?= $bus['nama_supir'] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama Kenek Bus</th>
                                <td>:</td>
                                <td><?= $bus['nama_kenek'] ?></td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <a href="<?= base_url(); ?>bus" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>