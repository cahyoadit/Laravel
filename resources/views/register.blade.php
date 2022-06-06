<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title></title>
    </head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1><b>Daftar Akun</b></h1>
            </div>
            <div class="card-body">
                <p class="login-box-msg"></p>

                <form action="/registeruser" method="post" enctype="multipart/form-data">
                    @csrf
                    @error('name')
                        {{ $message }}
                    @enderror
                    <div class="input-group mb-3">
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                            placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <div class="text-danger">
                                    <span class="fas fa-solid fa-user"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        {{ $message }}
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                            placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    @error('password')
                        {{ $message }}
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" value="{{ old('password') }}"
                            placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-10">

                        </div>
                        <!-- /.col -->
                        <div class="col-0">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <p class="mb-0 mt-3">
                    <a href="/login" class="text-center">Kembali</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</body>
