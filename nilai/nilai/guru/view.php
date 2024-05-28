<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Data Guru</div>
                <div class="col-4">
                    <a href="?m=guru&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Guru</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>telepon</th>
                            <th>foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once('config.php');
                        $sql = "SELECT guru.id, nip, nama, tempat_lahir, tanggal_lahir, telepon, foto FROM guru";
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0 ) {
                            $no = 1;
                            while ($r = mysqli_fetch_assoc($result)) {
                                $foto = isset($r['foto']) ? $r['foto'] : '0.png';
                                echo '<tr>
                                    <td>'.$no.'</td>
                                    <td>'.$r['nip'].'</td>
                                    <td>'.$r['nama'].'</td>
                                    <td>'.$r['tempat_lahir'].'</td>
                                    <td>' . date('d M Y', strtotime($r['tanggal_lahir'])) . '</td>
                                    <td>'.$r['telepon'].'</td>
                                    <td><img src="guru/foto/' . $foto . '" alt="WebPro" height=74></td>
                                    <td>
                                        <a href="?m=guru&s=edit&id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="?m=guru&s=delete&id='.$r['id'].'" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin guru akan dihapus?\')">Hapus</a>
                                    </td>
                                </tr>';
                                $no++;
                            }
                        } else {
                            echo "<tr>
                                <td colspan='9' align='center'>Data Kosong</td>
                                </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>