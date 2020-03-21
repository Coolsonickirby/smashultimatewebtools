<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio (Compatible)</title>
    <link rel="stylesheet" href="{{URL::asset('../css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="../css/custom.css">
    <script src="{{URL::asset('..//js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('..//js/popper.min.js')}}"></script>
    <script src="{{URL::asset('../js/bootstrap.min.js')}}"></script>
    </script>
</head>

<body>
    <br>
    <div class="container">
        @if (session()->has('success'))
        <div class="card text-white bg-success mb-3">
            <div class="card-body">
                <h5 class="card-title">Success!</h5>
                {!! session()->get('success') !!}
            </div>
        </div>
        <br>
        @endif

        @if (session()->has('error'))
        <div class="card text-white bg-danger mb-3">
            <div class="card-body">
                <h5 class="card-title">Error!</h5>
                {!! session()->get('error') !!}
            </div>
        </div>
        <br>
        @endif

        <div class="container-fluid">
            @include("extras/change_style")
            <div class="row">
                <div class="col-md-6">

                    <form method="post" action="{{ action('miscController@ConvertMusic') }}"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="music">Music File:</label>
                        <input type="file" class="form-control" id="music" name="music" accept="audio/*" onchange="AlertFilesize();">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>
                        <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                        <small class="form-text text-muted">Supported Formats: mp2, mp3, wav, ogg, flac, and anything else SoX supports by default.</small>
                        <small class="form-text text-muted">Warning: Compatible wavs is the sound file being converted to wav and resampled to 48000hz. Will add an option for resampling to any custom hz later.</small>
                        <br>
                        <button type="submit" class="btn btn-primary">Convert!</button>
                    </form>
                    <br>
                </div>
                <div class="col-md-6">
                    @include('extras/credits')
                    <h2>Extra Stuff:</h2>
                    @include('extras/extras')
                </div>
            </div>
        </div>

        <br>

        @include('extras/faq')
    </div>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script>
        function AlertFilesize(){
                    if(document.getElementById("music").files.length != 0){
                        if(window.ActiveXObject){
                        var fso = new ActiveXObject("Scripting.FileSystemObject");
                        var filepath = document.getElementById('music').value;
                        var thefile = fso.getFile(filepath);
                        var sizeinbytes = thefile.size;
                        }else{
                        var sizeinbytes = document.getElementById('music').files[0].size;
                        }

                        if(sizeinbytes > 100000000){
                        document.getElementById("fileerror").style.display = "block";
                        }else{
                        document.getElementById("fileerror").style.display = "none";
                        }
                    }else{
                        document.getElementById("fileerror").style.display = "none";
                    }

                }

                window.onload = function(){
                    AlertFilesize();
                }
    </script>
</body>

</html>
