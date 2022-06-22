<div class="card">
    <div class="card-header">
        <h3>Daftar Pelanggan
            <a href="<?php echo URL; ?>/pelanggan/create" class="btn btn-primary float-end">Tambah Data</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO.HP</th>
                    <th>NIK</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['rows'] as $row) { ?>
                    <tr>
                        <td><?php echo $row['pel_id']; ?></td>
                        <td><?php echo $row['pel_nama']; ?></td>
                        <td><?php echo $row['pel_alamat']; ?></td>
                        <td><?php echo $row['pel_hp']; ?></td>
                        <td><?php echo $row['pel_ktp']; ?></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn btn-warning btn-sm">EDIT</a></td>
                        <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data Ini???')">DELETE</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>