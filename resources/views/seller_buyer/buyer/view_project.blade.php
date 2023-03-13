@extends('seller_buyer.layouts.master')
@section('content')
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Projects Details</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					@if(session()->has('deleted'))
                            <div class="alert alert-danger">
                                {{ session()->get('deleted') }}
                            </div>
                            @endif
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Projects Lists</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
										<?php

use App\Models\User;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;
$userID = Auth::user()->id;
$p = Project::whereposted_by($userID)->get();
?>
											<thead>
												<tr>
												<th>Project Name</th>
													<th>Project Description</th>
                                                    <th>Project Date</th>
													<th>Project Price</th>
                                                    <th>Action</th>
												</tr>
											</thead>
                                            
											<tbody>
                                            @foreach($p as $p)
												<tr>
												<td>{{$p->title}}</td>
												
													<td>{{$p->description}}</td>
                                                    <td>{{$p->date}}</td>
                                                    <td>{{$p->price}}</td>
                                                                               
</td>     <td>
													@if($p->assign_status==1)
                                            <button type="submit" data-toggle="confirmation"
                                                            class="btn btn-danger ">
                                                           Project Assign</button> 
                                                @else
                                                <button type="submit" data-toggle="confirmation"
                                                            class="btn btn-success ">
                                                            Pending Request</button> 
                                                @endif
												</td>                                        
</td>
<td>  <a class="btn btn-danger" href="{{url('show_review')}}">Send Review</a></td>

<td>  <a class="btn btn-primary" href="{{ url('projects_status',$p->id) }}">Project Status</a></td>
<td>  <a class="btn btn-danger" href="{{url('seller_buyer/buyer/view_project/delete/'.$p->id)}}">Delete Project</a></td>

												</tr>
                                                @endforeach
											</tbody>
                                           
										</table>
									</div>
								</div>
							</div>
						</div>
						
					</div>
					
					
				
				</div>			
			</div>
           
			@endsection