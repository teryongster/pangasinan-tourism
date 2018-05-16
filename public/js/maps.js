$('.map-selector').change(function(){
    var selected = $(this).find(':selected').val()
    reloadMap(selected)
})

function initMap() {
	var ourLocation = {lat: 16.0355673, lng: 120.3281712}
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 10,
		center: ourLocation
	})
	var marker = new google.maps.Marker({
		position: ourLocation,
		map: map
	})
}

function reloadMap(category){
	var request = $.ajax({
        url: '/reload-map/category/'+category,
        type: "POST",           
        data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
        },    
        beforeSend: function(data){
            showLoading()
        },
        success: function(data){
        	if(data == 1){
        		var ourLocation = {lat: 16.0355673, lng: 120.3281712}
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 10,
					center: ourLocation
				})
				var marker = new google.maps.Marker({
					position: ourLocation,
					map: map
				})
        	}else{
        		var firstLocation = {lat: parseFloat(data[0].lat), lng: parseFloat(data[0].long)}
	        	var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 10,
					center: firstLocation
				})

				$.each(data, function(index, value){
					var location = {lat: parseFloat(data[index].lat), lng: parseFloat(data[index].long)}
	        		var marker = new google.maps.Marker({
						position: location,
						map: map
					})
					console.log(location)
	        	})
        	}

			hideLoading()
        },
        error: function(data){
            var errors = ""
            for(datos in data.responseJSON){
                errors += data.responseJSON[datos]+'\n'
            }
            alert(errors)
        }
    })

	// $.each(locations, function(index, value){

	// })
}

function showLoading(){
    $('.loadingModal').fadeIn()
}
function hideLoading(){
    $('.loadingModal').fadeOut()
}