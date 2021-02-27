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
                        <form method="POST" action="{{route('nations.store')}}">
                            @csrf
                            <input type="text" name="name" value="">
                            <button type="submit">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
