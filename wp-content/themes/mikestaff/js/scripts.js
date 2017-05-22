jQuery(document).ready(function($) {
	
});

jQuery(document).ready(function($){
	$('#check-date-form').submit(function(){
		event.preventDefault();
		var checkdate = $('#checkdate').val();

		$('#check-date-form').hide();
		$('#service-loading').toggleClass('hidden visible');

		function modalTimeOut() {
			$('#dateSuccess').modal();
			$('#weddingdate').val(checkdate);
			//$('#loader-img').toggleClass('hidden visible');
			//$('#checkDateSubmit span').text("Submit");
			$("html, body").animate({ scrollTop: $('#check-availability').offset().top }, 1000);
			$('#service-loading').toggleClass('hidden visible');
			$('#check-date-form').show();
		}
		setTimeout(modalTimeOut, 3000);
	})

	function videoTimeOut() {
		$('.video-header video').fadeIn(500);
	}
	setTimeout(videoTimeOut, 1000);
});

/**
 * Check Date Sidebar Button
 */
jQuery(document).ready(function($){
	$('#service-check-date-form-modal').submit(function(){
		event.preventDefault();
		var checkdate = $('#checkdate-modal').val();
		var formcolor = $('#check-availability-button').attr('class');

		$('#service-check-date-form-modal').hide();
		$('#service-loading-modal').toggleClass('hidden visible');

		
		function modalTimeOut() {
		$('#weddingdate-modal').val(checkdate);
		$('#form-color').val(formcolor);
		//$('#loader-img').toggleClass('hidden visible');
		//$('#checkDateSubmit span').text("Submit");
		$('#service-loading-modal').toggleClass('hidden visible');
		$('#service-check-date-form-full').toggleClass('hidden visible');
	}
	setTimeout(modalTimeOut, 3000);
	
	});
});

jQuery(document).ready(function($){
	$('#sales-email-button').click(function(){
		event.preventDefault();
		$('#sales-modal').modal('hide');
		$('#sales-email-modal').modal('show');

	});
	$('#sales-wedding-date').datepicker();
	$('input[name="please_tell_us_the_easiest_way_to_connect_with_you"]').each(function(){
		$(this).click(function(){
			$('input[name="contact_choice_selection"]').attr('placeholder', $(this).val() );
			if( $('input[name="contact_choice_selection"]').attr('placeholder') === "Email" ) {
				$('input[name="contact_choice_selection"]').attr('type','email');
			} else {
				$('input[name="contact_choice_selection"]').attr('type','text');
			}
		})
	})
});

jQuery(document).ready(function($) {
	$('#weddingdate-before, #weddingdate').datepicker();
	$('#check-button').click(function(){
		$('.checkavail-before').hide();
		$('#checking-animation').show();

		if( $('#interestedDJ-before').is(':checked') ) {
			$('#interestedDJ').attr('checked', true);
		}

		if( $('#interestedPhoto-before').is(':checked') ) {
			$('#interestedPhoto').attr('checked', true);			
		}

		if( $('#interestedVideo-before').is(':checked') ) {
			$('#interestedVideo').attr('checked', true);			
		}

		if( $('#interestedUplighting-before').is(':checked') ) {
			$('#interestedUplighting').attr('checked', true);			
		}

		var weddingdate = $('#weddingdate-before').val(); 
		$('#weddingdate').val(weddingdate);

		

		function showForm() {
			$('#checking-animation').hide();
			$('.checkavail-after').show();
			var new_header_bg = $('#ca-after').attr('src');
			$('#ca-header').css('background-image','url(' + new_header_bg + ')');
		}
		setTimeout(showForm, 5000);
	})
});

$(document).ready(function(){
	$('form#check-availability').submit(function(){
		var checked = $('form#check-availability input[type=checkbox]:checked');
		if( checked.length == 0 ) {
			event.preventDefault();
			alert('Please Select A Service');
		}
	})
});

function setModalMaxHeight(element) {
  this.$element     = $(element);  
  this.$content     = this.$element.find('.modal-content');
  var borderWidth   = this.$content.outerHeight() - this.$content.innerHeight();
  var dialogMargin  = $(window).width() < 768 ? 20 : 60;
  var contentHeight = $(window).height() - (dialogMargin + borderWidth);
  var headerHeight  = this.$element.find('.modal-header').outerHeight() || 0;
  var footerHeight  = this.$element.find('.modal-footer').outerHeight() || 0;
  var maxHeight     = contentHeight - (headerHeight + footerHeight);

  this.$content.css({
      'overflow': 'hidden'
  });
  
  this.$element
    .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
  });
}

$('.modal').on('show.bs.modal', function() {
  $(this).show();
  setModalMaxHeight(this);
});

$(window).resize(function() {
  if ($('.modal.in').length != 0) {
    setModalMaxHeight($('.modal.in'));
  }
});

$(document).ready(function(){
	var screen_width = window.outerWidth;
	// console.log(screen_width);
	if ( screen_width < 992 ) {
		$('.datepicker').attr('type','date');
	} else {
		$('#checkdate, #checkdate-modal, .datepicker').datepicker();
	}
});