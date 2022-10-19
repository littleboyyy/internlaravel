<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bla Bla</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
@include('layout.header')
  <section>
  
@include('layout.sidebar')
  <div class="content">
    <nav class="navbar navbar-default ">
        <div class="container-fluid">
        <div class="btn navbar-btn">User List</div>
        <div class="nav navbar-nav navbar-right">
            <button class="btn btn-default navbar-btn">Send mail</button>
            <button class="btn btn-primary navbar-btn">+Add user</button>
        </div>
        </div>
    </nav>
    <div class="table-responsive">          
        <table class="table">
          <thead>
            <tr>
              <th>Avatar</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            
              @foreach ($user as $key => $item)
              <tr>
                <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-square" viewBox="0 0 16 16">
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                  <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                </svg></td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>  <button class="btn btn-primary">Edit</button><button class="btn btn-danger">Delete</button></td>    
              </tr>    
              @endforeach
              
          </tbody>
        </table>
        </div>
</div>
</section>
@include('layout.footer')
</body>
</html>
