$(document).ready(function() {
	$('.forums').on('click', function() {
                window.open("http://forums.yuplaygod.com/");
	});

        $(".build").on('click', function() {
                window.open("http://build.yuplaygod.com/jenkins/");     
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

$(function(){
        $(".element").typed({
                strings: [
                        "YU ^500Play ^500Dev", 
                        "git clone https://github.com/YUTeleventures/\&lt;repo\&gt;",
                        "git add .", 
                        "git commit -m 'You are the master of your own destiny'",
                        "git push",
                        "YU Open OS 6.0.1.",
                        ":-)^1000"
                ],
                typeSpeed: 100,
                backDelay: 500,
                loop: true
        });
});