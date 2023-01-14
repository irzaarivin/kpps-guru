@extends('layouts.main')
    
@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Pelanggaran</h1>
				    </div>
				    <div class="col-auto">
					     <div class="page-utilities">
						    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
							    <div class="col-auto">
								    <form class="table-search-form row gx-1 align-items-center" action="#" method="GET">
					                    <div class="col-auto">
					                        <input type="text" id="search-orders" name="search" class="form-control search-orders" placeholder="Search" value="{{ request('search') }}">
					                    </div>
					                    <div class="col-auto">
					                        <button type="submit" class="btn app-btn-secondary">Search</button>
					                    </div>
					                </form>
					                
							    </div><!--//col-->
						    </div><!--//row-->
					    </div><!--//table-utilities-->
				    </div><!--//col-auto-->
			    </div><!--//row-->
			    
			    <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
				    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Semua</a>
				    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Kelakuan</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Kerajinan</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Kerapian</a>
				    <a class="flex-sm-fill text-sm-center nav-link" id="orders-violations-tab" data-bs-toggle="tab" href="#orders-violations" role="tab" aria-controls="orders-violations" aria-selected="false">Kebersihan</a>
				</nav>
				
				
				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Id</th>
												<th class="cell">Aspek</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@if($semua->count())

												@foreach($semua as $data)

												<tr>
													<td class="cell">{{ $data->id }}</td>
													<td class="cell">{{ $data->aspek }}</td>
													<td class="cell">{{ $data->pelanggaran }}</td>
													<td class="cell text-center">{{ $data->poin }}</td>
												</tr>

												@endforeach

											@else

												<tr>
													<td colspan="4" class="cell text-center pt-5 pb-5"><h4>Pelanggaran tidak ditemukan</h4></td>
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
												<th class="cell">Id</th>
												<th class="cell">Aspek</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@foreach($dataKelakuan as $data)

											<tr>
												<td class="cell">{{ $data->id }}</td>
												<td class="cell">{{ $data->aspek }}</td>
												<td class="cell">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">{{ $data->poin }}</td>
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
												<th class="cell">Id</th>
												<th class="cell">Aspek</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@foreach($dataKerajinan as $data)

											<tr>
												<td class="cell">{{ $data->id }}</td>
												<td class="cell">{{ $data->aspek }}</td>
												<td class="cell">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">{{ $data->poin }}</td>
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
												<th class="cell">Id</th>
												<th class="cell">Aspek</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@foreach($dataKerapian as $data)

											<tr>
												<td class="cell">{{ $data->id }}</td>
												<td class="cell">{{ $data->aspek }}</td>
												<td class="cell">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">{{ $data->poin }}</td>
											</tr>

											@endforeach
		
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
			        </div><!--//tab-pane-->
			        <div class="tab-pane fade" id="orders-violations" role="tabpanel" aria-labelledby="orders-violation-tab">
					    <div class="app-card app-card-orders-table mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Id</th>
												<th class="cell">Aspek</th>
												<th class="cell">Pelanggaran</th>
												<th class="cell text-center">Poin</th>
											</tr>
										</thead>
										<tbody>

											@foreach($dataKebersihan as $data)

											<tr>
												<td class="cell">{{ $data->id }}</td>
												<td class="cell">{{ $data->aspek }}</td>
												<td class="cell">{{ $data->pelanggaran }}</td>
												<td class="cell text-center">{{ $data->poin }}</td>
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