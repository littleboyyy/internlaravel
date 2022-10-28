@extends('layout.index')
@section('content')

<div class="content">
    <nav class="navbar navbar-default ">
        <div class="container-fluid">
        <div class="btn navbar-btn">User List</div>
        <div class="nav navbar-nav navbar-right">
            <button class="btn btn-default navbar-btn">Send mail</button>
            <button class="btn btn-primary navbar-btn"><a href="{{route('user.create')}}">+Add user</a></button>
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
            @if(!empty($user))
            @foreach ($user as $us)

                <tr>
                    <td style="width:50px" id="user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg></td>
                    <td>{{ $us['name'] }}</td>
                    <td>{{ $us['email'] }}</td>
                    <td style="width:20vh">
                        <button type="button" class="btn btn-primary btn-sm">Edit</button>
                        <button type="button" class="btn btn-secondary btn-sm">Delete</button>
                    </td>
                </tr>

            @endforeach
        @endif
          </tbody>
        </table>
        </div>
</div>


@endsection