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
                                    <form class="form">
                                     <div class="card-body">
                                      <div class="form-group form-group-last">
                                        <div class="form-group">
                                            <label>Member's Name</label>
                                            <select class="form-control form-control-solid">
                                             <option>1</option>
                                             <option>2</option>
                                             <option>3</option>
                                             <option>4</option>
                                             <option>5</option>
                                            </select>
                                           </div>
                                      <div class="form-group">
                                       <label>First Task Score</label>
                                       <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                      </div>   
                                      <div class="form-group">
                                        <label>Second Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                       </div>   
                                       <div class="form-group">
                                        <label>Third Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                       </div>  
                                       <div class="form-group">
                                        <label>Fourth Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                       </div>   
                                       <div class="form-group">
                                        <label>Final Task Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                       </div>  
                                       <div class="form-group">
                                        <label>Final Score</label>
                                        <input type="number" class="form-control form-control-solid" placeholder="Input score"/>
                                       </div>                                      
                                      <div class="form-group">
                                       <label for="exampleTextarea">Message for your member</label>
                                       <textarea class="form-control form-control-solid" rows="3"></textarea>
                                      </div>
                                     </div>
                                     <div class="card-footer">
                                      <button type="reset" class="btn btn-primary mr-2">Submit</button>
                                      <button type="reset" class="btn btn-secondary">Cancel</button>
                                     </div>
                                    </form>
                                    <!--end::Form-->
                                   </div>	
                                   @extends('footer')							