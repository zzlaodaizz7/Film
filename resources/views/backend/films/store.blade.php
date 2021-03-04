@extends('layouts.app')
@section('style')
    <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>
@endsection
@section('css')
    .ck-editor__editable_inline {
        min-height: 200px;
    }
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Phim
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('films.store')}}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tên phim</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Tên phim">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nation">Thể loại</label>
                                    <select name="categorys_id" class="form-control">
                                        <option selected>Choose...</option>
                                            @foreach($category as $x)
                                                <option value="{{$x->id}}">{{$x->name}}</option>
                                            @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nation">Quốc gia</label>
                                    <select name="nations_id" class="form-control">
                                        <option selected>Choose...</option>
                                            @foreach($nation as $x)
                                                <option value="{{$x->id}}">{{$x->name}}</option>
                                            @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="text" class="form-control" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" name="link" placeholder="Link">
                            </div>
                            <div class="form-group">
                                <label for="trailer">Trailer</label>
                                <input type="text" class="form-control" id="trailer" name="trailer" placeholder="Trailer">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="episodes">Số tập</label>
                                    <input type="text" class="form-control" name="episodes" id="episodes" placeholder="Số tập">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="year">Năm sản xuất</label>
                                    <input type="text" class="form-control" name="year" id="year" placeholder="Năm sản xuất">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="episodes">Trạng thái</label>
                                    <input type="text" class="form-control" name="episodes" id="episodes" placeholder="Trạng thái">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="language">Ngôn ngữ</label>
                                    <input type="text" class="form-control" name="language" id="language" placeholder="Ngôn ngữ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" rows="3"></textarea>
                            </div>
                            <script>
                                ClassicEditor
                                    .create( document.querySelector( '#content' ) )
                                    .then( editor => {
                                        console.log( editor );
                                    } )
                                    .catch( error => {
                                        console.error( error );
                                    } );
                            </script>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
