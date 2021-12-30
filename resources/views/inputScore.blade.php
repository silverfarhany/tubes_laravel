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
                                <div class="card card-custom">
                                    <div class="card-header">
                                     <h3 class="card-title">
                                      Input Nilai
                                     </h3>
                                    </div>
                                    <!--begin::Form-->
                                    <form class="form" action="/inputScore" method="post">
                                      @csrf
                                     <div class="card-body">
                                      <div class="form-group form-group-last">
                                        <div class="form-group">
                                          {{ csrf_field() }}
                                            <label>Member's Name</label>
                                            <select class="form-control form-control-solid" name="fullname">
                                              @foreach ($persons as $person)
                                              <option value="{{ $person->id }}">{{ $person->name }}</option>
                                              @endforeach
                                            </select>
                                           </div>                                       
                                      <div class="form-group">
                                       <label>First Task Score</label>
                                       <input type="number" class="form-control form-control-solid" placeholder="Input score" name="1task"/>
                                      </div>   
                                      <div class="form-group">
                                        <label>Second Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score" name="2task"/>
                                       </div>   
                                       <div class="form-group">
                                        <label>Third Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score" name="3task"/>
                                       </div>  
                                       <div class="form-group">
                                        <label>Fourth Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score" name="4task"/>
                                       </div>   
                                       <div class="form-group">
                                        <label>Final Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score" name="finaltask"/>
                                       </div>  
                                       {{-- <div class="form-group">
                                        <label>Final Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score" readonly value="$finalscore"/>
                                       </div>                                       --}}                                    
                                     <div class="card-footer">
                                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                      <button type="reset" class="btn btn-secondary">Cancel</button>
                                     </div>
                                    </form>
                                    <!--end::Form-->
                                   </div>	
                                   @extends('footer')							