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
                    <label for="music">File:</label>
                    <input type="file" class="form-control" id="music" name="music" accept="*"
                        onchange="AlertFilesize();">
                    <small class="form-text text-muted">File Size Limit: To Infinity and Beyond!</small>
                    <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                    <small class="form-text" style="color:coral;">Supported Formats: Anything that has a file
                        size</small>
                    <br>
                    <div style="display:inline;">
                        <label for="stages" style="display:inline;">Select a song:</label>
                        <a href="javascript:void(0)" style="display:inline; float:right;" id="reset"
                            onclick="resetFilters();">Reset</a>
                        <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="more"
                            onclick="displayFilters();">More Options</a>
                        <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="h2l"
                            onclick="orderBySizeH2L()">Order by Size (H to L)</a>
                        <a href="javascript:void(0)" style="display:none; float:right; padding-right:2%;;" id="l2h"
                            onclick="orderBySizeL2H()">Order by Size (L to H)</a>
                    </div>
                    <br style="margin-bottom:6px;">
                    <div id="filters" style="display:none;">
                        @include('extras/filters_checkbox')
                        <br style="margin-bottom:6px;">
                    </div>
                    <select class="custom-select" id="stages" onchange="UpdateStage(this); AlertFilesize();"></select>
                    <br style="margin-bottom:3%;">
                    <p class="form-text" style="color:#d00af7;" id="file_name">Original File Name: </p>
                    <p class="form-text" style="color:green;" id="og_size">Original File Size: </p>
                    <p class="form-text" style="color:orange;" id="uploaded_size">Uploaded File Size: </p>
                    <h5 class="form-text" id="message"></h5>
                    <input type="text" class="form-control" style="display: none;" id="filenameOutput" name="filenameOutput">
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

                var originalFileSize = document.getElementById('stages').options[document.getElementById('stages').selectedIndex].getAttribute('data-size');

                document.getElementById("file_name").innerHTML = "Original File Name: " + document.getElementById('stages').options[document.getElementById('stages').selectedIndex].value;

                var song_size_kb = sizeinbytes / 1024;

                if (song_size_kb > 1000) {
                    song_size_mb = song_size_kb / 1024;

                    document.getElementById("uploaded_size").innerHTML = `Uploaded File Size: <strong>${song_size_mb.toFixed(2)}MB</strong>`;
                } else {
                    document.getElementById("uploaded_size").innerHTML = `Uploaded File Size: <strong>${song_size_kb.toFixed(2)}KB</strong>`;
                }

                if(originalFileSize > sizeinbytes){
                    document.getElementById("message").style.color = "blue";
                    document.getElementById("message").innerHTML = "<strong>This will fit the currently selected song!</strong>";
                }else{
                    document.getElementById("message").style.color = "red";
                    document.getElementById("message").innerHTML = "<strong>This won't work over the currently selected song!</strong>";
                }
            }
        }
    </script>
    <script src="../js/stages.js"></script>
</body>

</html>
