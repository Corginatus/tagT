<section class="py-6 bg-grey-50">
    <div class="container ">
        <div class="row mb-5">
            <div class="col-xl-7 col-lg-10">
                <h2 class="font-weight-bold">Другие клиенты</h2>
            </div>
        </div>

        @include('include.cases', ['cases' => $cases])
    </div>
</section>
