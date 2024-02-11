<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Category List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-10 max-auto mt-5">
               <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4>Category List</h4>
                    <a href="{{route('category.create')}}" class="btn btn-sm btn-primary">Add Category</a>
                </div>
                <div class="card-body">
                   <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $key=>$cat)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>
                                        <span class="badge {{($cat->status == 1)? "bg-success" : "bg-warning"}} ">{{($cat->status == 1)? "Active" : "Deactive"}}</span>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{route('category.details',$cat->id)}}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{route('category.edit',$cat->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                   </table>
                </div>
               </div>
            </div>

        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
