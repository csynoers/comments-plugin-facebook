<!DOCTYPE html>
<html>
    <head>
        <title>Example Comments Plugin Facebook</title>
    </head>
    <body>
    <!-- Step 2: Include the JavaScript SDK on your page once, ideally right after the opening body tag. -->
    <div id="fb-root"></div>
    <script async="1" defer="1" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&amp;version=v3.2&amp;appId=387679478714474&amp;autoLogAppEvents=1"></script>
    
    <!-- Step 3: Place this code wherever you want the plugin to appear on your page. -->
    <div class="fb-comments" data-href="" data-numposts="5" data-width="100%"></div>
    <script>
        document.getElementsByClassName('fb-comments')[0].setAttribute('data-href', location.href)
    </script>
    </body>
</html>