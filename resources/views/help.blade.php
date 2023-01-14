@extends('layouts.main')

@section('content')
    
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl" id="kolomMasukan">

				<script>
					
					function tanggapan() {
						return $('#kolomMasukan').load('{{ env('APP_URL') }}/help-masukan');
					}

				</script>
			    
			    <h1 class="app-page-title">Pusat Bantuan</h1>
                <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-3">
				       <h4 class="app-card-title">Pertanyaan yang biasanya ditanyakan</h4>
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4 pt-0">
					    <div id="faq1-accordion" class="faq1-accordion faq-accordion accordion">
						    
						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-1">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-1" aria-expanded="false" aria-controls="faq1-1">
							        Apakah saya bisa membagikan file untuk publik?
							      </button>
							    </h2>
							    <div id="faq1-1" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-1">
							        <div class="accordion-body text-start p4">
							            Anda bisa membagikan filenya secara publik, anda hanya perlu memilih visibilitas "Publik" pada formulir pengunggahan file.
							        </div>
							    </div>
							</div><!--//accordion-item-->
						    
						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-2">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-2" aria-expanded="false" aria-controls="faq1-2">
							        Apakah saya bisa menyimpan file hanya untuk diri saya sendiri?
							      </button>
							    </h2>
							    <div id="faq1-2" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-2">
							        <div class="accordion-body text-start p4">
							            Anda dapat menyimpan file anda tanpa terlihat oleh orang lain, anda hanya perlu memilihi visibilitas "Pribadi" pada formulir pengunggahan file.
							        </div>
							    </div>
							</div><!--//accordion-item-->
						    
						    
						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-3">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-3" aria-expanded="false" aria-controls="faq1-3">
							        Apakah saya bisa menghapus file milik orang lain?
							      </button>
							    </h2>
							    <div id="faq1-3" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-3">
							        <div class="accordion-body text-start p4">
							            Anda tidak memiliki akses untuk menghapus file orang lain, itu diluar hak anda sebagai pengguna 65KPPS.
							        </div>
							    </div>
							</div><!--//accordion-item-->
							
							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-4">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-4" aria-expanded="false" aria-controls="faq1-4">
							        Apakah saya bisa mengganti password dari akun yang saya miliki?
							      </button>
							    </h2>
							    <div id="faq1-4" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-4">
							        <div class="accordion-body text-start p4">
							            Developer sangat menyarankan hal tersebut agar data anda tetap terjaga. Anda dapat mengganti password anda kapanpun anda mau pada menu <a href="account">"Akun"</a> disamping. Namun, anda harus memasukan password anda yang lama terbih dahulu untuk memverifikasi bahwa itu adalah benar-benar anda.
							        </div>
							    </div>
							</div><!--//accordion-item-->

							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq1-heading-5">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq1-5" aria-expanded="false" aria-controls="faq1-5">
							        Mengapa saya harus login kembali setelah saya menutup browser?
							      </button>
							    </h2>
							    <div id="faq1-5" class="accordion-collapse collapse border-0" aria-labelledby="faq1-heading-5">
							        <div class="accordion-body text-start p4">
							            Itu karena anda tidak mencentang kolom "Remember Me" pada halaman login. Demi kenyamanan anda, Developer sudah menyediakan fitur "Remember Me" untuk anda agar anda tidak harus login kembali setelah menutup browser atau mematikan komputer/laptop anda.
							        </div>
							    </div>
							</div><!--//accordion-item-->		
							                  
	                    </div><!--//faq1-accordion-->
				    </div><!--//app-card-body-->
				</div><!--//app-card-->
			    <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-3">
				       <h4 class="app-card-title">Pemecahan Masalah</h4>
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4 pt-0">
					    <div id="faq2-accordion" class="faq2-accordion faq-accordion accordion">
                            <div class="accordion-item">
							    <h2 class="accordion-header" id="faq2-heading-1">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2-1" aria-expanded="false" aria-controls="faq2-1">
							        Chat saya pada forum tidak dapat terikirim
							      </button>
							    </h2>
							    <div id="faq2-1" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-1">
							        <div class="accordion-body text-start p4">
							            Harap cek koneksi internet anda, kemudian refresh halaman tersebut.
							        </div>
							    </div>
							</div><!--//accordion-item-->
						    
						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq2-heading-2">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2-2" aria-expanded="false" aria-controls="faq2-2">
							        Saya tidak dapat mengunggah file
							      </button>
							    </h2>
							    <div id="faq2-2" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-2">
							        <div class="accordion-body text-start p4">
							            Perlu diketahui bahwa developer membatasi ukuran file hanya sebesar 20 Mb saja. Jika ukuran file melebihi batas maksimum tersebut, maka file tidak akan terunggah.
							        </div>
							    </div>
							</div><!--//accordion-item-->
						    
						    
						    <div class="accordion-item">
							    <h2 class="accordion-header" id="faq2-heading-3">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2-3" aria-expanded="false" aria-controls="faq2-3">
							        Saya tidak dapat merubah password akun saya pribadi
							      </button>
							    </h2>
							    <div id="faq2-3" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-3">
							        <div class="accordion-body text-start p4">
							            Cobalah untuk merefresh halamannya. Jika masalah masih berlanjut, cobalah untuk <a href="logout">logout</a> kemudian login kembali. Mungkin anda lupa dengan password anda yang lama.
							        </div>
							    </div>
							</div><!--//accordion-item-->
							
							<div class="accordion-item">
							    <h2 class="accordion-header" id="faq2-heading-4">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2-4" aria-expanded="false" aria-controls="faq2-4">
							        Saya tidak dapat menyalin pesan di forum
							      </button>
							    </h2>
							    <div id="faq2-4" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-4">
							        <div class="accordion-body text-start p4">
							            Mohon maaf atas ketidaknyamanan anda, saat ini developer sedang berusaha untuk memecahkan masalah yang anda alami.
							        </div>
							    </div>
							</div><!--//accordion-item-->
							
							{{-- <div class="accordion-item">
							    <h2 class="accordion-header" id="faq2-heading-5">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq2-5" aria-expanded="false" aria-controls="faq5">
							        Can I viverra sit amet quam eget lacinia?
							      </button>
							    </h2>
							    <div id="faq2-5" class="accordion-collapse collapse border-0" aria-labelledby="faq2-heading-5">
							        <div class="accordion-body text-start p4">
							            Anim pariatur cliche reprehenderit, enim eiusmod high life
	                                    accusamus terry richardson ad squid. 3 wolf moon officia
	                                    aute, non cupidatat skateboard dolor brunch. Food truck
	                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
	                                    sunt aliqua put a bird on it squid single-origin coffee
	                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
	                                    helvetica, craft beer labore wes anderson cred nesciunt
	                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
	                                    Leggings occaecat craft beer farm-to-table, raw denim
	                                    aesthetic synth nesciunt you probably haven't heard of them
	                                    accusamus labore sustainable VHS.
							        </div>
							    </div>
							</div> --}}<!--//accordion-item-->
							                     
	                    </div><!--//faq2-accordion-->
				    </div><!--//app-card-body-->
				</div><!--//app-card-->
				{{-- <div class="app-card app-card-accordion shadow-sm mb-4">
				    <div class="app-card-header p-3">
				       <h4 class="app-card-title">Payment</h4>
				    </div> --}}<!--//app-card-header-->
				    {{-- <div class="app-card-body p-4 pt-0">
					    <div id="faq3-accordion" class="faq3-accordion faq-accordion accordion">
                            <div class="accordion-item">
							    <h2 class="accordion-header" id="faq3-heading-1">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq3-1" aria-expanded="false" aria-controls="faq3-1">
							        How to vegan excepteur butcher vice lomo?
							      </button>
							    </h2>
							    <div id="faq3-1" class="accordion-collapse collapse border-0" aria-labelledby="faq3-heading-1">
							        <div class="accordion-body text-start p4">
							            Anim pariatur cliche reprehenderit, enim eiusmod high life
	                                    accusamus terry richardson ad squid. 3 wolf moon officia
	                                    aute, non cupidatat skateboard dolor brunch. Food truck
	                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
	                                    sunt aliqua put a bird on it squid single-origin coffee
	                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
	                                    helvetica, craft beer labore wes anderson cred nesciunt
	                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
	                                    Leggings occaecat craft beer farm-to-table, raw denim
	                                    aesthetic synth nesciunt you probably haven't heard of them
	                                    accusamus labore sustainable VHS.
							        </div>
							    </div>
							</div> --}}<!--//accordion-item-->
						    
						    {{-- <div class="accordion-item">
							    <h2 class="accordion-header" id="faq3-heading-2">
							      <button class="accordion-button btn btn-link" type="button" data-bs-toggle="collapse"  data-bs-target="#faq3-2" aria-expanded="false" aria-controls="faq3-2">
							        Can I raw denim aesthetic synth nesciunt?
							      </button>
							    </h2>
							    <div id="faq3-2" class="accordion-collapse collapse border-0" aria-labelledby="faq3-heading-2">
							        <div class="accordion-body text-start p4">
							            Anim pariatur cliche reprehenderit, enim eiusmod high life
	                                    accusamus terry richardson ad squid. 3 wolf moon officia
	                                    aute, non cupidatat skateboard dolor brunch. Food truck
	                                    quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
	                                    sunt aliqua put a bird on it squid single-origin coffee
	                                    nulla assumenda shoreditch et. Nihil anim keffiyeh
	                                    helvetica, craft beer labore wes anderson cred nesciunt
	                                    sapiente ea proident. Ad vegan excepteur butcher vice lomo.
	                                    Leggings occaecat craft beer farm-to-table, raw denim
	                                    aesthetic synth nesciunt you probably haven't heard of them
	                                    accusamus labore sustainable VHS.
							        </div>
							    </div>
							</div> --}}<!--//accordion-item-->
                                                                              
	                    {{-- </div> --}}<!--//faq3-accordion-->
				    {{-- </div> --}}<!--//app-card-body-->
				{{-- </div> --}}<!--//app-card-->
				
				<div class="row g-4">
					<div class="col-12 col-md-6">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder icon-holder-mono">
										    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-headset" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1a5 5 0 0 0-5 5v4.5H2V6a6 6 0 1 1 12 0v4.5h-1V6a5 5 0 0 0-5-5z"/>
  <path d="M11 8a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V8zM5 8a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V8z"/>
  <path fill-rule="evenodd" d="M13.5 8.5a.5.5 0 0 1 .5.5v3a2.5 2.5 0 0 1-2.5 2.5H8a.5.5 0 0 1 0-1h3.5A1.5 1.5 0 0 0 13 12V9a.5.5 0 0 1 .5-.5z"/>
  <path d="M6.5 14a1 1 0 0 1 1-1h1a1 1 0 1 1 0 2h-1a1 1 0 0 1-1-1z"/>
