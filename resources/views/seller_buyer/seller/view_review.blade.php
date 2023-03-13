@extends('seller_buyer.layouts.master')
@section('content')
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Buyer Reviews</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Reviews</li>
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
									<h4 class="card-title">Reviews Lists</h4>
								</div>
				
								
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
										<?php

use App\Models\User;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
$userID = Auth::user()->id;
$p = Review::whereseller_id($userID)->get();



?>
											<thead>
												<tr>
                                                

												<th>Buyer Review</th>
												
													
                                                
                                                    
												</tr>
											</thead>
                                            
											<tbody>
                                            @foreach($p as $p)
												<tr>
                                                <td>{{$p->review}}</td>
												
												
                                                                               


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