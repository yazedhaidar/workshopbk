<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

         <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        

        <style type="text/css">
            body {
                background: #c8e1f7;
            }
        </style>
    </head>

<body>
    <div class="container mt-5 p5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <img src="assets/images/bg-register.jpg" alt="" class="img-top">
                        </div>

                        <div class="col-lg-5">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $errors)
                                            <li>{{$errors}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if(Session::has('status'))
                                <div class="alert alert-warning" role="alert">
                                    {{Session::get('status')}}
                                </div>
                            @endif

                            <form action="{{url('login')}}" method="post" >
                                @csrf
                                <h3>Form Login</h3>
                                <hr>
                                <label for="">Email</label>
                                <input type="text" name="email" id="" class="form-control"><br>

                                <label for="">Password</label>
                                <input type="password" name="password" id="" class="form-control">
                                <br>
                                <input type="submit" name="submit" class="btn btn-md btn-primary" value="Login">
                                <a href="register" class="btn btn-warning">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>