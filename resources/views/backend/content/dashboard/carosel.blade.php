<div class="col-lg-5">
    <div class="card card-carousel overflow-hidden h-100 p-0">
        <div id="carouselExampleCaptions" class="carousel slide h-100" data-bs-ride="carousel">
            <div class="carousel-inner border-radius-lg h-100">
                <div class="carousel-item h-100 active"
                    style="background-image: url('{{ asset($info[0]->gambar) }}');background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                        <a href="/dashboard/info/{{ $info[0]->slug }}">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="bi bi-eye-fill fs-6 text-dark opacity-10"></i>
                            </div>
                        </a>
                        <h5 class="text-white mb-1">{{ $info[0]->title }}</h5>
                        <p>{{ $info[0]->excerpt }}</p>
                    </div>
                </div>
                <div class="carousel-item h-100"
                    style="background-image: url('{{ asset($info[1]->gambar) }}');background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                        <a href="/dashboard/info/{{ $info[1]->slug }}">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="bi bi-eye-fill fs-6 text-dark opacity-10"></i>
                            </div>
                        </a>
                        <h5 class="text-white mb-1">{{ $info[1]->title }}</h5>
                        <p>{{ $info[1]->excerpt }}</p>
                    </div>
                </div>
                <div class="carousel-item h-100"
                    style="background-image: url('{{ asset($info[2]->gambar) }}');background-size: cover;">
                    <div class="carousel-caption d-none d-md-block bottom-0 text-start start-0 ms-5">
                        <a href="/dashboard/info/{{ $info[2]->slug }}">
                            <div class="icon icon-shape icon-sm bg-white text-center border-radius-md mb-3">
                                <i class="bi bi-eye-fill fs-6 text-dark opacity-10"></i>
                            </div>
                        </a>
                        <h5 class="text-white mb-1">{{ $info[2]->title }}</h5>
                        <p>{{ $info[2]->excerpt }}</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next w-5 me-3" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
