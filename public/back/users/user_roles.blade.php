<link href="{{asset('back/')}}/css/theme.css" rel="stylesheet" media="all">
<!-- Bootstrap CSS-->
<link href="{{asset('back/')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<!-- Vendor CSS-->

<div class="card-body">
    <table id="example1" class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <td>{{$data->id}}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{$data->name}}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{$data->email}}</td>
        </tr>
        <tr>
            <th>Role</th>
            <td>
                <table>
                    @foreach($data->roles as $row)
                        <tr>
                            <td>{{$row->name}}</td>
                            <td>
                                <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id])}}"><i class="fas fa-trash"></i>SİL</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        <tr>
            <th>Add Role</th>
            <td>
                <form role="form" action="{{route('admin_user_role_add', ['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <select name="roleid">
                        @foreach($datalist as $rs)
                            <option value="{{$rs->id}}">{{$rs->name}}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-primary">Add Role</button>
                </form>
            </td>
        </tr>
    </table>
</div>
