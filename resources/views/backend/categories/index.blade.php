@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Danh mục
                        <a class="btn" href="{{route('category.create')}}"><i class="fas fa-plus"></i></a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th style="width: 130px">Action</th>
                            </thead>
                            <tbody>
                            @foreach($data as $x)
                                <tr>
                                    <td>{{$x->id}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>
                                        <form method="POST" class="float-right"
                                              action="{{route('categories.destroy',$x->id)}}">
                                            @method("DELETE")
                                            @csrf
                                            <button class="btn btn-danger" type="submit"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <a class="btn btn-primary float-right"
                                           href="{{route('categories.edit',$x->id)}}"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
