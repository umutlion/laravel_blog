@extends('front.layouts.master')
@section('title', 'Create Post')
@section('content')
<div class="container">
    <div class="row">
        <div id="aside" class="col-md-3">
            @include('front.posts.menu')
        </div>
        <div class="col-md-9">
            <div class="content-wrapper">

                <!-- Main content -->
                <hr>
                <<section class="content">
                    <div>
                        <div class="tab-content">
                            <div class="table-responsive table-responsive-data2">
                                <table id="myTable1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Makale Başlığı</th>
                                        <th>Görsel</th>
                                        <th>Kategori</th>
                                        <th>Oluşturulma Tarihi.</th>
                                        <th>Hit</th>
                                        <th>Status</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>
                                    @foreach($posts as $post)
                                        <tbody>
                                        <tr class="tr-shadow">
                                            <td>{{$post->title}}</td>
                                            <td>
                                                <img src="{{asset($post->image)}}" width="400" height="400">
                                            </td>
                                            <td>{{$post->getCategory->name}}</td>
                                            <td>{{$post->created_at->diffForHumans()}}</td>
                                            <td>{{$post->hit}}</td>
                                            <td>{{$post->status}}</td>
                                            <td> <div class="table-data-feature">
                                                    <a href= "{{route('myuser.myprofile.image.post', ['post_id'=>$post->id])}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit Gallery">
                                                        <i class="zmdi zmdi-folder"></i>
                                                    </a>
                                                    <a href= "#" class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </a>
                                                    <a href= "{{route('myuser.myprofile.edit.post', $post->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    <a post-id="{{$post->id}}" post-title="{{$post->title}}" class="item remove-click" data-toggle="tooltip" data-placement="top" title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                </div></td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </section>>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Kategori Sil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="postAlert">

                </div>
            </div>
            <div class="modal-footer">
                <form method="post" action="{{route('myuser.myprofile.delete.post', $post->id)}}">
                    @csrf
                    <input type="hidden" name="id" id="remove_id">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button id="deleteButton" type="submit" class="btn btn-primary">Kategori Sil</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    <script>
        $(function() {
            $('.remove-click').click(function (){
                id = $(this)[0].getAttribute('post-id');
                name = $(this)[0].getAttribute('post-title');
                $('#deleteModal').show();
                $('#remove_id').val(id);
                $('#postAlert').html(name+ 'gönderisini silmek istediğine emin misin?');
                $('#body').hide();
                $('#deleteModal').modal();
            });
        })

    </script>
@endsection

