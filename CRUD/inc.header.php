	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="bootstrap_responsive_admin_template/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap_responsive_admin_template/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="bootstrap_responsive_admin_template/css/font-awesome.css" rel="stylesheet">
<link href="bootstrap_responsive_admin_template/css/style.css" rel="stylesheet">
<link href="bootstrap_responsive_admin_template/css/pages/dashboard.css" rel="stylesheet">
<link href="bootstrap_responsive_admin_template/css/pages/signin.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
//smoth scroll
$(document).ready(function() {
	$('a[href*=#]').bind("click", function(event) {
		event.preventDefault();
		var ziel = $(this).attr("href");
                
                if ($.browser.opera) {
                    var target = 'html';
                }else{
                    var target = 'html,body';
                }

		$(target).animate({
			scrollTop: $(ziel).offset().top
		}, 15000 , function (){location.hash = ziel;});
});
return false;
});
	</script>