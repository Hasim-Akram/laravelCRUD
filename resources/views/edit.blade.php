
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
               
                    <form action="/edit/{{$LaraCRUD->id}}" method="post">
                        

                      @csrf
                      @method('patch')

                           <div class="form-group">
                                <label for="Name"  class="">Name</label>
                                <input type="text" name="name" class="form-control"  value="{{$LaraCRUD->name}}">
                            <div class="form-group">
                                    <label for="Email" class="">Email</label>
                                    <input type="email" name="email" class="form-control" id="inputEmail3"   value="{{$LaraCRUD->email}}">
                            </div>
                            <div class="form-group">
                                    <label for="address" class="">Address</label>
                                    <input type="text" name="address" class="form-control" value="{{$LaraCRUD->address}}">
                            </div>
                            <br>
                            
                            <input type="submit" class="btn btn-primary" value="Update">
                    </form>

        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>