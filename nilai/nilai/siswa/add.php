<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=siswa&s=save" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="number" name="nis" class="form-control" placeholder="Nomor Induk Siswa" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required>
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="jk" value="L" checked>Laki-laki &nbsp;
                        <input type="radio" name="jk" value="P">Perempuan
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir (isi dengan nama Kabupaten/Kota)">
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <select name="kelas_id" class="form-control" required>
                            <option value="">Pilih Kelas</option>
                            <?php
                            include_once("config.php");
                            $sql = "SELECT * FROM kelas";
                            $result = mysqli_query($con, $sql);
                            while ($r = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r['id'] . "'>" . $r['kelas'] . "</option>";
                            }
                            ?>
                        </select>
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