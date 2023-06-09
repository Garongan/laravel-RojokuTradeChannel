<section class="inner-banner py-5">
    <div class="py-lg-5">
        <div class="container-fluid pt-4">
            <h1 class="display-3 mb-3 pt-sm-5 text-body text-center">{{ $detail }}{{ $title }}</h1>
            <div class="d-flex justify-content-center info-carousel">
                <h6 class="m-0">
                    <a class="text-primary" href="/">Home</a>
                </h6>
                <h6 class="m-0 px-3 text-body">/</h6>
                <h6 class="m-0">
                    <a href="/{{ Str::slug($title) }}" class="text-body">{{ $title }}</a>
                </h6>
            </div>
        </div>
    </div>
</section>