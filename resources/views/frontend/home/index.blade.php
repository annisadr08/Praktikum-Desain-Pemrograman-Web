@extends('layouts.frontend.master')

@section('title')
    FUNTOPIA
@endsection

@section('content')
    <!-- header caraousel -->
    <header>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiOUZinBWwI2N1kKHq4W0_lfAhW2cmhLKpxaSvBv3DahrB_GmaGBUA85XO4yfl3666ByscfSk5x0zd4Pq-FSOysaWEeqXbnr1zHhec0ZvMPNsqOS9iC_sbgCHvtB9vZmRt-1L1uf3N6DGrvvYjNMRwmqI7rIajoT1FJaPebVxYvJ0PjMIWCXuEOZwcW/s3416/wisata-keluarga-dunia-fantasi-dufan.jpg"
                            width="1250" height="500">
                        {{-- class="d-block w-80 shadow-nih" alt="..."> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="https://wildwoodsnj.com/wp-content/uploads/2019/01/wildwoods-boardwalk-3.jpg"width="1250"
                            height="500">
                        {{-- class="d-block w-100 shadow-nih" alt="..."> --}}
                    </div>
                    <div class="carousel-item">
                        <img src="https://i.pinimg.com/564x/97/09/93/970993a5f47815a2e819e713039ef28d.jpg"width="1250"
                            height="500">
                        {{-- class="d-block w-100 shadow-nih" alt="..."> --}}
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- start main -->
    <main>
        <div class="container">
            <!-- start section list product -->
            <section class="product">
                <div class="d-flex justify-content-between">
                    <div class="title">
                        <p class="text-success">Rekomendasi Wahana</p>
                        <h2>Wahana terpopuler</h2>
                    </div>
                    <button class="btn btn-primary lihat d-none d-md-block">
                        <i class="fas fa-list me-1"></i> Show More
                    </button>
                </div>

                <div class="row justify-content-center" id="list-product">
                    @foreach ($data as $item)
                        <div class="col-md-3 col-10">
                            <div class="card p-3 shadow-nih rounded-20">
                                <div class="image">
                                    <div class="bg"></div>
                                    <img src="{{ asset('fe/img/' . $item->image) }}" alt="">
                                </div>
                                <div class="topic">
                                    <h3>
                                        {{ $item->title }}
                                    </h3>
                                    <div class="d-flex justify-content-between">
                                        <div class="harga">
                                            <small>Price</small>
                                            <p>Rp. {{ number_format($item->harga) }}</p>
                                        </div>

                                        <a href="detail.html" class="btn btn-primary beli">
                                            <i class="fas fa-shopping-cart me-1"></i> Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                @forelse ($data as $item)
                    <div class="col-md-3 col-10">
                        <div class="card p-3 shadow-nih rounded-20">

                            <img class="rounded-20 mb-3" height="300" src="{{ asset('img/' . $item->image) }}"
                                alt="">
                            <div class="topic">
                                <h3>
                                    {{ $item->title }}
                                </h3>
                                <div class="d-flex justify-content-between">
                                    <div class="harga">
                                        <small>Price</small>
                                        <p>Rp. {{ number_format($item->harga) }}</p>
                                    </div>

                                    <a href="detail.html" class="btn btn-primary beli">
                                        <i class="fas fa-shopping-cart me-1"></i> Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <h1>CICI CUTE</h1>
                @endforelse
        </div>
        <div class="text-center mt-4 d-md-none d-lg-none d-xl-none">
            <button class="btn btn-primary lihat">
                <i class="fas fa-list me-1"></i> Show More
            </button>
        </div>
        </section>
        <!-- end section list product -->
        </div>
    </main>
    <!-- end main -->
@endsection
