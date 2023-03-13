
            @extends('admin.layouts.master')
@section('content')
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
                                    <li class="breadcrumb-item active">Profiles</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                  
                <div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Profiles Lists</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table mb-0">
											<thead>
												<tr>
                                                    <th>

                                                    </th>
                                                    <th></th>
												<th> Name</th>
												<th>Mail</th>
												<th>Type</th>
												
                                                
                                                    
												</tr>
											</thead>
                                            
											<tbody>
                                            @foreach($profile as $pro)
												<tr>
                                                    <td></td>
                                                    <td></td>
												<td>{{$pro->name}}</td>
												<td>{{$pro->email}}</td>
												<td>{{$pro->user_type}}</td>
													
                                                                               
   
												</tr>
                                                @endforeach
											</tbody>
                                           
										</table>
									</div>
								</div>
							</div>
						</div>
						
</div>
                    



@endsection