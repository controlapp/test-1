<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prueba - Login</title>
    <link rel="stylesheet" type="text/css" href="./font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>

    <div class="m-0 vh-100 row justify-content-center align-items-center" >
        <div class="card col-lg-3 col-md-6 col-sm-9 m-1">
            <div class="col-lg-12 col-md-12  col-sm-12 p-1 text-center">
                <section class="">
                    <form method="POST" action="{{route('test.login')}}">
                        @csrf
                        <h3 class="d-flex justify-content-center">Inicio de sesion</h3>
                        <div class="col-lg-12">
                            <div class="col-md-12 m-2">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{old('username')}}" placeholder="Nombre de usuario" id="username" />
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 m-2">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" id="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <h6>{{ $message }}</h6>
                                    </span>
                                @enderror
                            </div>

                            <div class="m-4">
                                <div class="d-flex justify-content-center" >
                                    <div class="col-lg-5 col-md-6 col-sm-4 col-4 d-flex justify-content-center" >
                                        <input type="submit" class="btn btn-dark btn-md" name="btningresar" value="Ingresar" id="btningresar" >
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>
</html>