@extends('back.layouts.master')
@section('title', 'Kategoriler')
@section('content')
    <br>
    <!-- DATA TABLE -->

    <h3 class="title-5 m-b-35">Kategoriler</h3>
    <div class="table-data__tool">
        <div class="table-data__tool-left"></div>
        <div class="table-data__tool-right">
            <a data-target="#addModal" data-toggle="modal"
               class="au-btn au-btn-icon au-btn--green au-btn--small add-click">
                <i class="zmdi zmdi-plus"></i>Kategori Ekle</a>
            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2"></div>
        </div>
    </div>

    <div class="table-responsive table-responsive-data2">

        <table id="categoryTable" class="table table-data2">
            <thead>
            <tr>
                <th>
                    <label class="au-checkbox">
                        <input type="checkbox">
                        <span class="au-checkmark"></span>
                    </label>
                </th>
                <th>Kategori Adı</th>
                <th>Post Sayısı</th>
                <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ISLEMLER</th>
            </tr>
            </thead>

            @foreach($categories as $category)
                <tbody>
                <tr class="tr-shadow">
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox">
                            <span class="au-checkmark"></span>
                        </label>
                    </td>
                    <td>{{$category->name}}</td>
                    <td class="desc">{{$category->articleCount()}}</td>
                    <td>
                        <div class="table-data-feature">
                            <a category-id="{{$category->id}}" class="item edit-click" data-toggle="tooltip"
                               data-placement="top" title="Edit">
                                <i class="zmdi zmdi-edit"></i>
                            </a>
                            <a category-id="{{$category->id}}" category-name="{{$category->name}}"
                               category-count="{{$category->articleCount()}}" class="item remove-click"
                               data-toggle="tooltip" data-placement="top" title="Delete">
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

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kategori Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('category.update')}}" method="post">
                        @csrf
                        <div class="form-check">
                            <label>Kategori Adı</label>
                            <input id="category" type="text" class="form-control" name="category">
                            <input type="hidden" name="id" id="category_id">
                        </div>
                        <div class="form-check">
                            <label>Kategori Slug</label>
                            <input id="slug" type="text" class="form-control" name="slug">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Değişiklikleri Kaydet</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Kategori Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="addCategoryForm" action="{{route('category.create')}}" method="post">
                        @csrf
                        <div class="form-check">
                            <label>Kategori Adı</label>
                            <input id="category" type="text" class="form-control" name="category">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                            <button type="submit" class="btn btn-primary">Kategori Ekle</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Remove Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
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
                    <form method="post" action="{{route('category.delete')}}">
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

@endsection
@section('js')
    <script>
        $(function () {
            $('.edit-click').click(function () {
                id = $(this)[0].getAttribute('category-id');
                $.ajax({
                    type: 'GET',
                    url: '{{route('category.getdata')}}',
                    data: {id: id},
                    success: function (data) {
                        console.log(data);
                        $('#category').val(data.name);
                        $('#slug').val(data.slug);
                        $('#category_id').val(data.id);
                        $('#editModal').modal();

                    }
                });
            });
        })

        $(function () {
            $('.remove-click').click(function () {
                id = $(this)[0].getAttribute('category-id');
                count = $(this)[0].getAttribute('category-count');
                name = $(this)[0].getAttribute('category-name');
                if (id == 5) {
                    $('#postAlert').html(name + ' kategorisi silinemez. Diğer silinen kategorilere ait gönderiler <strong> Genel </strong> kategorisine eklenecektir ');
                    $('#body').show();
                    $('#deleteButton').show();
                    $('#deleteModal').modal();
                    return;
                }

                $('#deleteModal').show();
                $('#remove_id').val(id);
                $('#postAlert').html(name + ' kategorisine ait post <strong>bulunmamaktadır</strong>. Silmek istediğine emin misin?');
                $('#body').hide();
                if (count > 0) {
                    $('#postAlert').html(name + ' kategorisine ait <strong>' + count + ' adet </strong> post bulunmaktadır. Silmek istediğine emin misin?');
                    $('#body').show();
                }
                $('#deleteModal').modal();
            });
        })

        $(document).on('click', '.create-modal', function () {
            $('#create').modal('show');
            $('.form-horizontal').show();
            $('.modal-title').text('Add Post');
        })


    </script>
@endsection



