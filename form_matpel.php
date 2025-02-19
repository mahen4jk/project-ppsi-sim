<?php
include "includes/header.php";
include "includes/connection.php";
$cari_kd = mysqli_query($koneksi, "SELECT max(kode_mapel) as kode FROM mapel");
$tm_cari = mysqli_fetch_array($cari_kd);
$kode = substr($tm_cari['kode'],1,4);

$tambah = $kode+1;
if ($tambah < 10) {
    $id = "P0".$tambah;
} else {
    $id = "P".$tambah;
}
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Mata Pelajaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="matpel.php">Home</li>
            <li class="breadcrumb-item active">Form Mata Pelajaran</li>
        </ol>
        <form action="insert_mapel.php" method="POST">
            <div class="form-group row">
                <label for="k_mapel" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="k_mapel" name="k_mapel" placeholder="Kode Mapel" value="<?php echo $id ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="maPel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="maPel" name="maPel" placeholder="Mata Pelajaran">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengajar" class="col-sm-2 col-form-label">Pengajar</label>
                <div class="col-sm-10">
                    <select class="form-control" id="pengajar" name="pengajar">
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
</div>

<script>
    function kembali() {
        location.href = "matpel.php";
    }
</script>

<?php
include "includes/footer.php";
?>