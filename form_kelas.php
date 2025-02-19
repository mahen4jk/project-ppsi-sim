<?php
include "includes/header.php";
include "includes/connection.php";
$cari_kd = mysqli_query($koneksi, "SELECT max(kode_kelas) as kode FROM master_kelas");
$tm_cari = mysqli_fetch_array($cari_kd);
$kode = substr($tm_cari['kode'],1,4);

$tambah = $kode+1;
if ($tambah < 10) {
    $id = "K0".$tambah;
} else {
    $id = "K".$tambah;
}
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Kelas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="matpel.php">Home</li>
            <li class="breadcrumb-item active">Form Kelas</li>
        </ol>
        <form action="ins_kelas.php" method="POST">
            <div class="form-group row">
                <label for="k_mapel" class="col-sm-2 col-form-label">Kode Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="k_kelas" name="k_kelas" placeholder="Kode Kelas"
                        value="<?php echo $id ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="maPel" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengajar" class="col-sm-2 col-form-label">Wali Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control" id="w_kelas" name="w_kelas">
                        <option selected>==Pilih Pengajarnya==</option>
                        <?php
                            $query = mysqli_query($koneksi,"SELECT * FROM data_guru");
                            while ($data=mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?=$data['nm_lengkap']?>"><?=$data['nm_lengkap']?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
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

<?php
include "includes/footer.php";
?>