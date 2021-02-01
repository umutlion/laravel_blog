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
                    <h3>Tüm Yorumlarım</h3>
                    <!-- Main content -->
                    <hr>
                    <section class="content">
                        <div>
                            <div class="tab-content">
                                <div class="table-responsive table-responsive-data2">
                                    <table id="myTable1" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Yorum</th>
                                            <th>Makale</th>
                                            <th>Cevaplanan Yorum (varsa)</th>
                                            <th>İşlemler</th>
                                        </tr>
                                        </thead>
                                        @foreach($comments as $com)
                                            <tbody>
                                            <tr class="tr-shadow">
                                                <td>{{$com->comment}}</td>
                                                <td>{{$com->commentable->title}}</td>
                                                <td>{{$com->parent_id}}</td>
                                                <td> <div class="table-data-feature">
                                                        <a com-id="{{$com->id}}" class="item remove-click" data-toggle="tooltip" data-placement="top" title="Delete">
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
                    </section>
                    <!-- /.content -->
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

