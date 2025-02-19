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
                <li class="breadcrumb-item active">Pendaftaran Siswa Baru</li>
            </ol>
            <div class="row" style="padding-bottom: 35px;">
                <div class="col-xl-5 col-md-6">
                    <form method="POST" action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Input Kode Calon Siswa Baru">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-5 col-md-6">
                    <button type="button" class="float-right ml-8" onclick="tambahCalonSiswa()"> Form Pendaftaran Siswa Baru </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">Kode Calon siswa</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Tanggal lahir</th>
                        <th class="text-center" style="width: 350px;">Tempat lahir</th>
                        <th class="text-center" style="width: 350px;">Agama</th>
                        <th class="text-center" style="width: 350px;">Alamat</th>
                        <th class="text-center" style="width: 350px;">Jenis Kelamin</th>
                        <th class="text-center" style="width: 350px;">Asal Sekolah</th>
                        <th class="text-center" style="width: 350px;">Gol. Darah</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM data_calon_siswa");
                    while($data=mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $data['kode_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['nama_lengkap_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['tanggal_lahir_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['tempat_lahir_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['agama_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['alamat_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['jenis_kelamin_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['asal_sekolah']; ?></td>
                        <td class="text-center"><?php echo $data['golongan_darah_siswa']; ?></td>
                        <td class="text-center">
                            <a href="edit_pendaftaran.php?kci=<?php echo $data['kode_calon_siswa']; ?>">
                                <input type="button" class="btn btn-success" value="Edit">
                            </a>
                            <a href="delete_pendaftaran.php?kci=<?php echo $data['kode_calon_siswa']; ?>">
                                <input type="button" class="btn btn-danger" value="Hapus">
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
                    <th class="text-center" style="width: 150px;">Kode Calon siswa</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Tanggal lahir</th>
                        <th class="text-center" style="width: 350px;">Tempat lahir</th>
                        <th class="text-center" style="width: 350px;">Agama</th>
                        <th class="text-center" style="width: 350px;">Alamat</th>
                        <th class="text-center" style="width: 350px;">Jenis Kelamin</th>
                        <th class="text-center" style="width: 350px;">Asal Sekolah</th>
                        <th class="text-center" style="width: 350px;">Gol. Darah</th>
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
    function tambahCalonSiswa() {
        location.href = "form_pendaftaran.php";
    }
</script>

<?php
include "includes/footer.php";
?>