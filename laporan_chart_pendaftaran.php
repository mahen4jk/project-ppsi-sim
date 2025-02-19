
	<?php
	include "includes/header.php";
	include 'includes/connection.php';
	?>

<div id= "layoutSidenav_content">
<main> 
<div class="container-fluid px-4">
<h1 class="mt-4">Laporan Chart Pendaftaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Home</li>
            </ol>
            <div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>
	<table style="padding-top: 35px;" class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center" style="width: 150px;">No</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Tempat lahir</th>
                        <th class="text-center" style="width: 350px;">Asal sekolah</th>
                    </tr>
                </thead>
                <?php
                    $no = 1;
					$data = mysqli_query($koneksi,"select * from data_siswa");
					while($d=mysqli_fetch_array($data)){
                ?>
                <tbody>
                    <tr>
                        <td class="text-center"><?php echo $no++; ?></td>
                        <td class="text-center"><?php echo $d['nm_siswa']; ?></td>
                        <td class="text-center"><?php echo $d['tp_lahir_siswa']; ?></td>
                        <td class="text-center"><?php echo $d['asal_sekolah']; ?></td>
                    </tr>
                </tbody>
                <?php } ?>
                <tfoot>
                    <tr>
					<th class="text-center" style="width: 150px;">No</th>
                        <th class="text-center" style="width: 350px;">Nama Lengkap</th>
                        <th class="text-center" style="width: 350px;">Tempat lahir</th>
                        <th class="text-center" style="width: 350px;">Asal sekolah</th>
                    </tr>
                </tfoot>
            </table>
</div>
</main>
</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.js"></script>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["SD Negeri 5 Babat", "SD Negeri 7 Babat"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_teknik = mysqli_query($koneksi,"select * from data_siswa where asal_sekolah='SD Negeri 5 Babat'");
					echo mysqli_num_rows($jumlah_teknik);
					?>, 
					<?php 
					$jumlah_ekonomi = mysqli_query($koneksi,"select * from data_siswa where asal_sekolah='SD Negeri 7 Babat'");
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
	<?php
include "includes/footer.php";
?>
</body>
</html>