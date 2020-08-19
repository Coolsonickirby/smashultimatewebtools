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
                    <br>
                    <div style="display:inline;">
                        <label for="stages" style="display:inline;">Select a song:</label>
                        <a href="javascript:void(0)" style="display:inline; float:right;" id="reset"
                            onclick="resetFilters();">Reset</a>
                        <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="more"
                            onclick="displayFilters();">More Options</a>
                        <!-- <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="h2l"
                            onclick="orderBySizeH2L()">Order by Size (H to L)</a>
                        <a href="javascript:void(0)" style="display:none; float:right; padding-right:2%;;" id="l2h"
                            onclick="orderBySizeL2H()">Order by Size (L to H)</a> -->
                    </div>
                    <br style="margin-bottom:6px;">
                    <div id="filters" style="display:none;">
                        @include('extras/filters_checkbox')
                        <br style="margin-bottom:6px;">
                    </div>
                    <select class="custom-select" id="stages" onchange="UpdateStage(this); AlertFilesize();"></select>
                    <br style="margin-bottom:3%;">
                    <p class="form-text" style="color:#d00af7;" id="file_name">Original File Name: </p>
                    <!-- <p class="form-text" style="color:green;" id="og_size">Original File Size: </p>
                    <p class="form-text" style="color:orange;" id="uploaded_size">Uploaded File Size: </p> -->
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
            document.getElementById("file_name").innerHTML = "Original File Name: " + document.getElementById('stages').options[document.getElementById('stages').selectedIndex].value;
        }
    </script>
    <script src="../js/stages.js"></script>
</body>

</html>
