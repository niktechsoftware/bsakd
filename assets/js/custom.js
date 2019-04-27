// JavaScript Document

$(document).ready(function(){
	
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );

	// Nav Custom Script...............................
	
	  $(".mega-dropdown-menu .nav-tabs a").hover(function(e){
        $(this).tab('show');
    });
	
		// Onload Popup
	$("#homepopup").modal('show');
	
	// Contact Form.
	$("#quickcontact").css({"zIndex":"1038"});
	$("#quickcontact .quick-cont-but").click(function(){
		   $("#quickcontact").css({"zIndex":"1042"});
		   $(this).css({"display":"none"});
		}
	);
	$('#myModal').on('hidden.bs.modal', function (e) {
       e.preventDefault();
	   $("#quickcontact .quick-cont-but").show();
	   $("#quickcontact").css({"zIndex":"1038"});
     })
	 
	 // Test for Full Screen
	 var wh = $(window).height();
	 $(".full-screen").css("height",wh);
	 
	 // Small Menu
	 $( '#dl-menu' ).dlmenu();
	 
	 
	 
	 
	
});


