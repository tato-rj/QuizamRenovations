<section class="py-8 container text-white" id="contact">
	<div class="row">
		<div class="col-12 text-center">
			@pagetitle(['title' => 'Contact', 'subtitle' => 'How can we help you?'])
			<h4 class="mb-3"><a class="link-none" href="tel:{{config('app.phone')}}">@fa(['icon' => 'phone']) {{config('app.phone')}}</a></h4>
			<h4 class="mb-3"><a class="link-none" href="mailto:{{config('app.email')}}">@fa(['icon' => 'envelope']) {{config('app.email')}}</a></h4>
			<h4 class="mb-3">@fa(['icon' => 'map-marker-alt']) {{config('app.address')}}</h4>
		</div>
	</div>
</section>