<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>nus3audio Editor</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="{{URL::asset('../css/audio.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/new-front-page.css')}}">
    <link rel="stylesheet" href="{{URL::asset('../css/nus3audio_editor.css')}}">
    <style>
        .header-mobile {
            grid-template-rows: 1fr !important;
            grid-template-areas: "." !important;
            margin-bottom: 40px !important;
        }

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
            grid-template-areas:
                    "Left Left"
                    "Extras Extras" !important;
        }

        .small{
            width: 25px;
            height: 25px;
            margin: 0;
            margin-bottom: 5px;
        }

        .small > button{
            width: 25px;
            height: 25px;
            min-height: 25px;
        }
    </style>
</head>

<body>

    <div class="header-desktop">
        <div class="tab">
        </div>
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img" data-href="./" />
        <div class="tab">
        </div>
    </div>

    <div class="header-mobile">
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img" data-href="./" />
    </div>

    <div style="text-align: center;">
        <a href="javascript:toggleEditors()" style="text-decoration: none; font-weight: bold; margin-right: 13px;">Switch Editors</a>
    </div>

    <br>

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


            <div id="new-main">
                <div class="buttons">
                    <div class="button-parent">
                        <button class="tablinks" id="open">Open</button>
                        <input type="file" id="file" accept=".nus3audio" hidden>
                    </div>

                    <div class="button-parent">
                        <button class="tablinks" id="save">Save</button>
                    </div>
                </div>
                <div style="text-align: center;">
                    <h1 id="prog">Please open a nus3audio file!</h1>
                </div>
                <br>
                <div id="main-section">
                    <table>
                        <tbody id="main-entries">
                        </tbody>
                    </table>
                </div>
            </div>


            <div id="old-main">
                <form method="post" action="{{ action('miscController@replacement_nus3audio') }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-file-input">
                        <label for="music">nus3audio File:</label>
                        <input type="file" class="form-control" id="music" name="music" accept=".nus3audio"
                            onchange="AlertFilesize();">
                        <small class="form-text text-muted">File Size Limit: 100mb</small>
                        <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                        <small class="form-text" style="color:coral;">Supported Formats: nus3audio</small>
                    </div>
                    <br>

                    <div id="files">
                        <div id="file_0">
                            <label for="id">ID:</label>
                            <div class="form-text-input">
                                <input name="files_id[]" id="files_id_0">
                            </div>
                            <br>
                            <div class="form-file-input">
                                <input type="file" name="files[]" accept=".idsp, .lopus">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="button-parent">
                        <button type="button" class="btn btn-primary" onclick="add_field()">Add Field</button>
                    </div>

                    <div class="button-parent" style="margin-right: 0; float: right;">
                        <button type="submit" class="btn btn-success" style="float:right;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="Extras">
            <br>
            <hr>
            <br>
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
    </script>
    <script>
        fields_amount = 0;

        function add_field() {
            fields_amount++;

            id = "file_" + fields_amount;

            var new_input = document.createElement("div");

            new_input.innerHTML = `
            <div id="${id}">
                <hr>
                    <div class="button-parent small">
                        <button type="button" class="close" aria-label="Close" onclick="remove_field('${id}')">
                           &times;
                        </button>

                        </div>
                        <div class="form-text-input">
                            <input name="files_id[]" id="files_id_${fields_amount}">
                        </div>
                        <br>
                        <div class="form-file-input">
                            <input type="file" name="files[]" accept=".idsp, .lopus">
                        </div>
                    </div>
            `;

            document.getElementById("files").appendChild(new_input);

            setInputFilter(document.getElementById("files_id_" + fields_amount), function (value) {
                return /^-?\d*$/.test(value);
            });

        }

        function remove_field(elementId) {
            var element = document.getElementById(elementId);
            element.parentNode.removeChild(element);
        }

        /*
            Thanks to the Stackoverflow community wiki
            Source: https://stackoverflow.com/posts/469362/revisions
        */
        function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (event) {
                textbox.addEventListener(event, function () {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                });
            });
        }

    </script>


    <script src="{{URL::asset('../js/md5.min.js')}}"></script>
    <script src="{{URL::asset('../js/nus3audio.js')}}"></script>
    <script src="{{URL::asset('../js/nus3audio_editor.js')}}"></script>
</body>

</html>
