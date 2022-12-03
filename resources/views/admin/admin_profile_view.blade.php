@extends('admin.admin_master')
@section('admin')
     <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        
                        <!-- end row -->
        
        
                        <div class="row">
                            <div class="col-lg-4 cont">
                                <div class="card">
                                    <center>
                                    <img class="newAv rounded-circle avatar-xl mt-2" src="{{(!empty($adminData->profile_image))?url('upload/admin_images/'.$adminData->profile_image):url('upload/admin_images/no_image.png')}}" alt="Card image cap">
                                </center>
                                    <div class="card-body">
                                        <h4 class="card-title"> <strong> Name :</strong> {{$adminData->name}}</h4>
                                        <hr>
                                        <h4 class="card-title"> <strong>User Name :</strong>{{$adminData->username}}</h4>
                                        <hr>
                                        <h4 class="card-title"> <strong> Email  :</strong> {{$adminData->email}}</h4>
                                        <hr>
                                        <a href="{{route('edit.profile')}}"><button class="abc btn btn-info btn-rounded waves-effect waves-light">Edit Profile</button></a>
                                       
                                    </div>
                                </div>
                            </div>
                            
        
                            
        
                        </div>
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
@endsection