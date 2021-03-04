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
                        <form method="POST" action="{{route('films.update',$data->id)}}">
                            @method('PUT')
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Tên phim</label>
                                    <input type="text" class="form-control" value="{{$data->name}}" name="name" id="name" placeholder="Tên phim" >
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nation">Thể loại</label>
                                    <select name="categorys_id" class="form-control">
                                        @foreach($category as $x)
                                            <option @if($data->categorys_id == $x->id) selected @endif value="{{$x->id}}">{{$x->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="nation">Quốc gia</label>
                                    <select name="nations_id" class="form-control">
                                        @foreach($nation as $x)
                                            <option @if($data->nations_id == $x->id) selected @endif  value="{{$x->id}}">{{$x->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Thumbnail</label>
                                <input type="text" class="form-control" value="{{$data->thumbnail}}" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" id="link" value="{{$data->link}}" name="link" placeholder="Link">
                            </div>
                            <div class="form-group">
                                <label for="trailer">Trailer</label>
                                <input type="text" class="form-control" id="trailer" value="{{$data->trailer}}" name="trailer" placeholder="Trailer">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="episodes">Số tập</label>
                                    <input type="text" class="form-control" name="episodes" value="{{$data->episodes}}" id="episodes" placeholder="Số tập">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="year">Năm sản xuất</label>
                                    <input type="text" class="form-control" name="year" value="{{$data->year}}" id="year" placeholder="Năm sản xuất">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="status">Trạng thái</label>
                                    <input type="text" class="form-control" name="status" value="{{$data->status}}" id="status" placeholder="Trạng thái">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="language">Ngôn ngữ</label>
                                    <input type="text" class="form-control" name="language" value="{{$data->language}}" id="language" placeholder="Ngôn ngữ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="contentfilm" id="content" rows="3">{{$data->contentfilm}}</textarea>
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
                                CKEDITOR.instances.editor1.setData( '<p>{{$data->contentfilm}}</p>' );
                            </script>
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
