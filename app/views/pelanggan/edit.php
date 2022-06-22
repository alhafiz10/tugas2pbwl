<h2>Edit Data Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/update" method="POST">
    <input type="hidden" name="pel_id" value="<?php echo $data['row']['pel_id']; ?>">
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" name="pel_nama" value="<?php echo $data['row']['pel_nama']; ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">ALAMAT</label>
        <input type="text" class="form-control" name="pel_alamat" value="<?php echo $data['row']['pel_alamat']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">NO HP</label>
        <input type="text" class="form-control" name="pel_hp" value="<?php echo $data['row']['pel_hp']; ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">NIK</label>
        <input type="text" class="form-control" name="pel_ktp" value="<?php echo $data['row']['pel_ktp']; ?>">
    </div>
    <button type="submit" class="btn btn-success" name="btn_update">Update</button>
    <a href="<?php echo URL; ?>/pelanggan" class="btn btn-secondary">Kembali</a>
</form>