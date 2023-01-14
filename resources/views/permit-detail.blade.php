
				<div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between my-3">
					    <div class="col-auto">
					    	{{-- @foreach($data as $permit)
					        	<h1 class="app-page-title mb-0">Surat Izin {{ $permit->nama }}</h1>
					        @endforeach --}}
					        <h1 class="app-page-title mb-0">Surat Izin {{ $data->nama }}</h1>
					    </div>

					    <script>
					    	
					    	function kembali() {
								return $('#kolomPermit').load('http://kpps.test/permit-refresh');
							}

					    </script>

					    <div class="col-auto">
					        <div class="page-utilities">
							    <button class="btn app-btn-primary" onclick="return kembali();">
							    	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
									  	<path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
									</svg> 
									Kembali
								</button>
					        </div><!--//page-utibuttonlities-->
					    </div>
				    </div>
			    </div>

			    <script>
			    	
			    	function hapusIzin(id, csrf, link) {
			    		document.location.href = "http://kpps.test/permit/delete?id=" + id + "&_token=" + csrf + "&link=" + link;
			    	}

			    </script>
			    
			    <div class="app-card app-card-notification shadow-sm my-4 rounded-4" style="overflow: hidden;">
		    		<img src="{{ asset($data->link) }}" class="img-fluid mb-3 mx-auto d-block" alt="{{ $data->nama }}">
			    	<div class="row app-card-header px-4 py-3">
			    		<div class="col">
			    			<h1 class="mb-4">Perizinan {{ $data->nama }}</h1>
			    			<h6>Petugas Piket : {{ $data->author }}</h6>
			    			<h6>Hari, Tanggal : {{ $data->created_at->format('l, d F Y') }}</h6>
			    			<h6>Keterangan : {{ $data->keterangan }}</h6>
			    		</div>

			    		@if($data->author === auth()->user()->name)

			    			<button class="btn app-action-link mt-5" style="background-color: red; color: white; font-weight: bolder;" onclick="return hapusIzin('{{ $data->id }}', '{{ csrf_token() }}', '{{ $data->link }}');">Hapus Perizinan</button>

			    		@endif
			    	</div>
			    </div>

				{{-- @if($permit->count())

					@foreach($permit as $data)
				    
	                <div class="app-card app-card-notification shadow-sm mb-4">
					    <div class="app-card-header px-4 py-3">
					        <div class="row g-3 align-items-center">
						        <div class="col-12 col-lg-auto text-center text-lg-start">						        
					                <img class="profile-image" src="{{ asset($data->link) }}" alt="Surat Izin {{ $data->nama }}">
						        </div>
						        <div class="col-12 col-lg-auto text-center text-lg-start">
							        <h4 class="notification-title mb-1">{{ $data->nama }}</h4>
							        
							        <ul class="notification-meta list-inline mb-0">
								        <li class="list-inline-item">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</li>
								        <li class="list-inline-item">|</li>
								        <li class="list-inline-item">{{ $data->author }}</li>
								        <li class="list-inline-item">|</li>
								        <li class="list-inline-item">{{ $data->created_at }}</li>
							        </ul>
							   
						        </div>
					        </div>
					    </div>
					    <div class="app-card-body p-4">
						    <div class="notification-content">{{ $data->keterangan }}</div>
					    </div>
					    <div class="app-card-footer px-4 py-3">
						    <a class="action-link" href="#">View all<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
	</svg></a>
					    </div>
					</div>

					@endforeach

				@else

				<h3 class="mt-5">Belum ada izin</h3>

				@endif --}}