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
								<a type="button" class="btn font-weight-bold btn-light-success mr-2" href="/addMember">Add Person</a>
								<br></br>
								
								<h2 for="table table-dark rounded" class="center"> Data Person</h2>	
								@if ($person->count() > 0)		
									<table class="table table-dark rounded pt-6" style="center">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">Name</th>
												<th scope="col">Roll</th>
												<th scope="col">Status</th>
												<th scope="col">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php $no = 1 ?>
											@foreach($person as $Person)
											<tr>
												<th scope="row">{{ $no++ }}</th>
												<td>{{$Person->name}}</td>
												<td>										
													@if( $Person->roll == 1)
													Member														
													@else
													Teacher																								
													@endif 												
												</td>
												<td>
													<span class="label label-inline label-light-primary font-weight-bold">
														@if($Person->status == 1) 
															Active
														@elseif($Person->status == 2)
															Graduate
														@else
															Discontinues
														@endif
													</span>
												</td>
												<td>
													<a type="button" class="btn btn-transparent-warning font-weight-bold mr-2" href="editPerson/{{ $Person->id }}"> Edit </a>
													<a type="button" class="btn btn-transparent-danger font-weight-bold mr-2" href="deletePerson/{{ $Person->id }}"> Delete </a>
												</td>
											</tr>  
											@endforeach
										</tbody>
									</table>
									@endif
									@extends('footer')									