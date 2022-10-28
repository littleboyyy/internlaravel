@extends ('layout.index')
@section ('content')

<!--MAIN-->
<div class="content">
    <div class="container">
        <nav class="navbar justify-content-between">
            <a class="navbar-brand">Create a User</a>
            <div class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <a href="/user">Back</a></button>
            </div>
        </nav>
        <form action="{{route('store-test')}}" method="post">
            @csrf
            @if (session()->has('message'))
            <div class="alert alert-success text-center">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="form-group">
                <label for="InputName">Name</label>
                <input type="text" class="form-control" id="InputName"  name="name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="{{old('email')}}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6 ">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <label for="password_confirm">Password Confirm</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" value="{{old('password_confirm')}}">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address"  name="address" value="{{old('address')}}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="facebook">Facebook link</label>
                <input type="text" class="form-control" id="facebook"  placeholder="https://example.com" name="facebook" value="{{old('facebook')}}">
            </div>
            <div class="form-group">
                <label for="youtube">Youtube</label>
                <input type="text" class="form-control" id="youtube"  placeholder="https://example.com" name="youtube" value="{{old('youtube')}}">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="add-button">
                <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
            </div>
            
        </form>
    </div>
</div>
<!--main-->

@endsection
