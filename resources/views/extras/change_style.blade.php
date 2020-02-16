<button type="button" class="btn btn-secondary" onclick="changeCSS()">Switch themes</button>
<script>

    if(localStorage.getItem("theme") !== null){
        var theme = localStorage.getItem("theme");
    }else{
        var theme = 0;
    }

    $( document ).ready(function() {
        if(localStorage.getItem("theme") !== null){

            var oldlink = document.getElementsByTagName("link").item(0);

            if(theme == 0){
                var newlink = document.createElement("link");
                newlink.setAttribute("rel", "stylesheet");
                newlink.setAttribute("type", "text/css");
                newlink.setAttribute("href", "./css/bootstrap.min.old.css");

                document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);

                theme++;
            }else{
                var newlink = document.createElement("link");
                newlink.setAttribute("rel", "stylesheet");
                newlink.setAttribute("type", "text/css");
                newlink.setAttribute("href", "./css/bootstrap.min.css");

                document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);

                theme = 0;
            }
        }

    });

    function changeCSS() {

        var oldlink = document.getElementsByTagName("link").item(0);

        if(theme == 0){
            var newlink = document.createElement("link");
            newlink.setAttribute("rel", "stylesheet");
            newlink.setAttribute("type", "text/css");
            newlink.setAttribute("href", "./css/bootstrap.min.old.css");

            document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);

            localStorage.setItem("theme", theme);

            theme++;

        }else{
            var newlink = document.createElement("link");
            newlink.setAttribute("rel", "stylesheet");
            newlink.setAttribute("type", "text/css");
            newlink.setAttribute("href", "./css/bootstrap.min.css");

            document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);

            localStorage.setItem("theme", theme);
            theme = 0;
        }
    }
</script>
<br style="margin-bottom:2%;">
