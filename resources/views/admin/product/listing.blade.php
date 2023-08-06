
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
                                        <div class="col-lg-12">
                                            <div class="card shadow-lg border-0 rounded-lg ">
                                                <div class="card-header">
                                                    <a href="{{ url('register') }}" class="btn btn-primary">Register</a>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table">
                                                        <thead>
                                                          <tr>
                                                            <th scope="col">Id</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Product Name</th>
                                                            <th scope="col">Price</th>
                                                            <th scope="col">Image</th>
                                                            <th scope="col">Edit</th>
                                                            <th scope="col">Delete</th>

                                                          </tr>
                                                        </thead>
                                                        <tbody>

                                                        @foreach($fatchdata as $fatchdatas)
                                                          <tr>
                                                            <th>{{ $fatchdatas->id }}</th>
                                                            <td>{{ $fatchdatas->categorys->name }}</td>
                                                            <td>{{ $fatchdatas->name }}</td>
                                                            <td>{{ $fatchdatas->price }}</td>
                                                            <td> <img height="50" width="50" src="{{ asset('assets/categoryimage/'.$fatchdatas->image) }}" /></td>
                                                            <td>
                                                                <a href="{{ url('productedit/' .$fatchdatas->id) }}" class="btn btn-info">Edit</a>

                                                            </td>
                                                            <td>
                                                                <a href="{{ url('destroy/' .$fatchdatas->id) }}" class="btn btn-danger">Delete</a>

                                                            </td>
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
                    </div>
                </main>

            </div>
        </div>

  @endsection('content');
