@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Quốc gia
                    </div>
                    <div class="card-body">
                        <form action="{{route('nations.update',$data->id)}}" method="POST">
                            @method("PUT")
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <input type="text" name="name" value="{{$data->name}}">
                            <input type="submit" value="Sửa" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
