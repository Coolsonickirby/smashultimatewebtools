<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SSS Editor</title>
    <base href="{{Request::root()}}">
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="./css/new-front-page.css">
    <link rel="stylesheet" href="./css/prcStage.css">
    <link rel="stylesheet" href="./css/editableSelectStage.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <style>
        .header-mobile {
            grid-template-rows: 1fr !important;
            grid-template-areas: "." !important;
            margin-bottom: 40px !important;
        }
    </style>
</head>

<body>

    <div class="header-desktop">
        <div class="tab">
        </div>
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img"
            data-href="./" />
        <div class="tab">
        </div>
    </div>

    <div class="header-mobile">
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img"
            data-href="./" />
    </div>

    <form method="post" action="{{action('prcController@StoreStagePrc')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoStagePrc')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="buttons">
        <div class="button-parent">
            <button id="open">Open</button>
        </div>

        <div class="button-parent">
            <button id="save">Save</button>
        </div>

        <div class="button-parent">
            <button id="default">Load Default</button>
        </div>

        <div class="button-parent">
            <button id="randomize">Randomize!</button>
        </div>
    </div>

    <div style="text-align: center; font-weight: bold;">
        <span>The saved file <span style="color: orangered;">ui_stage_db.prc</span> goes in <span
                style="color: blue;">ui/param/database/</span></span>
    </div>


    <div class="container">
        <div class="Left">
            <div class="options">
                <h4>Hovering over: <span id="current_hover"></span></h4>
                <h4>Currently Selected: <span id="current_selected"></span></h4>
                <br>
                <div class="form-field">
                    <label for="ui_stage_id">UI Stage ID: </label>
                    <input id="ui_stage_id">
                </div>

                <div class="form-field">
                    <label for="name_id">Name ID: </label>
                    <input id="name_id">
                </div>

                <div class="form-field">
                    <label for="ui_series_id">UI Series ID: </label>
                    <input id="ui_series_id">
                </div>

                <div class="form-field">
                    <label for="stage_place_id">Stage Place ID: </label>
                    <input id="stage_place_id">
                </div>

                <div class="form-field">
                    <label for="secret_stage_place_id">Secret Stage Place ID (Hold L when loading): </label>
                    <input id="secret_stage_place_id">
                </div>

                <div class="form-field">
                    <label for="bgm_set_id">BGM Set ID (Playlist): </label>
                    <input id="bgm_set_id">
                </div>

                <div class="form-field">
                    <label for="bgm_setting_id">BGM Setting No.: </label>
                    <input id="bgm_setting_id" style="width: 215px">
                </div>

                <div class="form-field">
                    <label for="can_demo">Can Demo: </label>
                    <input id="can_demo" type="checkbox">
                </div>

                <div class="form-field">
                    <label for="can_select">Can Select (Random): </label>
                    <input id="can_select" type="checkbox">
                </div>
            </div>
            <div class="image_holder">
                <img class="big_img" id="big_img" src="./img/default.png" width="512" height="256"
                    onError="errorImage(this)">
                <div class="stage_text">
                    <div class="left-side-angle">
                    </div>
                    <h4 id="big_stage_text">Please select a stage</h4>
                </div>
            </div>
        </div>

        <div class="Right">
            <div class="right_side" oncontextmenu="return false;">
                <p style="text-align: center; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"><strong>Non-Hidden</strong></p>
                <div class="list-grid sortable" id="non-hidden">
                </div>
                <p style="text-align: center; text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;"><strong>Hidden</strong></p>
                <div class="list-grid sortable" id="hidden">
                </div>
            </div>
        </div>
    </div>

    <script src="./js/html5sortable.min.js"></script>
    <script src="./js/editableSelectStage.js"></script>
    <script src="./js/prcStage.js"></script>

</body>

</html>
