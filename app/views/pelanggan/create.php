<h2>Tambah Data Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/store" method="POST">
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" name="pel_nama">
    </div>
    <div class="mb-3">
        <label class="form-label">ALAMAT</label>
        <input type="text" class="form-control" name="pel_alamat">
    </div>
    <div class="mb-3">
        <label class="form-label">NO.HP</label>
        <input type="text" class="form-control" name="pel_hp">
    </div>
    <div class="mb-3">
        <label class="form-label">NIK</label>
        <input type="text" class="form-control" name="pel_ktp">
    </div>
    <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
    <a href="<?php echo URL; ?>/pelanggan" class="btn btn-secondary">Kembali</a>
</form>