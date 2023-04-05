<section class="py-8 container text-white" id="case-studies">
	<div class="row">
		<div class="col-12 text-center">
			@pagetitle(['title' => 'Case Studies', 'subtitle' => 'A few examples to showcase how we work.'])
		</div>

		<div class="col-lg-10 col-12 mx-auto row">
			@foreach($cases as $case)
			<div class="col-lg-4 col-md-6 col-12 p-3" data-bs-toggle="modal" data-bs-target="#case-{{$loop->iteration}}" style="height: 700px; cursor: pointer;">
				<div class="h-100 bg-center d-apart p-4 position-relative hover-opacity-6" style="transition: .2s; background: url({{asset('images/cases/'.$loop->iteration.'/photo-1.jpg')}})">
					<div class="position-absolute-center w-100 h-100 bg-black opacity-2" style="z-index: 0;"></div>
					<div class="position-relative" style="z-index: 1">
						<h3>{{$case['title']}}</h3>
						<p class="text-uppercase">{{$case['subtitle']}}</p>
					</div>
					<div class="text-center" style="z-index: 1">
						<a href="" class="link-none small" style="font-weight: bold;">@fa(['icon' => 'chevron-circle-right'])VIEW CASE STUDY</a>
					</div>
				</div>
			</div>

			<div class="modal modal-lg fade" id="case-{{$loop->iteration}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content bg-primary rounded-0">
			      <div class="modal-header border-0">
			        <h4 class="modal-title" style="font-weight: 700;">{{$case['title']}}</h4>
			        <button class="text-white btn-raw" style="background: transparent;" type="button" data-bs-dismiss="modal" aria-label="Close">@fa(['icon' => 'times', 'mr' => 0, 'fa_size' => 'lg'])</button>
			      </div>
			      <div class="modal-body">
			        <p class="opacity-6 mb-4">{{$case['subtitle']}}</p>
			        <div class="mb-4">
					    <p class="small">{{$case['description']}}</p>
				    </div>
			        <div class="row">
		        		@foreach($case['images'] as $image)
		        		<div class="col-lg-3 col-md-4 col-12 mb-3">
			        		<img class="w-100" src="{{asset('images/cases/'.$loop->parent->iteration.'/photo-'.$image.'.jpg')}}">
			        	</div>
		        		@endforeach
			        </div>
			      </div>
			    </div>
			  </div>
			</div>
			@endforeach
		</div>
	</div>
</section>
