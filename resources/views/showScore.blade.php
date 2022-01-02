@extends('headerTeacher')

				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Dashboard-->
								<!--begin::Row-->
								<div class="row">
									<div class="col-lg-4">							
									</div>									
								</div>
								<!--end::Row-->
								<a type="button" class="btn font-weight-bold btn-light-success mr-2" href="/inputScore">Input Score</a>
								<br> </br>	
								<h2 for="table table-dark rounded" class="center"> Score Table</h2>	
								@if ($score->count() > 0)		
									<table class="table table-dark rounded pt-6" style="center">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Name</th>
												<th scope="col">1st Task</th>
												<th scope="col">2nd Task</th>
												<th scope="col">3rd Task</th>
												<th scope="col">4th Task</th>
												<th scope="col">Final Task</th>
												<th scope="col">Final Score</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1 ?>
											@foreach($score as $Score)
											<tr>
												<th scope="row">{{ $no++ }}</th>
												<td>{{$Score->person_id}}													
												</td>
												<td>{{ $Score->week1 }}</td>
												<td>{{ $Score->week2 }}</td>
												<td>{{ $Score->week3 }}</td>
												<td>{{ $Score->week4 }}</td>
												<td>{{ $Score->finaltask }}</td>
												<td>{{ $Score->finalscore }}</td>
												<td>
													<a type="button" class="btn btn-transparent-warning font-weight-bold mr-2" href=""> Edit </a>
													<a type="button" class="btn btn-transparent-danger font-weight-bold mr-2" href=""> Delete </a>
												</td>
											</tr>  
											@endforeach
										</tbody>
									</table>
									@endif
									@extends('footer')									