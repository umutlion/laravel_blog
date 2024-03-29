@extends('front.layouts.master')
@section('title', 'Create Post')
@section('content')
    <!-- DATA TABLE -->
    <div class="menu-sidebar__content js-scrollbar1">
        <div class="card">
            <div class="card-header">
                <strong>Post</strong> Oluştur
            </div>
            <div class="card-body card-block">
                <form action="{{route('myuser.myprofile.create.post')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label class=" form-control-label">Yazar:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{Auth::user()->name}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Post Başlığı / Post Title</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="text-input" placeholder="Başlık giriniz..." class="form-control">
                            <small class="form-text text-muted">Başlık içeriğiniz için çok önemlidir :)</small>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="selectLg" class=" form-control-label">Kategori</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="selectLg" id="selectLg" class="form-control-lg form-control">
                                <option value="0">Lütfen seçim yapınız.</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Başlık Görseli</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="image" class="form-control-file" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">İçerik</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea id="editor" name="content"  rows="9" placeholder="Lütfen içerik giriniz..." class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-multiple-input" class=" form-control-label">İçerik Görseli Seçiniz:</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-multiple-input" name="file[]" accept="image/*" multiple="multiple" class="form-control-file">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
        @endsection
        @section('css')
            <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
        @endsection
        @section('js')
            <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
            <script>
                $(document).ready(function() {
                    $('#editor').summernote(
                        {
                            'height':300
                        }
                    );
                });
            </script>
    </div>

@endsection
