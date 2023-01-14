				<div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between my-3">
					    <div class="col-auto">
					    	{{-- @foreach($data as $permit)
					        	<h1 class="app-page-title mb-0">Surat Izin {{ $permit->nama }}</h1>
					        @endforeach --}}
					        <h1 class="app-page-title mb-0">Tanggapan</h1>
					    </div>

					    <script>
					    	
					    	function kembali() {
								return $('#kolomMasukan').load('{{ env('APP_URL') }}/help-refresh');
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
				<div class="row g-4 settings-section my-5">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Tanggapan Anda</h3>
		                <div class="section-intro">Tanggapan anda sangat bermanfaat bagi pihak developer. Mulailah menanggapi perangkat lunak ini.</div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="" method="POST">
							    	@csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Subjek</label>
									    <input type="text" name="subjek" class="form-control" id="setting-input-1" placeholder="..." required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Keterangan</label>
									    <textarea name="tanggapan" id="tanggapan" class="form-control" style="height: 300px;" placeholder="..." required></textarea>
									</div>
									<button type="submit" class="btn app-btn-primary">kirim</button>

									@if (session('success'))

										<div class="alert alert-success mt-3" role="alert">
										  	{{ session('gantiPasswordBerhasil') }}
										</div>

									@endif

							    </form>

							    <script>
							    	$(document).ready(function(){
							    		$("#setting-input-1").keypress(function(){
								    		$("#setting-input-1").prop({type:"text"});
								    	});

								    	$("#setting-input-2").keypress(function(){
								    		$("#setting-input-2").prop({type:"text"});
								    	});

								    	$("#setting-input-3").keypress(function(){
								    		$("#setting-input-3").prop({type:"text"});
								    	});
							    	});
							    </script>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div>