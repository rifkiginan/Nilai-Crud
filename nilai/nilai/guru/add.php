<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=guru&s=save" method="post">
                    <div class="mb-3">
                        <input type="number" name="nip" class="form-control" placeholder="NIP" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="telepon" class="form-control" placeholder="telepon" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Masukan Foto</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>