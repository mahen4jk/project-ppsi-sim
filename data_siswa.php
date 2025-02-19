<?php
include "includes/header.php";
include "includes/connection.php";

$query = mysqli_query($koneksi, "select * from data_siswa");

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row" style="padding-bottom: 35px;">
                <div class="col-xl-5 col-md-6">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="text" name="key" class="form-control" placeholder="Input Kode Nama Siswa">
                            <div class="input-group-append">
                                <button type="submit" name="cari" class="input-group-text"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-md-6">
                    <button type="button" class="float-right ml-8" onclick="tambahSiswa()"> Tambah Siswa </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">NIS</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Kode Siswa</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    while($data=mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $data['nis']; ?></td>
                        <td class="text-center"><?php echo $data['nm_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['kd_siswa']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-warning" href="form_edit_siswa.php?kode=<?php echo $data['nis']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus_siswa.php?kode=<?php echo $data['nis']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
          
            </table>
        </div>
    </main>
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
    function tambahSiswa() {
        location.href = "form_siswa.php";
    }
</script>

<?php include "includes/footer.php"; ?>