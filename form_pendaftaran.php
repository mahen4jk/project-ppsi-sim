<?php
include "includes/header.php";
include "includes/connection.php";

$query = mysqli_query($koneksi, "SELECT max(kode_calon_siswa) as kode FROM data_calon_siswa");
$data = mysqli_fetch_array($query);
$kodeCPD = $data['kode'];

$urutan = (int) substr($kodeCPD,3,4);
$urutan++;

$huruf = "CPD";
$kodeCPD = $huruf . sprintf("%04s", $urutan);

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pendaftaran Siswa Baru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Pendaftaran Siswa Baru</li>
                <li class="breadcrumb-item active">Form Calon Siswa Baru</li>
            </ol>
            <form action="ins_dataPendaftaran.php" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2">Kode Calon Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode-siswa" value="<?php echo $kodeCPD; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Lengkap Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama-lengkap-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tempat Lahir Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  name="tempat-lahir-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Agama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="agama" required>
                            <option>-- Pilih Agama --</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tanggal Lahir Siswa</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="tanggal-lahir-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Umur</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Alamat Siswa</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jenis Kelamin</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="jenis-kelamin-siswa" required>
                            <option>-- Pilih Jenis Kelamin --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Kewarganegaraan</label>
                    <div class="col-sm-10">
                    <select class="form-control" name="kewarganegaraan-siswa" required>
                            <option>-- Pilih Jenis Kewarganegaraan --</option>
                            <option value="WNA">WNA</option>
                            <option value="WNI">WNI</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tinggal dengan</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="tinggal-dengan" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jumlah Saudara Kandung</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah-saudara-siswa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Anak ke-</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="anak-ke" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jarak Ke Sekolah (m)</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="jarak-ke-sekolah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Transportasi Siswa</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="transportasi-siswa" required>
                            <option>-- Pilih Jenis Kendaraan --</option>
                            <option value="Mobil">Mobil</option>
                            <option value="Sepeda">Sepeda</option>
                            <option value="Motor">Sepeda Motor</option>
                            <option value="Jalan">Jalan Kaki</option>
                            <option value="Transportasi Lain">Transportasi Lain...</option>
                            <option value="Jalan_Kaki">Jalan Kaki</option>
                            <option value="Transportasi_Lain">Transportasi Lain...</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Saudara Satu Sekolah (jika ada)</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama-saudara-satu-sekolah">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Asal Sekolah</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="asal-sekolah-siswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Tinggi Badan Siswa (Cm)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tinggi-badan-siswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Berat Badan Siswa (Kg)</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="berat-badan-siswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Golongan Darah</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="golongan-darah-siswa" required>
                            <option>-- Pilih Jenis Golongan Darah --</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Penyakit Diderita Siswa (Jika ada)</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="riwayat-penyakit-siswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Status Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="status-siswa">
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
                <button type="button" class="btn btn-danger float-right ml-2" onclick="kembali()">Kembali</button>
    </form>

        </div>
    </main>
</div>

<script>
    function kembali() {
        location.href = "pendaftaran.php";
    }
</script>