<?php
include "includes/header.php";
include "includes/connection.php";
?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Data Guru & Karyawan</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div class="row" style="padding-bottom: 35px;">
                <div class="col-xl-5 col-md-6">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input Kode Guru/NIP/Nama Guru">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-md-6">
                    <button type="button" class="float-right ml-8" onclick="tambahGuru()"> Tambah Guru & Karyawan </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">NIP</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Kode Guru</th>
                        <th class="text-center">Mulai Tugas</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    $query = mysqli_query($koneksi, "select * from data_guru");
                    while($data=mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $data['NIP']; ?></td>
                        <td class="text-center"><?php echo $data['nm_lengkap']; ?></td>
                        <td class="text-center"><?php echo $data['kd_guru']; ?></td>
                        <td class="text-center"><?php echo $data['m_tugas']; ?></td>
                        <td class="text-center">
                            <a href="edit_guru.php?kd_guru=<?php echo $data['kd_guru']; ?>">
                                <input type="button" class="btn btn-success" value="Edit">
                            </a>
                            <a href="del_guru.php?kd_guru=<?php echo $data['kd_guru']; ?>">
                                <input type="button" class="btn btn-danger" value="Hapus">
                            </a>
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
    function tambahGuru() {
        location.href = "form_guru.php";
    }
</script>

<?php
include "includes/footer.php";
?>