<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio (Compatible)</title>
    <link rel="stylesheet" href="{{URL::asset('..//css/new-front-page.css')}}">
    <link rel="stylesheet" href="{{URL::asset('..//css/audio.css')}}">
    <script src="{{URL::asset('..//js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('..//js/popper.min.js')}}"></script>
    <script src="{{URL::asset('../js/bootstrap.min.js')}}"></script>
    <style>
        @media only screen and (max-width:920px) {
            .container {
                width: 60%;
                grid-template-columns: 1fr !important;
                grid-template-rows: 0.5fr 1fr !important;
                gap: 20px 0px !important;
                grid-template-areas:
                    "Left"
                    "Extras" !important;
            }
        }

        .container {
            grid-template-columns: 1fr !important;
            grid-template-rows: 0.5fr 1fr !important;
        }
    </style>
</head>

<body>

    <div class="header-desktop">
        <div class="tab">
        </div>
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img" data-href="https://smashultimatetools.com/" />
        <div class="tab">
        </div>
    </div>

    <div class="header-mobile">
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
        onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img" data-href="https://smashultimatetools.com/" />
    </div>


    @if (session()->has('success'))
    <div class="card">
        <div>
            <h2 class="text-success">Success!</h2>
            {!! session()->get('success') !!}
        </div>
    </div>
    <br>
    @endif

    @if (session()->has('error'))
    <div class="card">
        <div>
            <h2 class="text-error">Error!</h2>
            {!! session()->get('error') !!}
        </div>
    </div>
    <br>
    @endif


    <div class="container">
        <div class="Left">
            <form method="post" action="{{ action('miscController@ConvertMusic') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-file-input">
                    <label for="music">Music File:</label>
                    <input type="file" class="form-control" id="music" name="music" accept="audio/*"
                        onchange="AlertFilesize();">
                    <small>File Size Limit: 100mb</small>
                    <small style="color:red; display:none;" id="fileerror">File too big!</small>
                    <small>Supported Formats: mp2, mp3, wav, ogg, flac, and anything
                        else SoX supports by default.</small>
                    <small>Warning: Compatible wavs is the sound file being converted
                        to wav and resampled to 48000hz. Will add an option for resampling to any custom hz
                        later.</small>
                </div>
                <br>
                <div class="button-parent" style="float: right; margin-right: 0;">
                    <button type="submit">Convert!</button>
                </div>
            </form>
        </div>
        <div class="Extras">
            <br>
            <hr><br>
            <h2>Extra Stuff:</h2>
            @include('extras/extras')
        </div>
    </div>

    <script>
        function AlertFilesize() {
            if (document.getElementById("music").files.length != 0) {
                if (window.ActiveXObject) {
                    var fso = new ActiveXObject("Scripting.FileSystemObject");
                    var filepath = document.getElementById('music').value;
                    var thefile = fso.getFile(filepath);
                    var sizeinbytes = thefile.size;
                } else {
                    var sizeinbytes = document.getElementById('music').files[0].size;
                }

                if (sizeinbytes > 100000000) {
                    document.getElementById("fileerror").style.display = "block";
                } else {
                    document.getElementById("fileerror").style.display = "none";
                }
            } else {
                document.getElementById("fileerror").style.display = "none";
            }

        }

        window.onload = function () {
            AlertFilesize();
        }
    </script>
</body>

</html>
