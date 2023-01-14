<div class="position-relative mb-3">
    <div class="row g-3 justify-content-between">
	    <div class="col-auto">
	        <h1 class="app-page-title my-4">Forum Diskusi</h1>
	    </div>

	    <script>

			function hapusSemua(csrf) {
				if(confirm("Apakah anda yakin? tindakan ini akan menghapus seluruh pesan yang telah anda kirim")) {
					return document.location.href = "http://kpps.test/forum/delete-all?_token=" + csrf;
				} else {
					return 0;
				}
			}

			function refreshHalaman() {
				return $('#kolomChat').load('http://kpps.test/forum-refresh');
			}
	    	
	    </script>

	    <div class="col-auto">
	        <div class="page-utilities">
	        	<button class="btn app-btn-secondary btn my-4" onclick="return refreshHalaman();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
									  	<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
									  	<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
									</svg> Refresh</button>
			    <button class="action-link btn my-4" style="background-color: red; color: white;" onclick="return hapusSemua('{{ csrf_token() }}');">Hapus Semua Chat Saya</button>
	        </div><!--//page-utilities-->
	    </div>
    </div>
</div>

@foreach($data as $forum)

    <div class="app-card app-card-notification shadow-lg mb-4 rounded-4" style="overflow: hidden;">
	    <div class="app-card-header px-4 py-3">
	        <div class="row g-3 align-items-center">
		        <div class="col-12 col-lg-auto text-center text-lg-start">						        
	                <div class="app-icon-holder" style="background-color: #F5F6FE;">
						<svg style="color: blue;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
					</div><!--//app-icon-holder-->
		        </div><!--//col-->
		        <div class="col-12 col-lg-auto text-center text-lg-start">
			        {{-- <div class="notification-type mb-2"><span class="badge bg-info">Project</span></div> --}}

			        @if($forum->author === auth()->user()->name)
			        	<h4 class="notification-title mb-1">Anda</h4>
			        @else
			        	<h4 class="notification-title mb-1">{{ $forum->author }}</h4>
			        @endif
			        
			        <ul class="notification-meta list-inline mb-0">
				        <li class="list-inline-item"> {{ Carbon\Carbon::parse($forum->created_at)->diffForHumans() }}</li>
			        </ul>
			   
		        </div><!--//col-->
	        </div><!--//row-->
	    </div><!--//app-card-header-->
	    <div class="app-card-body p-4">
		    <div class="notification-content">{{ $forum->pesan }}</div>
	    </div><!--//app-card-body-->

	    @if($forum->author === auth()->user()->name)

	    <script>

			function hapusForum(id, csrf) {
				if(confirm("Hapus Pesan?")) {
					return document.location.href = "http://kpps.test/forum/delete?id=" + id + "&_token=" + csrf;
				} else {
					return 0
				}
			}
	    	
	    </script>

		    <div class="app-card-footer px-4 py-3" style="background-color: blue;">
			    <button class="action-link btn" style="color: white; font-weight: bolder; width: 100%;" onclick="return hapusForum('{{ $forum->id }}', '{{ csrf_token() }}');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg> Hapus</button>
		    </div><!--//app-card-footer-->

		@else

		@endif

	</div><!--//app-card-->

@endforeach