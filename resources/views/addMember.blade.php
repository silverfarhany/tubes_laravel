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
    <!--begin::Form-->
    <form method="post" action ="/addMember" class="form w-xxl-550px rounded-lg p-20" novalidate="novalidate" id="kt_login_signup_form">
        @csrf
        <!--begin::Title-->
        <div class="pb-13 pt-lg-0 pt-5">
            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Add Person</h3>
            <p class="text-muted font-weight-bold font-size-h4">Please Add Member's details</p>
        </div>
        <!--end::Title-->

        <!--Form dari addMember-->
        <!--begin::Form group 'fullname'-->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6 @error('fullname') is-invalid @enderror" type="text" placeholder="Fullname" name="fullname" autocomplete="off" />
        </div>
        @error('fullname')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <!--end::Form group-->

        <!--begin::Form group 'email'-->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6 @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="off" />
        </div>
        @error('email')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <!--end::Form group-->

        <!--begin::Form group 'startdate'-->
        <div class="form-group">
            <input class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6 @error('startdate') is-invalid @enderror" type="date" placeholder="Start Date" name="startdate" autocomplete="off" />
        </div>
        @error('startdate')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <!--end::Form group-->
        
        <!--begin::Form group-->
        <div class="form-group">
            <select class="form-control form-control-solid h-auto p-6 rounded-lg font-size-h6" type="select" placeholder="Course Program" name="cprogram" autocomplete="off" />
            <option value="1">Member</option>
            <option value="2">Teacher</option>            
            </select>
        </div>
        <!--end::Form group-->        
        <!--begin::Form group-->
        <div class="form-group d-flex flex-wrap pb-lg-0 pb-3">
            <button type="submit" id="kt_login_signup_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>            
        </div>
        <!--end::Form group-->
    </form>

    <!--end::Form-->
@extends('footer')