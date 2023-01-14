@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl" id="kolomPermit">
			    <div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between">
					    <div class="col-auto">
					        <h1 class="app-page-title mb-0">Surat Izin</h1>
					    </div>

					    <script>

					    	function refreshHalaman() {
								return $('#kolomPermit').load('http://kpps.test/permit-refresh');
							}

							function keDetail(id, csrf) {
								return $('#kolomPermit').load('http://kpps.test/permit-detail?id=' + id + '&_token=' + csrf);
							}

					    </script>

					    <div class="col-auto">
					        <div class="page-utilities">
							    <button class="btn app-btn-secondary" onclick="return refreshHalaman();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
									  	<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
									  	<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
									</svg> Refresh</button>
								<button class="btn app-btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Surat Izin</button>
					        </div><!--//page-utibuttonlities-->
					    </div>
				    </div>
			    </div>

			    {{-- MODAL --}}

			    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Surat Izin</h1>
				      </div>

				      <div class="modal-body">
				      	<form action="" method="POST" enctype="multipart/form-data" id="formIzin">

				      		@csrf

				      		<div class="form-floating mb-3">
							  <input type="text" class="form-control" id="floatingNama" name="nama" required>
							  <label for="floatingInput">Nama Siswa</label>
							</div>

							<div class="form-floating mb-3">
							  <input type="text" class="form-control" id="floatingNis" name="nis" required>
							  <label for="floatingNis">NIS</label>
							</div>

							<div class="form-floating mb-4">
							  <textarea type="text" class="form-control" id="floatingKeterangan" style="height: 200px;" name="keterangan" required></textarea>
							  <label for="floatingKeterangan">Keterangan</label>
							</div>

							<div class="mb-3">
							  <label for="floatingFile" class="form-label">Foto bukti izin siswa</label>
							  <input name="file" class="form-control" type="file" id="floatingFile" required>
							</div>

				      	</form>
				      </div>

				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
				        <button type="submir" class="btn app-btn-primary" form="formIzin">Simpan</button>
				      </div>
				    </div>
				  </div>
				</div>

				@if($permit->count())

					@foreach($permit as $data)
				    
	                <div class="app-card app-card-notification shadow-sm mb-4">
					    <div class="app-card-header px-4 py-3">
					        <div class="row g-3 align-items-center">
						        <div class="col-12 col-lg-auto text-center text-lg-start">						        
					                <img class="profile-image" src="{{ asset($data->link) }}" alt="Surat Izin {{ $data->nama }}">
						        </div><!--//col-->
						        <div class="col-12 col-lg-auto text-center text-lg-start">
							        <h4 class="notification-title mb-1">{{ $data->nama }}</h4>
							        
							        <ul class="notification-meta list-inline mb-0">
								        <li class="list-inline-item">{{ Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</li>
								        <li class="list-inline-item">|</li>
								        <li class="list-inline-item">oleh {{ $data->author }}</li>
								        <li class="list-inline-item">|</li>
								        <li class="list-inline-item">{{ $data->created_at }}</li>
							        </ul>
							   
						        </div><!--//col-->
					        </div><!--//row-->
					    </div><!--//app-card-header-->
					    <div class="app-card-body p-4">
						    <div class="notification-content">{{ $data->keterangan }}</div>
					    </div><!--//app-card-body-->
					    <div class="app-card-footer px-4 py-3">
						    <button class="btn app-btn-primary" onclick="return keDetail('{{ $data->id }}', '{{ csrf_token() }}');">Lebih Jelas<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							  	<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
							</svg></button>
					    </div><!--//app-card-footer-->
					</div><!--//app-card-->

					@endforeach

				@else

				<h3 class="mt-5">Belum ada izin</h3>

				@endif
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    					

@endsection