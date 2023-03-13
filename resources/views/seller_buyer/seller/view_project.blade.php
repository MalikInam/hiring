@extends('seller_buyer.layouts.master')
@section('content')
<div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<h3 class="page-title">Buyer Projects</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">Projects</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Projects Lists</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
												<th>Buyer Name</th>
												<th>Buyer Location</th>
													<th>Project Tittle</th>
													<th>Project Description</th>
													<th>Project Price</th>
                                                    <th>Project Date</th>
                                                    <th>Action</th>
												</tr>
											</thead>
                                            
											<tbody>
                                            @foreach($project as $p)
												<tr>
												<td>{{$p->name}}</td>
												<td>{{$p->location}}</td>
													<td>{{$p->title}}</td>
													<td>{{$p->description}}</td>
													<td>{{$p->price}}</td>
                                                    <td>{{$p->date}}</td>
					
                                                   
                                                    <td>   
														
											
														             <a class="btn btn-danger" href="{{url('/send_proposal')}}">Send Proposals</a>
</td>
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