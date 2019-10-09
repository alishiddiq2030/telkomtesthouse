@extends('layouts.master')
@section('content')

	<!-- Content -->

	<div class="padding-top-180 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h4>STSEL</h4>
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
							<td>Spesifikasi Telekomunikasi Diesel Genset (Stationer) Kapasitas >1000 s.d 2500 KVA</td>
							<td>S-TSEL E-005-2011 Ver.1.0</td>
							<td>1,500,000</td>
							<td>1.0</td>
							<td>Lab. Energi</td>
						</tr>
						<tr align="center">
							<td>2</td>
							<td>Kabel Koaksial RF (Kabel Feeder)</td>
							<td>S-TSEL E-005-2011 Ver.1.0</td>
							<td>1,500,000</td>
							<td>1.0</td>
							<td>Lab. Kabel</td>
						</tr>
						<tr align="center">
							<td>3</td>
							<td>Free Space Optic</td>
							<td>S-TSEL-B-003-2013</td>
							<td>1,500,000</td>
							<td>1.0</td>
							<td>Lab. Transmisi</td>
						</tr>
						<tr align="center">
							<td>4</td>
							<td>Spesifikasi Telekomunikasi Optical Cord Bundle</td>
							<td>STEL L-074-2019 Ver.1.2</td>
							<td>1,500,000</td>
							<td>1</td>
							<td>Lab. Kabel</td>
						</tr>
						<tr align="center">
							<td>5</td>
							<td>Kabel Serat Optik Hybrid</td>
							<td>S-TSEL F-016-2015 Ver.1.0</td>
							<td>1,500,000</td>
							<td>1.0</td>
							<td>Lab. Kabel</td>
						</tr>
						<tr align="center">
							<td>6</td>
							<td>Diesel Genset (Stationer) Kapasitas 1000 s.d. 2500 KVA</td>
							<td>ES-TSEL E-005-2012 Ver.1.0</td>
							<td>1,500,000</td>
							<td>1.0</td>
							<td>Lab. Energi</td>
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
