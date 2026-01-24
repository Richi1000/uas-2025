@php
    $posts = \App\Models\LatestPost::where('is_active', true)
        ->orderByDesc('published_at')
        ->take(3)
        ->get();
@endphp

@if($posts->count())
<!-- Start Latest News Area -->
<div id="blog" class="latest-news-area section">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content text-center">
                        <h6>Latest News</h6>
                        <h2 class="fw-bold">Latest News & Updates</h2>
                        <p>
                            Informasi terbaru seputar sistem absensi digital dan pengembangan fitur.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======  End Section Title Five ======-->

    <div class="container">
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single News -->
                    <div class="single-news">
                        <div class="image position-relative">
                            <a href="javascript:void(0)">
                                <img class="thumb"
                                     src="{{ $post->image
                                        ? asset('storage/'.$post->image)
                                        : asset('assets4/images/blog/1.jpg') }}"
                                     alt="Blog">
                            </a>

                            <!-- Author Badge -->
                            <div class="meta-details">
                                <span class="author">
                                    BY {{ strtoupper($post->author) }}
                                </span>
                            </div>
                        </div>

                        <div class="content-body">
                            <h4 class="title">
                                {{ $post->title }}
                            </h4>

                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
                    </div>
                    <!-- End Single News -->
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Latest News Area -->
@endif
