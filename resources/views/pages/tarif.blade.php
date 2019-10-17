@extends('layouts.master')
@section('content')

	<!-- Content -->

	<div class="padding-top-180 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h4>TARIF</h4>
					<hr/>
					<form class="active-pink align-right">
						<input class="form-control w-50" type="text" placeholder="Search by Device Name">
					</form>
					<br>
					<table class="table table-striped table-bordered">
						<thead>
						<tr align="center" style="font-size:12px">
							<th>No</th>
							<th>Device Name</th>
							<th>STEL</th>
							<th>Category</th>
							<th>Duration (office day)</th>
							<th>QA Cost</th>
							<th>VT Cost</th>
							<th>TA Cost</th>
						</tr>
						</thead>
						<tbody>
						<tr align="center" style="font-size:12px">
							<td>1</td>
							<td>Broadband Remote Access Server (BRAS)</td>
							<td>STEL D-010-2005 Ver.1.0</td>
							<td>Lab CPE	</td>
							<td>28</td>
							<td>37,000,000</td>
							<td>37,000,000</td>
							<td>0</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>2</td>
							<td>Electromagnetic Compatibility (EMC) - Emmision .</td>
							<td>CISPR 32</td>
							<td>Lab CPE</td>
							<td>7</td>
							<td>0</td>
							<td>0</td>
							<td>12,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>3</td>
							<td>Electromagnetic Compatibility (EMC) - Emmision & Immunity .</td>
							<td>CISPR 32 || CISPR 35 </td>
							<td>Lab CPE</td>
							<td>12</td>
							<td>0</td>
							<td>0</td>
							<td>20,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>4</td>
							<td>Electromagnetic Compatility (EMC) - Immunity .</td>
							<td>CISPR 35</td>
							<td>Lab CPE	</td>
							<td>7</td>
							<td>0</td>
							<td>0</td>
							<td>12,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>5</td>
							<td>Facsimile</td>
							<td>SNI 04-3508-1994</td>
							<td>Lab CPE</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>8,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>6</td>
							<td>Broadband Remote Access Server (BRAS)</td>
							<td>STEL D-010-2005 Ver.1.0</td>
							<td>Lab CPE	</td>
							<td>28</td>
							<td>37,000,000</td>
							<td>37,000,000</td>
							<td>0</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>7</td>
							<td>Electromagnetic Compatibility (EMC) - Emmision .</td>
							<td>CISPR 32</td>
							<td>Lab CPE</td>
							<td>7</td>
							<td>0</td>
							<td>0</td>
							<td>12,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>8</td>
							<td>Electromagnetic Compatibility (EMC) - Emmision & Immunity .</td>
							<td>CISPR 32 || CISPR 35 </td>
							<td>Lab CPE</td>
							<td>12</td>
							<td>0</td>
							<td>0</td>
							<td>20,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>9</td>
							<td>Electromagnetic Compatility (EMC) - Immunity .</td>
							<td>CISPR 35</td>
							<td>Lab CPE	</td>
							<td>7</td>
							<td>0</td>
							<td>0</td>
							<td>12,000,000</td>
						</tr>
						<tr align="center" style="font-size:12px">
							<td>10</td>
							<td>Facsimile</td>
							<td>SNI 04-3508-1994</td>
							<td>Lab CPE</td>
							<td>0</td>
							<td>0</td>
							<td>0</td>
							<td>8,000,000</td>
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
						<li class="page-item"><a class="page-link" href="#">9</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
					</span>
				</div>
			</div>
		</div>
	</div>

@stop
