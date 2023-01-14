@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl"> 
			    <h1 class="app-page-title my-5 text-center">Data Pembinaan Dan Prestasi Siswa<br>Tahun 2022-2023</h1>

			    <div class="row g-4 settings-section mb-2 mt-2">

			    	@if(($kpps->pelanggaran > 20) && ($kpps->pelanggaran <= 50))

				    	<div class="col-12 col-md-6 text-center">
				    		<div class="rounded-circle d-flex align-items-center align-content-center justify-content-center shadow-lg" style="width: 250px; height: 250px; background-color: red; margin: 0 auto 20px auto; font-size: 75px; color: white;">
				    			<b>{{ $kpps->pelanggaran }}</b>
				    		</div>
				    		<h4>Pelanggaran</h4>
				    	</div>

				    @elseif(($kpps->pelanggaran > 50) && ($kpps->pelanggaran < 75))

				    	<div class="col-12 col-md-6 text-center">
				    		<div class="rounded-circle d-flex align-items-center align-content-center justify-content-center shadow-lg" style="width: 250px; height: 250px; background-color: darkred; margin: 0 auto 20px auto; font-size: 75px; color: white;">
				    			<b>{{ $kpps->pelanggaran }}</b>
				    		</div>
				    		<h4>Pelanggaran</h4>
				    	</div>

				    @elseif($kpps->pelanggaran >= 75)

				    	<div class="col-12 col-md-6 text-center">
				    		<div class="rounded-circle d-flex align-items-center align-content-center justify-content-center shadow-lg" style="width: 250px; height: 250px; background-color: black; margin: 0 auto 20px auto; font-size: 75px; color: white;">
				    			<b>{{ $kpps->pelanggaran }}</b>
				    		</div>
				    		<h4>Pelanggaran</h4>
				    	</div>

			    	@else

			    		<div class="col-12 col-md-6 text-center">
				    		<div class="rounded-circle d-flex align-items-center align-content-center justify-content-center shadow-lg" style="width: 250px; height: 250px; background-color: #15A362; margin: 0 auto 20px auto; font-size: 75px; color: white;">
				    			<b>{{ $kpps->pelanggaran }}</b>
				    		</div>
				    		<h4>Pelanggaran</h4>
				    	</div>

			    	@endif

			    	<div class="col-12 col-md-6 text-center">
			    		<div class="rounded-circle d-flex align-items-center align-content-center justify-content-center shadow-lg" style="width: 250px; height: 250px; background-color: #15A362; margin: 0 auto 20px auto; font-size: 75px; color: white;"><b>{{ $kpps->prestasi }}</b></div>
			    		<h4>Prestasi</h4>
			    	</div>

			    </div>

                <div class="row g-4 settings-section mb-2 mt-2">

	                <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="settings-form">
							    	<div class="mb-3">
									    <h3>Data Siswa</h3>
									</div>
									<hr>
								    <div class="mb-3">
									    <label class="form-label">Nama Lengkap</label>
									    <input type="text" class="form-control" value="{{ $kpps->nama }}" readonly>
									</div>
									<div class="mb-3">
									    <label class="form-label">Kelas</label>
									    <input type="text" class="form-control" value="{{ strtoupper($kpps->kelas) }}" readonly>
									</div>
								    <div class="mb-3">
									    <label class="form-label">NIS</label>
									    <input type="text" class="form-control" value="{{ $kpps->nis }}" readonly>
									</div>
									<div class="mb-3">
									    <label class="form-label">Telepon</label>
									    <input type="text" class="form-control" value="{{ $kpps->telepon }}" readonly>
									</div>
							    </div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>

	                <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="settings-form">
							    	<div class="mb-3">
									    <h3>Data Wali</h3>
									</div>
									<hr>
								    <div class="mb-3">
									    <label class="form-label">Nama Ayah</label>
									    <input type="text" class="form-control" value="{{ $kpps->ayah }}" readonly>
									</div>
									<div class="mb-3">
									    <label class="form-label">Nama Ibu</label>
									    <input type="text" class="form-control" value="{{ $kpps->ibu }}" readonly>
									</div>
								    <div class="mb-3">
									    <label class="form-label">Alamat</label>
									    <input type="text" class="form-control" value="{{ $kpps->alamatWali }}" readonly>
									</div>
									<div class="mb-3">
									    <label class="form-label">Telepon</label>
									    <input type="text" class="form-control" value="{{ $kpps->teleponWali }}" readonly>
									</div>
							    </div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>

                </div><!--//row-->

                <div class="row g-4 settings-section mb-2 mt-2">

	                <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="settings-form">
							    	<div class="mb-4">
									    <h3>Data Pelanggaran</h3>
									</div>

									@if($pelanggaranSiswa->count())

										@foreach($pelanggaranSiswa as $data)

										<div class="input-group mb-3">
										    <input type="text" class="form-control" value="{{ $data->pelanggaran }}" aria-label="Recipient's username" aria-describedby="basic-addon2" style="background-color: white;" readonly>
										    <span class="input-group-text" id="basic-addon2">{{ $data->poin }}</span>
										</div>

										@endforeach

									@else

										<p>{{ $kpps->nama }} Belum memiliki pelanggaran</p>

									@endif

							    </div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>

	                <div class="col-12 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="settings-form">
							    	<div class="mb-4">
									    <h3>Data Prestasi</h3>
									</div>

									@if($prestasiSiswa->count())

										@foreach($prestasiSiswa as $data)

										<div class="input-group mb-3">
										    <input type="text" class="form-control" value="{{ $data->prestasi }}" aria-label="Recipient's username" aria-describedby="basic-addon2" style="background-color: white;" readonly>
										    <span class="input-group-text" id="basic-addon2">{{ $data->poin }}</span>
										</div>

										@endforeach

									@else

										<p>{{ $kpps->nama }} Belum memiliki prestasi</p>

										@endif

							    </div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>

                </div><!--//row-->

                <div class="row g-4 settings-section my-2">
                	<div class="col-12 col-md-12">
                		<div class="app-card app-card-settings shadow-sm p-4">
                			<div class="app-card-body">
                				<div class="mb-3 text-center">
								    <h3>Catatan Guru</h3>
								</div>
								<hr>
                			</div>
                		</div>
                	</div>
                </div>

                <div class="row g-4 settings-section my-2">
	                <div class="col-6 col-md-6">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								<div class="row">
									<div class="col-md-12 mb-4">
										<form class="settings-form" action="{{ env( 'APP_URL' ) }}/student/catatan" method="POST">
									    	@csrf
											<input type="hidden" name="siswa" value="{{ $kpps->id }}">
										    <div class="mb-3">
											    <label for="catatanGuru" class="form-label">Dari anda untuk {{ $kpps->nama }} :</label>
											    <textarea class="form-control" name="catatan" id="catatanGuru" style="height: 300px;" placeholder="..." required></textarea>
											</div>
											<button type="submit" class="btn app-btn-primary mb-2">Kirim</button>
											<button type="button" class="btn app-btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#pelanggaran">Berikan Poin Pelanggaran</button>
											<button type="button" class="btn app-btn-secondary mb-2" data-bs-toggle="modal" data-bs-target="#prestasi">Berikan Poin Prestasi</button>
									    </form>
									</div>
								</div>
								    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
	                <div class="col-6 col-md-6">
	                	<div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								<div class="row">
									<div class="col-md-12">

										@if($notes->count())

											@foreach($notes as $data)

												<div class="mb-3">

													@if($data->author === auth()->user()->name)

														<span>dari <strong>Anda</strong></span>

													@else

														<span>dari <strong>{{ $data->author }}</strong></span>

													@endif

													<p><i><strong>"</strong> {{ $data->catatan }} <strong>"</strong></i></p>
												</div>

											@endforeach

										@else

											<strong>Belum ada catatan untuk {{ $kpps->nama }}</strong>

										@endif
									</div>
								</div>
								    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
               
                <div class="modal fade" id="pelanggaran" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Poin Pelanggaran</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="settings-form" action="{{ env( 'APP_URL' ) }}/student/pelanggaran" method="POST" id="formPelanggaran">
				        	@csrf
				        	<input type="hidden" name="siswa" value="{{ $kpps->id }}">
				        	<label class="form-label">Apa yang dilanggar?</label>
				        	<select name="pelanggaran" class="form-select" required>

				        		@foreach($pelanggaran as $data)

				        		<option value="{{ $data->id }}">{{ $data->pelanggaran }} | {{ $data->poin }}</option>

				        		@endforeach

				        	</select>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn app-btn-primary" form="formPelanggaran" onclick="return confirm('Tambahkan Poin Pelanggaran Untuk {{ $kpps->nama }}?');">Tambah</button>
				      </div>
				    </div>
				  </div>
				</div>

				<div class="modal fade" id="prestasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambahkan Poin Prestasi</h1>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="settings-form" action="{{ env( 'APP_URL' ) }}/student/prestasi" method="POST" id="formPrestasi">
				        	@csrf
				        	<input type="hidden" name="siswa" value="{{ $kpps->id }}">
				        	<label class="form-label">Prestasi apa yang diraih?</label>
				        	<select name="prestasi" class="form-select" required>

				        		@foreach($prestasi as $data)

				        		<option value="{{ $data->id }}">{{ $data->prestasi }} | {{ $data->poin }}</option>

				        		@endforeach

				        	</select>
				        </form>
				      </div>
				      <div class="modal-footer">
				        <button type="submit" class="btn app-btn-primary" form="formPrestasi" onclick="return confirm('Tambahkan Poin Prestasi Untuk {{ $kpps->nama }}?');">Tambah</button>
				      </div>
				    </div>
				  </div>
				</div>

		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->

@endsection