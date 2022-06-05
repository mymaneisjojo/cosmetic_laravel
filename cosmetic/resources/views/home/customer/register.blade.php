<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link rel="stylesheet" href="{{url('resources/css')}}/loginadmin.css">
</head>

<body>

    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{url('public/assets')}}/images/logo.png" class="logo"> </div>
                        <div class="row px-5 justify-content-center mt-4 mb-5 border-line"> <img
                                src="{{url('public/assets')}}/images/introduction/IntroductionOne/img1.png"
                                class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                       
                        <form action="register" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">FirtsName</h6>
                                </label> <input class="mb-4" type="text" name="firtsName"
                                    placeholder="Enter a valid FirtsName">
                                @error('firtsName')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">LastName</h6>
                                </label> <input class="mb-4" type="text" name="lastName"
                                    placeholder="Enter a valid LastName">
                                    @error('lastName')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror
                                </div>

                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label> <input class="mb-4" type="text" name="email"
                                    placeholder="Enter a valid email address">
                                    @error('email')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror </div>

                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Phone</h6>
                                </label> <input class="mb-4" type="text" name="phone" placeholder="Enter a valid phone">
                                @error('phone')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Address</h6>
                                </label> <input class="mb-4" type="text" name="address" placeholder="Enter a valid address">
                                @error('address')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" placeholder="Enter password">
                                @error('password')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror </div>

                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Confirm password</h6>
                                </label> <input type="password" name="confirm_password" placeholder="Confirm password">
                                @error('confirm_password')
                                <small class="help-block text-danger" style="color:red">{{$message}}</small>
                                @enderror
                            </div>

                            <div class="form-check mb-2 mr-sm-2">
                                <input class="form-check-input" name="remember" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Remember me
                                </label>
                            </div>

                            <div class="row mb-3 px-3"> <button type="submit"
                                    class="btn btn-blue text-center">Submit</button> </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights
                        reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span
                            class="fa fa-google-plus mr-4 text-sm"></span> <span
                            class="fa fa-linkedin mr-4 text-sm"></span> <span
                            class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src=" https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>