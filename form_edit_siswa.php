<?php

if(!isset($_GET)){
    header("location:data_siswa.php");
}else{
    include "includes/header.php";
    include "includes/connection.php";
    $nis = $_GET['kode'];
    $sql = "SELECT *FROM data_siswa WHERE nis='$nis'";
    $query = mysqli_query($koneksi,$sql);
    $value = mysqli_fetch_assoc($query);
}


?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Edit Siswa</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="data_siswa.php">Home</li>
            <li class="breadcrumb-item active">Form edit Siswa</li>
        </ol>
        <form action="edit_siswa.php" method="POST">
            <div class="form-group row">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nis" name="nis" value="<?= $value['nis'] ?>" placeholder="Nomor Induk Siswa">
            </div>
            </div>
            <div class="form-group row">
                <label for="nm_siswa" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nm_lengkap" name="nm_siswa" value="<?= $value['nm_siswa'] ?>" placeholder="Nama Lengkap Siswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="kd_siswa" class="col-sm-2 col-form-label">Kode Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kd_siswa" name="kd_siswa" value="<?= $value['kd_siswa'] ?>" placeholder="Kode Siswa">
                </div>
            </div>

            <div class="form-group row">
                <label for="agm_siswa" class="col-sm-2 col-form-label">Agama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="agm_siswa" name="agm_siswa" value="<?= $value['agm_siswa'] ?>" placeholder="Agama">
                </div>
            </div>

            <div class="form-group row">
                <label for="tp_lahir_siswa" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tp_lahir_siswa" name="tp_lahir_siswa" value="<?= $value['tp_lahir_siswa'] ?>" placeholder="Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl_lahir_siswa" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tl_lahir_siswa" name="tl_lahir_siswa" value="<?= $value['tl_lahir_siswa'] ?>" placeholder="Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="j_kelamin_siswa" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin_siswa" id="laki-laki" value="L" <?=  $value['j_kelamin_siswa'] == 'L' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="j_kelamin_siswa" id="perempuan" value="P" <?=  $value['j_kelamin_siswa'] == 'P' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat_siswa" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat_siswa" name="alamat_siswa" rows="3"><?= $value['alamat_siswa'] ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="asal_sekolah" class="col-sm-2 col-form-label">Asal Sekolah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="<?= $value['asal_sekolah'] ?>" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="form-group row">
                <label for="gol_darah" class="col-sm-2 col-form-label">Golongan Darah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="gol_darah" name="gol_darah" value="<?= $value['gol_darah'] ?>" placeholder="Golongan Darah">
                </div>
            </div>
            <div class="form-group row">
                <label for="penyakit_diderita" class="col-sm-2 col-form-label">Penyakit Diderita</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penyakit_diderita" name="penyakit_diderita" value="<?= $value['penyakit_derita'] ?>" placeholder="Penyakit Diderita">
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="status" name="status" value="<?= $value['status'] ?>" placeholder="Status Siswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="Tahun Ajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" value="<?= $value['tahun_ajaran'] ?>" placeholder="tahun_ajaran">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" value="<?= $value['username'] ?>" placeholder="Username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password" value="<?= $value['password'] ?>" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
            <button type="button" class="btn btn-danger float-right ml-2" onclick="kembali()">Kembali</button>
        </form>
    </div>
</div>

<script>
    function kembali(){
        location.href="data_siswa.php";
    }
</script>

<?php
include "includes/footer.php";
?>