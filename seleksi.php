<?php
include "includes/header.php";
include "includes/connection.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Seleksi Siswa Baru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Seleksi Siswa Baru</li>
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
                    <button type="button" class="float-right ml-8" onclick="tambahSeleksiSiswa()"> Form Seleksi Siswa Baru </button>
                </div>
            </div>
            <table style="padding-top: 35px;" class="table table-light">
            <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">Kode Calon siswa</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Bahasa Indonesia</th>
                        <th class="text-center" style="width: 350px;">Matematika</th>
                        <th class="text-center" style="width: 350px;">IPA</th>
                        <th class="text-center" style="width: 350px;">Rata-Rata</th>
                        <th class="text-center" style="width: 350px;">Jarak Zonasi (Km)</th>
                        <th class="text-center" style="width: 350px;">Prestasi</th>
                        <th class="text-center" style="width: 350px;">Keterangan</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <?php
                    $query = mysqli_query($koneksi, "select * from nilai_calon_siswa");
                    while($data=mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $data['kode_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['nama_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['nilai_bi']; ?></td>
                        <td class="text-center"><?php echo $data['nilai_mtk']; ?></td>
                        <td class="text-center"><?php echo $data['nilai_ipa']; ?></td>
                        <td class="text-center">
                            <?php
                                $nilai_bi = $data['nilai_bi'];
                                $nilai_mtk = $data['nilai_mtk'];
                                $nilai_ipa = $data['nilai_ipa'];

                                $total = $nilai_bi+$nilai_mtk+$nilai_ipa;
                                $rata_rata = $total/3;
                                echo floor($rata_rata);
                            ?>
                        </td>
                        <td class="text-center"><?php echo $data['jarak_rumah_ke_sekolah']; ?></td>
                        <td class="text-center"><?php echo $data['file_prestasi']; ?></td>
                        <td class="text-center">
                            <?php
                                if ($rata_rata>=70 && $data['jarak_rumah_ke_sekolah']<=7 && $data['file_prestasi']){
                                    echo "Lolos";
                                }elseif($rata_rata<=70 && $data['jarak_rumah_ke_sekolah']<=7 && $data['file_prestasi']) {
                                    echo "Lolos";
                                }elseif($rata_rata>=70 && $data['jarak_rumah_ke_sekolah']>=7 && $data['file_prestasi']) {
                                    echo "Lolos";
                                }elseif($rata_rata<=70 && $data['jarak_rumah_ke_sekolah']<=7) {
                                    echo "Lolos";
                                }else {
                                    echo "Tidak Lolos";
                                }
                            ?>
                        </td>
                        <td class="text-center">
                            <a href="edit_seleksi.php?kci=<?php echo $data['kode_calon_siswa']; ?>">
                                <input type="button" class="btn btn-success" value="Edit">
                            </a>
                            <a href="delete_seleksi.php?kci=<?php echo $data['kode_calon_siswa']; ?>">
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
                        <th class="text-center" style="width: 350px;">Bahasa Indonesia</th>
                        <th class="text-center" style="width: 350px;">Matematika</th>
                        <th class="text-center" style="width: 350px;">IPA</th>
                        <th class="text-center" style="width: 350px;">Rata-Rata</th>
                        <th class="text-center" style="width: 350px;">Jarak Zonasi (Km)</th>
                        <th class="text-center" style="width: 350px;">Prestasi</th>
                        <th class="text-center" style="width: 350px;">Keterangan</th>
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
    function tambahSeleksiSiswa() {
        location.href = "form_seleksi.php";
    }
</script>

<?php
include "includes/footer.php";
?>