<html>
	<head>
	
	</head>

		<body>
		
		
<img onclick="shareOnFB();" style="cursor:pointer" src="fb-share.png">
					<div id="fb-root"></div>
			<script type="text/javascript"
			     src="http://connect.facebook.net/en_US/all.js"></script>
			<script type="text/javascript">
			FB.init({
			 appId : '524409451060986',
			 status : true,
			 cookie : true,
			 xfbml : true
			 });
			</script>

		


				<script type="text/javascript">
		function shareOnFB() {
    var e = {
        method: "feed",
        link: "greatness.co.in",
        picture: "greatness.co.in/images/AlbumCoverFront.jpg",
        name: "greatness - Rap music",
        caption: 'greatness.co.in',
        description: "Poetik new Album Greatness"
    };
    FB.ui(e, function(t) {
        if (t["post_id"]) {
          
			var a = document.createElement('a');
			var linkText = document.createTextNode("Link");
			a.appendChild(linkText);
			a.title = "Link";
			a.href = "http://google.com";
			document.body.appendChild(a);
		}
    })
}
	</script>

		</body>

	


</html>