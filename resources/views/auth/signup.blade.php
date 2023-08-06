<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form action="{{ url('signupform') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input class="form-control" id="name" type="text" name="name" />
                                                <span id="checkname" style="color: red"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control" id="address" type="text" name="address" />
                                                <span id="checkaddress" style="color: red"></span>

                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input class="form-control" id="city" type="text" name="city" />
                                                <span id="checkphone" style="color: red"></span>

                                            </div>

                                            <div class="form-group">
                                                <label>State</label>
                                                <input class="form-control" id="state" type="text" name="state" />
                                                <span id="checkphone" style="color: red"></span>

                                            </div>

                                            <div class="form-group">
                                                <label for="inputEmail">Email address</label>
                                                <input class="form-control" id="email" type="email" name="email" />
                                                <span id="checkemail" style="color: red"></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" id="password" type="password" name="password"  />
                                                <span id="checkpassword" style="color: red"></span>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                                <button type="submit" class="btn btn-primary" id="signupform" >signup</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url('login') }}">you have already account login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js"integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <script>

        //     $(document).on('click','#signupform',function(e)
        //     {
        //         let name = $('#name').val();
        //         let address =   $('#address').val();
        //         let phone = $('#phone').val();
        //         let email =  $('#email').val();
        //         let password =  $('#password').val();

        //         $('#checkname').html(" ");
        //         $('#checkaddress').html(" ");
        //         $('#checkphone').html(" ");
        //         $('#checkemail').html(" ");
        //         $('#password').html(" ");

        //         if(!name)
        //         {
        //             $('#checkname').html('enter name');
        //             return false;
        //         }

        //         if(!address)
        //         {
        //             $('#checkaddress').html('enter address');
        //             return false;
        //         }
        //         if(!phone)
        //         {
        //             $('#checkphone').html(' enter phone');
        //             return false;
        //         }
        //         if(!email)
        //         {
        //             $('#checkemail').html(' enter email');
        //             return false;
        //         }
        //         if(!password)
        //         {
        //             $('#checkpassword').html('  enter password');
        //             return false;
        //         }

        //         console.log('submit');


        //     })

        // </script>


    </body>
</html>
