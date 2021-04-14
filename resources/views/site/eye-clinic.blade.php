@extends('layouts.site')

@section('banner-content-area')
    @include('site.partials.banner')
@endsection

@section('page-content-area')

<!---------------------- Eye Clinic Start ---------------------------->
<section class="p-5">
    <div class="container">
      <h2 class="text-center mb-5">Eye Clinic</h2>
      @if(!empty($eye_clinic))
        @foreach($eye_clinic as $facility)
            <div class="row align-items-center mb-5">
                <div class="col-md-6" {{ (($loop->iteration%2) == 0) ? 'order-md-2' : '' }}>
                    <div class="mb-2"><img src="img/services.png" alt=""></div>
                </div>
                <div class="col-md-6 {{ (($loop->iteration%2) == 0) ? 'order-md-1' : '' }}">
                    <h4>{{ $facilty->facilityname }}</h4>
                    {{ $facility->description }}
                </div>
            </div>
        @endforeach
      @endif

    </div>
  </section>

  <!---------------------- Eye Clinic End ---------------------------->


@endsection