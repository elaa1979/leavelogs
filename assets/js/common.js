$(document).ready(function () {
    //left nav toggle functions
	$('#nav-icon').click(function () {
		$(this).toggleClass('open');
		$('.navbar-left').toggleClass('leftnav-toggle');
		$('.navbar-top').toggleClass('navbar-toggle');
		$('.content-section').toggleClass('content-section-toggle');
		$('.footer').toggleClass('footer-toggle');
		$('.leftnav-links a span').toggleClass('dsp-sm');
		$('.leftnav-links a .fa').toggleClass('fa-size');
		$('.logo-bg').toggleClass('dsp-sm');
		$('.logo-sm').toggleClass('logo-sm-dp');
	});
	$('#nav-icon-sm').click(function () {
		$(this).toggleClass('open');
		$('.navbar-left').toggleClass('navbar-toggle-sm');
    });

	//init perfectScrollbar
    $('.navbar-left').perfectScrollbar();

	//clockout clock
	clockUpdate();
    setInterval(clockUpdate, 1000);

    //init toast
    $('.toast').toast('show');

    //toggle clockout dropdown 
    $('#clockoutdropdown').click(function () {
        $('.dropdown-menu-clockout').toggle();
    }); 
    $(document).mouseup(function (e) {
        var container = $(".dropdown-menu-clockout");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            container.hide();
        }
    });
    //init tooltip
    $('[data-toggle="tooltip"]').tooltip();

    //init popover
    $('[data-toggle="popover"]').popover();
});
//clockout clock function
function clockUpdate() {
    var date = new Date();
    function addZero(x) {
        if (x < 10) {
            return x = '0' + x;
        } else {
            return x;
        }
    }

    function twelveHour(x) {
        if (x > 12) {
            return x = x - 12;
        } else if (x == 0) {
            return x = 12;
        } else {
            return x;
        }
    }

    var h = addZero(twelveHour(date.getHours()));
    var m = addZero(date.getMinutes());
    var s = addZero(date.getSeconds());

    $('.digital-clock').text(h + ':' + m + ':' + s)
}