<div class="swiper-container client-carousel-single">
    <div class="swiper-wrapper">
        @foreach($cases as $case)
        <div class="swiper-slide">
            <div class="col" data-aos="fade-up">
                <a href="/case/{{ $case->id }}" class="text-reset">
                    <div class="card bg-light text-center mb-3 mb-lg-0">
                        <picture>
                            <img src="{{ \App\Http\Resources\PostResource::make($case)->image  }}" alt="" class="img-fluid">
                        </picture>
                        <div class="card-footer bg-white">
                            <h5 class="font-weight-semibold mb-1">{{ $case->client  }}</h5>
                            <p class="font-size-sm mb-0">{{ $case->type }}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination text-center position-relative pt-4"></div>
</div>
