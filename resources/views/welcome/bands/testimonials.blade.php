<section class="py-6 text-center">
	<div class="container">
		<div class="row">
		    <div class="col-lg-8 col-md-10 col-12 mx-auto">
		    	@foreach($testimonials as $testimonial)
		    	<div class="testimonial" style="display: {{$loop->first ? 'block' : 'none'}}">
			    	<p class="text-white mb-3">@fa(['icon' => 'quote-left'])<i>{{$testimonial['text']}}</i>@fa(['icon' => 'quote-right', 'mr' => 0, 'classes' => 'ml-2'])</p>
			    	<h5 class="text-white mb-4"><strong>{{$testimonial['name']}}</strong></h5>
			    	<div class="d-center">
			    		@fa(['icon' => 'star', 'fa_color' => 'yellow', 'fa_size' => 'lg'])
			    		@fa(['icon' => 'star', 'fa_color' => 'yellow', 'fa_size' => 'lg'])
			    		@fa(['icon' => 'star', 'fa_color' => 'yellow', 'fa_size' => 'lg'])
			    		@fa(['icon' => 'star', 'fa_color' => 'yellow', 'fa_size' => 'lg'])
			    		@fa(['icon' => 'star', 'fa_color' => 'yellow', 'fa_size' => 'lg'])
			    	</div>
			    </div>
			    @endforeach
		    </div>
		</div>
	</div>
</section>
