@extends('layouts.app')

@push('header')
<style type="text/css">
    * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

#lead {
    height: 100vh;
    background: url({{asset('images/covers/cover2.jpg')}}); 
    background-size: cover; 
    background-position: center;
}

.bg-center {
    background-size: cover !important; 
    background-position: center !important;
}

.btn-raw {
    border: none;
    padding: 0;
}

.case:hover {
    transform: scale(1.2);
}
</style>
@endpush

@section('content')

@include('welcome.bands.lead')
@include('welcome.bands.testimonials')
@include('welcome.bands.cta')
@include('welcome.bands.about')
@include('components.divider')
@include('welcome.bands.services')
@include('components.divider')
@include('welcome.bands.cases')
@include('components.divider')
@include('welcome.bands.contact')

@endsection

@push('scripts')
<script type="text/javascript">
function changeTestimonial() {
    $visible = $('.testimonial:visible');
    $visible.hide();

    if ($visible.next().length) {
        $visible.next().fadeIn();
    } else {
        $('.testimonial').first().fadeIn();
    }
}
setInterval(changeTestimonial, 3000);
</script>
@endpush