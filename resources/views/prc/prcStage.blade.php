<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SSS Editor</title>
    <base href="{{Request::root()}}">
    <meta name="viewport" content="width=1024">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/prcStage.css">
    <link rel="stylesheet" href="./css/editableSelectStage.css">
</head>

<body>

    <form method="post" action="{{action('prcController@StoreStagePrc')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoStagePrc')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="header">
        <button class="btn btn-primary" id="open">Open</button>
        <button class="btn btn-success" id="save">Save</button>
        <button class="btn btn-secondary" id="default">Load Default</button>
        <button class="btn btn-danger" id="randomize">Randomize!</button>
    </div>

    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="options">
                        <h4>Hovering over:
                            <span id="current_hover"></span>
                        </h4>
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
                            <label for="can_demo">Can Demo: </label>
                            <input id="can_demo" type="checkbox">
                        </div>
                    </div>
                    <div class="image_holder">
                        <img class="big_img" id="big_img" src="./img/default.png" width="512" height="256" onError="errorImage(this)">
                        <div class="stage_text">
                            <h4 style="text-align: left;" id="big_stage_text">Please select a stage</h4>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="right_side">
                        <p style="text-align: center;"><strong>Non-Hidden</strong></p>
                        <div class="list-grid sortable" id="non-hidden">
                        </div>
                        <br>
                        <p style="text-align: center;"><strong>Hidden</strong></p>
                        <div class="list-grid sortable" id="hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="./js/html5sortable.min.js"></script>
    <script src="./js/editableSelectStage.js"></script>
    <script src="./js/prcStage.js"></script>

</body>

</html>
