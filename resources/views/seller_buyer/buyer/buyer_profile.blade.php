@extends('seller_buyer.layouts.master')
@section('content')


        
        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                            </ol>
                        </nav>
                        <h2 class="breadcrumb-title">Profile Settings</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Breadcrumb -->
        
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                    
                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Seller Name</h3>
                                        
                                        <div class="patient-details">
                                            <h5 class="mb-0">position</h5>
                                   
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li>
                                            <a href="doctor-dashboard.html">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                      
                                     
                                        <li class="active">
                                            <a href="doctor-profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Buyer Requests</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="doctor-profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>View Orders</span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="doctor-profile-settings.html">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Profile Sidebar -->
                        
                    </div>
                    <div class="col-md-7 col-lg-8 col-xl-9">
                    
                        <!-- Basic Information -->
                        <form method="post" action="{{url('buyer_profile_upload')}}" enctype="multipart/form-data">
                                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Basic Information</h4>
                                <div class="row form-row">
                              

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Profile Image <span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input type="text" name="first_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input type="text" name="last_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Whatsapp number <span class="text-danger">*</span></label>
                                            <input type="text" name="number" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Location <span class="text-danger">*</span></label>
                                            <input type="text" name="location" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>description</label>
                                            <input type="text" name="description" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control select" name="gender">
                                                <option>Select</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Languages</label>
                                            <select class="form-control select" name="language">
                                                <option>Select</option>
                                                <option>English</option>
                                                <option>Urdu</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Skill</label>
                                            <select class="form-control select" name="skill">
                                                <option>Select</option>
                                                <option>Web</option>
                                                <option>Wordpress</option>
                                            </select>
                                        </div>
                                    </div>
                                 
</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Education</label>
                                            <select class="form-control select" name="education">
                                                <option>Select</option>
                                                <option>Matric</option>
                                                <option>Guraduation</option>
                                                <option>Master</option>
                                                <option>PHD</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Payment Method</label>
                                            <select class="form-control select" name="payment">
                                                <option>Select</option>
                                                <option>Easypasia</option>
                                                <option>Jazzcash</option>
                                              

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label>Date of Birth</label>
                                            <input type="date" class="form-control" name="birth">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section submit-btn-bottom">
                            <button type="submit" class="btn btn-primary submit-btn">Save</button>
                        </div>
                        </div>
</from>
                    
                        
                   
                     
                     
                        
                        
                        
                    </div>
                </div>

            </div>

        </div>		
        
       
    </div>
			@endsection