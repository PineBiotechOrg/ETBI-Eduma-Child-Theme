
(function ($, etbi, etbi_core) {
    "use strict";

    var startTime = etbi.from,
    	endTime = etbi.until;

    function getRandomColor() {
	    var letters = '0123456789ABCDEF'.split('');
	    var color = '#';
	    for (var i = 0; i < 6; i++ ) {
	        color += letters[Math.floor(Math.random() * 16)];
	    }
	    return color;
	}

	function removeData(chart) {
	    chart.data.labels.pop();
	    chart.data.datasets = [];
	    chart.options.scales.xAxes[0].time.min = null;
	    chart.options.scales.xAxes[0].time.max = null;
	    chart.update();
	}

	function addData( chart, data ) {

		console.log( data );

		var datasets = chart.data.datasets,
			options = chart.options.scales.Yaxes.ticks;

		$.each( data.total_points, function( user_id, value ){		

			var data = [],
				user_name = value.user_name,
				color = getRandomColor();

    		$.each( value.credit.points, function( date, points ) {

    			data.push( {
    				x: date,
    				y: points
    			} );

    		} );

    		datasets.push( { 

    			label: user_name, 
    			data: data, 
    			borderWidth: 3, 
    			backgroundColor: color,
				borderColor: color,

    		} );	

		} );

		chart.options.scales.xAxes[0].time.min = data.from;
	    chart.options.scales.xAxes[0].time.max = data.until;

		console.log( datasets );

		chart.update();
	}

	function updateTable( data ) {

		var $progress_table = $('#progress-table'),
			$member_search = $( "#members_search" ),
			options = {
				valueNames: [ 'name', 'edu-points', 'server-points', 'period-total' ],
				page: 15,
				pagination: true
			};

		$progress_table.replaceWith( data.progress_table );

		var memberList = new List( 'members-progress-table-data', options );

		memberList.sort( 'period-total', {
			order: 'desc'
		} );

		$member_search.on( 'keyup', function() {

			 var searchString = $(this).val();
  			memberList.search(searchString);

		} );

	}


	function addAverageData( chart, data ) {

		console.log( data );

		var datasets = chart.data.datasets,
			events = [],
			edu_averages = [],
			server_averages = [];

		$.each( data.group_averages, function( date, value ){		

		    edu_averages.push( {
				x: date,
				y: value.average
			} );

		} );

		$.each( data.server_group_avg, function( date, value ){		

		    server_averages.push( {
				x: date,
				y: value.average
			} );

		} );
		if( data.hasOwnProperty('events') ) {

			$.each( data.events, function( date, value ){		

			    events.push( {
					x: date,
					y: value.average,
					title: value.title
				} );

			} );

			datasets.push( { 
				label: "Events",
				data: events, 
				borderWidth: 3, 
				backgroundColor: "#fb444420",
				borderColor: "#fb4444",
				pointRadius: 7,
				pointHoverRadius: 10,
				pointBackgroundColor: "#fb4444",
				pointHoverBackgroundColor: "#fb4444"

			} );

		}


		datasets.push( { 
			label: "Server Daily Averages",
			data: server_averages, 
			borderWidth: 3, 
			backgroundColor: "#cccccc80",
			borderColor: "#ccc",

		} );

		datasets.push( { 
			label: "Edu Daily Averages",
			data: edu_averages, 
			borderWidth: 3, 
			backgroundColor: "#ffb60680",
			borderColor: "#ffb606",

		} );

		chart.options.scales.yAxes[0].ticks.suggestedMax = data.group_log.range.max + 100;	

		console.log( datasets );

		chart.update();
	}
    //console.log( etbi.total_points );

	var ETBI_Progress = {

		init : function() {

		  var $doc = $(document),
		      $win = $(window);

		  this.get_user_progress = this.get_user_progress.bind(this);
		  this.add_user_data = this.add_user_data.bind(this);

		  $doc.on('click', '.user-progress-btn', this.get_user_progress);
		  $doc.on('click', '.etbi-modal.user_progress.is-visible .etbi-close-form', this.closeModal);
		  $doc.on('click', '.etbi-modal.user_progress.is-visible .overlay', this.closeModal);


		},
		closeModal: function(modal) {

			$('.etbi-modal.is-visible.user_progress').removeClass('is-visible');

		},
		get_user_progress : function( e ) {

		  e.preventDefault();

		  var user_id = $(e.target).closest('.user-progress-btn').data('user-id'),
		  	  $user_progress_modal = $('.etbi-modal.user_progress'),
		  	  $user_progress_modal_content_area = $('.etbi-modal.user_progress > .etbi-modal-container .modal-content-area'),
		  	  that = this;

		  $.ajax( {
		    url: ajaxurl,
		    type: 'post',
		    dataType : 'html',
		    data: {

		      'action'    : 'get_user_progress',
		      'user_id'   : user_id,
		      'from'      : startTime,
		      'until'     : endTime,
		      'group_id'  : etbi.group_id

		    },
		    beforeSend: function() {
		      $user_progress_modal.addClass("loading");
		      etbi_core.open_or_close_modal('.user_progress');
		      //$( "#overview-chart" ).opacity(0.5);              

		    },
		    error: function ( error, data, y) {
		      console.log( error, data, y );
		    },
		    success: function (response) {

		    $user_progress_modal.removeClass("loading");

		     var response = $.parseJSON( response ),
		     	 max_points = response.edu_points + 100;

		     console.log(response);

		     $user_progress_modal_content_area.html( response.html );

		    var $user_chart = document.getElementById( 'user-overview-chart' ).getContext("2d"),
				user_overview_chart = new Chart( $user_chart, {

			    type: "bar",
			    data: {
			        datasets: [],
			    },
			    options: {
			        scales: {
			            yAxes: [{
			            	label: 'Points',
			            	stacked: false,
			                ticks: {
			                    beginAtZero:true,
			                    suggestedMax: max_points + 100
			                }
			            }],
			            xAxes: [{
							type: 'time',
			                time: {
			                	parser: 'YYYY-MM-DD',
			                	unit: 'day',
			                	displayFormats: {
			                		day: 'MMM Do'
			                	},
			                	min: response.from,
			                	max: response.until
			                },
			                stacked: true,
			                ticks: {
			                	min: 0,
					            autoSkip: false
			                },
			                gridLines: {
				                offsetGridLines: true
				            },
				            barThickness: 'flex',
				            barPercentage: 0.3,
				            maxBarThickness: 60
			            }]
			        }
			    },
			    plugins: [{
			         beforeInit: function(chart) {
			            var time = chart.options.scales.xAxes[0].time, // 'time' object reference
			               timeDiff = moment(time.max).diff(moment(time.min), 'd'); // difference (in days) between min and max date
			            // populate 'labels' array
			            // (create a date string for each date between min and max, inclusive)
			            for (var i = 0; i <= timeDiff; i++) {
			               var _label = moment(time.min).add(i, 'd').format('YYYY-MM-DD');
			               chart.data.labels.push(_label);
			            }
			         }
			      }]
			});

		     that.add_user_data( user_overview_chart, response );

		     //  removeData( overview_chart );

		     //  //addData( overview_chart, response );
		     //  addAverageData( overview_chart, response );
		     //  $progress_dashboard.removeClass("loading");

		     //  updateTable( response );
		    }

		  } );

		},
		add_user_data : function( chart, data ) {

			console.log( data );

			var datasets = chart.data.datasets,
				events = [],
				edu_points = [],
				server_points = [];

			$.each( data.edu_points, function( date, value ){		

			    edu_points.push( {
					x: date,
					y: value
				} );

			} );

			$.each( data.server_points, function( date, value ){		

			    server_points.push( {
					x: date,
					y: value
				} );

			} );


			datasets.push( { 
				label: "Server Daily Points",
				data: server_points, 
				borderWidth: 3, 
				backgroundColor: "#cccccc",
				borderColor: "#ccc",

			} );

			datasets.push( { 
				label: "Edu Daily Points",
				data: edu_points, 
				borderWidth: 3, 
				backgroundColor: "#ffb606",
				borderColor: "#ffb606",

			} );


			chart.options.scales.yAxes[0].ticks.suggestedMax = 100;

			chart.options.scales.xAxes[0].time.min = data.from;
			chart.options.scales.xAxes[0].time.max = data.until;

			console.log( datasets );

			chart.update();			

		}

	};

    $(document).ready(function() {

    	console.log( etbi );

		var ctx = document.getElementById("overview-chart").getContext("2d"),
			$progress_dashboard = $("#progress-dashboard"),
			options = {
				valueNames: [ 'name', 'edu-points', 'server-points', 'period-total' ],
				page: 15,
				pagination: true
			};
		var memberList = new List( 'members-progress-table-data', options ),
			$member_search = $( "#members_search" );

		memberList.sort( 'period-total', {
			order: 'desc'
		} );

		$member_search.on( 'keyup', function() {

			 var searchString = $(this).val();
  			memberList.search(searchString);

		} );

		ETBI_Progress.init();

		var overview_chart = new Chart( ctx, {
		    type: "line",
		    data: {
		        datasets: [],
		    },
		    options: {
		        scales: {
		            yAxes: [{
		            	label: 'Points',
		                ticks: {
		                    beginAtZero:true,
		                    suggestedMax: etbi.group_log.range['max'] + 100
		                }
		            }],
		            xAxes: [{
						type: 'time',
		                time: {
		                	parser: 'YYYY-MM-DD',
		                	unit: 'day',
		                	displayFormats: {
		                		day: 'MMM Do'
		                	},
		                	min: null,
		                	max: null
		                },
		                ticks: {
		                	source: 'data'
		                }
		            }]
		        },
		        tooltips: {
			        callbacks: {
			            label: function(tooltipItem, data) {
			            	console.log( tooltipItem, data );
			            	if( tooltipItem.datasetIndex === 0 ) {
			            		return data.datasets[ tooltipItem.datasetIndex ].data[ tooltipItem.index ].title;
			            	}
			                return data.datasets[ tooltipItem.datasetIndex ].label + ': ' + tooltipItem.yLabel;
			            }
			        }
			    }
		    },
		    plugins: [{
		         beforeInit: function(chart) {
		            var time = chart.options.scales.xAxes[0].time, // 'time' object reference
		               timeDiff = moment(time.max).diff(moment(time.min), 'd'); // difference (in days) between min and max date
		            // populate 'labels' array
		            // (create a date string for each date between min and max, inclusive)
		            for (var i = 0; i <= timeDiff; i++) {
		               var _label = moment(time.min).add(i, 'd').format('YYYY-MM-DD');
		               chart.data.labels.push(_label);
		            }
		         }
		      }]
		});

		 //addData( overview_chart, etbi );	

		 addAverageData( overview_chart, etbi );	


		$('#date-range-picker').daterangepicker( {

			startDate: moment( etbi.from ),
			endDate: moment( etbi.until )

		}, function( start, end, label ) {

			startTime = start.format('YYYY-MM-DD');
			endTime = end.format('YYYY-MM-DD');

			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

			$.ajax({
                url: ajaxurl,
                type: 'post',
                dataType : 'html',
                data: {

                	'action'	: 'pick_date_range',
                	'from' 		: startTime,
                	'until'		: endTime,
                	'group_id'  : etbi.group_id

                },
                beforeSend: function() {
                	$progress_dashboard.addClass("loading");
					//$( "#overview-chart" ).opacity(0.5);        			

                },
                error: function ( error, data, y) {
                	console.log( error, data, y );
                },
                success: function (response) {

                   var response = $.parseJSON( response );

                    removeData( overview_chart );

                    //addData( overview_chart, response );
                    addAverageData( overview_chart, response );
                    $progress_dashboard.removeClass("loading");

                    updateTable( response );
                }
            });

		} );

    } );


})(jQuery, etbi, ETBI_Core );