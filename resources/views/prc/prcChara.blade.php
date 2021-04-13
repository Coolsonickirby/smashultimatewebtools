<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{Request::root()}}">
    <meta name="viewport" content="width=1024">
    <title>Smash Ultimate CSS Editor</title>
    <link rel="stylesheet" href="./css/new-front-page.css">
    <link rel="stylesheet" href="./css/prcChara.css">
    <style>
        .header-mobile {
            grid-template-rows: 1fr !important;
            grid-template-areas: "." !important;
            margin-bottom: 40px !important;
        }
    </style>
</head>

<body>

    <div id="context-menu-controller">
        <div id="left-arrow"></div>
        <div id="right-arrow"></div>
        <div id="character-context-menu">
            <table>
                <tr>
                    <td>Character:</td>
                    <td id="chara_name">{Character Name}</td>
                </tr>
                <tr>
                    <td>Character ID:</td>
                    <td><input id="ui_chara_id" class="context-input-text" type="textbox"></td>
                </tr>
                <tr>
                    <td>Echo Fighter:</td>
                    <td>
                        <select id="echo_fighters" class="context-input-select">
                            <option value="">None</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Fighter Type:</td>
                    <td>
                        <select id="fighter_types" class="context-input-select">
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Exhibit Year:</td>
                    <td><input class="context-input-text" type="textbox" id="exhibit_year"></td>
                </tr>
                <tr>
                    <td>Can Select (Random):</td>
                    <td><input type="checkbox" id="can_select"></td>
                </tr>
                <tr>
                    <td>Is Mii:</td>
                    <td><input type="checkbox" id="is_mii"></td>
                </tr>
                <tr>
                    <td>Is Boss:</td>
                    <td><input type="checkbox" id="is_boss"></td>
                </tr>
                <tr>
                    <td>Is Hidden Boss:</td>
                    <td><input type="checkbox" id="is_hidden_boss"></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="header-desktop">
        <div class="tab">
        </div>
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img"
            data-href="https://smashultimatetools.com/" />
        <div class="tab">
        </div>
    </div>

    <div class="header-mobile">
        <img src="../img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="window.location.href = this.getAttribute('data-href')" id="main-header-img"
            data-href="https://smashultimatetools.com/" />
    </div>

    <form method="post" action="{{action('prcController@StoreCharaPrc')}}" enctype="multipart/form-data"
        id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoCharaPrc')}}" enctype="multipart/form-data"
        id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="buttons">
        <div class="button-parent">
            <button class="tablinks open" id="open">Open</button>
        </div>

        <div class="button-parent">
            <button class="tablinks save" id="save">Save</button>
        </div>

        <div class="button-parent">
            <a href="./prc/Chara/0"><button class="tablinks load-default">Load Default</button></a>
        </div>
    </div>

    <div style="text-align: center; font-weight: bold;">
        <span>The saved file <span style="color: orangered;">ui_chara_db.prc</span> goes in <span
                style="color: blue;">ui/param/database/</span></span>
    </div>
    <hr style="width: 80%;">
    <div class="container_chara" aria-hidden="true">

        <div class="title"><strong>Not Hidden</strong><br>
            <label for="css_style_1_flex">Flex Layout</label>
            <input type="radio" id="css_style_1_flex" name="css_style_1" value="flex">
            <label for="css_style_1_grid">Grid Layout</label>
            <input type="radio" id="css_style_1_grid" name="css_style_1" value="grid">

            <div class="button-parent" style="display: inline-flex; float: none; width: 86px;">
                <button onClick="RandomizeMain();" class="tablinks" style="width: 86px;">Randomize!</button>
            </div>
        </div>
        <br>
        <div id="non_hidden_outer">
            <div class="sortable" id="non_hidden" oncontextmenu="return false;">
                <!-- Sortable -->
            </div>
        </div>
        <hr>
        <div class="title"><strong>Hidden</strong><br>
            <label for="css_style_2_flex">Flex Layout</label>
            <input type="radio" id="css_style_2_flex" name="css_style_2" value="flex">
            <label for="css_style_2_grid">Grid Layout</label>
            <input type="radio" id="css_style_2_grid" name="css_style_2" value="grid">
        </div>
        <div class="sortable list-flex" id="hidden" oncontextmenu="return false;">
            <!-- Sortable -->
        </div>
    </div>

    <div class="footer" style="text-align:center;">
        <p style="color:orangered;">Warning: Moving Random doesn't seem to work in Smash</p>
        <p>I'd recommend switching to Grid Layout if you're having trouble moving characters (Flex Layout makes it look
            similar to Smash). Also, please make sure you upload a valid <strong>ui_chara_db.prc</strong> file</p>
    </div>


    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/html5sortable.min.js"></script>

    <script src="./js/translate.js"></script>
    <script src="./js/prcChara.js"></script>

</body>

</html>
