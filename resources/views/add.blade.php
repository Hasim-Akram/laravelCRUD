
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
          <br>
          <br>
          <br>
          <br>
    <div class="container">

        <div class="row">
                <div>
                    <h3>Laravel CRUD Operation<h3>
                </div>
                <br>
                <br>
                <div class="add">
                    <a href="{{url('/')}}" class="btn btn-primary my-3">show Data</a>

                </div>

                <!-- @if($errors->any())
             
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>    
                   
                  </div>
                            
                @endif -->
               
                    <form action="{{ url('/store')}}" method="post">
                        

                      @csrf

                           <div class="form-group">
                                <label for="Name"  class="">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                @error('name')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                             
                            <div class="form-group">
                                    <label for="Email" class="">Email</label>
                                    <input type="text" name="email" class="form-control" id="inputEmail3"  placeholder="email">
                                @error('email')
                                  <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                    <label for="address" class="">Address</label>
                                    <input type="text" name="address" class="form-control"  placeholder="address">
                                    @error('address')
                                       <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <br>
                            
                            <input type="submit" class="btn btn-primary" value="submit">
                    </form>

        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>