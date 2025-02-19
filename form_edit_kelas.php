<?php
include "includes/header.php";
include "includes/connection.php";

$query = mysqli_query($koneksi, "SELECT * FROM master_kelas WHERE kode_kelas = '".$_GET['k_kelas']."'");
$data = mysqli_fetch_array($query);
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Edit Kelas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="master_kelas.php">Home</li>
            <li class="breadcrumb-item active">Form Edit Kelas</li>
        </ol>
        <form action="edit_kelas.php" method="POST">
            <div class="form-group row">
                <label for="k_mapel" class="col-sm-2 col-form-label">Kode Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="k_kelas" name="k_kelas" placeholder="Kode Kelas" value="<?php echo $data['kode_kelas']?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="k_kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" value="<?= $data['kelas'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengajar" class="col-sm-2 col-form-label">wali Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control" id="w_kelas" name="w_kelas">
                        <option>==Pilih Pengajarnya==</option>
                        <?php
                            $query = mysqli_query($koneksi,"SELECT * FROM data_guru");
                            while ($data2=mysqli_fetch_array($query)) {
                                if($data2['nm_lengkap'] == $data['wali_kelas']):
                        ?>
                        <option value="<?=$data2['nm_lengkap']?>" selected><?=$data2['nm_lengkap']?></option>
                        <?php
                                else:
                                    ?>
                        <option value="<?=$data2['nm_lengkap']?>"><?=$data2['nm_lengkap']?></option>
                        <?php
                                endif;
                         } ?>
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
        location.href = "master_kelas.php";
    }
</script>

<?php
include "includes/footer.php";
?>