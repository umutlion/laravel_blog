@extends('back.layouts.master')
@section('title', 'Kullanıcıler')
@section('content')
    <br>
    <!-- DATA TABLE -->

    <h3 class="title-5 m-b-35">Kullanıcıler</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left"></div>
        <div class="table-data__tool-right">
            <a data-target="#addModal" data-toggle="modal"
               class="au-btn au-btn-icon au-btn--green au-btn--small add-click">
                <i class="zmdi zmdi-plus"></i>Kullanıcı Ekle</a>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2"></div>
        </div>
    </div>

    <div class="table-responsive table-responsive-data2">

        <table id="userTable" class="table table-data2">
            <thead>
            <tr>
                <th>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </th>
                <th>User Name</th>
                <th>User Lastname</th>
                <th>User Company</th>
                <th>User username</th>
                <th>User Email</th>
                <th>User Role</th>
                <th>User Avatar</th>
                <th>ISLEMLER</th>
            </tr>
            </thead>

            @foreach($datalist as $user)
                <tbody>
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{$user->name}}</td>
                    @if($user->last_name)
                        <td>{{$user->last_name}}</td>
                    @else
                        <td><strong><b>NULL</b></strong></td>
                    @endif
                    @if($user->company)
                        <td>{{$user->company}}</td>
                    @else
                        <td><strong><b>NULL</b></strong></td>
                    @endif
                    @if($user->username)
                        <td>{{$user->username}}</td>
                    @else
                        <td><strong><b>NULL</b></strong></td>
                    @endif
                    @if($user->email)
                        <td class="desc">{{$user->email}}</td>
                    @else
                        <td><strong><b>NULL</b></strong></td>
                    @endif
                    <td>
                        @foreach($user->roles as $role)
                            {{$role->name}}
                        @endforeach
                        <a href="{{route('admin_user_roles', ['id'=>$user->id])}}" onclick="return !window.open(this.href, '', 'top=50, left=100 width=800, height=600')">
                            <i class="nav-icon fas fa-plus-circle"></i>
                        </a>
                    </td>
                    @if($user->image)
                        <td><img src="{{asset($user->image)}}" height="200" width="200"> </td>
                    @else
                        <td><strong><b>NULL</b></strong></td>
                    @endif
                    <td>
                        <div class="table-data-feature">
                            <a user-id="{{$user->id}}" class="item edit-click" data-toggle="tooltip"
                               data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a user-id="{{$user->id}}" user-name="{{$user->name}}" class="item remove-click" data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr class="spacer"></tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">User Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="adduserForm" action="{{route('users.create')}}" method="post">
                        @csrf
                        <div class="form-check">
                            <label>Kullanıcı Adı</label>
                            <input id="user" type="text" class="form-control" name="name">
                        </div>
                        <div class="form-check">
                            <label>Kullanıcı Email</label>
                            <input id="email" type="text" class="form-control" name="email">
                        </div>
                        <div class="form-check">
                            <label>Kullanıcı Parola</label>
                            <input id="user" type="text" class="form-control" name="password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Kullanıcı Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endsection
@section('js')
    <script>
        $(function () {
            $('.edit-click').click(function () {
                id = $(this)[0].getAttribute('user-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('users.getdata')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#user').val(data.name);
                        $('#email').val(data.email);
                        $('#user_id').val(data.id);
                        $('#editModal').modal();

                    }
                });
            });
        })

        $(function () {
            $('.remove-click').click(function () {
                id = $(this)[0].getAttribute('user-id');
                name = $(this)[0].getAttribute('user-name');
                $('#deleteModal').show();
                $('#remove_id').val(id);
                $('#postAlert').html(name+ 'kullanıcısını silmek istediğine emin misin?');
                $('#body').hide();
                $('#deleteModal').modal();


                $('#deleteModal').show();
                $('#remove_id').val(id);
                $('#postAlert').html(name + ' Kullanıcısine ait post <strong>bulunmamaktadır</strong>. Silmek istediğine emin misin?');
                $('#body').hide();
                if (count > 0) {
                    $('#postAlert').html(name + ' Kullanıcısine ait <strong>' + count + ' adet </strong> post bulunmaktadır. Silmek istediğine emin misin?');
                    $('#body').show();
                }
                $('#deleteModal').modal();
            });
        })

        $(document).on('click', '.create-modal', function () {
            $('#create').modal('show');
            $('.form-horizontal').show();
            $('.modal-title').text('Add User');
        })


    </script>
@endsection



