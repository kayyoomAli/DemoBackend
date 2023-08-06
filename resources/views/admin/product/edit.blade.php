
@extends('admin.layouts.app');

@section('content');

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h3 class="mt-4">product</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"></li>
                        </ol>


                        <div class="card mb-4">

                            <div class="card-body">
                                <div class="container" style="color: rgb(112, 13, 44);">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="card shadow-lg border-0 rounded-lg ">
                                                <div class="card-header"></div>
                                                <div class="card-body">
                                                    <form action="{{ url('updateproduct') }}" method="post">
                                                        @csrf
                                                        <input class="form-control" id="pro_id" type="hidden" name="pro_id" value="{{$productedit->id }}"  />

                                                        <div class="form-group">
                                                            <label>Name</label>
                                                            <input class="form-control" id="name" type="text" name="name" value="{{$productedit->name }}"  />
                                                            <span id="checkname" style="color: red"></span>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input class="form-control" id="price" type="text" name="price" value="{{$productedit->price }}"  / >
                                                            <span id="checkaddress" style="color: red"></span>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Image</label>
                                                            <input class="form-control" id="image" type="file" name="image" value="{{$productedit->image }}"  / >
                                                            <span id="checkaddress" style="color: red"></span>
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
