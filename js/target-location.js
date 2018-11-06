    $( window ).load(function() {
$.get("http://ipinfo.io", function(response) {
    if(response.region == "Arizona") {
        $("#phonenumber").html("928.468.3902");
	$("#phonenumber").attr("href","tel:+19284683902");
	$("#city-state").html("Lake Havasu City Arizona");
    }
    else if(response.region == "California") {
        $("#phonenumber").html("951.382.0209");
	$("#phonenumber").attr("href", "tel:+19513820209");
	$("#img-loc").attr("src","http://havawebsite.com/wp-content/uploads/2016/03/WelcomeHavaWebsiteGraphicSouthernCalifornia.png");
    }
    else {
        $("#phonenumber").html("951.382.0209");
	$("#phonenumber").attr("href", "tel:+19513820209");
	$("#img-loc").attr("src","http://havawebsite.com/wp-content/uploads/2016/03/WelcomeHavaWebsiteGraphicSouthernCalifornia.png");
    }
}, "jsonp");
});
