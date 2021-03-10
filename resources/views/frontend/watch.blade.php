@extends('layouts.app-v2')
@section('content')
    <section class="py-12 md:py-20 lg:py-32">
        <div class="max-w-screen-xl mt-12 mx-auto px-8 md:pr-0 md:mt-16 lg:mt-24 xl:pr-8">
            <div class="md:grid md:grid-cols-5 md:gap-x-8 lg:gap-12">
                <div class="mt-8 md:mt-0 md:col-span-2">
                    <img
                        src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232589_23032609_2010316629239876_7899792449471609542_n.jpg"
                        alt="Dev Squad">
                </div>
                <div class="md:col-span-3">
                    <h1 class="text-xl font-medium md:text-3xl">
                        Cổng tâm tựa ngọc
                    </h1>
                    <p>Thời lượng: <span>45 phút</span></p>
                    <p>Số tập: <span>N/A</span></p>
                    <p>Quốc gia: <span>Trung Quốc</span></p>
                    <p>Năm xuất bản: <span>2021</span></p>
                    <p>Ngày công chiếu: <span>26/02/2021</span></p>
                    <p>Thể loại: <span>Cổ trang, tình cảm - lãng mạn</span></p>
                    <p>Diễn viên: <span>Đàm Tùng Vận, Chung Hán Lương</span></p>
                </div>
            </div>
        </div>
        <div class="relative">
            <div class="max-w-screen-xl mx-auto px-8 py-12 lg:py-24">
                <div>
                    <video style="width: 100%; height: auto" controls>
                        <source src="movie.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-2 xl:col-span-5">
                    <div class="p-12 bg-white shadow-lg xl:p-16">
                        <h3 class="text-xl font-medium md:text-2xl">Tập phim</h3>
                        <ul class="mt-3 gap-4 text-sm leading-4 flex justify-center" style="flex-wrap: wrap">
                            @for($i = 0; $i < 50; $i++)
                            <li class="mt-2.5"><a href="#" class="{{$i ? 'bg-sail' : "bg-socialite"}} p-2" style="color: #fff">Tập {{$i}}</a></li>
                            @endfor
                        </ul>
                    </div>
                    <ul class="mt-12 flex items-center space-x-4">
                        <li>
                            <a href="">
                                <img class="opacity-25" src="/img/social/linkedin.min.svg" alt="Telegram">
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <img class="opacity-25" src="/img/social/facebook.min.svg" alt="Facebook">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
