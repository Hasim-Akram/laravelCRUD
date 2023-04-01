<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <br>
          <br><br>
          <br>
    <div class="container">

        <div class="row">
          <div>
            <h3>Laravel CRUD Operation<h3>
          </div>
          <br>
          <br>
          <div class="add">
            <a href="{{url('/add')}}" class="btn btn-primary my-3">ADD Data</a>

          </div>
          
          <table class="table table-primary">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">address</th>
                    <th scope="col">Created_At</th>
                    <th scope="col">Updated_At</th>
                    <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                  @foreach($list as $lists)
                    <tr>
                    
                    <td>{{$lists->id}}</td>
                    <td>{{$lists->name}}</td>
                    <td>{{$lists->email}}</td>
                    <td>{{$lists->address}}</td>
                    <td>{{$lists->created_at->diffForHumans()}}</td>
                    <td>{{$lists->updated_at->diffForHumans()}}</td>
                    <td><a href="/edit/{{$lists->id}}" class="btn btn-success">Edit</a>|<a href="/delete/{{$lists->id}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <!-- <form action="/delete/{{$lists->id}}" mehtod="post">
                      @csrf
                      @method('delete')
                    
                       <button type="submit" class="btn btn-danger">Delete</button>

                    </form> -->
                    
                    
                    @endforeach
                </tbody>
            </table>
            

        </div>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>