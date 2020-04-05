<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{Request::root()}}">
    <title>Fighter Param Editor</title>
    <script src="./js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/prcFighterParam.css">
</head>

<body>

    <form method="post" action="{{action('prcController@StoreFighterParamPrc')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoFighterParamPrc')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" id="open">
            Open
        </button>
        <button type="button" class="btn btn-success" id="save">
            Save
        </button>
        <a href="./prc/FighterParam/0">
            <button type="button" class="btn btn-secondary">
                Load Default
            </button>
        </a>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#randomizeOptions">
            Randomize!
        </button>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#options">
            Options
        </button>
    </div>

    <div class="message">
        <br>
        <h2 style="text-align: center;">Please open a <strong>fighter_param.prc</strong> file</h2>
    </div>

    <div class="loading">
        <br>
        <h2 style="text-align: center;">Loading...</h2>
    </div>

    <div class="main" style="display:none;">
        <br>
        <div class="container">
            <div class="form-group">
                <label for="characters">Character Select:</label>
                <select class="form-control" id="characters" onchange="UpdateInputs(this)">

                </select>
            </div>

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="ground-tab" data-toggle="tab" href="#ground" role="tab" aria-controls="ground" aria-selected="true">Ground</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="jump-tab" data-toggle="tab" href="#jump" role="tab" aria-controls="jump" aria-selected="false">Jump</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="air-tab" data-toggle="tab" href="#air" role="tab" aria-controls="air" aria-selected="false">Air</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="landingFrame-tab" data-toggle="tab" href="#landingFrame" role="tab" aria-controls="landingFrame" aria-selected="false">Landing Frames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="int-tab" data-toggle="tab" href="#int" role="tab" aria-controls="int" aria-selected="false">Misc.</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="ground" role="tabpanel" aria-labelledby="ground-tab">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="float0">Walk Acceleration Multiplier (walk_accel_mul)</label>
                                    <input class="form-control" id="float0">
                                </div>

                                <div class="form-group">
                                    <label for="float1">Walk Acceleration Add (walk_accel_add)</label>
                                    <input class="form-control" id="float1">
                                </div>

                                <div class="form-group">
                                    <label for="float2">Walk Acceleration Max (walk_accel_max)</label>
                                    <input class="form-control" id="float2">
                                </div>

                                <div class="form-group">
                                    <label for="float3">Walk Slow Speed Multiplier (walk_slow_speed_mul)</label>
                                    <input class="form-control" id="float3">
                                </div>

                                <div class="form-group">
                                    <label for="float4">Walk Middle Ratio (walk_middle_ratio)</label>
                                    <input class="form-control" id="float4">
                                </div>

                                <div class="form-group">
                                    <label for="float5">Walk Fast Ratio (walk_fast_ratio)</label>
                                    <input class="form-control" id="float5">
                                </div>

                                <div class="form-group">
                                    <label for="float6">Ground Brake (ground_brake)</label>
                                    <input class="form-control" id="float6">
                                </div>

                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="float8">Run Acceleration Multiplier (run_accel_mul)</label>
                                    <input class="form-control" id="float8">
                                </div>

                                <div class="form-group">
                                    <label for="float9">Run Acceleration Add (run_accel_add)</label>
                                    <input class="form-control" id="float9">
                                </div>

                                <div class="form-group">
                                    <label for="float10">Run Speed Max (run_speed_max)</label>
                                    <input class="form-control" id="float10">
                                </div>

                                <div class="form-group">
                                    <label for="float7">Dash Speed (dash_speed)</label>
                                    <input class="form-control" id="float7">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="jump" role="tabpanel" aria-labelledby="jump-tab">
                    <br>
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="float15">Jump Inital Y (jump_inital_y)</label>
                                    <input class="form-control" id="float15" oninput="changeJumpY(this);">
                                </div>

                                <div class="form-group">
                                    <label for="float16">Jump Y (jump_y)</label>
                                    <input class="form-control" id="float16" oninput="changeJumpY(this);">
                                </div>

                                <div class="form-group">
                                    <label for="float17">Mini Jump Y (mini_jump_y)</label>
                                    <input class="form-control" id="float17">
                                </div>

                                <div class="form-group">
                                    <label for="float18">Jump Aerial Y (jump_aerial_y)</label>
                                    <input class="form-control" id="float18">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="float11">Jump Speed X (jump_speed_x)</label>
                                    <input class="form-control" id="float11">
                                </div>

                                <div class="form-group">
                                    <label for="float12">Jump Speed X Multiplier (jump_speed_x_mul)</label>
                                    <input class="form-control" id="float12">
                                </div>

                                <div class="form-group">
                                    <label for="float13">Jump Speed X Max (jump_speed_x_max)</label>
                                    <input class="form-control" id="float13">
                                </div>

                                <div class="form-group">
                                    <label for="float14">Jump Aerial Speed X Max (jump_aerial_speed_x_max)</label>
                                    <input class="form-control" id="float14">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="air" role="tabpanel" aria-labelledby="air-tab">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="float19">Air Accel X Multiplier (air_accel_x_mul)</label>
                                    <input class="form-control" id="float19">
                                </div>

                                <div class="form-group">
                                    <label for="float20">Air Accel X Add (air_accel_x_add)</label>
                                    <input class="form-control" id="float20">
                                </div>

                                <div class="form-group">
                                    <label for="float21">Air Accel X Stable (air_accel_x_stable)</label>
                                    <input class="form-control" id="float21">
                                </div>

                                <div class="form-group">
                                    <label for="float22">Air Brake X (air_brake_x)</label>
                                    <input class="form-control" id="float22">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="float23">Air Accel Y (air_accel_y)</label>
                                    <input class="form-control" id="float23">
                                </div>

                                <div class="form-group">
                                    <label for="float24">Air Accel Y Stable (air_accel_y_stable)</label>
                                    <input class="form-control" id="float24">
                                </div>

                                <div class="form-group">
                                    <label for="float25">Damage Fly Top Air Accel Y (damage_fly_top_air_accel_y)</label>
                                    <input class="form-control" id="float25">
                                </div>

                                <div class="form-group">
                                    <label for="float26">Damage Fly Top Air Accel Y Stable (damage_fly_top_air_accel_y_stable)</label>
                                    <input class="form-control" id="float26">
                                </div>

                                <div class="form-group">
                                    <label for="float27">Air Break Y (air_break_y)</label>
                                    <input class="form-control" id="float27">
                                </div>

                                <div class="form-group">
                                    <label for="float28">Dive Speed Y (dive_speed_y)</label>
                                    <input class="form-control" id="float28">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="landingFrame" role="tabpanel" aria-labelledby="landingFrame-tab">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label for="float31">Landing Attack Air Frame Neutral
                                        (landing_attack_air_frame_n)</label>
                                    <input class="form-control" id="float31">
                                </div>

                                <div class="form-group">
                                    <label for="float32">Landing Attack Air Frame Foward
                                        (landing_attack_air_frame_f)</label>
                                    <input class="form-control" id="float32">
                                </div>

                                <div class="form-group">
                                    <label for="float33">Landing Attack Air Frame Back
                                        (landing_attack_air_frame_b)</label>
                                    <input class="form-control" id="float33">
                                </div>

                                <div class="form-group">
                                    <label for="float34">Landing Attack Air Frame Up
                                        (landing_attack_air_frame_hi)</label>
                                    <input class="form-control" id="float34">
                                </div>

                                <div class="form-group">
                                    <label for="float35">Landing Attack Air Frame Down
                                        (landing_attack_air_frame_down)</label>
                                    <input class="form-control" id="float35">
                                </div>

                                <div class="form-group">
                                    <label for="float36">Landing Frame Light (landing_frame_light)</label>
                                    <input class="form-control" id="float36">
                                </div>

                                <div class="form-group">
                                    <label for="float37">Landing Frame (landing_frame)</label>
                                    <input class="form-control" id="float37">
                                </div>
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="int" role="tabpanel" aria-labelledby="int-tab">
                    <br>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="int14">Jump Count Max (jump_count_max)</label>
                                    <input class="form-control" id="int14">
                                </div>

                                <div class="form-group">
                                    <label for="float38">Scale (scale)</label>
                                    <input class="form-control" id="float38">
                                </div>

                                <div class="form-group">
                                    <label for="float29">Weight (weight)</label>
                                    <input class="form-control" id="float29">
                                </div>

                                <div class="form-group">
                                    <label for="float72">Height (height)</label>
                                    <input class="form-control" id="float72">
                                </div>

                                <div class="form-group">
                                    <label for="float73">Expand Height (expand_height)</label>
                                    <input class="form-control" id="float73">
                                </div>

                                <div class="form-group">
                                    <label for="float39">Shield Radius (shield_radius)</label>
                                    <input class="form-control" id="float39">
                                </div>

                                <div class="form-group">
                                    <label for="float40">Shield Break Y (shield_break_y)</label>
                                    <input class="form-control" id="float40">
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <div class="col-sm-8"><label for="bool1">Squat Walk Type (squat_walk_type)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bool1">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8"><label for="bool2">Wall Jump Type (wall_jump_type)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bool2">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8"><label for="bool3">Attach Wall Type (attach_wall_type)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bool3">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-8"><label for="bool4">Air Lasso Type (air_lasso_type)</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bool4">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <!-- Modal -->
    <div class="modal fade" id="randomizeOptions" tabindex="-1" role="dialog" aria-labelledby="randomizeOptionsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="randomizeOptionsLabel">Randomizer Options</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="randomValues">
                        <div class="form-group" id="form-append">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" id="start_random">Randomize!</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="options" tabindex="-1" role="dialog" aria-labelledby="optionsLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="optionsLabel">Options:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-sm-8"><label for="auto_calculate_jump_y">Auto-Calculate Jump Y</label>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="auto_calculate_jump_y" checked="checked">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/translate.js"></script>
    <script src="./js/prcFighterParam.js"></script>
</body>

</html>
