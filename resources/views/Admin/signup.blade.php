@extends('Admin.HeaderFooter')
@section('content')


<!-- Sign Up Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                    </a>
                    <h3>Sign Up</h3>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingText" placeholder="jhondoe">
                    <label for="floatingText">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <a href="">Forgot Password</a>
                </div>
                <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                <p class="text-center mb-0">Already have an Account? <a href="">Sign In</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->


@endsection