</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Butuh lebih banyak bantuan?</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4">
							    
							    <div class="intro mb-3">Jika anda tidak menemukan solusi dari masalah yang anda alami, silahkan hubungi pihak developer.</div>
							    <ul class="list-unstyled">
								    <li><strong>Telepon :</strong> <a href="tel:6281388868788" target="_blank">0813-8886-8788</a></li>
								    <li><strong>Email :</strong> <a href="mailto:irzaarivin2005@gmail.com" target="_blank">support.65kpps@gmail.com</a></li>
								    <li><strong>Instagram :</strong> <a href="https://instagram.com/coders_kocar_kacir" target="_blank">@coders_kocar_kacir</a></li>
							    </ul>
						    </div><!--//app-card-body-->
						    <div class="app-card-footer p-4 mt-auto">
							   <a class="btn app-btn-primary" href="https://wa.me/6281388868788">Whatsapp</a>
						    </div><!--//app-card-footer-->
						</div><!--//app-card-->
					</div><!--//col-->
					<div class="col-12 col-md-6">
						<div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
						    <div class="app-card-header p-3 border-bottom-0">
						        <div class="row align-items-center gx-3">
							        <div class="col-auto">
								        <div class="app-icon-holder icon-holder-mono">
										    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-heart" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12ZM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2Z"/>
  <path d="M8 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
