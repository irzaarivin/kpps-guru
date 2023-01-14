@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Multimedia</h1>
				    </div>
			    </div><!--//row-->
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">X MM 1</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">X MM 2</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">XI MM</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">XII MM</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">NIS</th>
												<th class="cell">Nama</th>
												<th class="cell">Telepon</th>
												<th class="cell text-center">Poin</th>
												<th class="cell text-center"></th>
											</tr>
										</thead>
										<tbody>

											@foreach($xmm1 as $data)

											<tr>
												<td class="cell">{{ $data->nis }}</td>
												<td class="cell">{{ $data->nama }}</td>
												<td class="cell">{{ $data->telepon }}</td>
												<td class="cell text-center">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">
													<form action="{{ env('APP_URL') }}/student" method="POST">
														@csrf
														<button class="btn app-btn-secondary" name="idSiswa" value="{{ $data->id }}">Lihat</button>
													</form>
												</td>
											</tr>

											@endforeach
		
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
												<th class="cell">Telepon</th>
												<th class="cell text-center">Poin</th>
												<th class="cell text-center"></th>
											</tr>
										</thead>
										<tbody>

											@foreach($xmm2 as $data)

											<tr>
												<td class="cell">{{ $data->nis }}</td>
												<td class="cell">{{ $data->nama }}</td>
												<td class="cell">{{ $data->telepon }}</td>
												<td class="cell text-center">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">
													<form action="{{ env('APP_URL') }}/student" method="POST">
														@csrf
														<button class="btn app-btn-secondary" name="idSiswa" value="{{ $data->id }}">Lihat</button>
													</form>
												</td>
											</tr>

											@endforeach
		
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
												<th class="cell">Telepon</th>
												<th class="cell text-center">Poin</th>
												<th class="cell text-center"></th>
											</tr>
										</thead>
										<tbody>

											@foreach($ximm as $data)

											<tr>
												<td class="cell">{{ $data->nis }}</td>
												<td class="cell">{{ $data->nama }}</td>
												<td class="cell">{{ $data->telepon }}</td>
												<td class="cell text-center">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">
													<form action="{{ env('APP_URL') }}/student" method="POST">
														@csrf
														<button class="btn app-btn-secondary" name="idSiswa" value="{{ $data->id }}">Lihat</button>
													</form>
												</td>
											</tr>

											@endforeach
		
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
												<th class="cell text-center"></th>
											</tr>
										</thead>
										<tbody>

											@foreach($xiimm as $data)

											<tr>
												<td class="cell">{{ $data->nis }}</td>
												<td class="cell">{{ $data->nama }}</td>
												<td class="cell">{{ $data->telepon }}</td>
												<td class="cell text-center">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">
													<form action="{{ env('APP_URL') }}/student" method="POST">
														@csrf
														<button class="btn app-btn-secondary" name="idSiswa" value="{{ $data->id }}">Lihat</button>
													</form>
												</td>
											</tr>

											@endforeach
		
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