<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft Java Skin -> Smash Skin</title>
    <script src="{{URL::asset('..//js/jquery-3.4.1.min.js')}}"></script>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        html{
            background: #222222;
        }

        body{
            filter: invert();
        }
    </style>
</head>

<body>
    <h1>Minecraft Java Skin -> Smash Skin</h1>

    <form method="post" action="{{ action('extraController@javaToSmash') }}" enctype="multipart/form-data" id="main_form">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="java_user" id="java_user" placeholder="Enter Minecraft Java Username">
        <button type="submit" id="convert">Convert!</button>
    </form>

    <hr>
    <h1>Credits:</h1>
    <h3>jam1garner for img2nutexb which is basically the backbone of this converter.
        <br>
        Check out his <a href="https://twitter.com/jam1garner/">Twitter</a>, <a href="https://jam1.re/">Website</a>, and <a href="https://github.com/jam1garner/">Github Account</a>!
    </h3>
    <h3>
        Coolsonickirby for everything else (geting skin from mojang api + throwing it in my PHP backend)<br>
        I'd say check out my site, but you're already on it lmao. You can check out my <a href="https://www.youtube.com/channel/UCUp-3P4BdmQWYCJ7rRyzrbQ">YouTube Channel</a> though!
    </h3>
    <h3>Update: Thanks to jam, 64x32 skins and some other sizes work! Also it now automatically applies the gamma fix (also thanks to jam!)</h3>
<!--
    <script>
        document.getElementById("convert").addEventListener("click", function() {
            var user_name = document.getElementById("java_user").value;

            if (user_name == "") {
                alert("Please enter a valid username!");
                return;
            }

            var get_uuid_url = `api.mojang.com/users/profiles/minecraft/${user_name}`;

            var get_profile_url = "sessionserver.mojang.com/session/minecraft/profile/";
        })
    </script> -->

</body>

</html>
