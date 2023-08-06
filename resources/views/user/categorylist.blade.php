
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
                                        <div class="col-lg-15">
                                            <div class="card shadow-lg border-0 rounded-lg ">
                                                <div class="card-body">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            @foreach ($clothcategory as $clothcategorys )
                                                            <div class="col-md-4 mt-5">
                                                                <div class="card" style="width: 18rem;">
                                                                    <img class="card-img-top" src="..." alt="Card image cap">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">{{ $clothcategorys->name }}</h5>
                                                                      <a href="{{ url('showproduct/'.$clothcategorys->id) }}" class="btn btn-primary">Go somewhere</a>
                                                                    </div>
                                                                  </div>
                                                            </div>
                                                            @endforeach

                                                        </div>

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

