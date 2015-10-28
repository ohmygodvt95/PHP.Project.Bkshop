 /**
 *  @author Le Vinh Thien 
 *  @email  ohmygodvt95@gmail.com
 * @copyright Semantic Innovation Group 31/8/2015
 **/               
                var base_url = $('.navbar-brand').attr('base');
                var map;
                var myLatLng = {
                    lat: 21.006271,
                    lng: 105.841465
                };
                var markers = [];
	            var markercur;
                var markerprev;
                var flightPath;
                var flightPlanCoordinates = [
				    {lat: 37.772, lng: -122.214},
				    {lat: 21.291, lng: -157.821},
				    {lat: -18.142, lng: 178.431},
				    {lat: -27.467, lng: 153.027}
				  ];
                // init
                function initMap() {
                    map = new google.maps.Map(document.getElementById('map'), {
                        center: myLatLng,
                        zoom: 13
                    });
                    markerprev = new google.maps.Marker({
                        map: map,
                        animation: google.maps.Animation.DROP
                    });
					flightPath = new google.maps.Polyline({
						  path: flightPlanCoordinates,
						  geodesic: true,
					    strokeColor: '#FF0000',
					    strokeOpacity: 1.0,
					    strokeWeight: 2
					});
					flightPath.setMap(map);
                }
                // marker
                function addMarker(myLatLng, title) {
                    var marker = new google.maps.Marker({
                        position: myLatLng,
                        map: map,
                        animation: google.maps.Animation.DROP,
                        title: title
                    });
                    markers.push(marker);
                }
                // Sets the map on all markers in the array.
                function setMapOnAll(map) {
                    for (var i = 0; i < markers.length; i++) {
                        markers[i].setMap(map);
                    }
                }
                // Removes the markers from the map, but keeps them in the array.
                function clearMarkers() {
                    setMapOnAll(null);
                }
                // Shows any markers currently in the array.
                function showMarkers() {
                    setMapOnAll(map);
                }
                // Deletes all markers in the array by removing references to them.
                function deleteMarkers() {
                    clearMarkers();
                    markers = [];
                }

                function changeData() {
                		var codeline = $('.busline').val();
                        var way = $('.bus-way').val();
                        var urlAjax = $('.navbar-brand').attr('href') + "ajax/";
                        if (codeline != "0") {
                        	if(way == "0"){
                        		urlAjax +="gobusstop/" + codeline;
                        	}
                        	else{
                        		urlAjax +="returnbusstop/" + codeline;
                        	}
                            $('.bus-stop').html('<img src="http://www.spectraforce.com/Images/loading.gif">');
                            $.post(urlAjax, {
                                url: urlAjax,
                            }, function(data, textStatus, xhr) {
                                $('.bus-stop').html("");
                                $('.bus-stop').html(data);
                                deleteMarkers();
                                markerprev.setMap(null);

                                var lat = $('.latlng-center').attr("lat");
                                var lng = $('.latlng-center').attr("lng");
                                myLatLng.lat = parseFloat(lat);
                                myLatLng.lng = parseFloat(lng);
                                map.setCenter(myLatLng);
                                for (var i = 0; i < $('.latlng-center').attr("total"); i++) {
                                    var dom = "#marker-" + i;
                                    var lat = $(dom).attr("lat");
                                    var lng = $(dom).attr("lng");
                                    var title = $(dom).attr("title");
                                    myLatLng.lat = parseFloat(lat);
                                    myLatLng.lng = parseFloat(lng);
                                    addMarker(myLatLng, title);
                                    var path = flightPath.getPath();
                                    //path.push({lat: lat, lng: lng});
                                }
                                //flightPath.setMap(map);
                            });
                        }
                }
                //
                $('.busline').change(function(event) {
                	changeData();
                 });
                $('.bus-way').change(function(event) {
                	changeData();
                 });
					//
					$(document).on('click', '.bus-stop ul li', function() {
                        markerprev.setMap(null);
                        var image = base_url + 'asset/images/marker-icon.png';
                        var lat = $(this).attr("lat");
                        var lng = $(this).attr("lng");
                        var title = $(this).attr("title");
                        myLatLng.lat = parseFloat(lat);
                        myLatLng.lng = parseFloat(lng);
                        var markercur = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            animation: google.maps.Animation.DROP,
                            title: title,
                            icon: image,
                            zZindex: myLatLng
                        });
                        markerprev = markercur;
                    });