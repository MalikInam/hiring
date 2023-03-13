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
									<li class="breadcrumb-item"></li>
									<li class="breadcrumb-item active">Proposal</li>
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
												<th>Seller Name</th>
												<th>Seller Location</th>
													<th>Project Description</th>
                                                    <th>Project Date</th>
													<th>Project Price</th>
                                                    <th>Action</th>
												</tr>
											</thead>
                                            
											<tbody>
                                            @foreach($proposal as $p)
												<tr>
												<td>{{$p->name}}</td>
												<td>{{$p->location}}</td>
													<td>{{$p->description}}</td>
                                                    <td>{{$p->date}}</td>
                                                    <td>{{$p->price}}</td>
                                                                               
</td>     <td>
													@if($p->accept_status==0)
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
<td>  <a class="btn btn-primary" href="{{ url('project_status',$p->id) }}">Project Status</a></td>
<td>  <a class="btn btn-danger" href="{{ url('project_status',$p->id) }}">Cancel Request</a></td>

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