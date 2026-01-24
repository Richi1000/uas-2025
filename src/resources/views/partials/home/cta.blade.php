@php
$cta = \App\Models\Cta::where('section_key', 'cta_main')
    ->where('is_active', true)
    ->first();
@endphp

@if($cta)
<section id="call-action" class="call-action">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="inner-content text-center">
          <h2>{{ $cta->title }}</h2>
          <p>{{ $cta->description }}</p>
          <a href="{{ $cta->button_link ?? '#' }}"
              class="btn primary-btn-outline"
              style="color:#fff !important; border-color:#fff !important;">
              {{ $cta->button_text }}
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
