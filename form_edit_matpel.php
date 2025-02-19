<?php
include "includes/header.php";
include "includes/connection.php";
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Edit Mata Pelajaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="matpel.php">Home</li>
            <li class="breadcrumb-item active">Form Edit Mata Pelajaran</li>
        </ol>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE kode_mapel = '".$_GET['kode_mapel']."'");
            $data = mysqli_fetch_array($query);
        ?>
        <form action="edit_matpel.php" method="POST">
            <div class="form-group row">
                <label for="k_mapel" class="col-sm-2 col-form-label">Kode Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="k_mapel" name="k_mapel" placeholder="Kode Mapel" value="<?= $data['kode_mapel'] ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="maPel" class="col-sm-2 col-form-label">Mata Pelajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="maPel" name="maPel" placeholder="Mata Pelajaran" value="<?= $data['mata_pelajaran'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="pengajar" class="col-sm-2 col-form-label">Pengajar</label>
                <div class="col-sm-10">
                    <select class="form-control" id="pengajar" name="pengajar">
                        <option>==Pilih Pengajarnya==</option>
                        <?php
                            $query = mysqli_query($koneksi,"SELECT * FROM data_guru");
                            while ($data2=mysqli_fetch_array($query)) {
                                if($data2['nm_lengkap'] == $data['pengajar']):
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
        location.href = "matpel.php";
    }
</script>

<?php
include "includes/footer.php";
?>