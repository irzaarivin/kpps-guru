@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl"> 
			    <h1 class="app-page-title my-4">Akun Saya</h1>
                <div class="row g-4 settings-section my-5">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Info</h3>
		                <div class="section-intro">Informasi seputar diri anda yang dibutuhkan oleh sistem, anda hanya bisa merubah nikki. <a href="{{ env('APP_URL') }}/help">Selengkapnya</a></div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="change-info" method="POST" id="changeInfo">
							    	@csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Nama Lengkap</label>
									    <input type="text" name="name" class="form-control" id="setting-input-1" value="{{ auth()->user()->name }}" readonly>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Alamat Email</label>
									    <input type="text" name="email" class="form-control" id="setting-input-2" value="{{ auth()->user()->email }}" readonly>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">NIKKI</label>
									    <input type="text" name="nikki" class="form-control" id="setting-input-3" placeholder="{{ auth()->user()->nikki }}" required>
									</div>
									<button type="submit" class="btn app-btn-primary" id="kirimInfo">Simpan Perubahan</button>
							    </form>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>

	                <script>
	                	$(document).ready(function () {
			                $('#changeInfo').ajaxForm({
			                	complete: function (xhr) {
			                		alert('NIKKI berhasil diubah');
			                        $("#changeInfo").load('http://kpps.test/change-info');
			                    }
			                });
			            });
	                </script>

                </div><!--//row-->
                <div class="row g-4 settings-section my-5">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Ubah Password</h3>
		                <div class="section-intro">Untuk memperketat keamanan, anda dianjurkan untuk mengganti password secara berkala. <a href="{{ env('APP_URL') }}/help">Selengkapnya</a></div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <form class="settings-form" action="change-password" method="POST">
							    	@csrf
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Password Lama</label>
									    <input type="password" name="oldPass" class="form-control" id="setting-input-1" placeholder="..." required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Password Baru</label>
									    <input type="password" name="newPass" class="form-control" id="setting-input-2" placeholder="..." required>
									</div>
								    <div class="mb-3">
									    <label for="setting-input-3" class="form-label">Konfirmasi Password Baru</label>
									    <input type="password" name="confNewPass" class="form-control" id="setting-input-3" placeholder="..." required>
									</div>
									<button type="submit" class="btn app-btn-primary">Ubah Password</button>

									@if (session('gantiPassword'))

										<div class="alert alert-danger mt-3" role="alert">
										  	{{ session('gantiPassword') }}
										</div>

									@elseif (session('gantiPasswordBerhasil'))

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
                </div><!--//row-->
                {{-- <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Plan</h3>
		                <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="help.html">Learn more</a></div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="mb-2"><strong>Current Plan:</strong> Pro</div>
							    <div class="mb-2"><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
							    <div class="mb-2"><strong>Expires:</strong> 2030-09-24</div>
							    <div class="mb-4"><strong>Invoices:</strong> <a href="#">view</a></div>
							    <div class="row justify-content-between">
								    <div class="col-auto">
								        <a class="btn app-btn-primary" href="#">Upgrade Plan</a>
								    </div>
								    <div class="col-auto">
								        <a class="btn app-btn-secondary" href="#">Cancel Plan</a>
								    </div>
							    </div>
								    
						    </div> --}}<!--//app-card-body-->
						    
						{{-- </div> --}}<!--//app-card-->
	               {{--  </div> --}}
                {{-- </div> --}}<!--//row-->
                {{-- <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Data &amp; Privacy</h3>
		                <div class="section-intro">Settings section intro goes here. Morbi vehicula, est eget fermentum ornare. </div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">						    
						    <div class="app-card-body">
							    <form class="settings-form">
								    <div class="form-check mb-3">
										<input class="form-check-input" type="checkbox" value="" id="settings-checkbox-1" checked>
										<label class="form-check-label" for="settings-checkbox-1">
										    Keep user app activity history
										</label> --}}
									{{-- </div> --}}<!--//form-check-->
									{{-- <div class="form-check mb-3">
									    <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-2" checked>
										<label class="form-check-label" for="settings-checkbox-2">
										    Keep user app preferences
										</label>
									</div>
									<div class="form-check mb-3">
									    <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-3">
										<label class="form-check-label" for="settings-checkbox-3">
										    Keep user app search history
										</label>
									</div>
									<div class="form-check mb-3">
									    <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-4">
										<label class="form-check-label" for="settings-checkbox-4">
										    Lorem ipsum dolor sit amet
										</label>
									</div>
									<div class="form-check mb-3">
									    <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-5">
										<label class="form-check-label" for="settings-checkbox-5">
										    Aenean quis pharetra metus
										</label>
									</div>
									<div class="mt-3">
									    <button type="submit" class="btn app-btn-primary" >Save Changes</button>
									</div>
							    </form> --}}
						    {{-- </div> --}}<!--//app-card-body-->						    
						{{-- </div> --}}<!--//app-card-->
	               {{--  </div> --}}
                {{-- </div> --}}<!--//row-->
                {{-- <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Notifications</h3>
		                <div class="section-intro">Settings section intro goes here. Duis velit massa, faucibus non hendrerit eget.</div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">						    
						    <div class="app-card-body">
							    <form class="settings-form">
								    <div class="form-check form-switch mb-3">
										<input class="form-check-input" type="checkbox" id="settings-switch-1" checked>
										<label class="form-check-label" for="settings-switch-1">Project notifications</label>
									</div>
									<div class="form-check form-switch mb-3">
										<input class="form-check-input" type="checkbox" id="settings-switch-2">
										<label class="form-check-label" for="settings-switch-2">Web browser push notifications</label>
									</div>
									<div class="form-check form-switch mb-3">
										<input class="form-check-input" type="checkbox" id="settings-switch-3" checked>
										<label class="form-check-label" for="settings-switch-3">Mobile push notifications</label>
									</div>
									<div class="form-check form-switch mb-3">
										<input class="form-check-input" type="checkbox" id="settings-switch-4">
										<label class="form-check-label" for="settings-switch-4">Lorem ipsum notifications</label>
									</div>
									<div class="form-check form-switch mb-3">
										<input class="form-check-input" type="checkbox" id="settings-switch-5">
										<label class="form-check-label" for="settings-switch-5">Lorem ipsum notifications</label>
									</div>
									<div class="mt-3">
									    <button type="submit" class="btn app-btn-primary" >Save Changes</button>
									</div>
							    </form> --}}
						    {{-- </div> --}}<!--//app-card-body-->						    
						{{-- </div> --}}<!--//app-card-->
	                {{-- </div> --}}
                {{-- </div> --}}<!--//row-->
			   {{--  <hr class="my-4"> --}}
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    					

 
    {{-- <script>
        $(document).ready(function () {

        	$(function() {
		       bind 'myForm' and provide a simple callback function
		        $('#kirimPesan').ajaxForm(function() {
		            $('input#judul').val(null);
		            $('input#isi').val(null);
		        });
		    });

		    setInterval(function(){
			   	$('#kolomChat').load('http://kpps.test/forum-refresh');
			}, 500);
			
        });
    </script> --}}

@endsection