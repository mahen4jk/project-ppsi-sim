<?php
include "includes/header.php";
include "includes/connection.php";
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Data Guru & Karyawan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="data_guru.php">Home</li>
            <li class="breadcrumb-item active">Form data Guru & Karyawan</li>
        </ol>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM data_calon_siswa WHERE kode_calon_siswa = '".$_GET['kci']."'");
            $data = mysqli_fetch_array($query);
        ?>
        <form action="upt_dataPendaftaran.php" method="POST">
        <div class="form-group row">
                    <label class="col-sm-2">Kode Calon Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode-siswa" value="<?php echo $data['kode_calon_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Lengkap Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama-lengkap-siswa" value="<?php echo $data['nama_lengkap_calon_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tempat Lahir Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="tempat-lahir-siswa" value="<?php echo $data['tempat_lahir_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama">
                            <option>-- Pilih Agama --</option>
                            <option value="Islam" <?php echo $data['agama_siswa'] == 'Islam' ? 'selected="selected"' : ''?>>Islam</option>
                            <option value="Kristen" <?php echo $data['agama_siswa'] == 'Kristen' ? 'selected="selected"' : ''?>>Kristen</option>
                            <option value="Katolik" <?php echo $data['agama_siswa'] == 'Katolik' ? 'selected="selected"' : ''?>>Katolik</option>
                            <option value="Hindu" <?php echo $data['agama_siswa'] == 'Hindu' ? 'selected="selected"' : ''?>>Hindu</option>
                            <option value="Budha" <?php echo $data['agama_siswa'] == 'Budha' ? 'selected="selected"' : ''?>>Budha</option>
                            <option value="Konghucu" <?php echo $data['agama_siswa'] == 'Konghucu' ? 'selected="selected"' : ''?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tanggal Lahir Siswa</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal-lahir-siswa" value="<?php echo $data['tanggal_lahir_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Umur</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur-siswa" value="<?php echo $data['umur']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Alamat Siswa</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat-siswa" value="<?php echo $data['alamat_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jenis-kelamin-siswa">
                            <option value="L" <?php echo $data['jenis_kelamin_siswa'] == 'L' ? 'selected="selected"' : ''?>>L</option>
                            <option value="P" <?php echo $data['jenis_kelamin_siswa'] == 'P' ? 'selected="selected"' : ''?>>P</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Kewarganegaraan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kewarganegaraan-siswa">
                            <option value="WNA" <?php echo $data['kewarganegaraan'] == 'WNA' ? 'selected="selected"' : ''?>>WNA</option>
                            <option value="WNI" <?php echo $data['kewarganegaraan'] == 'WNI' ? 'selected="selected"' : ''?>>WNI</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tinggal dengan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggal-dengan" value="<?php echo $data['tinggal_dengan']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jumlah Saudara Kandung</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah-saudara-siswa" value="<?php echo $data['jumlah_saudara_kandung']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Anak ke-</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="anak-ke" value="<?php echo $data['anak_ke']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jarak Ke Sekolah (m)</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="jarak-ke-sekolah" value="<?php echo $data['jarak_ke_sekolah']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Transportasi Siswa</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="transportasi-siswa">
                            <option value="Mobil" <?php echo $data['transportasi_siswa'] == 'Mobil' ? 'selected="selected"' : ''?>>Mobil</option>
                            <option value="Sepeda" <?php echo $data['transportasi_siswa'] == 'Sepeda' ? 'selected="selected"' : ''?>>Sepeda</option>
                            <option value="Motor" <?php echo $data['transportasi_siswa'] == 'Motor' ? 'selected="selected"' : ''?>>Sepeda Motor</option>
                            <option value="Jalan_Kaki" <?php echo $data['transportasi_siswa'] == 'Jalan_Kaki' ? 'selected="selected"' : ''?>>Jalan Kaki</option>
                            <option value="Transportasi_Lain" <?php echo $data['transportasi_siswa'] == 'Transportasi_Lain' ? 'selected="selected"' : ''?>>Transportasi Lain...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Saudara Satu Sekolah (jika ada)</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama-saudara-satu-sekolah" value="<?php echo $data['nama_saudara_satu_sekolah']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Asal Sekolah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="asal-sekolah-siswa" value="<?php echo $data['asal_sekolah']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tinggi Badan Siswa (Cm)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi-badan-siswa" value="<?php echo $data['tinggi_badan_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Berat Badan Siswa (Kg)</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="berat-badan-siswa" value="<?php echo $data['berat_badan_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Golongan Darah</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="golongan-darah-siswa">
                            <option value="A" <?php echo $data['golongan_darah_siswa'] == 'A' ? 'selected="selected"' : ''?>>A</option>
                            <option value="B" <?php echo $data['golongan_darah_siswa'] == 'B' ? 'selected="selected"' : ''?>>B</option>
                            <option value="AB" <?php echo $data['golongan_darah_siswa'] == 'AB' ? 'selected="selected"' : ''?>>AB</option>
                            <option value="O" <?php echo $data['golongan_darah_siswa'] == 'O' ? 'selected="selected"' : ''?>>O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Penyakit Diderita Siswa (Jika ada)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="riwayat-penyakit-siswa" value="<?php echo $data['penyakit_diderita_siswa']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Status Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status-siswa" value="<?php echo $data['status_siswa']?>">
                    </div>
                </div>
            <button type="submit" name="simpan" class="btn btn-success float-right ml-2">Simpan</button>
            <button type="button" class="btn btn-danger float-right ml-2" onclick="kembali()">Kembali</button>
        </form>
    </div>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Your Website 2021</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

<script>
    function kembali() {
        location.href = "pendaftaran.php";
    }
</script>

<?php
include "includes/footer.php";
?>