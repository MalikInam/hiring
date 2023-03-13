
@extends('admin.layouts.master')

<!-- Preloader Start -->
@section('content')
   
    <!-- /# sidebar -->

 


    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <?php
                                        use App\Models\User;
										$total_user = User::count();
                                        ?>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Freelancer</div>
                                        <div class="stat-digit">{{$total_user}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                         <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money color-success border-success"></i>
                                    </div>
                                    <?php
                                        use App\Models\Project;
										$total_project = Project::count();
                                        ?>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Projects</div>
                                        <div class="stat-digit">{{$total_project}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
                  
                    
                    <!-- /# row -->
                    
                   
                    <!-- /# row -->

                   <br><br><br><br><br><br><br><br><br><br>


                    
                </section>
            </div>
        </div>
    </div>

    <!-- jquery vendor -->
    @endsection