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
                                    <li class="breadcrumb-item active">Projects</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                  
                    <!-- /# row -->
                    
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Post Your Project</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                    <form method="post" action="{{url('/buyer_save')}}">
                                                            @csrf
                                            <div class="form-group">
                                                <label>Project Name</label>
                                                <input name="name" type="text" class="form-control" placeholder="Project name">
                                            </div>
                                            <div class="form-group">
                                                <label>Location</label>
                                                <input name="location" type="text" class="form-control" placeholder="Location">
                                            </div>
                                             <div class="form-group">
                                                <label>Duration</label>
                                                <input name="time" type="text" class="form-control" placeholder="Duration">
                                            </div>
                                             <div class="form-group">
                                                <label>Price</label>
                                                <input name="price" type="text" class="form-control" placeholder="Price">
                                            </div>
                                             <div class="form-group">
                                                <label>Project description</label>
                                                <input name="description" type="text" class="form-control" placeholder="description">
                                            </div>
                                           
                                            
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                       
                        <!-- /# column -->
                    </div>



@endsection