<!-- ===== service-area start ===== -->
<section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Layanan</h6>
              <h2 class="fw-bold">Fitur Unggulan Kami</h2>
              <p>
                Berbagai fitur canggih untuk sistem absensi digital yang efisien dan akurat.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
      <div class="row">
        @php
          $services = \App\Models\Service::where('is_active', true)
                                     ->orderBy('order', 'asc')
                                     ->get();
        @endphp
        
        @forelse($services as $service)
          <div class="col-lg-4 col-md-6">
            <div class="single-services">
              <div class="service-icon">
                <i class="lni {{ $service->icon }}"></i>
              </div>
              <div class="service-content">
                <h4>{{ $service->name }}</h4>
                <p>{{ $service->description }}</p>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center">
            <p>Belum ada layanan yang tersedia.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
  <!-- ===== service-area end ===== -->

