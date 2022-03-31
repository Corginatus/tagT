@extends('base')

@section('content')
    <section class="bg-soft-primary-pattern-1 py-6 pb-lg-9">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-9">
                    <img class="img-fluid mb-4" src="./images/logos/brand/hubspot.svg" alt="">
                    <h1 class="font-weight-bold mb-0">{{ $case->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Details -->
    <section class="mt-6 mt-lg-n7">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="card bg-primary text-white p-4 p-lg-7">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 mb-4">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-user"></i> Клиент
                                        </p>
                                        <h6 class="font-weight-semibold mb-0">{{ $case->client }}</h6>
                                    </div>
                                    <div class="col-sm-6 col-md-12 mb-4 mb-lg-0">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-package"></i> Индустрия
                                        </p>
                                        <h6 class="font-weight-semibold mb-0">{{ $case->industry }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="row">
                                    <div class="col-sm-6 col-md-12 mb-4">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-calendar"></i> Дата</p>
                                        <h6 class="font-weight-semibold mb-0">{{ $case->date }}</h6>
                                    </div>
                                    <div class="col-sm-6 col-md-12 mb-4 mb-lg-0">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-globe"></i> Сайт</p>
                                        <h6 class="font-weight-semibold mb-0">{{ $case->website }}</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-12 mb-4">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-users"></i> Тип</p>
                                        <h6 class="font-weight-semibold mb-0">{{ $case->type }}</h6>
                                    </div>
                                    <div class="col-sm-6 col-lg-12 mb-lg-0">
                                        <p class="text-light font-size-sm mb-2"><i class="icon-trending-up"></i>
                                            Прилив трафика</p>
                                        <h6 class="font-weight-semibold mb-0 text-warning">{{ $case->increase_traffic }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Problems & Solutions -->
    <section class="py-6">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="px-lg-4 mb-4 mb-lg-0">
                                <div class="text-primary mb-4">
                                    <svg class="hw-48" viewBox="0 0 24 24" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                fill="currentColor" opacity="0.3"></path>
                                            <path
                                                d="M10.5857864,12 L9.17157288,10.5857864 C8.78104858,10.1952621 8.78104858,9.56209717 9.17157288,9.17157288 C9.56209717,8.78104858 10.1952621,8.78104858 10.5857864,9.17157288 L12,10.5857864 L13.4142136,9.17157288 C13.8047379,8.78104858 14.4379028,8.78104858 14.8284271,9.17157288 C15.2189514,9.56209717 15.2189514,10.1952621 14.8284271,10.5857864 L13.4142136,12 L14.8284271,13.4142136 C15.2189514,13.8047379 15.2189514,14.4379028 14.8284271,14.8284271 C14.4379028,15.2189514 13.8047379,15.2189514 13.4142136,14.8284271 L12,13.4142136 L10.5857864,14.8284271 C10.1952621,15.2189514 9.56209717,15.2189514 9.17157288,14.8284271 C8.78104858,14.4379028 8.78104858,13.8047379 9.17157288,13.4142136 L10.5857864,12 Z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </div>
                                <h5 class="font-weight-bold">Задача</h5>
                                <p class="text-muted font-size-sm">{{ $case->problem }}</p>
                                {{--                                <a href="" class="link-unstyled text-primary font-weight-medium d-inline-block">Read More -></a>--}}
                            </div>
                        </div>

                        <div class="col">
                            <div class="px-lg-4">
                                <div class="text-primary mb-4">
                                    <svg class="hw-48" viewBox="0 0 24 24" version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                                d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                fill="currentColor" opacity="0.3"></path>
                                            <path
                                                d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z"
                                                fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </div>


                                <h5 class="font-weight-bold">Решение</h5>
                                <p class="text-muted font-size-sm">{{ $case->solution }}</p>
                                {{--                                <a href="" class="link-unstyled text-primary font-weight-medium d-inline-block">Read More -></a>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case study -->
    <div class="py-6 border-top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <article>
                        {!!  $case->description !!}
                    </article>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('article').querySelectorAll('img').forEach((img) => {console.log(img.className='img-fluid')})
    </script>
@endsection
