<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Conversion - Smash Ultimate Tools</title>
    <link rel="stylesheet" href="{{URL::asset('../css/audio.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/new-front-page.css')}}">

    <script src="{{URL::asset('..//js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('..//js/popper.min.js')}}"></script>
    <script src="{{URL::asset('../js/bootstrap.min.js')}}"></script>
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

    <br>

    <div class="container">
        <div class="Left">
            <form method="post" action="{{ action('MainController@FindType') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-file-input">
                    <label for="music" id="music_label">Music File:</label>
                    <input type="file" id="music" name="music" accept="audio/*, .brstm, .lopus, .idsp"
                        onchange="AlertFilesize();">
                    <small class="form-text text-muted">File Size Limit: 100mb</small>
                    <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                    <br>
                    <small class="form-text" style="color:blue; font-weight: bold;">Supported Formats: Everything SoX
                        natively supports + mp3, brstm</small>
                </div>
                <div id="type_div" class="form-type-input">
                    <br>
                    <label for="type">Select a file type:</label>
                    <select class="custom-select" id="type" onchange="UpdateType(this)">
                        <option value="nus3audio">nus3audio</option>
                        <option value="lopus">lopus</option>
                        <option value="idsp">idsp</option>
                        <option value="toBrstm">BRSTM</option>
                        <option value="toBfstm">BFSTM</option>
                    </select>
                    <input type="hidden" id="filetype" name="filetype">
                </div>
                <br>
                <div class="form-type-input">
                    <div style="display:inline;">
                        <label for="stages" style="display:inline;">Select a song:</label>
                        <a href="javascript:void(0)" style="display:inline; float:right;" id="reset"
                            onclick="resetFilters();">Reset</a>
                        <a href="javascript:void(0)" style="display:inline; float:right; padding-right:2%;" id="more"
                            onclick="displayFilters();">More Options</a>
                    </div>
                    <div id="filters" style="display:none;">
                        <input id="search_box" style="display: none;">
                        <div>
                            @include('extras/filters_checkbox')
                            <br style="margin-bottom:6px;">
                        </div>
                    </div>
                    <select class="custom-select" id="stages" onchange="UpdateStage(this)"></select>

                </div>
        </div>

        <div class="Right">
            <div id="loop_container">
                <div class="form-check-input">
                    <input type="checkbox" class="checkbox-rounded" id="loop" name="loop" onchange="LoopSamples(this);">
                    <label for="loop">Enable Looping</label>
                </div>
                <br>
                <div id="loopsection" style="display: none;">
                    <div id="loop_hz_options">
                        <div class="form-type-input">
                            <label for="sampleHZ">Samples Rate:</label>
                            <select class="custom-select" id="sampleHZ" name="sampleHZ" onchange="UpdateHZ(this)">
                                <option value="auto">Auto Detect</option>
                                <option value="48">48000hz - Smash Ultimate</option>
                                <option value="441">44100hz - Smash Custom Music / Brstm</option>
                                <option>Custom hz</option>
                            </select>
                        </div>
                        <div id="sampleHZdiv" style="display: none; margin-top: 10px; margin-bottom: 10px;"
                            class="form-text-input">
                            <label for="sampleHZ">Sample HZ:</label>
                            <input type="text" id="sampleHZinput" name="sampleHZinput">
                        </div>

                        <div id="loop_samples_select_container" class="form-type-input"
                            style="display: none; margin-top: 10px; margin-bottom: 10px;">
                            <label>Loop Samples:</label>
                            <select class="custom-select" id="loop_samples_select" onchange="UpdateLoopSelect(this)">
                                <option value="auto">Auto Detect (Reads from file)</option>
                                <option value="custom">Custom (Input custom loop samples)</option>
                            </select>
                            <input type="text" name="loop_type" id="loop_type" style="display: none;">
                        </div>
                    </div>
                    <div id="loop_samples" style="margin-top: 10px;">
                        <small class="form-text" style="color:orangered; font-weight: bold;">Leave the fields empty to
                            loop full
                            song.</small>
                        <small class="form-text" style="color:red; font-weight: bold;">Use either samples, MM:SS.ms, or
                            SS.ms</small>

                        <div class="form-text-input">
                            <label for="start_loop">Loop Sample Start:</label>
                            <br>
                            <input type="text" id="start_loop" name="start_loop">
                        </div>
                        <br>
                        <div class="form-text-input">
                            <label for="end_loop">Loop Sample End:</label>
                            <br>
                            <input type="text" name="end_loop" id="end_loop">
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="form-check-input">
                <input type="checkbox" class="checkbox-rounded" id="advanced" name="advanced"
                    onchange="AdvancedOptions(this);">
                <label for="advanced">Enable Advanced Options</label>
            </div>
            <br>
            <div id="advancedoptions" style="display: none;">
                <div class="form-text-input">
                    <label for="filenameOutput">Output File Name:</label>
                    <input type="text" id="filenameOutput" name="filenameOutput">
                </div>
                <br>
                <div class="form-text-input">
                    <label for="hz">Audio Bitrate (VGAudioCli):</label>
                    <input type="text" id="hz" name="hz" value="64000">
                </div>
                <div id="sample_rate_section" style="display:none;">
                    <label for="sample_rate">SoX Sample Rate:</label>
                    <input type="text" id="sample_rate" name="sample_rate" value="48000">
                    <br>
                    <div id="fix_audio_section">
                        <input type="checkbox" class="checkbox-rounded" id="fix_audio" name="fix_audio">
                        <label for="fix_audio">Audio Fix (use if first try fails)</label>
                    </div>
                </div>

            </div>
            <br>
            <div style="float:right; margin-right: 0;" class="button-parent">
                <button class="tablinks" type="submit">Convert!</button>
            </div>
        </div>
        </form>
        <div class="Extras" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
            <br>
            <hr><br>
            <h2>Extra Stuff:</h2>
            @include('extras/extras')
        </div>
    </div>
    <script>

        function UpdateLoopSelect(e) {
            if (e.value == "auto" && document.getElementById("loop_samples_select_container").style.display != "none") {
                document.getElementById("loop_samples").style.display = "none";
                document.getElementById("loop_type").value = "auto";
            } else {
                document.getElementById("loop_samples").style.display = "block";
                document.getElementById("loop_type").value = "custom";
            }
        }

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

                file_name = document.getElementById("music").files[0].name;

                if (file_name.includes(".brstm")) {

                    document.getElementById("type_div").style.display = "none";
                    document.getElementById("loop_container").style.display = "block";
                    document.getElementById("loop_samples_select_container").style.display = "block";

                } else if (file_name.includes(".opus")) {

                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].setAttribute("disabled", "");
                    document.getElementById("type").selectedIndex = 0;

                    document.getElementById("loop_container").style.display = "none";

                } else if (file_name.includes(".lopus")) {
                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].setAttribute("disabled", "");
                    document.getElementById("type").options[2].removeAttribute("disabled");
                    document.getElementById("type").selectedIndex = 2;

                    document.getElementById("loop_container").style.display = "none";
                } else if (file_name.includes(".idsp")) {
                    document.getElementById("type").options[0].setAttribute("disabled", "");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].setAttribute("disabled", "");
                    document.getElementById("type").selectedIndex = 1;

                    document.getElementById("loop_container").style.display = "block";
                    document.getElementById("loop_samples_select_container").style.display = "none";
                }
                else {
                    document.getElementById("type_div").style.display = "block";
                    document.getElementById("type").options[0].removeAttribute("disabled");
                    document.getElementById("type").options[1].removeAttribute("disabled");
                    document.getElementById("type").options[2].removeAttribute("disabled");
                    document.getElementById("loop_container").style.display = "block";
                    document.getElementById("loop_samples").style.display = "block";
                    document.getElementById("loop_samples_select_container").style.display = "none";

                }

                UpdateLoopSelect(document.getElementById("loop_samples_select"));
            } else {
                document.getElementById("fileerror").style.display = "none";
                document.getElementById("type_div").style.display = "block";
                document.getElementById("loop_samples").style.display = "block";
                UpdateLoopSelect(document.getElementById("loop_samples_select"));
            }

            UpdateType(document.getElementById("type"));
        }
    </script>
    <script src="https://smashultimatetools.com/js/stages.js"></script>
</body>

</html>
