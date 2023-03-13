@extends('seller_buyer.layouts.master')
@section('content')
	<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
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
											<img src="{{asset('/uplaod/'.$profile->image)}}" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>{{$profile->first_name}}  {{$profile->last_name}}</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">{{$profile->skill}}</h5>
</div>
										</div>
									</div>
									
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="doctor-dashboard.html">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="{{url('buyer_project')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Post Project</span>
												</a>
											</li>
											<li>
												<a href="{{url('show_project')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Check Project</span>
												</a>
											</li>
										
										
										
										
											<li>
												<a href="{{url('show_proposal')}}">
													<i class="fas fa-user-cog"></i>
													<span>Check Proposals</span>
												</a>
											</li>
										
										
											<li>
												<a href="{{url('/user_logout')}}">
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
						<div class="col-md-6">
                   @if(session()->has('review'))
                            <div class="alert alert-success">
                                {{ session()->get('review') }}
                            </div>
                            @endif
            </div>
							<div class="row">
								<div class="col-md-12">
									<div class="card dash-card">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar1">
															<div class="circle-graph1" data-percent="75">
																<img src="assets/img/icon-01.png" class="img-fluid" alt="patient">
															</div>
														</div>
														<?php
                                        use App\Models\Proposal;
										use App\Models\Project;
										use App\Models\User;
										use Illuminate\Support\Facades\Auth;
										$userID = Auth::user()->id;
										$total_project = Proposal::wherebuyer_id($userID)->whereaccept_status('1')->count();
										
						

                                        ?>
														<div class="dash-widget-info">
															<h6>Total Projects</h6>
															<h3>{{$total_project}}</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
                                                
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget dct-border-rht">
														<div class="circle-bar circle-bar2">
															<div class="circle-graph2" data-percent="65">
																<img src="assets/img/icon-02.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<?php
                                   
								   $total_p = Project::whereposted_by($userID)->whereassign_status('1')->count();
								   ?>
														<div class="dash-widget-info">
															<h6>Complete Projects</h6>
															<h3>{{$total_project}}</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
                           
							

						</div>
					</div>

				</div>
			</div>	
			@endsection