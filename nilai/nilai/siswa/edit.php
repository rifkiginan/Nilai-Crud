<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Siswa</div>
                <div class="col-4">
                    <a href="?m=siswa&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <?php
            include_once ('config.php');
            $id = $_GET['id'];
            $sql = "SELECT * FROM siswa WHERE id='$id'";
            $result = mysqli_query($con, $sql);
            $r = mysqli_fetch_assoc($result)
                ?>

            <div class="card-body">
                <form action="?m=siswa&s=update" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="text" name="nis" value="<?= $r['nis']; ?>" class="form-control"
                            placeholder="Nomer induk Siswa" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="nama" value="<?= $r['nama']; ?>" class="form-control"
                            placeholder="Nama Siswa" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="tempat_lahir" value="<?= $r['tempat_lahir']; ?>" class="form-control"
                            placeholder="Tempat Lahir (isi dengan nama kabupaten/kota)">
                    </div>
                    <div class="mb-3">
                        <label for="">Jenis Kelamin: &nbsp;</label>
                        <input type="radio" name="jk" value="L" <?= $r['jk'] == 'L' ? 'checked' : ''; ?>> Laki-laki &nbsp;
                        <input type="radio" name="jk" value="P" <?= $r['jk'] == 'P' ? 'checked' : ''; ?>>Perempuan;
                    </div>
                    <div class="mb-3">
                        <input type="date" name="tanggal_lahir" value="<?= $r['tanggal_lahir']; ?>" class="form-control"
                            placeholder="Tanggal Lahir">
                    </div>
                    <div class="mb-3">
                        <select name="kelas_id" class="form-control" required>
                            <option value="">Pilih Kelas</option>
                            <?php
                            include_once ("config.php");
                            $sql = "SELECT * FROM kelas";
                            $result = mysqli_query($con, $sql);
                            while ($r1 = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $r1['id'] . "'" . ($r1['id'] == $r ['kelas_id'] ? 'selected' : '') . ">" . $r1['kelas'] . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <img src="siswa/foto/<?= $r['foto']; ?>" alt="Gambar tidak ada" height="400px" title=>
                    </div> 
                    <div class="mb-3">
                        <label for="">Masukan Foto (Jika diganti)</label>
                        <input type="file" name="foto" class="form-control" accept="image/*">
                    </div>

                    <div>
                        <input type="hidden" name="id" value="<?= $r['id']; ?>">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="simpan" name="update" class="btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>\