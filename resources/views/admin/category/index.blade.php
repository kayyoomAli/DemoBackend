
@extends('admin.layouts.app');

@section('content');

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h3 class="mt-4">Category</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"></li>
            </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="container" style="color: rgb(112, 13, 44);">
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="card shadow-lg border-0 rounded-lg ">
                                        <div class="card-header" >
                                            <button type="button" class="btn btn-primary" id="openform">Register</button>
                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                    <th scope="col">Id</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

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
            </div>
        </main>
    </div>
</div>


 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="container" style="color: rgb(112, 13, 44);">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card shadow-lg border-0 rounded-lg ">
                            <div class="card-header"></div>
                            <div class="card-body">
                                <form action=""  method="post" id="myform">
                                    <input class="form-control" id="cat_id" type="hidden" name="cat_id"  />

                                    <div class="form-group">
                                        <label>Category Name</label>
                                        <input class="form-control" id="name" type="text" name="name"  />
                                        <span id="checkname" style="color: red"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input class="form-control" id="image" type="file" name="image"  />
                                        <span id="checkname" style="color: red"></span>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="saveform">Save</button>
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
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script>

    $(document).on('click', '#openform' , function()
    {
        $('#myform')[0].reset();
        $('#exampleModal').modal('show');
    })

    $(document).on('click', '#saveform' , function(e)
    {
        let id  = $('#cat_id').val();



        let insertcat = {

            id:id,
            name:$('#name').val(),
            // image:$('#image').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if(id=="")
         {
            url = 'insert';
         }
         else
         {
            url = 'updatecat';
         }

        $.ajax({

            type : 'POST',
            url : url,
            dataType : 'json',
            data:insertcat,
            success : function(response)
            {
                // console.log(response);
                $('#exampleModal').modal('hide');
                fetch();
            }
        })
    });

    $(document).ready(function()
    {
        fetch();
    })

    function fetch()
    {
        $.ajax({

            type: "GET",
            url:  "{{ url('fetch') }}",
            dataType: "json",
            success: function(response)
            {
                $('tbody').html("");
                    $.each(response.category, function (key, item) {
                        $('tbody').append('<tr>\
                            <td>' + item.id + '</td>\
                            <td>' + item.name + '</td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-primary editbtn ">Edit</button></td>\
                            <td><button type="button" value="' + item.id + '" class="btn btn-danger deletebtn ">Delete</button></td>\
                        \</tr>');
                    });
            }

        });
    }

    $(document).on('click','.editbtn',function()
    {

        $('#myform')[0].reset();
        $('#exampleModal').modal('show');
        let cats_id = $(this).val();


        $.ajax({

            type:'get',
            url: 'edit/'+cats_id,
            dataType:'json',
            success: function(response)
            {
                $('#name').val(response.editdata.name);
                $('#cat_id').val(cats_id);


            }
        })




    })







  </script>


  @endsection('content');
