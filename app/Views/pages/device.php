<?= $this->extend('layout/template');?>
<?= $this->section('content'); ?>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Daftar Device</h1>
                        <table class="table table-bordered">
                            <thead class ="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Device_name</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($device as $d) : ?>
                            <tr>
                                <th scope="row"> <?=$d['id']?> </td>
                                <td><?=$d['gambar']?></td>
                                <td><?=$d['nama']?></td>
                                <td><?=$d['merek']?></td>
                                <td><?=$d['jumlah']?></td>
                                <td><?=$d['status']?></td>
                                <td>
                                <button type="button" class="btn btn-warning btn-lg">
                                <?=$d['detail']?>
                                </button>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                         <button type="button" class="btn btn-warning btn-lg">
                            <a href = "/">Back To Home</a>                          
                        </button>
                </div>
            </div>
        </div>
<?= $this->endSection();?>