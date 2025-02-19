<?php
include "includes/header.php";
include "includes/connection.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Master Mata Pelajaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row" style="padding-bottom: 35px;">
                <div class="col-xl-5 col-md-6">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input Kode Matpel/Mata Pelajaran">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-md-6">
                    <button type="button" class="btn btn-info float-right ml-8" onclick="tambahMatpel()"> Tambah Mata Pelajaran </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">Nomor</th>
                        <th class="text-center">Kode Mapel</th>
                        <th class="text-center">Mata Pelajaran</th>
                        <th class="text-center">Pengajar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                $query = mysqli_query($koneksi, "select * from mapel");
                $nomor = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>
                    <tbody>
                        <tr>
                            <td class="text-center"><?php echo $nomor++; ?></td>
                            <td class="text-center"><?php echo $data['kode_mapel']; ?></td>
                            <td class="text-center"><?php echo $data['mata_pelajaran']; ?></td>
                            <td class="text-center"><?php echo $data['pengajar']; ?></td>
                            <td class="text-center">
                                <a class="btn btn-success" href="form_edit_matpel.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Edit</a>
                                <a class="btn btn-danger" href="hapus_mapel.php?kode_mapel=<?php echo $data['kode_mapel']; ?>">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
                        <th class="text-center" style="width: 150px;">Nomor</th>
                        <th class="text-center">Kode Mapel</th>
                        <th class="text-center">Mata Pelajaran</th>
                        <th class="text-center">Pengajar</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </tfoot>
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
    function tambahMatpel() {
        location.href = "form_matpel.php";
    }
</script>
<?php
include "includes/footer.php";
?>