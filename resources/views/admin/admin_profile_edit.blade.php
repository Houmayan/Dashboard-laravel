@extends('admin.admin_master')
@section('admin')
     <div class="page-content">
                    <div class="container-fluid     ">

                        <!-- start page title -->
                        
                        <!-- end row -->
        
                    <form action="{{route('store.profile')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Edit Profile</h4>
                                       {{-- name --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input name="name" class="form-control" type="text" value="{{$editData->name}}" id="example-text-input">
                                            </div>
                                            {{-- User mail --}}
                                        </div>
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input name="email" class="form-control" type="text" value="{{$editData->email}}" id="example-text-input">
                                            </div>
                                        </div>
                                        {{-- user name --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input name="username" class="form-control" type="text" value="{{$editData->username}}" id="example-text-input">
                                            </div>
                                        </div>
                                        {{-- Image --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Choose Image</label>
                                            <div class="col-sm-10">
                                                {{-- profile_image is db image field. we will keep the same name in 'name' attribute --}}
                                                <input name="profile_image" class="form-control" type="file" id="example-text-input">
                                            </div>
                                        </div>
                                        {{-- image Show --}}
                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <img class="rounded avatar-lg mt-2" src="{{(!empty($editData->profile_image))?url('upload/admin_images/'.$editData->profile_image):url('upload/admin_images/no_image.png')}}" alt="Card image cap">                                            </div>
                                        </div>
                                        {{-- Submit Button --}}
                                        <div class="row mb-3">
                                            
                                            <div class="col-sm-10">
                                                <input type="submit" value="Profile Update" class="btn btn-info btn-rounded waves-effect waves-light">                                           
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