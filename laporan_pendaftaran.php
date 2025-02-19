<?php
include "includes/header.php";
include "includes/connection.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Laporan pendaftaran</h1>
            <h1 class="mt-4">Laporan Penfataran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Laporan pendaftaran</li>
                <li class="breadcrumb-item active">Laporan Pendaftaran Siswa Baru</li>
            </ol>
            <div style="width: 800px;margin: 0px auto;">
		        <canvas id="myChart"></canvas>
	        </div>
            <table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">Kode Calon siswa</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Agama</th>
                        <th class="text-center" style="width: 350px;">Jenis Kelamin</th>
                        <th class="text-center" style="width: 350px;">Asal Sekolah</th>
                    </tr>
                </thead>
                <?php
                    $query = mysqli_query($koneksi, "select * from data_calon_siswa");
                    while($data=mysqli_fetch_array($query)) {
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $data['kode_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['nama_lengkap_calon_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['agama_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['jenis_kelamin_siswa']; ?></td>
                        <td class="text-center"><?php echo $data['asal_sekolah']; ?></td>
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

<script src="assets/js/Chart.js"></script>
<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Laki-laki", "Perempuan"],
				datasets: [{
					label: '',
					data: [
					<?php
					$jumlah_teknik = mysqli_query($koneksi,"select * from data_calon_siswa where jenis_kelamin_siswa='L'");
					echo mysqli_num_rows($jumlah_teknik);
					?>,
					<?php
					$jumlah_ekonomi = mysqli_query($koneksi,"select * from data_calon_siswa where jenis_kelamin_siswa='P'");
					echo mysqli_num_rows($jumlah_ekonomi);
					?>

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
</script>

<script>
    function tambahCalonSiswa() {
        location.href = "form_pendaftaran.php";
    }
</script>

<?php
include "includes/footer.php";
?>