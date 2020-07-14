<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio (zip -> nus3audio)</title>
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

                    <form method="post" action="{{ action('miscController@zipToNus3audio') }}"
                        enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="nus3File">nus3audio File:</label>
                        <input type="file" class="form-control" id="nus3File" name="nus3File" accept=".nus3audio" onchange="AlertFilesize('nus3File');">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>
                        <small class="form-text" style="color:red; display:none;" id="nus3File_fileerror">File too big!</small>
                        <small class="form-text text-muted">Supported Formats: *.nus3audio</small>

                        <br>
                        <label for="zipFile">Zip File:</label>
                        <input type="file" class="form-control" id="zipFile" name="zipFile" accept=".zip" onchange="AlertFilesize('zipFile');">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>

                        <small class="form-text" style="color:red; display:none;" id="zipFile_fileerror">File too big!</small>
                        <small class="form-text text-muted">Supported Formats: *.zip</small>
                        <br>
                        <button type="submit" class="btn btn-primary">Convert!</button>
                    </form>
                    <br>
                </div>
                <div class="col-md-6">

                    <h2>Extra Stuff:</h2>
                    @include('extras/extras')
                </div>
            </div>
        </div>

        <br>


    </div>
        <script>
            function AlertFilesize(id){
                if(document.getElementById(id).files.length != 0){
                    if(window.ActiveXObject){
                    var fso = new ActiveXObject("Scripting.FileSystemObject");
                    var filepath = document.getElementById(id).value;
                    var thefile = fso.getFile(filepath);
                    var sizeinbytes = thefile.size;
                    }else{
                    var sizeinbytes = document.getElementById(id).files[0].size;
                    }
                    if(sizeinbytes > 100000000){
                    document.getElementById(id + "_fileerror").style.display = "block";
                    }else{
                    document.getElementById(id + "_fileerror").style.display = "none";
                    }
                }else{
                    document.getElementById(id + "_fileerror").style.display = "none";
                }

            }

            window.onload = function(){
                AlertFilesize('nus3File');
                AlertFilesize('zipFile');
            }
        </script>
</body>

</html>
