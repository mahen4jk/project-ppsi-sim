<?php
include "includes/header.php";
include "includes/connection.php";

$cari_kd = mysqli_query($koneksi, "SELECT max(kd_guru) as kode FROM data_guru");
$tm_cari = mysqli_fetch_array($cari_kd);
$kode = substr($tm_cari['kode'],1,4);

$tambah = $kode+1;
if ($tambah < 10) {
    $id = "A000".$tambah;
} else {
    $id = "A00".$tambah;
}
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Data Guru & Karyawan</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="data_guru.php">Home</li>
            <li class="breadcrumb-item active">Form data Guru & Karyawan</li>
        </ol>
        <form action="ins_dataGuru.php" method="POST">
            <div class="form-group row">
                <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIP" name="NIP" placeholder="NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="nm_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_lengkap" name="nm_lengkap" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_guru" class="col-sm-2 col-form-label">Kode Guru</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kode_guru" name="kode_guru" placeholder="Kode Guru" value="<?php echo $id; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tp_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tp_lahir" name="tp_lahir" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl-lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tl-lahir" name="tl_lahir" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="j_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin" id="laki-laki" value="Laki - Laki" <?php if (isset($_POST['j_kelamin']) && $_POST['j_kelamin'] == "Laki - Laki") echo "checked"; ?>>
                        <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin" id="perempuan" value="Perempuan" <?php if (isset($_POST['j_kelamin']) && $_POST['j_kelamin'] == "Perempuan") echo "checked"; ?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="h_perJam" class="col-sm-2 col-form-label">Honor Per Jam</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="h_perJam" name="h_perJam" placeholder="Honor Per Jam">
                </div>
            </div>
            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <select class="form-control" id="role" name="role">
                        <option selected></option>
                        <option value="Admin">Admin</option>
                        <option value="Guru">Guru</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $id; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="mulai_tugas" class="col-sm-2 col-form-label">Mulai Tugas</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="mulai_tugas" name="mulai_tugas" placeholder="NIP">
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
        location.href = "data_guru.php";
    }
</script>

<?php
include "includes/footer.php";
?>