<section class="py-8 container text-white" id="services">
	<div class="row">
		<div class="col-12 text-center">
			@pagetitle(['title' => 'Services', 'subtitle' => 'We offer the following services.'])
		</div>

		@foreach($services as $service)
		<div class="col-lg-3 col-md-6 col-12 p-3 text-center">
			<div class="px-5 py-7 h-100" style="background: rgba(255,255,255,0.03)">
				<h4 class="mb-4 text-uppercase"><strong>{{$service['title']}}</strong></h4>
				<p class="opacity-6 m-0 small">{{$service['description']}}</p>
			</div>
		</div>
		@endforeach
	</div>
</section>