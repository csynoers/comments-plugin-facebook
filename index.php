<!DOCTYPE html>
<html>
    <head>
        <title>Example Comments Plugin Facebook</title>
    </head>
    <body>
    <div id="fb-root"></div>
    <script>
        // window.fbAsyncInit = function() {
        //     FB.init({
        //     // appId            : 'your-app-id',
        //     appId            : '2272659419615228',
        //     autoLogAppEvents : true,
        //     xfbml            : true,
        //     version          : 'v3.2'
        //     });
        // };

        // (function(d, s, id){
        //     var js, fjs = d.getElementsByTagName(s)[0];
        //     if (d.getElementById(id)) {return;}
        //     js = d.createElement(s); js.id = id;
        //     js.src = "https://connect.facebook.net/en_US/sdk.js";
        //     fjs.parentNode.insertBefore(js, fjs);
        // }(document, 'script', 'facebook-jssdk'));

        // from stack over-flow
        window.fbAsyncInit = function () {
            FB.init({appId: '1422501874658917', version: 2.4, xfbml: true});

            // *** here is my code ***
            if (typeof facebookInit == 'function') {
                facebookInit();
            }
        };

        (function () {
            var e = document.createElement('script');
            e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
            e.async = true;
            document.getElementById('fb-root').appendChild(e);
        }());


        function facebookInit() {
            console.log('Found FB: Loading comments.');
            FB.XFBML.parse();
        }
    </script>
    <!-- Step 2: Include the JavaScript SDK on your page once, ideally right after the opening body tag. -->
    <!-- <div id="fb-root"></div> -->
    <!-- <script async="1" defer="1" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&amp;version=v3.2&amp;appId=2272659419615228&amp;autoLogAppEvents=1"></script> -->
    
    <!-- Step 3: Place this code wherever you want the plugin to appear on your page. -->
    <div class="fb-comments" data-href="http://localhost/scm/try/comments-plugin-facebook/" data-numposts="5" data-width="100%"></div>
    </body>
</html>