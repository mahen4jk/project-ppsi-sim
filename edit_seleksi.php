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
            $query = mysqli_query($koneksi, "SELECT * FROM nilai_calon_siswa WHERE kode_calon_siswa = '".$_GET['kci']."'");
            $data = mysqli_fetch_array($query);
        ?>
        <form action="upt_dataSeleksi.php" method="POST" enctype="multipart/form-data">
            <div class="form-group row">
                <label for="NIP" class="col-sm-2 col-form-label">Kode Calon Siswa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="kode-calon-siswa" value="<?php echo $data['kode_calon_siswa']?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="nm_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama-lengkap" value="<?php echo $data['nama_calon_siswa']?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_guru" class="col-sm-2 col-form-label">Bahasa Indonesia</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nilai-bi" value="<?php echo $data['nilai_bi']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tp_lahir" class="col-sm-2 col-form-label">Matematika</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nilai-mtk" value="<?php echo $data['nilai_mtk']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl-lahir" class="col-sm-2 col-form-label">IPA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nilai-ipa" value="<?php echo $data['nilai_ipa']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl-lahir" class="col-sm-2 col-form-label">Jarak Zonasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="jarak-zonasi" value="<?php echo $data['jarak_rumah_ke_sekolah']?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="tl-lahir" class="col-sm-2 col-form-label">Upload File Prestasi</label>
                <div class="col-sm-10">
                    <label><a href="file/<?php echo $data['file_prestasi']?>"><?php echo $data['file_prestasi']?></a></label>
                    <input type="file" class="form-control" name="upload-prestasi">
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
        location.href = "seleksi.php";
    }
</script>

<?php
include "includes/footer.php";
?>