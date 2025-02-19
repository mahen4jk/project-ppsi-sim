<?php
include "includes/header.php";
include "includes/connection.php";

$query = mysqli_query($koneksi, "select * from tahun_ajaran");

?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tahun Ajaran</h1>
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
                    <button type="button" class="float-right ml-8" onclick="tambahAjaran()"> Tambah Tahun Ajaran </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">No</th>
                        <th class="text-center" style="width: 350px;">Tahun Ajaran</th>
                        <th class="text-center" style="width: 350px;">Jumlah Siswa</th>
                        <th class="text-center" style="width: 350px;">Jumlah Guru</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                    while($data=mysqli_fetch_array($query)) {
                    $point = $data['tahun_ajaran'];
                    $siswa = mysqli_query($koneksi, "select count(*) AS jumlah from data_siswa WHERE tahun_ajaran LIKE '$point'");
                    $guru = mysqli_query($koneksi, "select count(*) AS jumlah from data_guru WHERE tahun_ajaran LIKE '$point'");
                    $jum_siswa = mysqli_fetch_array($siswa);
                    $jum_guru = mysqli_fetch_array($guru);
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $i; ?></td>
                        <td class="text-center"><?= $data['tahun_ajaran'] ?></td>
                        <td class="text-center">
                            <a href="#" class="badge bg-primary" data-toggle="modal" data-target="#siswa<?= $data['tahun_ajaran'] ?>"><?= $jum_siswa['jumlah'] ?></a>
                            <!-- Modal -->
                            <div class="modal fade" id="siswa<?= $data['tahun_ajaran'] ?>" tabindex="-1" aria-labelledby="siswa<?= $data['tahun_ajaran'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Siswa Tahun Ajaran <?= $data['tahun_ajaran'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center">NIS</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Kode Siswa</th>
                                    </tr>
                                    </thead>
                                    <?php $asd =  mysqli_query($koneksi, "select * from data_siswa WHERE tahun_ajaran LIKE '$point'"); ?>
                                    <tbody>
                                    <?php while($dsa = mysqli_fetch_assoc($asd)): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $dsa['nis']; ?></td>
                                        <td class="text-center"><?php echo $dsa['nm_siswa']; ?></td>
                                        <td class="text-center"><?php echo $dsa['kd_siswa']; ?></td>
                                    </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <a href="#" class="badge bg-secondary" data-toggle="modal" data-target="#guru<?= $data['tahun_ajaran'] ?>"><?= $jum_guru['jumlah'] ?></a>
                            <!-- Modal -->
                            <div class="modal fade" id="guru<?= $data['tahun_ajaran'] ?>" tabindex="-1" aria-labelledby="guru<?= $data['tahun_ajaran'] ?>" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Siswa Tahun Ajaran <?= $data['tahun_ajaran'] ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                <table class="table table-light">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" style="width: 150px;">NIP</th>
                                        <th class="text-center">Nama Lengkap</th>
                                        <th class="text-center">Kode Guru</th>
                                        <th class="text-center">Mulai Tugas</th>
                                    </tr>
                                    </thead>
                                    <?php $asd =  mysqli_query($koneksi, "select * from data_guru WHERE tahun_ajaran LIKE '$point'"); ?>
                                    <tbody>
                                    <?php while($dsa = mysqli_fetch_assoc($asd)): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $dsa['NIP']; ?></td>
                                        <td class="text-center"><?php echo $dsa['nm_lengkap']; ?></td>
                                        <td class="text-center"><?php echo $dsa['kd_guru']; ?></td>
                                        <td class="text-center"><?php echo $dsa['m_tugas']; ?></td>
                                    </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <?php $i++; } ?>
          
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
    function tambahAjaran() {
        location.href = "form_ajaran.php";
    }
</script>

<?php include "includes/footer.php"; ?>