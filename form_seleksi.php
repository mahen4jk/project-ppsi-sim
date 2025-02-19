<?php
include "includes/header.php";
include "includes/connection.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pendaftaran Siswa Baru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Seleksi Siswa Baru</li>
                <li class="breadcrumb-item active">Form Seleksi Siswa Baru</li>
            </ol>
            <form action="ins_dataSeleksi.php" method="POST">
                <div class="form-group row">
                    <label class="col-sm-2">Kode Calon Siswa</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="kode-calon-siswa" required>
                            <option>-- Pilih Kode Calon Siswa --</option>
                            <?php
                                $query = mysqli_query($koneksi, "select * from data_calon_siswa");
                                while($data=mysqli_fetch_array($query)) {
                            ?>
                            <option value="<?=$data['kode_calon_siswa'];?>"><?php echo $data['kode_calon_siswa'];?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Nama Lengkap Siswa</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama-lengkap-siswa">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Input Nilai Bahasa Indonesia</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nilai-bi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Input Nilai Matematika</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nilai-mtk" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Input Nilai IPA</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="nilai-ipa" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Jarak Zonasi (Km)</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jarak-zonasi" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Upload file prestasi</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="upload-prestasi">
                        <label style="color:red;">*Ijazah/Piagam</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-success float-right ml-2" name="submit">Simpan</button>
                <button type="button" class="btn btn-danger float-right ml-2" onclick="kembali()">Kembali</button>
            </form>
        </div>
    </main>
</div>

<script>
    function kembali() {
        location.href = "seleksi.php";
    }
</script>