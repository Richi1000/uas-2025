@php
$pricing = \App\Models\Pricing::where('section_key', 'pricing_main')->first();
@endphp

@if($pricing)
<section id="pricing" class="pricing-area pricing-fourteen">
  <div class="section-title-five">
    <h6>{{ $pricing->small_title }}</h6>
    <h2 class="fw-bold">{{ $pricing->title }}</h2>
    <p>{{ $pricing->description }}</p>
  </div>

  <div class="row">
    @foreach($pricing->plans as $plan)
    <div class="col-lg-4 col-md-6 col-12">
      <div class="pricing-style-fourteen {{ $plan['featured'] ? 'middle' : '' }}">
        <h6>{{ $plan['name'] }}</h6>
        <p>{{ $plan['description'] }}</p>
        <h2>
          <span>{{ $plan['currency'] }}</span>{{ $plan['price'] }}
          <span>{{ $plan['duration'] }}</span>
        </h2>

        <ul>
          @foreach($plan['features'] as $feature)
            <li class="{{ !$feature['active'] ? 'deactive' : '' }}">
              {{ $feature['text'] }}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endif
