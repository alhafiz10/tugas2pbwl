<div class="card">
    <div class="card-header">
        <h3>
            Daftar Golongan
            <a href="<?php echo URL; ?>/golongan/create" class="btn btn-info float-end">Tambah Data</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-hover mt-3">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data['rows'] as $row) { ?>
                    <tr>
                        <td><?php echo $row['gol_id']; ?></td>
                        <td><?php echo $row['gol_kode']; ?></td>
                        <td><?php echo $row['gol_nama']; ?></td>
                        <td><a href="<?php echo URL; ?>/golongan/edit/<?php echo $row['gol_id']; ?>" class="btn btn-warning btn-sm">EDIT</a></td>
                        <td><a href="<?php echo URL; ?>/golongan/delete/<?php echo $row['gol_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Kamu Yakin Ingin Menghapus Data Ini???')">DELETE</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>