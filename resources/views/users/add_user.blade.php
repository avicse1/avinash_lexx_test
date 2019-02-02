@extends('layout.header')
@section('section')
    <section id="configuration">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header border-0-bottom">
                        <div class="row mb-2">
                            <div class="col-6">
                                <h2>Add user</h2>
                            </div>
                            
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard">
                            <form class="form form-horizontal col-md-12">
                                <div class="row">
                                    <div class="col-md-7">
                                    <div class="form-style row">
                                        <div class="col-md-12">
                                        <div class="with-spinner">
                                            <input type="text" placeholder="Name" name="" class="decoration form-control">
                                           
                                        </div>
                                        </div>
                                        <div class="col-md-12"><input type="text" list="browsers" placeholder="Email ID" name="" class="decoration form-control input-list">
                                        
                                        </div>
                                        
                                    </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="profile-img">
                                        <a href="#"><img src="images/profile-2.jpg" alt="profile-2" class="img-responsive" style="max-width: 100%"></a>
                                        <div class="browse-img">
                                        <i class="fa fa-pencil"></i>
                                            <input type="file" name="" class="user-profile-icon">
                                        </div>
                                    </div>
                                    <p class="profile-text">*Click on Thumbnail to<br> upload Profile Image</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection