@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    	
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">{{ $title }}</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center" action="{{ env('APP_URL') }}/notes" method="GET">
					                    <div class="col-auto">
					                        <input type="text" id="cariSiswanya" name="search" class="form-control search-orders" placeholder="Cari berdasarkan nama atau nis">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Cari</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Cari Siswa</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Riwayat Pelanggaran</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Riwayat Prestasi</a>
				    {{-- <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">XII MM</a> --}}
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive" id="cariSiswa">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">NIS</th>
												<th class="cell">Nama</th>
												<th class="cell">Kelas</th>
												<th class="cell text-center">Poin</th>
												<th class="cell text-center">Tindakan</th>
											</tr>
										</thead>
										<tbody>

											@if($semuaSiswa->count())

												@foreach($semuaSiswa as $data)

												<tr>
													<td class="cell">{{ $data->nis }}</td>
													<td class="cell">{{ $data->nama }}</td>
													<td class="cell">{{ strtoupper($data->kelas) }}</td>
													<td class="cell text-center">{{ $data->pelanggaran }}</td>
													<td class="cell text-center">
														<form action="{{ env('APP_URL') }}/student" method="POST">
															@csrf
															<button class="btn-sm app-btn-secondary" name="idSiswa" value="{{ $data->id }}">Kelola</button>
														</form>
													</td>
												</tr>

												@endforeach

											@else

												<tr>
													<td colspan="5">
														<p style="text-align: center; margin: 20px 0;">Cari Siswa Disini</p>
													</td>
												</tr>

											@endif
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->

						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
								    
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">NIS</th>
												<th class="cell">Nama</th>
												<th class="cell">Kelas</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell">Waktu</th>
												<th class="cell">Oleh</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@if($pelanggaranSiswa->count())

												@foreach($pelanggaranSiswa as $data)

												<tr>
													<td class="cell">{{ $data->nis }}</td>
													<td class="cell">{{ $data->nama }}</td>
													<td class="cell">{{ strtoupper($data->kelas) }}</td>
													<td class="cell">{{ $data->pelanggaran }}</td>
													<td class="cell">{{ Carbon\Carbon::parse($data->created_at)->format('l, d F Y') }}</td>
													<td class="cell">{{ $data->author }}</td>
													<td class="cell text-center">{{ $data->poin }}</td>
												</tr>

												@endforeach

											@else

												<tr>
													<td colspan="7">
														<p style="text-align: center; margin: 20px 0;">Belum ada pelanggaran</p>
													</td>
												</tr>

											@endif
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        
			        <div class="tab-pane fade" id="orders-pending" role="tabpanel" aria-labelledby="orders-pending-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">NIS</th>
												<th class="cell">Nama</th>
												<th class="cell">Kelas</th>
												<th class="cell">Prestasi</th>
												<th class="cell">Waktu</th>
												<th class="cell">Oleh</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@if($prestasiSiswa->count())

												@foreach($prestasiSiswa as $data)

												<tr>
													<td class="cell">{{ $data->nis }}</td>
													<td class="cell">{{ $data->nama }}</td>
													<td class="cell">{{ strtoupper($data->kelas) }}</td>
													<td class="cell">{{ $data->prestasi }}</td>
													<td class="cell">{{ Carbon\Carbon::parse($data->created_at)->format('l, d F Y') }}</td>
													<td class="cell">{{ $data->author }}</td>
													<td class="cell text-center">{{ $data->poin }}</td>
												</tr>

												@endforeach

											@else

												<tr>
													<td colspan="7">
														<p style="text-align: center; margin: 20px 0;">Belum ada prestasi</p>
													</td>
												</tr>

											@endif
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-cancelled" role="tabpanel" aria-labelledby="orders-cancelled-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">NIS</th>
												<th class="cell">Nama</th>
												<th class="cell">Telepon</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											{{-- @foreach($xiimm as $data)

											<tr>
												<td class="cell">{{ $data->nis }}</td>
												<td class="cell">{{ $data->nama }}</td>
												<td class="cell">{{ $data->telepon }}</td>
												<td class="cell text-center">{{ $data->nis }}</td>
											</tr>

											@endforeach --}}
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->					

@endsection