@extends('layouts.master')
@section('content')

	<!-- Content -->

	<div class="padding-top-180">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h4>STEL</h4>
					<hr/>
					<form class="active-pink align-right">
						<input class="form-control w-50" type="text" placeholder="Search by Device Name">
					</form>
					<br>
					<table class="table table-striped table-bordered">
						<thead>
						<tr align="center">
							<th>No</th>
							<th>Document Name</th>
							<th>Document Code</th>
							<th>Price</th>
							<th>Version</th>
							<th>Category</th>
						</tr>
						</thead>
						<tbody>
						<tr align="center">
							<td>1</td>
							<td>Spesifikasi Telekomunikasi Perangkat Splice on Connector (SOC)</td>
							<td>STEL L-066-2015 Ver.1.0</td>
							<td>1,500,000</td>
							<td>1</td>
							<td>Lab. Kabel</td>
						</tr>
						<tr align="center">
							<td>2</td>
							<td>Alat & Perangkat Radio yang Digunakan untuk Komunikasi Radio dengan Daya Pancar di atas 10 MWatt dengan alokasi frekuensi sesuai peruntukannya</td>
							<td>Perdirjen No.088/Dirjen/1999</td>
							<td>0</td>
							<td>1.0</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>3</td>
							<td>Antenna</td>
							<td>Perdirjen No.042/Dirjen/2006</td>
							<td>0</td>
							<td>-</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>4</td>
							<td>Bluetooth</td>
							<td>Permen Kominfo No.01 Tahun 2019 II ETSI en 300328</td>
							<td>0</td>
							<td>-</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>5</td>
							<td>Dedicated Short Range Communication (DSRC)</td>
							<td>Permen Kominfo No.01 Tahun 2019 II ETSI en 3003284</td>
							<td>0</td>
							<td>-</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>6</td>
							<td>Electromagnetic compatibility and Radio spectrum Matters (ERM)</td>
							<td>ETSI EN 300 328 v1. 8.10</td>
							<td>0</td>
							<td>-</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>7</td>
							<td>EMC - Emmision Perangkat CPE</td>
							<td>CISPR 32</td>
							<td>0</td>
							<td>1.0</td>
							<td>Lab. CPE</td>
						</tr>
						<tr align="center">
							<td>8</td>
							<td>EMC - Emmision Perangkat Transmisi</td>
							<td>CISPR 32</td>
							<td>0</td>
							<td>1.0</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>9</td>
							<td>EMC - Immunity Perangkat CPE</td>
							<td>CISPR 32</td>
							<td>0</td>
							<td>1.0</td>
							<td>Lab. CPE</td>
						</tr>
						<tr align="center">
							<td>10</td>
							<td>EMC - Emmision Perangkat Transmisi</td>
							<td>CISPR 32</td>
							<td>0</td>
							<td>1.0</td>
							<td>Lab. Transmisi</td>
						</tr>
						</tbody>
					</table>
					<ul class="pagination pull-right mt-3 mb-5">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item active"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item"><a class="page-link" href="#">4</a></li>
						<li class="page-item"><a class="page-link" href="#">5</a></li>
						<li class="page-item"><a class="page-link" href="#">6</a></li>
						<li class="page-item"><a class="page-link" href="#">7</a></li>
						<li class="page-item"><a class="page-link" href="#">8</a></li>
						<li class="page-item"><a class="page-link disabled">...</a></li>
						<li class="page-item"><a class="page-link" href="#">38</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
					</span>
				</div>
			</div>
		</div>
	</div>

@stop
