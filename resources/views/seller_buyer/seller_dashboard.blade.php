@extends('seller_buyer.layouts.master')
@section('content')

	<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('seller_dashboard')}}">Home</a></li>
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
											<img src="{{asset('/uplaod/'.$profile->image)}} " alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3>{{$profile->first_name}}  {{$profile->last_name}}</h3>
											
											<div class="patient-details">
												<h5 class="mb-0">{{$profile->skill}}</h5>
</div>	<h5 class="mb-0">Level 1</h5>
										</div>
									</div>
									
								</div>
								<div class="col-md-12">
											<div>
											
											<label >Response Rate 100%</label>
												<div class="progress progress-md">
													
													<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<label >Delivered On Time  100%</label>
												<div class="progress progress-md">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<label >Order Completion  100%</label>
												<div class="progress progress-md">
													<div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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
												<a href="{{url('view_project')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Buyer Request</span>
												</a>
											</li>
											<li>
												<a href="{{url('show_reviews')}}">
													<i class="fas fa-calendar-check"></i>
													<span>Buyer Review</span>
												</a>
											</li>
										
										
										
										
											<li>
												<a href="{{url('view_profile')}}">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
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
                   @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
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
										use App\Models\User;
										use Illuminate\Support\Facades\Auth;
										$userID = Auth::user()->id;
										$total_project = Proposal::whereuser_id($userID)->whereaccept_status('1')->count();
										
						

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
										$total_project = Proposal::whereuser_id($userID)->whereaccept_status('1')->count();
                                        ?>
														<div class="dash-widget-info">
															<h6>Complete Projects</h6>
															<h3>{{$total_project}}</h3>
															<p class="text-muted">Till Today</p>
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<?php
                                       										

										$total_earning = Proposal::whereuser_id($userID)->whereaccept_status('1')->sum('price')
                                        ?>
														<div class="dash-widget-info">
															<h6>Earning</h6>
															<h3>{{$total_earning}}</h3>
															<p class="text-muted"></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
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
														<div class="dash-widget-info">
															<h6>Response Rate</h6>
															<h3>100%</h3>
															
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
														<div class="dash-widget-info">
															<h6>Delivered On Time</h6>
															<h3>100%</h3>
															
														</div>
													</div>
												</div>
												
												<div class="col-md-12 col-lg-4">
													<div class="dash-widget">
														<div class="circle-bar circle-bar3">
															<div class="circle-graph3" data-percent="50">
																<img src="assets/img/icon-03.png" class="img-fluid" alt="Patient">
															</div>
														</div>
														<div class="dash-widget-info">
															<h6>Order Completion</h6>
															<h3>100%</h3>
															<p class="text-muted"></p>
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