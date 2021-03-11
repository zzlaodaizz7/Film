@extends('layouts.app-v2')
@section('content')
    <section class="py-12 md:py-20 lg:py-32">
        <div class="max-w-screen-xl mt-12 mx-auto px-8 md:pr-0 md:mt-16 lg:mt-24 xl:pr-8">
            <div class="md:grid md:grid-cols-5 md:gap-x-8 lg:gap-12">
                <div class="mt-8 md:mt-0 md:col-span-2">
                    <img
                        src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232589_23032609_2010316629239876_7899792449471609542_n.jpg"
                        alt="Dev Squad">
                    <div class="max-w-screen-xl mt-8">
                        <div class="flex items-center space-x-4 lg:mt-0">
                            <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none"
                               href="#Xem-phim">
                                <p
                                    class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-white text-center font-medium bg-red-600 ring-1 ring-red-600 ring-offset-1 ring-offset-red-600 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                    Xem phim
                                </p>
                            </a>

                            <a class="group relative h-12 inline-flex w-64 border border-red-600 sm:w-56 focus:outline-none"
                               href="#trailer">
                                <p
                                    class="absolute inset-0 inline-flex items-center justify-center self-stretch px-6 text-red-600 text-center font-medium bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                    Trailer
                                </p>
                            </a>

                        </div>
                    </div>
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
                <div style="width: 130%;z-index: -9998"
                     class="hidden md:transform md:-translate-x-1/2 md:absolute md:inset-y-0 md:left-0 md:w-full md:flex md:items-center xl:left-16 2xl:left-32">
                    <video poster="/img/blocks/blocks_2.jpg" playsinline autoplay muted loop>
                        <source src="/img/blocks/blocks_2.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="md:w-3/4 md:ml-auto lg:grid lg:gap-6 lg:grid-cols-5 xl:gap-16 xl:grid-cols-12">
                    <div class="space-y-12 text-gray-600 md:text-lg lg:col-span-3 xl:col-span-7">
                        <p>Giới thiệu phim aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.</p>
                        <p>Instead of the bug-filled code, you may have received in the past, we write robust software and test
                            the hell out of it. But instead of just testing manually, we write additional code to test your
                            code. This ensures bugs are spotted quickly and automatically before your employees or customers
                            ever touch the software. And it prevents bigger problems down the road when you try to scale usage
                            or add new features.</p>
                        <p>DevSquad gives you the proven proves and all the experience you need to build your software better,
                            faster, and right the first time.</p>
                    </div>
                    <div class="mt-12 lg:mt-0 lg:col-span-2 xl:col-span-5">
                        <div class="p-12 bg-white shadow-lg xl:p-16">
                            <h3 class="text-xl font-medium md:text-2xl">Chọn tập phim gần nhất</h3>
                            <ul class="mt-3 grid grid-cols-1 gap-4 list-custom font-medium text-sm text-gray-600 leading-4 md:grid-cols-2 lg:grid-cols-1">
                                <li>Tập 12</li>
                                <li>Tập 11</li>
                                <li>Tập 10</li>
                                <li>Tập 9</li>
                                <li>Tập 8</li>
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
        </div>
    </section>
@endsection
