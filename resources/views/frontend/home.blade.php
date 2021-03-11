@extends('layouts.app-v2')
@section('content')
    <section class="py-12 md:py-20 lg:py-32">
        <div class="max-w-screen-xl mt-12 mx-auto px-8 md:pr-0 md:mt-16 lg:mt-24 xl:pr-8">
            <div class="mt-3 sm:mt-12 md:flex">
                <div class="md:w-1/2 lg:w-3/4">
                    <div>
                        <div>
                            <h1 class="font-bold text-2xl">PHIM BỘ MỚI</h1>
                        </div>
                        <div class="sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 lg:grid-cols-4">
                            @for($i = 0; $i < 4; $i++)
                                <div class="mt-3 mx-auto">
                                    <img class="rounded-lg"
                                         src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                         style="width: 168px; height: 256px; object-fit: cover">
                                    <div class="mt-2">
                                        <div>
                                            <a href="###" class="font-bold">Tên phim</a>
                                        </div>
                                        <div class="flex">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                 style="width: 13px"
                                                 data-icon="suitcase-rolling"
                                                 class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="#d6ab32"
                                                      d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                            </svg>
                                            <a href="###" class="font-medium">Phim hành động</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="mt-4">
                        <div>
                            <h3 class="font-bold text-2xl uppercase">Phim lẻ mới</h3>
                        </div>
                        <div class="sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 lg:grid-cols-4">
                            @for($i = 0; $i < 4; $i++)
                                <div class="mt-3 mx-auto">
                                    <img class="rounded-lg"
                                         src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                         style="width: 168px; height: 256px; object-fit: cover">
                                    <div class="mt-2">
                                        <div>
                                            <a href="###" class="font-bold">Tên phim</a>
                                        </div>
                                        <div class="flex">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                 style="width: 13px"
                                                 data-icon="suitcase-rolling"
                                                 class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="#d6ab32"
                                                      d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                            </svg>
                                            <a href="###" class="font-medium">Phim hành động</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="mt-4">
                        <div>
                            <h3 class="font-bold text-2xl uppercase">Phim chiếu rạp</h3>
                        </div>
                        <div class="sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 lg:grid-cols-4">
                            @for($i = 0; $i < 4; $i++)
                                <div class="mt-3 mx-auto">
                                    <img class="rounded-lg"
                                         src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                         style="width: 168px; height: 256px; object-fit: cover">
                                    <div class="mt-2">
                                        <div>
                                            <a href="###" class="font-bold">Tên phim</a>
                                        </div>
                                        <div class="flex">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                 style="width: 13px"
                                                 data-icon="suitcase-rolling"
                                                 class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="#d6ab32"
                                                      d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                            </svg>
                                            <a href="###" class="font-medium">Phim hành động</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>

                    <div class="mt-4">
                        <div>
                            <h3 class="font-bold text-2xl uppercase">Phim hoạt hình</h3>
                        </div>
                        <div class="sm:grid sm:grid-cols-2 sm:gap-x-4 sm:gap-y-8 lg:grid-cols-4">
                            @for($i = 0; $i < 4; $i++)
                                <div class="mt-3 mx-auto">
                                    <img class="rounded-lg"
                                         src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                         style="width: 168px; height: 256px; object-fit: cover">
                                    <div class="mt-2">
                                        <div>
                                            <a href="###" class="font-bold">Tên phim</a>
                                        </div>
                                        <div class="flex">
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                 style="width: 13px"
                                                 data-icon="suitcase-rolling"
                                                 class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                                 role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                <path fill="#d6ab32"
                                                      d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                            </svg>
                                            <a href="###" class="font-medium">Phim hành động</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>

                <div class="mt-10 max-w-md md:mt-0 md:w-1/2 lg:w-1/4">
                    <div>
                        <div class="font-bold text-2xl">
                            PHIM BỘ HOT
                        </div>
                        @for($i = 0; $i < 5; $i++)
                            <div class="mt-3 mx-auto flex">
                                <img class="rounded-lg mr-1"
                                     src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                     style="width: 60px; height: 80px; object-fit: cover">
                                <div class="mt-2">
                                    <div>
                                        <a href="###" class="font-bold">Tên phim</a>
                                    </div>
                                    <div class="flex">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                             style="width: 13px"
                                             data-icon="suitcase-rolling"
                                             class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path fill="#d6ab32"
                                                  d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                        </svg>
                                        <a href="###" class="font-medium">Phim hành động</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="mt-4">
                        <div class="font-bold text-2xl">
                            PHIM LẺ HOT
                        </div>
                        @for($i = 0; $i < 5; $i++)
                            <div class="mt-3 mx-auto flex">
                                <img class="rounded-lg mr-1"
                                     src="https://s3.cloud.cmctelecom.vn/tinhte1/2018/01/4232583_14372314_1798299803774894_1698740605240530432_o.jpg"
                                     style="width: 60px; height: 80px; object-fit: cover">
                                <div class="mt-2">
                                    <div>
                                        <a href="###" class="font-bold">Tên phim</a>
                                    </div>
                                    <div class="flex">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                             style="width: 13px"
                                             data-icon="suitcase-rolling"
                                             class="svg-inline--fa fa-suitcase-rolling fa-w-12 mr-1 text-gray-600"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path fill="#d6ab32"
                                                  d="M336 160H48c-26.51 0-48 21.49-48 48v224c0 26.51 21.49 48 48 48h16v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h128v16c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16v-16h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48zm-16 216c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zm0-96c0 4.42-3.58 8-8 8H72c-4.42 0-8-3.58-8-8v-16c0-4.42 3.58-8 8-8h240c4.42 0 8 3.58 8 8v16zM144 48h96v80h48V48c0-26.51-21.49-48-48-48h-96c-26.51 0-48 21.49-48 48v80h48V48z"></path>
                                        </svg>
                                        <a href="###" class="font-medium">Phim hành động</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
