@extends('layouts.master')
@section('content')

	<!-- Content -->

	<div class="padding-top-180 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md">
					<h4>TESTING PROGRESS</h4>
					<hr/>
					<form class="active-pink align-right">
						<input class="form-control w-50" type="text" placeholder="Search">
					</form>
					<br>
					<table class="table table-striped table-bordered">
						<thead>
						<tr align="center">
							<th>No</th>
							<th>Device Type</th>
							<th>Username</th>
							<th>Register Date</th>
							<th>Device Name</th>
							<th>Status</th>
							<th colspan="2">Action</th>
						</tr>
						</thead>
						<tbody>
						<tr align="center">
							<td>1</td>
							<td>QA (Quality Assurance)</td>
							<td>teamsopurel@gmail.com</td>
							<td>2019-09-11 20:09:35</td>
							<td>Batere Asam Timbal ..</td>
							<td><font color="red">Step 1</font></td>
							<td><a href="#">Edit</a></td>
							<td><a href="#">Detail</a></td>
						</tr>
						<tr align="center">
							<td>2</td>
							<td>QA (Quality Assurance)</td>
							<td>teamsopurel@gmail.com</td>
							<td>2019-09-11 20:09:35</td>
							<td>Batere Asam Timbal ..</td>
							<td><font color="red">Step 2</font></td>
							<td><a href="#">Edit</a></td>
							<td><a href="#">Detail</a></td>
						</tr>
						<tr align="center">
							<td>3</td>
							<td>QA (Quality Assurance)</td>
							<td>teamsopurel@gmail.com</td>
							<td>2019-10-11 20:09:35</td>
							<td>Batere Asam Timbal ..</td>
							<td><font color="red">Step 1</font></td>
							<td><a href="#">Edit</a></td>
							<td><a href="#">Detail</a></td>
						</tr>
						<tr align="center">
							<td>4</td>
							<td>CAL (Calibration)</td>
							<td>teamsopurel@gmail.com</td>
							<td>2019-09-11 20:09:35</td>
							<td>Batere Asam Timbal ..</td>
							<td><font color="red">Step 3</font></td>
							<td><a href="#">Edit</a></td>
							<td><a href="#">Detail</a></td>
						</tr>
						<tr align="center">
							<td>5</td>
							<td>TA (Type Approval)</td>
							<td>teamsopurel@gmail.com</td>
							<td>2019-11-11 20:09:35</td>
							<td>Batere Asam Timbal ..</td>
							<td><font color="red">Step 2</font></td>
							<td><a href="#">Edit</a></td>
							<td><a href="#">Detail</a></td>
						</tr>
						</tbody>
					</table>
					</span>
				</div>
			</div>
		</div>
	</div>

@stop
