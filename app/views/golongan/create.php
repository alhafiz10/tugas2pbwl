<h2>Tambah Data Golongan</h2>

<form action="<?php echo URL; ?>/golongan/store" method="POST">
    <div class="mb-3">
        <label class="form-label">KODE</label>
        <input type="text" class="form-control" name="gol_kode">
    </div>
    <div class="mb-3">
        <label class="form-label">NAMA</label>
        <input type="text" class="form-control" name="gol_nama">
    </div>
    <button type="submit" class="btn btn-success" name="btn_simpan">Simpan</button>
    <a href="<?php echo URL; ?>/golongan" class="btn btn-secondary">Kembali</a>
</form>