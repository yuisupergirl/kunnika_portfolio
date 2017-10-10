$(function(){
	function createCookie(name, value, days) {
		var expires = "", date;
		if (days) {
			date = new Date();
			date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
			expires = "; expires=" + date.toGMTString(); // time zone GMT +0
		}
		else expires = "";
		document.cookie = name + "=" + value + expires + "; path=/";
	}

	function readCookie(name) {
		var nameEQ = name + "=";
		var ca = document.cookie.split(';'); // split at ;(simicollon) and we will get the path between simicollon fx. 10;10;20 so we will get ["10","10","20"]
		for (var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') c = c.substring(1, c.length);
			if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
		}
		return null;
	}	
	// JavaScript Document
	//the form (includes all forms)
	var $form  = $('.form'),

	//the current form is the one with class "active"
	$currentForm    = $form.children('form.active'),

	//the switch form links
	$linkform       = $form.find('.linkform');
 /*-------------------------------------------------------------------*/
	/*Call Log in box to show up*/
	$('.login-link').click(function (e){
		$form.children('form').hide(); /*hide the other forms*/
		$form.show();
		$('.linkform[rel=login]:first').click(); /*click the first login link*/
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Call Sign up box to show up*/
	$('.register-link').click(function (e){
		$form.children('form').hide(); /*hide the other forms*/
		$form.show();
		$('.linkform[rel=register]:first').click();
		e.preventDefault();
		return false;
	});
	$('.form .close').click(function (e){
		$('.form').fadeOut(400);
		e.preventDefault();
		return false;
	});

	$form.children('form').each(function(i){
		var $theForm    = $(this);
    	//solve the inline display none problem when using fadeIn/fadeOut
    	if(!$theForm.hasClass('active'))
    		$theForm.hide();
    	$theForm.data({
    		width   : $theForm.width(),
    		height  : $theForm.height()
    	});
    });
	setWidth();
	$linkform.bind('click',function(e){
		var $link   = $(this);
		var target  = $link.attr('rel');
		$currentForm.fadeOut(400,function(){
        //remove class "active" from current form
        $currentForm.removeClass('active');
        //new current form
        $currentForm= $form.children('form.'+target);
        //animate the form
        $form.css({width: $currentForm.data('width') + 'px', height: $currentForm.height() + 'px'});
        $currentForm.addClass('active').fadeIn(400, function(){
        	setTimeout(function(){
        		$form.css({width: $currentForm.data('width') + 'px', height: $currentForm.height() + 'px'});
        	},1);	
        });

    });
		e.preventDefault();


	});
	// to be sure that the right width and height set.
	function setWidth(){
		$form.css({
			width   : $currentForm.data('width') + 'px',
			height  : $currentForm.data('height') + 'px'
		});
	}

/*-------------------------------------------------------------------*/
	/*Close  Cookies*/
	$('.row #cookieclose').click(function (e){
		$('.row').fadeOut(400);
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Close Welcome box*/
	// Welcome box use the same function as the Cookie bar. Check if the cookie is approved, if not then display the Welcome box

	var strCookieName = "cookie-welcomebox";
	var strApprovedVal = "approved";
	var cookieVal = readCookie(strCookieName);
	if (cookieVal != strApprovedVal) {
		setTimeout(function() { 
			$('.welcome_form').show();
			$('.welcome_form').siblings('div.overlay').show();
		}, 200);
	}
	$('.welcome_form .close').click(function (e){
		$('.welcome_form').fadeOut(400);
		$('.welcome_form').siblings('div.overlay').fadeOut(400);
		createCookie(strCookieName, strApprovedVal, 365); // Remember data for a year
		
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Tilmeld form*/
	/*call tilmeld form til show up*/
	$('.tilmeld_button').click(function (e){

		$.getJSON( "api.php?action=getcourse&id=" + $(this).data('id'), function(data) {
			$('.collumtilmeld #tilmeld_id').val(data.id);
			$('.collumtilmeld #tilmeld_title').html(data.title);
			$('.collumtilmeld #tilmeld_description').html(data.description);

			$('.collumtilmeld').fadeIn(400);
		});

		e.preventDefault();
		return false;
	});
	/*close tilmeld form*/
	$('.collumtilmeld #tilmeldclose').click(function (e){
		$('.collumtilmeld').fadeOut(400);
		e.preventDefault();
		return false;
	});
	/*Sender information*/
	$('.sender_button').click(function (e){
		var form = $(this).closest("form");
		
		var id = form.find('#tilmeld_id').val();
		var name = form.find('#fname').val();
		var email = form.find('#email').val();
		var amount = form.find('#amount').val();
		
		$.getJSON("api.php?action=save&id="+id+"&name="+name+"&email="+email+"&amount="+amount, function(data) {
			alert('Tak, din tilmelding er sendt'); /*Pop up box - when you click on "Sender" button*/
			$('.collumtilmeld').fadeOut(400);
			e.preventDefault();
			return false;
		});
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Call Post emne box to show*/
	$('.post_button').click(function (e){
		$('.postform').fadeIn(400);
		e.preventDefault();
		return false;
	});
	/*Close post emne box*/
	$('.postform .close').click(function (e){
		$('.postform').fadeOut(400);
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Call comment box to show*/
	$('.reply_button').click(function (e){
		$('.replyform').fadeIn(400);
		e.preventDefault();
		return false;
	});
	/*Close Commment box*/
	$('.replyform .close').click(function (e){
		$('.replyform').fadeOut(400);
		e.preventDefault();
		return false;
	});
/*-------------------------------------------------------------------*/
	/*Admin page */
	$('.course-selecter').change(function (e) {
		var tbody = $(this).closest('.tab-pane').find('table.table.table-hover > tbody');
		$.getJSON("api.php?action=admin&id="+$(this).val(), function(data) {
			console.log(data);
			var str = '';
			$.each(data, function (i, elm) {
				str+='<tr>'+
				'<td><div class="customer_name">'+elm.customer_name+'</div></td>'+
				'<td style="text-align: center;"><div class="customer_amount">'+elm.customer_amount+'</div></td>'+
				'<td style="text-align: center;">'+(elm.customer_email ? '<a class="customer_email" href="mailto:'+elm.customer_email+'"><i class="fa fa-envelope-o"></i></a>': '&nbsp;')+'</td>'+
				'</tr>';
			});

			tbody.html(str);

			e.preventDefault();
			return false;
		});
		e.preventDefault();
		return false;
	});

});
