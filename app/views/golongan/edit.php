<h2>Edit Data Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="POST">
    <input type="hidden" name="gol_id" value="<?php echo $data['row']['gol_id']; ?>">
    <div class="mb-3">
        <label class="form-label">KODE</label>
        <input type="text" class="form-control" name="gol_kode" value="<?php echo $data['row']['gol_kode']; ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" name="gol_nama" value="<?php echo $data['row']['gol_nama']; ?>">
    </div>
    <button type="submit" class="btn btn-success" name="btn_update">Update</button>
    <a href="<?php echo URL; ?>/golongan" class="btn btn-secondary">Kembali</a>
</form>