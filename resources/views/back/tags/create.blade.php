@extends('back.layouts.master')
@section('title', 'POST PAGE')
@section('content')
<br>
            <!-- DATA TABLE -->
            <div class="table-responsive table-responsive-data2">
                    <div class="card">
                        <div class="card-header">
                            <strong>Post</strong> Oluştur
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('tags.store')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                               {{ csrf_field() }}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Admin:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static">{{Auth::user()->name}}</p>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="name" id="name" class=" form-control-label">Tag Başlığı / Tag Title</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="name" name="name" placeholder="Başlık giriniz..." class="form-control">
                                        <small class="form-text text-muted">Başlık içeriğiniz için çok önemlidir :)</small>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Description</label>
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
@endsection
@section('css')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#editor').summernote(
                {
                    'height':300
                }
            );
        });

        $(document).ready(function (){
            $('input[name="tags"]').tagsinput({
                trimValue: true,
                confirmKets: [44],
                focusClass: ""
            })
        })

   </script>
@endsection
