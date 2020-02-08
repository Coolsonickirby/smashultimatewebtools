<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smash Ultimate Audio</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <script src="{{URL::asset('/js/jquery-3.4.1.js')}}"></script>
    <script src="{{URL::asset('/js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <style>
        .margin-custom{
            margin-top:10px;
        }

        .breathing-space{
            margin-right:15px;
            margin-left: 5px;
            margin-bottom: 5px;
        }
    </style>
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

        <div class="container">


            <form method="post" action="{{ action('MainController@replacement_nus3audio') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <label for="music">Music File:</label>
                <input type="file" class="form-control" id="music" name="music" accept=".nus3audio"
                    onchange="AlertFilesize();">
                <small class="form-text text-muted">File Size Limit: 100mb</small>
                <small class="form-text" style="color:red; display:none;" id="fileerror">File too big!</small>
                <small class="form-text" style="color:coral;">Supported Formats: nus3audio</small>
                <br>
                <div id="files">
                    <div id="file_0" class="form-inline">
                        <label for="id">ID: &nbsp;</label>
                        <input class="form-control breathing-space" name="files_id[]" id="files_id_0">
                        <input type="file" class="form-control" name="files[]"
                            accept=".idsp, .lopus">
                    </div>
                </div>
                <hr>
                <br>
                <button type="button" class="btn btn-primary" onclick="add_field()">Add Field</button>
                <button type="submit" class="btn btn-success" style="float:right;">Submit</button>
            </form>
        </div>

        <br>

        @include('extras/credits')
        <h2>Extra Stuff:</h2>
        @include('extras/extras')

        <br>

        @include('extras/faq')

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
            <div id="` + id + `">
                <hr>
                <div class="form-inline margin-custom">
                    <button type="button" class="close" aria-label="Close" onclick="remove_field('` + id + `')">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <input class="form-control breathing-space" name="files_id[]" id="files_id_` + id + `" style="display:inline;">
                    <input type="file" class="form-control" style="display:inline;" name="files[]" accept=".idsp, .lopus">
                </div>
            </div>
            `;
            document.getElementById("files").appendChild(new_input);

            setInputFilter(document.getElementById("files_id_" + id), function (value) {
                return /^-?\d*$/.test(value);
            });

        }

        function remove_field(elementId) {
            var element = document.getElementById(elementId);
            element.parentNode.removeChild(element);
        }

        window.onload = function () {
            AlertFilesize();

            setInputFilter(document.getElementById("files_id_0"), function (value) {
                return /^-?\d*$/.test(value);
            });
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
</body>

</html>
