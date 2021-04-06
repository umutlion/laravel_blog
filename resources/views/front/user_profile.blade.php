@extends('front.layouts.master')
@section('title', 'Anasayfa')
@section('content')


    <div class="container">
        <h1>Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->


            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                    This is an <strong>.alert</strong>. Use this to show important messages to the user.
                </div>
                <h3>Personal info {{$user->name}}</h3>
                <a href="{{route('myuser.myprofile.posts.index')}}">Makalelerinizi görüntülemek için tıklayınız...</a>

                <form class="form-horizontal" action="{{route('myuser.myprofile.update', [$user->id])}}" method="POST" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="text-center">
                        <img src="{{asset($user->image)}}" class="rounded img-thumbnail" width="300">
                        <br>
                        <br>
                        <input type="file" id="file-input" name="image" class="form-control-file">
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">First name:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="name" value="{{$user->name}}">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Company:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="company" value="{{$user->company}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" name="email" value="{{$user->email}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" name="username" value="{{$user->username}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Password: <br><strong>Şifrelenmiş imgelerle gösterilir.</strong></label>
                        <div class="col-md-8">
                            <input class="form-control" type="password" name="password" value="{{$user->password}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>

                            <button type="submit" class="btn btn-primary" value="Save Changes">
                            SAVE</button>
                            <span></span>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <hr>



@endsection
