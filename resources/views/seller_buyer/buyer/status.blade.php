@extends('seller_buyer.layouts.master')
@section('content')

<div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
									<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Request Staus</h5>
                                           
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                            
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>chanage status</h5>
                                                        <div class="card-header-right"><i
                                                            class="icofont icofont-spinner-alt-5"></i></div>

                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                          
                                                            <form method="post" action="{{url('/update_status')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$booking->id}}">

                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Project Status</label>
                                                                                <div class="col-sm-6">
                                                                                <select name="accept_status" class="form-control" id="">
                                                                                    <option >Select</option>
                                                                                    <option value="1" <?php if($booking->accept_status==1) echo 'selected'; ?>>Assign</option>
                                                                                    <option value="0" <?php if($booking->accept_status==0) echo 'selected'; ?>>Pennding</option>
                                                                                
                                                                                </select>
                                                                                </div>
                                                                            </div>
                                                                           <button type="submit" class="btn btn-info">Save</button>
                                                                        </form>
                                                                      
                                                                    </div>
                                                                </div>
                                                                <!-- Basic Form Inputs card end -->
                                                                <!-- Input Grid card start -->
                                                              
                                                                <!-- Main-body end -->
                                                                <div id="styleSelector">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
			@endsection