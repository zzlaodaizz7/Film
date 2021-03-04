@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Film - {{$data->name}}
                    </div>
                    <div class="card-body row">
                        <div class="col-md-12 row">
                            <div class="col-md-5">
                                <img class="w-100" src="https://scontent.fhan3-3.fna.fbcdn.net/v/t1.0-9/154942585_267851244911131_7115655345562065053_n.jpg?_nc_cat=101&ccb=3&_nc_sid=8bfeb9&_nc_ohc=8MCsws3LCYoAX84q-fk&_nc_ht=scontent.fhan3-3.fna&oh=69c2ce1986dae92b4fc79e60e14f10f6&oe=60636E91" alt="">
                            </div>
                            <div class="col-md-7">
                                <h3 class="font-weight-bold">{{$data->name}}</h3>
                                <p>Ngày công chiếu: </p>
                                @if($data->episodes) <p>Số tập: {{$data->episodes}}</p> @endif
                                <p>Độ dài: </p>
                                <p>Quốc gia: </p>
                                <p>Thể loại: </p>
                                <p>Diễn viên: </p>
                                <p>Chất lượng: </p>
                                <p>Ngôn ngữ: </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
