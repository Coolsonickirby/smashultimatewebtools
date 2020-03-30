<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{Request::root()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Ultimate CSS Editor</title>
    <link rel="stylesheet" href="./css/prcChara.css">
</head>

<body>

    <form method="post" action="{{action('prcController@StoreCharaPrc')}}" enctype="multipart/form-data" id="openForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="fileInput" id='fileInput' type='file' accept=".prc" hidden />
    </form>

    <form method="post" action="{{action('prcController@JSONtoCharaPrc')}}" enctype="multipart/form-data" id="saveForm">
        <input name="_token" type="hidden" value="{{ csrf_token() }}" />
        <input name="json" id="jsonInput" hidden />
    </form>

    <div class="header">
        <button id="open" class="open">Open</button>
        <button id="save" class="save">Save</button>
    </div>

    <div class="container" aria-hidden="true">

        <p class="title"><strong>Not Hidden</strong><br>
            <label for="css_style_1_flex">Flex Layout</label>
            <input type="radio" id="css_style_1_flex" name="css_style_1" value="flex">
            <label for="css_style_1_grid">Grid Layout</label>
            <input type="radio" id="css_style_1_grid" name="css_style_1" value="grid">
            <button onClick="RandomizeMain();">Randomize!</button>
        </p>

        <div id="non_hidden_outer">
            <div class="sortable" id="non_hidden">
                <!-- Sortable -->
            </div>
        </div>


        <p class="title"><strong>Hidden</strong><br>
            <label for="css_style_2_flex">Flex Layout</label>
            <input type="radio" id="css_style_2_flex" name="css_style_2" value="flex">
            <label for="css_style_2_grid">Grid Layout</label>
            <input type="radio" id="css_style_2_grid" name="css_style_2" value="grid">
        </p>
        <div class="sortable list-flex" id="hidden">
            <!-- Sortable -->
        </div>
    </div>

    <div class="footer" style="text-align:center;">
        <p style="color:orangered;">Warning: Moving Random doesn't seem to work in Smash</p>
        <p>I'd recommend switching to Grid Layout if you're having trouble moving characters (Flex Layout makes it look similar to Smash). Also, please make sure you upload a valid <strong>ui_chara_db.prc</strong> file</p>
    </div>


    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/html5sortable.min.js"></script>

    <script src="./js/prcChara.js"></script>

</body>

</html>
