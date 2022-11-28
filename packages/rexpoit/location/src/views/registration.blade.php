<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <section class="registration-form">
      <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto pt-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Registration Form</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register')}}" method="post">
                          @csrf
                            <div class="mb-3">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="name" name="name">
                               @error('name')
                                 <div class="text-danger">{{$message}}</div>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" name="email">
                              @error('email')
                                 <div class="text-danger">{{$message}}</div>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label for="phone" class="form-label">Phone</label>
                              <input type="number" class="form-control" id="phone" name="phone">
                              @error('phone')
                                 <div class="text-danger">{{$message}}</div>
                               @enderror
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" name="password">
                              @error('password')
                                 <div class="text-danger">{{$message}}</div>
                               @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
   </section>
</body>
</html>