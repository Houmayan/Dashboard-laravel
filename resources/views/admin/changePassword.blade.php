@extends('admin.admin_master')
@section('admin')
     <div class="page-content">
                    <div class="container-fluid">

                       @if (count($errors))
                           
                               <p class="alert alert-danger alert-dismissable fade show">Password didn't match!</p>
                        
                       @endif
        
                    <form action="{{route('update.password')}}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Change Password</h4>
                                       {{-- name --}}
                                        <div class="row mb-3 pt-5">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                                            <div class="col-sm-10">
                                                <input name="oldpassword" class="form-control" type="password"  id="oldpassword">
                                            </div>
                                            {{-- User mail --}}
                                        </div>
                                        {{-- END --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                                            <div class="col-sm-10">
                                                <input name="newpassword" class="form-control" type="password"  id="newpassword">
                                            </div>
                                            {{-- User mail --}}
                                        </div>
                                        {{-- END --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input name="confirmpassword" class="form-control" type="password"  id="confirmpassword">
                                            </div>
                                            {{-- User mail --}}
                                        </div>
                                        {{-- END --}}
                                       
                                        {{-- Submit Button --}}
                                        <div class="row mb-3">
                                            
                                            <div class="col-sm-10">
                                                <input type="submit" value="Change Password" class="btn btn-info btn-rounded waves-effect waves-light">                                           
                                             </div>
                                        </div>
                                        
                                       
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </form>
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
@endsection