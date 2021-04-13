<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fighter Param Editor</title>
    <base href="{{Request::root()}}">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="./css/new-front-page.css">
    <link rel="stylesheet" href="./css/prcFighterParam.css">
    <style>
    @media only screen and (max-width:1460px) {
        .main-section {
            width: 85%;
        }
    }

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

    <form method="post" action="{{action('prcController@StoreFighterParamPrc')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoFighterParamPrc')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="buttons">
        <div class="button-parent">
            <button class="tablinks" id="open">Open</button>
        </div>

        <div class="button-parent">
            <button class="tablinks" id="save">Save</button>
        </div>

        <div class="button-parent">
            <button class="tablinks" id="default" onclick="window.location.href = this.getAttribute('data-href')" data-href="./prc/FighterParam/0" id="save">Load Default</button>
        </div>

        <div class="button-parent">
            <button class="tablinks" id="randomBtn" onclick="ShowModal('randomizeOptions')">Randomize!</button>
        </div>

        <div class="button-parent">
            <button class="tablinks" id="optionsBtn" onclick="ShowModal('shuffler')">Shuffle</button>
        </div>

        <div class="button-parent">
            <button class="tablinks" id="optionsBtn" onclick="ShowModal('options')">Options</button>
        </div>
    </div>

    <br>

    <div style="text-align: center; font-weight: bold;">
        <span>The saved file <span style="color: orangered;">fighter_param.prc</span> goes in <span
                style="color: blue;">fighter/common/param</span></span>
    </div>

    <div class="message">
        <br>
        <h2 style="text-align: center;">Please open a <strong>fighter_param.prc</strong> file</h2>
    </div>

    <div class="loading">
        <br>
        <h2 style="text-align: center;">Loading...</h2>
    </div>
    <br>
    <div class="main-section" style="display: none;">
        <br>
        <div>
            <div class="form-group">
                <label for="characters" style="text-align: center;">Character Select:</label>
                <select class="form-control" id="characters" onchange="UpdateInputs(this)" style="width: 100%;">
                </select>
            </div>
            <br>

            <div class="buttons">
                <div class="button-parent">
                    <button class="tablinks" onclick="openTab(event, 'ground')">Ground</button>
                </div>
                <div class="button-parent">
                    <button class="tablinks" onclick="openTab(event, 'jump')">Jump</button>
                </div>
                <div class="button-parent">
                    <button class="tablinks" onclick="openTab(event, 'air')">Air</button>
                </div>
                <div class="button-parent">
                    <button class="tablinks" onclick="openTab(event, 'landingFrame')">Landing Frames</button>
                </div>
                <div class="button-parent">
                    <button class="tablinks" onclick="openTab(event, 'int')">Misc.</button>
                </div>
            </div>

            <div id="tab-content">
                <div class="tab-page" id="ground">
                    <div class="Left">
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

                    <div class="Right">
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
                <div class="tab-page" id="jump" role="tabpanel" aria-labelledby="jump-tab">

                    <div class="Left">
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

                    <div class="Right">
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
                <div class="tab-page" id="air" role="tabpanel" aria-labelledby="air-tab">
                    <div class="Left">
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

                    <div class="Right">
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
                            <label for="float26">Damage Fly Top Air Accel Y Stable
                                (damage_fly_top_air_accel_y_stable)</label>
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
                <div class="tab-page" id="landingFrame" role="tabpanel" aria-labelledby="landingFrame-tab">
                    <div class="Left">

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

                    <div class="Right">
                    </div>
                </div>
                <div class="tab-page" id="int" role="tabpanel" aria-labelledby="int-tab">
                    <div class="Left">
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
                    <div class="Right">
                        <div class="form-group">
                            <label for="bool1">Squat Walk Type (squat_walk_type)</label>
                            <input class="form-check-input" type="checkbox" id="bool1">
                        </div>

                        <div class="form-group">
                            <label for="bool2">Wall Jump Type (wall_jump_type)</label>
                            <input class="form-check-input" type="checkbox" id="bool2">
                        </div>

                        <div class="form-group">
                            <label for="bool3">Attach Wall Type (attach_wall_type)</label>
                            <input class="form-check-input" type="checkbox" id="bool3">
                        </div>

                        <div class="form-group">
                            <label for="bool4">Air Lasso Type (air_lasso_type)</label>
                            <input class="form-check-input" type="checkbox" id="bool4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>






    <!-- Modal -->
    <div class="modal" id="randomizeOptions">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="randomizeOptionsLabel">Randomizer Options</h2>
                </div>
                <hr>
                <div class="modal-body">
                    <form id="randomValues">
                        <div class="form-group" id="form-append">
                        </div>
                    </form>
                </div>
                <hr>
                <br>
                <div class="modal-footer">
                    <div class="buttons">
                        <div class="button-parent">
                            <button type="button" class="btn btn-secondary"
                                onclick="HideModal('randomizeOptions')">Close</button>
                        </div>
                        <div class="button-parent">
                            <button class="tablinks" id="start_random">Randomize!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal" id="options">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="optionsLabel">Options</h2>
                </div>
                <div class="modal-body">
                    <div class="form-group-check">
                        <label for="auto_calculate_jump_y">Auto-Calculate Jump Y</label>
                                <input class="form-check-input" type="checkbox" id="auto_calculate_jump_y"
                                    checked="checked">
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                    <div class="button-parent">
                        <button type="button" class="btn btn-secondary"
                            onclick="HideModal('options')">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
    <div class="modal" id="shuffler">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="shufflerLabel">Shuffler</h2>
                </div>
                <div class="modal-body">
                    <div class="form-group-check">
                        <label for="shuffle_all">Shuffle all character attributes</label>
                        <input class="form-check-input" type="radio" id="shuffle_all" name="shuffle_type" value="all">
                    </div>
                </div>
                <br>
                <div class="modal-footer">
                    <div class="button-parent">
                        <button type="button" class="btn btn-secondary"
                            onclick="HideModal('shuffler')">Close</button>
                    </div>
                    <div class="button-parent">
                        <button class="tablinks" id="start_shuffle">Shuffle!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/translate.js"></script>
    <script src="./js/prcFighterParam.js"></script>
</body>

</html>
