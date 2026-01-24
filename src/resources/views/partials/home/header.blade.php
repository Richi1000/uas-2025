<!-- Start header Area -->
@php
    // Ambil data hero dari database
    $hero = \App\Models\Hero::first();
@endphp

<section id="hero-area" class="header-area header-eight">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-content">
                    <h1>{{ $hero->title }}</h1>
                    <p>{{ $hero->description }}</p>


                    <div class="button">
                        <a href="{{ $hero->button_link }}" class="btn primary-btn">{{ $hero->button_text }}</a>




                        <a href="https://www.youtube.com/embed/VjidNFxxmQQ?modestbranding=1&rel=0&color=white" 
                           class="glightbox video-button btn btn-light">
                            <i class="lni lni-qr-code"></i>
                            <span>Cara Kerja</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="header-image">
                    @if($hero->image)
                        <img src="{{ asset('storage/' . $hero->image) }}" alt="Hero Image" />
                    @else
                        <img src="{{ asset('assets4/images/header/hero-image.jpg') }}" alt="Default Hero Image" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End header Area -->

