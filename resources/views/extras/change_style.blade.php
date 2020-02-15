<button type="button" class="btn btn-secondary" onclick="changeCSS()">Switch themes</button>
<script>
    var theme = false;
    function changeCSS(cssFile) {

        var oldlink = document.getElementsByTagName("link").item(0);

        theme = !theme;

        if(theme){
            var newlink = document.createElement("link");
            newlink.setAttribute("rel", "stylesheet");
            newlink.setAttribute("type", "text/css");
            newlink.setAttribute("href", "./css/bootstrap.min.old.css");

            document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
        }else{
            var newlink = document.createElement("link");
            newlink.setAttribute("rel", "stylesheet");
            newlink.setAttribute("type", "text/css");
            newlink.setAttribute("href", "./css/bootstrap.min.css");

            document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
        }
    }
</script>
<br style="margin-bottom:2%;">
