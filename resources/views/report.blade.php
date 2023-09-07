@extends('layouts.main')
    
@section('content')

	<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <h1 class="app-page-title">Laporan</h1>
			    <div class="app-card shadow-sm mb-4 border-left-decoration">
				    <div class="inner">
					    <div class="app-card-body p-4">
						    <div class="row gx-5 gy-3">
						        <div class="col-12 col-lg-9">
							        <div>Untuk kebutuhan data laporan yang lebih spesifik, silahkan hubungi pihak developer</div>
							    </div><!--//col-->
							    <div class="col-12 col-lg-3">
								    <a class="btn app-btn-primary" href="help"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-up-right-square me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path fill-rule="evenodd" d="M5.172 10.828a.5.5 0 0 0 .707 0l4.096-4.096V9.5a.5.5 0 1 0 1 0V5.525a.5.5 0 0 0-.5-.5H6.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
</svg>Lebih lanjut</a>
							    </div><!--//col-->
						    </div><!--//row-->
	
					    </div><!--//app-card-body-->
					    
				    </div><!--//inner-->
			    </div><!--//app-card-->
			    <div class="row g-4 mb-4" id="awokawokawok">
			        <div class="col-12 col-lg-6">
					    <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3 border-0">
						        <h4 class="app-card-title">Area Line Chart Demo</h4>
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-4">					   
						        <div class="chart-container">
				                    <canvas id="chart-line" ></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
			        </div><!--//col-->
		            <div class="col-12 col-lg-6">		        
				        <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3 border-0">
						        <h4 class="app-card-title">Pendaftaran Digital KPPS</h4>
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-4">					   
						        <div class="chart-container">
				                    <canvas id="chart-bar" ></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
		            </div><!--//col-->
		            <div class="col-12 col-lg-6">		        
				        <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3 border-0">
						        <h4 class="app-card-title">Prestasi Per Jurusan</h4>
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-4">					   
						        <div class="chart-container">
				                    <canvas id="chart-pie" ></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
		            </div><!--//col-->
		            <div class="col-12 col-lg-6">		        
				        <div class="app-card app-card-chart h-100 shadow-sm">
					        <div class="app-card-header p-3 border-0">
						        <h4 class="app-card-title">Pelanggaran Per Jurusan</h4>
					        </div><!--//app-card-header-->
					        <div class="app-card-body p-4">					   
						        <div class="chart-container">
				                    <canvas id="chart-doughnut" ></canvas>
						        </div>
					        </div><!--//app-card-body-->
				        </div><!--//app-card-->
		            </div><!--//col-->
			    </div><!--//row-->
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    <button id="generateThis" onclick="printReport()">Awok</button>
    </div><!--//app-wrapper-->

    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/charts-demo.js"></script>
    <script src="assets/js/html2pdf.bundle.min.js"></script>
    <script src="assets/js/html2canvas.min.js"></script>

    <script>

		'use strict';

		/* Chart.js docs: https://www.chartjs.org/ */

		window.chartColors = {
			green: '#75c181', // rgba(117,193,129, 1)
			blue: '#5b99ea', // rgba(91,153,234, 1)
			gray: '#a9b5c9',
			text: '#252930',
			border: '#e7e9ed'
		};

		var barChartConfig = {
			type: 'bar',

			data: {
				labels: ['XII MM', 'XII RPL', 'XII PFTV', 'XI MM', 'XI RPL', 'XI PFTV', 'X MM 1', 'X RPL 1', 'X PFTV 1', 'X MM 2', 'X RPL 2', 'X PFTV 2'],
				datasets: [{
					label: 'Kelas',
					backgroundColor: "rgba(117,193,129,0.8)", 
					hoverBackgroundColor: "rgba(117,193,129,1)",
					
					data: [
						{{ $statXiiMm }},
						{{ $statXiiRpl }},
						{{ $statXiiPftv }},
						{{ $statXiMm }},
						{{ $statXiRpl }},
						{{ $statXiPftv }},
						{{ $statXMm1 }},
						{{ $statXRpl1 }},
						{{ $statXPftv1 }},
						{{ $statXMm2 }},
						{{ $statXRpl2 }},
						{{ $statXPftv2 }}
					]
				}]
			},
			options: {
				responsive: true,
				legend: {
					position: 'bottom',
					align: 'end',
				},

				tooltips: {
					mode: 'index',
					intersect: false,
					titleMarginBottom: 10,
					bodySpacing: 10,
					xPadding: 16,
					yPadding: 16,
					borderColor: window.chartColors.border,
					borderWidth: 1,
					backgroundColor: '#fff',
					bodyFontColor: window.chartColors.text,
					titleFontColor: window.chartColors.text,
					callbacks: {
		                label: function(tooltipItem, data) {	                 
			                return tooltipItem.value;   
		                }
		            },
					

				},
				scales: {
					xAxes: [{
						display: true,
						gridLines: {
							drawBorder: false,
							color: window.chartColors.border,
						},

					}],
					yAxes: [{
						display: true,
						gridLines: {
							drawBorder: false,
							color: window.chartColors.borders,
						},
						ticks: {
				            beginAtZero: true,
				            userCallback: function(value, index, values) {
				                return value;  
				            }
				        },

						
					}]
				}
				
			}
		}

		var pieChartConfig = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						{{ $prestasiPftv }},
						{{ $prestasiRpl }},
						{{ $prestasiMm }},
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.blue,
						window.chartColors.gray,

					],
					label: 'Dataset 1'
				}],
				labels: [
					'PFTV',
					'RPL',
					'MM',
				]
			},
			options: {
				responsive: true,
				legend: {
					display: true,
					position: 'bottom',
					align: 'center',
				},

				tooltips: {
					titleMarginBottom: 10,
					bodySpacing: 10,
					xPadding: 16,
					yPadding: 16,
					borderColor: window.chartColors.border,
					borderWidth: 1,
					backgroundColor: '#fff',
					bodyFontColor: window.chartColors.text,
					titleFontColor: window.chartColors.text,
					
					/* Display % in tooltip - https://stackoverflow.com/questions/37257034/chart-js-2-0-doughnut-tooltip-percentages */
					callbacks: {
		                label: function(tooltipItem, data) {
							//get the concerned dataset
							var dataset = data.datasets[tooltipItem.datasetIndex];
							//calculate the total of this data set
							var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
							return previousValue + currentValue;
							});
							//get the current items value
							var currentValue = dataset.data[tooltipItem.index];
							//calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
							var percentage = Math.floor(((currentValue/total) * 100)+0.5);
							
							return percentage + "%";
					    },
		            },
					

				},
			}
		};

		var doughnutChartConfig = {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [
						{{ $pelanggaranPftv }},
						{{ $pelanggaranRpl }},
						{{ $pelanggaranMm }},
					],
					backgroundColor: [
						window.chartColors.green,
						window.chartColors.blue,
						window.chartColors.gray,

					],
					label: 'Dataset 1'
				}],
				labels: [
					'PFTV',
					'RPL',
					'MM',
				]
			},
			options: {
				responsive: true,
				legend: {
					display: true,
					position: 'bottom',
					align: 'center',
				},

				tooltips: {
					titleMarginBottom: 10,
					bodySpacing: 10,
					xPadding: 16,
					yPadding: 16,
					borderColor: window.chartColors.border,
					borderWidth: 1,
					backgroundColor: '#fff',
					bodyFontColor: window.chartColors.text,
					titleFontColor: window.chartColors.text,
					
					animation: {
						animateScale: true,
						animateRotate: true
					},
					
					/* Display % in tooltip - https://stackoverflow.com/questions/37257034/chart-js-2-0-doughnut-tooltip-percentages */
					callbacks: {
		                label: function(tooltipItem, data) {
							//get the concerned dataset
							var dataset = data.datasets[tooltipItem.datasetIndex];
							//calculate the total of this data set
							var total = dataset.data.reduce(function(previousValue, currentValue, currentIndex, array) {
							return previousValue + currentValue;
							});
							//get the current items value
							var currentValue = dataset.data[tooltipItem.index];
							//calculate the precentage based on the total and current item, also this does a rough rounding to give a whole number
							var percentage = Math.floor(((currentValue/total) * 100)+0.5);
							
							return percentage + "%";
					    },
		            },
					

				},
			}
		};

		window.addEventListener('load', function(){
	
			// var lineChart = document.getElementById('chart-line').getContext('2d');
			// window.myLine = new Chart(lineChart, lineChartConfig);
			
			var barChart = document.getElementById('chart-bar').getContext('2d');
			window.myBar = new Chart(barChart, barChartConfig);
			
			var pieChart = document.getElementById('chart-pie').getContext('2d');
			window.myPie = new Chart(pieChart, pieChartConfig);
			
			var doughnutChart = document.getElementById('chart-doughnut').getContext('2d');
			window.myDoughnut = new Chart(doughnutChart, doughnutChartConfig);
			

		});	

    </script>

    <script>
    	
    	function printReport() {
	    	// var element = document.getElementById('awokawokawok');
			// var opt = {
			//   margin:       0,
			//   filename:     'myfile.pdf',
			//   image:        { type: 'jpeg', quality: 0.98 },
			//   html2canvas:  { scale: 5 },
			//   jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
			// };

			// // New Promise-based usage:
			
	    	// return html2pdf().set(opt).from(element).save();
	    	html2canvas(document.getElementById('awokawokawok')).then(canvas => {
			    document.body.appendChild(canvas)
			});

	    }

    </script>

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
		window.jsPDF = window.jspdf.jsPDF;
		var doc = new jsPDF();

		doc.html(document.getElementById("awokawokawok"), {
		   callback: function (doc) {
		     doc.save();
		   }
		});
	</script> --}}

	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>

	<script>
		// Render the canvas to an image
		var canvas = document.getElementById("awokawokawok");
		var imgData = canvas[0].toDataURL("image/png");

		// Create a new jsPDF instance
		var doc = new jsPDF();

		// Add the image to the PDF document
		doc.addImage(imgData, 'PNG', 10, 10);

		// Save the PDF document
		doc.save('canvas.pdf');
	</script> --}}

@endsection