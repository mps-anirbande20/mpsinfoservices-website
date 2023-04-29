<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>



        <!-- Bootstrap CSS -->

        <link rel="stylesheet" href="{{asset('admins/assets/css/bootstrap.min.css')}}">

        

        <!-- Fontawesome CSS -->

        <link rel="stylesheet" href="{{asset('admins/assets/css/font-awesome.min.css')}}">

        

        <!-- Main CSS -->

        <link rel="stylesheet" href="{{asset('admins/assets/css/style.css')}}">

    </head>



    <body class="account-page">

    

        <!-- Main Wrapper -->

        <div class="main-wrapper">

            <div class="account-content">

                <!--a href="job-list.html" class="btn btn-primary apply-btn">Apply Job</a-->

                <div class="container">

                

                    <!-- Account Logo -->

                    <div class="account-logo">

                        <a href="index.html"><img src="{{asset('admins/assets/img/logo2.png')}}" alt="Dreamguy's Technologies"></a>

                    </div>

                    <!-- /Account Logo -->

                    

                    <div class="account-box">

                        <div class="account-wrapper">

                            <h3 class="account-title">Login</h3>

                            <p class="account-subtitle">Access to our dashboard</p>

                            

                            <!-- Account Form -->

                            <form method="post" action="">

                                <div class="form-group">

                                    <label>Email</label>

                                    <input class="form-control" type="email" required name="email">

                                </div>

                                <div class="form-group">

                                    <div class="row">

                                        <div class="col">

                                            <label>Password</label>

                                        </div>

                                        <div class="col-auto">


                                        </div>

                                    </div>

                                    <input class="form-control" type="password" required name="password">

                                </div>@csrf

                                <div class="form-group text-center">

                                    <button class="btn btn-primary account-btn" type="submit">Login</button>

                                </div>

                                <div class="account-footer">


                                </div>

                            </form>

                            <!-- /Account Form -->

                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- /Main Wrapper -->

        

        <!-- jQuery -->

        <script src="{{asset('admins/assets/js/jquery-3.2.1.min.js')}}"></script>

        

        <!-- Bootstrap Core JS -->

        <script src="{{asset('admins/assets/js/popper.min.js')}}"></script>

        <script src="{{asset('admins/assets/js/bootstrap.min.js')}}"></script>

        

        <!-- Custom JS -->

        <script src="{{asset('admins/assets/js/app.js')}}"></script>

        

    </body>

</html>