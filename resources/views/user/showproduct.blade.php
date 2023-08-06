
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
                                                            @foreach ($showproduct as $showproducts )
                                                            <div class="col-md-4 mt-5">
                                                                <div class="card" style="width: 18rem;">
                                                                    <img class="card-img-top" src="..." alt="Card image cap">
                                                                    <div class="card-body">
                                                                      <h5 class="card-title">Card title</h5>
                                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                    </div>
                                                                    <ul class="list-group list-group-flush">
                                                                      <li class="list-group-item">Cras justo odio</li>
                                                                      <li class="list-group-item">Dapibus ac facilisis in</li>
                                                                      <li class="list-group-item">Vestibulum at eros</li>
                                                                    </ul>
                                                                    <div class="card-body">
                                                                      <a href="#" class="card-link">Card link</a>
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

