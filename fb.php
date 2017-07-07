<html>
<head>

</head>
<body>
						<img src="fb-share.png" onclick="shareOnFB();" style="cursor:pointer" class="img-responsive">
						

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
        name: "Poetik Justis - Greatness ",
        caption: 'greatness.co.in',
        description: "Download one of Indian Hip-Hop's most anticipated albums here! Poetik Justis - Greatness (Indian Hip-Hop Album 2015)"
    };
    FB.ui(e, function(t) {
        if (t["post_id"]) {
          
            var a = document.createElement('a');
            var linkText = document.createTextNode("Download_The_Album_Here");
            a.appendChild(linkText);
            a.title = "Download_The_Album_Here";
            a.href = "http://www.greatness.co.in/Poetik%20Justis%20-%20Greatness.zip";
            document.body.appendChild(a);
  			
        }
    })
}
</script>



</body>
</html>