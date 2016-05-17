$(document).ready(function() {
	$('.forums').on('click', function() {
		window.location.href = "http://forums.yuplaygod.com/";
	});

        $(".build").on('click', function() {
                window.location.href = "http://build.yuplaygod.com/jenkins/";     
        });

	$(".projects").on('click', function() {
		// remove all is-active classes from tabs
                $('a.mdl-layout__tab').removeClass('is-active');
                // activate desired tab
                $('a[href="#projects"]').addClass('is-active');
                // remove all is-active classes from panels
                $('.mdl-layout__tab-panel').removeClass('is-active');
                // activate desired tab panel
                $('#projects').addClass('is-active');
	});

	$(".codereview").on('click', function() {
		// remove all is-active classes from tabs
                $('a.mdl-layout__tab').removeClass('is-active');
                // activate desired tab
                $('a[href="#codereview"]').addClass('is-active');
                // remove all is-active classes from panels
                $('.mdl-layout__tab-panel').removeClass('is-active');
                // activate desired tab panel
                $('#codereview').addClass('is-active');
	});


});