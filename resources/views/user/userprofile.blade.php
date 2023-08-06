
@extends('user.layouts.app');

@section('content');

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">Profile</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>


                        <div class="card mb-4">

                            <div class="card-body">
                                <div class="container" style="color: rgb(112, 13, 44);">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-5">
                                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Profile</h3></div>
                                                <div class="card-body">
                                                    <form action="{{ url('update') }} " method="post">
                                                        @csrf
                                                        <input class="form-control" id="user_id" type="hidden" name="user_id" value="{{ $finddata->id }}" />

                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input class="form-control" id="name" type="text" name="name" value="{{ $finddata->name }}" />
                                                            <span id="checkname" style="color: red"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Address</label>
                                                            <input class="form-control" id="address" type="text" name="address" value="{{ $finddata->address }}" / >
                                                            <span id="checkaddress" style="color: red"></span>

                                                        </div>
                                                        <div class="form-group">
                                                            <label>City</label>
                                                            <input class="form-control" id="city" type="text" name="city" value="{{ $finddata->city }}" />
                                                            <span id="checkphone" style="color: red"></span>

                                                        </div>

                                                        <div class="form-group">
                                                            <label>State</label>
                                                            <input class="form-control" id="state" type="text" name="state" value="{{ $finddata->state }}" />
                                                            <span id="checkphone" style="color: red"></span>

                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputEmail">Email address</label>
                                                            <input class="form-control" id="email" type="email" name="email" value="{{ $finddata->email }}" />
                                                            <span id="checkemail" style="color: red"></span>
                                                        </div>


                                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                            <button type="submit" class="btn btn-primary" id="signupform" >Save</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

  @endsection('content');