</svg>
									    </div><!--//icon-holder-->
						                
							        </div><!--//col-->
							        <div class="col-auto">
								        <h4 class="app-card-title">Memiliki masukan?</h4>
							        </div><!--//col-->
						        </div><!--//row-->
						    </div><!--//app-card-header-->
						    <div class="app-card-body px-4">
							    
							    <div class="intro mb-3">Jika anda memiliki masukan mengenai aplikasi ini, silahkan berikan masukan anda, tanggapan anda sangat kami hargai.</div>
							    <ul class="list-unstyled">
								    <li>
									    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	</svg> 
                                        Anda telah berkontribusi.
                                    </li>
                                    <li>
									    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	</svg> 
                                        Bermanfaat bagi pengguna lainnya.
                                    </li>
                                     <li>
									    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
	</svg> 
                                        Membuat developer menjadi lebih baik lagi.
                                    </li>

							    </ul>
						    </div><!--//app-card-body-->
						    <div class="app-card-footer p-4 mt-auto">
							   <button class="btn app-btn-primary" onclick="return tanggapan();">Beri masukan</button>
						    </div><!--//app-card-footer-->
						</div><!--//app-card-->
					</div><!--//col-->
				</div><!--//row-->
			    
		    </div><!--//container-fluid-->

		    @if(session('success'))
	
				<script>
					$('#kolomMasukan').load('{{ env('APP_URL') }}/help-masukan');
					alert("Tanggapan anda berhasil dikirim");
				</script>

			@endif

	    </div><!--//app-content-->
	    
    </div><!--//app-wrapper-->    					

@endsection