<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/custom.css">
    <script src="{{URL::asset('/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>

    <style>
        select>option:disabled{
            color: #fc1735;
        }

        .label_sort{
            padding-right:2%;
        }
    </style>
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

                    <form method="post" action="{{ action('MainController@FindType') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <label for="music">Music File:</label>
                        <input type="file" class="form-control" id="music" name="music" accept="audio/*, .brstm, .lopus, .idsp" onchange="AlertFilesize();">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>
                        <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                        <small class="form-text" style="color:coral;">Supported Formats: Everything SoX natively supports + mp3, brstm</small>
                        <div id="type_div">
                            <br>
                            <label for="type">Select a file type:</label>
                            <select class="custom-select" id="type" onchange="UpdateType(this)">
                                <option value="nus3audio">nus3audio</option>
                                <option value="lopus">lopus</option>
                                <option value="idsp">idsp</option>
                            </select>
                            <input type="hidden" class="form-control" id="filetype" name="filetype">
                        </div>
                        <br>
                        <div style="display:inline;">
                            <label for="stages" style="display:inline;">Select a song:</label>
                            <a href="javascript:void(0)" style="display:inline; float:right;" id="reset" onclick="resetFilters();">Reset</a>
                            <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="more" onclick="displayFilters();">More Options</a>
                            <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="h2l" onclick="orderBySizeH2L()">Order by Size (H to L)</a>
                            <a href="javascript:void(0)" style="display:none; float:right; padding-right:2%;;" id="l2h" onclick="orderBySizeL2H()">Order by Size (L to H)</a>
                        </div>
                        <br style="margin-bottom:6px;">
                        <div id="filters" style="display:none;">
                            <label class="label_sort" for="smash"><input type="checkbox" id="smash" onclick="orderBySelected()"> &nbsp Smash Series</label>
                            <label class="label_sort" for="mario"><input type="checkbox" id="mario" onclick="orderBySelected()"> &nbsp Mario Series</label>
                            <label class="label_sort" for="mariok"><input type="checkbox" id="mariok" onclick="orderBySelected()"> &nbsp Mario Kart Series</label>
                            <label class="label_sort" for="yoshi"><input type="checkbox" id="yoshi" onclick="orderBySelected()"> &nbsp Yoshi Series</label>
                            <label class="label_sort" for="dk"><input type="checkbox" id="dk" onclick="orderBySelected()"> &nbsp DK Series</label>
                            <label class="label_sort" for="zelda"><input type="checkbox" id="zelda" onclick="orderBySelected()"> &nbsp Zelda Series</label>
                            <label class="label_sort" for="metroid"><input type="checkbox" id="metroid" onclick="orderBySelected()"> &nbsp Metroid Series</label>
                            <label class="label_sort" for="kirby"><input type="checkbox" id="kirby" onclick="orderBySelected()"> &nbsp Kirby Series</label>
                            <label class="label_sort" for="starfox"><input type="checkbox" id="starfox" onclick="orderBySelected()"> &nbsp Star Fox Series</label>
                            <label class="label_sort" for="pkmn"><input type="checkbox" id="pkmn" onclick="orderBySelected()"> &nbsp Pokemon Series</label>
                            <label class="label_sort" for="fzero"><input type="checkbox" id="fzero" onclick="orderBySelected()"> &nbsp F-Zero Series</label>
                            <label class="label_sort" for="mother"><input type="checkbox" id="mother" onclick="orderBySelected()"> &nbsp Earthbound Series</label>
                            <label class="label_sort" for="gnw"><input type="checkbox" id="gnw" onclick="orderBySelected()"> &nbsp Game & Watch Series</label>
                            <label class="label_sort" for="fe"><input type="checkbox" id="fe" onclick="orderBySelected()"> &nbsp Fire Emblem Series</label>
                            <label class="label_sort" for="wario"><input type="checkbox" id="wario" onclick="orderBySelected()"> &nbsp Wario Series</label>
                            <label class="label_sort" for="pikmin"><input type="checkbox" id="pikmin" onclick="orderBySelected()"> &nbsp Pikmin Series</label>
                            <label class="label_sort" for="ac"><input type="checkbox" id="ac" onclick="orderBySelected()"> &nbsp Animal Crossing Series</label>
                            <label class="label_sort" for="wiifit"><input type="checkbox" id="wiifit" onclick="orderBySelected()"> &nbsp Wii Fit Series</label>
                            <label class="label_sort" for="punch"><input type="checkbox" id="punch" onclick="orderBySelected()"> &nbsp Punch Out Series</label>
                            <label class="label_sort" for="xenoblade"><input type="checkbox" id="xenoblade" onclick="orderBySelected()"> &nbsp Xenoblade Series</label>
                            <label class="label_sort" for="splatoon"><input type="checkbox" id="splatoon" onclick="orderBySelected()"> &nbsp Splatoon Series</label>
                            <label class="label_sort" for="metalgear"><input type="checkbox" id="metalgear" onclick="orderBySelected()"> &nbsp Metal Gear Series</label>
                            <label class="label_sort" for="sonic"><input type="checkbox" id="sonic" onclick="orderBySelected()"> &nbsp Sonic Series</label>
                            <label class="label_sort" for="megaman"><input type="checkbox" id="megaman" onclick="orderBySelected()"> &nbsp Megaman Series</label>
                            <label class="label_sort" for="pacman"><input type="checkbox" id="pacman" onclick="orderBySelected()"> &nbsp Pac-Man Series</label>
                            <label class="label_sort" for="sf"><input type="checkbox" id="sf" onclick="orderBySelected()"> &nbsp Street Fighter Series</label>
                            <label class="label_sort" for="ff"><input type="checkbox" id="ff" onclick="orderBySelected()"> &nbsp Final Fantasy Series</label>
                            <label class="label_sort" for="bayo"><input type="checkbox" id="bayo" onclick="orderBySelected()"> &nbsp Bayonetta Series</label>
                            <label class="label_sort" for="castle"><input type="checkbox" id="castle" onclick="orderBySelected()"> &nbsp Castlevania Series</label>
                            <label class="label_sort" for="other"><input type="checkbox" id="other" onclick="orderBySelected()"> &nbsp Other Series</label>
                            <label class="label_sort" for="persona"><input type="checkbox" id="persona" onclick="orderBySelected()"> &nbsp Persona Series</label>
                            <label class="label_sort" for="dq"><input type="checkbox" id="dq" onclick="orderBySelected()"> &nbsp Dragon Quest Series</label>
                            <label class="label_sort" for="banjo"><input type="checkbox" id="banjo" onclick="orderBySelected()"> &nbsp Banjo & Kazooie Series</label>
                            <label class="label_sort" for="fatal"><input type="checkbox" id="fatal" onclick="orderBySelected()"> &nbsp Fatal Fury Series</label>
                            <label class="label_sort" for="victory"><input type="checkbox" id="victory" onclick="orderBySelected()"> &nbsp Victory Themes</label>
                            <br style="margin-bottom:6px;">
                        </div>
                        <select class="custom-select" id="stages" onchange="UpdateStage(this)"></select>
                        <br style="margin-bottom:3%;">
                        <p class="form-text" style="color:green;" id="og_size">Original File Size: </p>

                        <div id="loop_container">
                            <input type="checkbox" class="checkbox-rounded" id="loop" name="loop"
                                onchange="LoopSamples(this);" checked>
                            <label for="loop">Enable Loop Samples</label>

                            <br>
                            <div id="loopsection">
                                <small class="form-text" style="color:orangered;">Leave the fields empty to loop full song.</small>
                                <small class="form-text" style="color:red;">Use either samples, MM:SS.ms, or SS.ms</small>
                                <label>Samples Rate:</label>
                                <select class="custom-select" id="sampleHZ" onchange="UpdateHZ(this)">
                                    <option value="auto">Auto Detect</option>
                                    <option value="48">48000hz - Smash Ultimate</option>
                                    <option value="441">44100hz - Smash Custom Music / Brstm</option>
                                    <option>Custom hz</option>
                                </select>
                                <br>
                                <br>
                                <div id="sampleHZdiv" style="display: none;">
                                    <label for="sampleHZ">Sample HZ:</label>
                                    <input type="text" class="form-control" id="sampleHZinput" name="sampleHZinput">
                                    <br>
                                </div>
                                <label for="start_loop">Loop Sample Start:</label>
                                <input type="text" class="form-control" id="start_loop" name="start_loop">
                                <br>
                                <label for="end_loop">Loop Sample End:</label>
                                <input type="text" class="form-control" name="end_loop" id="end_loop">
                            </div>
                            <br>
                        </div>
                        <input type="checkbox" class="checkbox-rounded" id="advanced" name="advanced"
                            onchange="AdvancedOptions(this);">
                        <label for="advanced">Enable Advanced Options</label>
                        <br>
                        <div id="advancedoptions">
                            <label for="filenameOutput">Output File Name:</label>
                            <input type="text" class="form-control" id="filenameOutput" name="filenameOutput">
                            <br>
                            <label for="hz">Audio HZ:</label>
                            <input type="text" class="form-control" id="hz" name="hz" value="48000">
                        </div>
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

                file_name = document.getElementById("music").files[0].name;

                if(file_name.includes(".brstm")){

                    document.getElementById("type_div").style.display = "none";

                    document.getElementById("loop_container").style.display = "block";

                }else if(file_name.includes(".opus")){

                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].setAttribute("disabled","");
                    document.getElementById("type").selectedIndex = 0;

                    document.getElementById("loop_container").style.display = "none";

                }else if(file_name.includes(".lopus")){
                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].setAttribute("disabled", "");
                    document.getElementById("type").options[2].removeAttribute("disabled");
                    document.getElementById("type").selectedIndex = 2;

                    document.getElementById("loop_container").style.display = "none";
                }else if(file_name.includes(".idsp")){
                    document.getElementById("type").options[0].setAttribute("disabled", "");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].setAttribute("disabled", "");
                    document.getElementById("type").selectedIndex = 1;

                    document.getElementById("loop_container").style.display = "block";
                }
                else{
                    document.getElementById("type_div").style.display = "block";
                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].removeAttribute("disabled");
                    document.getElementById("loop_container").style.display = "block";

                }
            }else{
                document.getElementById("fileerror").style.display = "none";
                document.getElementById("type_div").style.display = "block";
            }

            UpdateType(document.getElementById("type"));
        }
    </script>
    <script src="./js/stages.js"></script>
</body>

</html>
