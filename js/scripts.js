//javascript functions


$(document).ready(function(){

	document.querySelector('#menu-item-85 a').innerHTML = 'Linke';

//           ***   BANER   ***

	var bannerToggle = (function(){

		function replaceAll(str){
			return str=str.replace('ę','e')
						  .replace('ż','z')
						  .replace('Ż','Z')
						  .replace('Ś','S')
						  .replace('ś','s')
						  .replace('ł','l')
						  .replace('ł','l')
						  .replace('ą','a')
						  .replace('ó','o')
						  .replace(' ','')
						  .replace(' ','')
						  .replace(' ','');
		}

	  	var baner = document.getElementById('banner');
		var elem = document.querySelector('.container h2').innerHTML;
		elem=replaceAll(elem);
	  	baner.style.backgroundImage="url(../wp-content/themes/Motyw/photos/"+elem+".jpg)";
	})();



	//           ***   NAZWA BANER  ***

	document.querySelector('.name').innerHTML = document.querySelector('h2').innerHTML;
	
	

	// ****************** Get the modal **********************
	var mod = $('#modal');
	// Get the button that opens the modal
	var btn = $('#button');
	var rozpo = $('.rozpo');
	// Get the <span> element that closes the modal
	var span = $(".close");
	
	function closeModal() {
		// When the user clicks on <span> (x), close the modal
		span.on('click', function() {
    		mod.hide();
		});
		// When the user clicks anywhere outside of the mod, close it
	}


	$('footer').addClass('sticky');

	// When the user clicks on the button, open the modal
	function openModal() {

		btn.on('click', function() {
		    mod.show();
		});
		rozpo.on('click', function() {
		    mod.show();
		});
		// $(window).on('click', function() {
		// 	mod.hide();
		// });
		return closeModal();
	};

	openModal();

	// *****************************************************

	//scroll header

	$(document).scroll(function() {
        var scroll = Math.min(0.1+ $(this).scrollTop()/4 , 6);
        var scrollContainer = Math.min(0.1+ $(this).scrollTop()/10 , 12);
        var fromTop=$(this).scrollTop();

        var baner = document.getElementById('banner');
        var banerHeight = baner.clientHeight;
        // baner.style.height = banerHeight;


        if(fromTop>banerHeight-5) $('#left-menu-wrap').addClass('fixed-left')
    	else $('#left-menu-wrap').removeClass('fixed-left')
    });

    var elemLeft = $("#left-menu-wrap");
	var position = elemLeft.position();



	// ***************     Maps    **************************


















});

    







