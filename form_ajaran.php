<?php
include "includes/header.php";
include "includes/connection.php";
?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Tahun Ajaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item" href="master_kelas.php">Home</li>
            <li class="breadcrumb-item active">Form Kelas</li>
        </ol>
        <form action="ins_ajaran.php" method="POST">
            <div class="form-group row">
                <label for="tahun_ajaran" class="col-sm-2 col-form-label">Tahun Ajaran</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" placeholder="tahun ajaran">
                </div>
            </div>
            <button type="submit" class="btn btn-success float-right ml-2">Simpan</button>
            <button type="button" class="btn btn-danger float-right ml-2" onclick="kembali()">Kembali</button>
        </form>
    </div>
</div>

<script>
    function kembali() {
        location.href = "tahun_ajaran.php";
    }
</script>

<?php
include "includes/footer.php";
?>