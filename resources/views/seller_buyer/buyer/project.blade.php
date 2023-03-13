@extends('seller_buyer.layouts.master')
@section('content')


        
    
        <!-- /Breadcrumb -->
        
        <!-- Page Content -->
        <div class="content">
        
                    <div class="col-md-7 col-lg-8 col-xl-9">
                    
                        <!-- Basic Information -->
                        <form method="post" action="{{url('post_project')}}">
                                        @csrf
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Post Project</h4>
                                
                                <div class="row form-row">
                              
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>location <span class="text-danger">*</span></label>
                                            <input type="text" name="location" class="form-control" required>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>title <span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>description	 <span class="text-danger">*</span></label>
                                            <input type="text" name="description" class="form-control"  required>
                                        </div>
                                    </div>
                                 
                             
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="text" name="price" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label>Date</label>
                                            <input type="date" class="form-control" name="date"  required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="assign_status" value="0">

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