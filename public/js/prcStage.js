//#region Constants


const enableL_Loading = "0x172e18dbe0";

const disableL_Loading = "0x1a08271a76";

const api_url = "./api/StageJSON/";

//Not sure if I should keep this as one line or not. One Line makes it look cleaner though.
const StagesName = { "75m": "75 m", "Animal_City": "Town and City", "Animal_Island": "Tortimer Island", "Animal_Village": "Smashville", "BalloonFight": "Balloon Fight", "BattleField": "Battlefield", "BattleFieldL": "Big Battlefield", "Bayo_Clock": "Umbra Clock Tower", "Brave_Altar": "Yggdrasil's Altar ", "Buddy_Spiral": "Spiral Mountain", "DK_Jungle": "Kongo Jungle", "DK_Lodge": "Jungle Japes", "DK_WaterFall": "Kongo Falls", "Dolly_Stadium": "King of Fighters Stadium", "Dracula_Castle": "Dracula's Castle", "DuckHunt": "Duck Hunt", "End": "Final Destination", "FE_Arena": "Arena Ferox", "FE_Colloseum": "Coliseum", "FE_Shrine": "Garreg Mach Monastery", "FE_Siege": "Castle Siege", "FF_Midgar": "Midgar", "FlatZoneX": "Flat Zone X", "Fox_Corneria": "Corneria", "Fox_LylatCruise": "Lylat Cruise", "Fox_Venom": "Venom", "Fzero_Bigblue": "Big Blue", "Fzero_Mutecity3DS": "Mute City SNES", "Fzero_Porttown": "Port Town Aero Dive", "GeneralAll": "ALL", "HomerunContest": "Home-Run Contest", "Icarus_Angeland": "Palutena's Temple", "Icarus_SkyWorld": "Skyworld", "Icarus_Uprising": "Reset Bomb Forest", "Ice_Top": "Summit", "Jack_Mementoes": "Mementos", "Kart_CircuitFor": "Mario Circuit", "Kart_CircuitX": "Figure-8 Circuit", "Kirby_Cave": "The Great Cave Offensive", "Kirby_Fountain": "Fountain of Dreams", "Kirby_Gameboy": "Dream Land GB", "Kirby_Greens": "Green Greens", "Kirby_Halberd": "Halberd", "Kirby_Pupupu64": "Dream Land", "LuigiMansion": "Luigi's Mansion", "MG_Shadowmoses": "Shadow Moses Island", "MarioBros": "Mario Bros.", "Mario_3DLand": "3D Land", "Mario_Castle64": "Peach's Castle", "Mario_CastleDx": "Princess Peach's Castle", "Mario_Dolpic": "Delfino Plaza", "Mario_Galaxy": "Mario Galaxy", "Mario_Maker": "Super Mario Maker", "Mario_NewBros2": "Golden Plains", "Mario_Odyssey": "New Donk City Hall", "Mario_Paper": "Paper Mario", "Mario_Past64": "Mushroom Kingdom", "Mario_PastUsa": "Mushroom Kingdom II", "Mario_PastX": "Mushroomy Kingdom", "Mario_Rainbow": "Rainbow Cruise", "Mario_Uworld": "Mushroom Kingdom U", "MenuMusic": "Menu", "Metroid_Kraid": "Brinstar Depths", "Metroid_Norfair": "Norfair", "Metroid_Orpheon": "Frigate Orpheon", "Metroid_ZebesDx": "Brinstar", "Mother_Fourside": "Fourside", "Mother_Magicant": "Magicant", "Mother_Newpork": "New Pork City", "Mother_Onett": "Onett", "NintenDogs": "Living Room", "Pac_Land": "PAC-LAND", "Pictochat2": "PictoChat 2", "Pikmin_Garden": "Garden of Hope", "Pikmin_Planet": "Distant Planet", "Pilotwings": "Pilotwings", "Plankton": "Hanenbow", "Poke_Kalos": "Kalos Pokémon League", "Poke_Stadium": "Pokémon Stadium", "Poke_Stadium2": "Pokémon Stadium 2", "Poke_Tengam": "Spear Pillar", "Poke_Tower": "Prism Tower", "Poke_Unova": "Unova Pokémon League", "Poke_Yamabuki": "Saffron City", "PunchOutSB": "Boxing Ring", "PunchOutW": "Boxing Ring", "Random": "Random", "Rock_Wily": "Wily Castle", "SF_Suzaku": "Suzaku Castle", "SP_Edit": "Custom Stage", "SP_Edit_plural": "Custom Stages", "Sonic_Greenhill": "Green Hill Zone", "Sonic_Windyhill": "Windy Hill Zone", "Spla_Parking": "Moray Towers", "StreetPass": "Find Mii", "Tomodachi": "Tomodachi Life", "Training": "Training", "Wario_Gamer": "Gamer", "Wario_Madein": "WarioWare, Inc.", "WiiFit": "Wii Fit Studio", "WreckingCrew": "Wrecking Crew", "WufuIsland": "Wuhu Island", "Xeno_Gaur": "Gaur Plain", "Yoshi_CartBoard": "Yoshi's Story", "Yoshi_Island": "Yoshi's Island", "Yoshi_Story": "Super Happy Tree", "Yoshi_Yoster": "Yoshi's Island (Melee)", "Zelda_Gerudo": "Gerudo Valley", "Zelda_Greatbay": "Great Bay", "Zelda_Hyrule": "Hyrule Castle", "Zelda_Oldin": "Bridge of Eldin", "Zelda_Pirates": "Pirate Ship", "Zelda_Skyward": "Skyloft", "Zelda_Temple": "Temple", "Zelda_Tower": "Great Plateau Tower", "Zelda_Train": "Spirit Train", "Tantan_Spring": "Spring Stadium" }


//#endregion

//#region Variables for adding dropdown options (to avoid duplicates)
var stageData = [];

var uiStageIds = {};

var uiSeriesIds = {};

var nameIds = {};

var stagePlaceIds = {"resultstage": "resultstage", "resultstage_jack": "resultstage_jack"};

var secretStagePlaceIds = {"resultstage": "resultstage", "resultstage_jack": "resultstage_jack"};

var bgmSetIds = {};
//#endregion

var currentlySelected = 0;

window.onload = function () {

    this.setup();

    var result = /[^/]*$/.exec($(location).attr('href'))[0];

    result = parseInt(result);

    if (!isNaN(result)) {
        $.ajax({
            url: api_url + result,
            dataType: 'json',
            success: function(data) {

                stageData = data;

                stageData.struct.list.struct.forEach(function(item, index) {
                    var node = document.createElement("div");

                    var bgName = item.string["#text"].toLowerCase();

                    //#region Inseting Info to array

                    uiStageIds[item.hash40[0]["#text"]] = item.hash40[0]["#text"];

                    uiSeriesIds[item.hash40[1]["#text"]] = item.hash40[1]["#text"];

                    nameIds[item.string["#text"]] = item.string["#text"];

                    stagePlaceIds[item.hash40[2]["#text"]] = item.hash40[2]["#text"];

                    secretStagePlaceIds[item.hash40[3]["#text"]] = item.hash40[3]["#text"];

                    bgmSetIds[item.hash40[6]["#text"]] = item.hash40[6]["#text"];

                    //#endregion

                    node.setAttribute("class", "item");
                    node.setAttribute("id", index);
                    node.setAttribute("data-disp_order", item.sbyte["#text"]);

                    node.setAttribute("style", `background-image: url("img/Stage/stage_1_${bgName}.png"), url("img/Stage/stage_1_missing.png");`);

                    node.style.cursor = 'pointer';

                    var name = StagesName[item.string["#text"]];

                    if (name == null) {
                        name = item.string["#text"];
                    }

                    node.onclick = function() {
                        document.getElementById("current_selected").innerHTML = name;
                        document.getElementById("big_stage_text").innerHTML = name;
                        document.getElementById("big_img").src = `./img/Stage/stage_2_${bgName}.png`
                        currentlySelected = index;
                        updateFields(index);
                    };

                    node.addEventListener("mouseover", function(event) {
                        document.getElementById("current_hover").innerHTML = name;
                    });

                    node.addEventListener("contextmenu", function(e) {
                        moveElement(node);
                        return false;
                    });

                    if (item.sbyte["#text"] == -1) {
                        document.getElementById("hidden").appendChild(node);
                    } else {
                        document.getElementById("non-hidden").appendChild(node);
                    }
                });


                /*
                 * Thanks to CertainPerformance for this snippet of code.
                 * https://stackoverflow.com/questions/53713114/order-divs-by-id-in-javascript
                 */
                const main = document.querySelector('#non-hidden');
                const divs = [...main.children];
                divs.sort((a, b) => a.getAttribute("data-disp_order") - b.getAttribute("data-disp_order"));
                divs.forEach(div => main.appendChild(div));

                sortable('.sortable', {
                    acceptFrom: '.sortable', // Defaults to null
                    hoverClass: 'item-hover',
                })[0];

                setupDropdowns();
            },
            error: function(data) {
                alert("Failed getting json! (Please contact me on discord if this wasn't intentional @ Coolsonickirby#4030.)");
            }
        });
    }

}

function moveElement(element) {
    var id = element.parentNode.id;
    if (id == "non-hidden") {
        $(element).appendTo("#hidden");
    } else {
        $(element).appendTo("#non-hidden");
    }
}

function setupDropdowns() {
    //#region Setting up Variables
    var ui_stage_id = document.getElementById("ui_stage_id");

    var name_id = document.getElementById("name_id");

    var ui_series_id = document.getElementById("ui_series_id");

    var stage_place_id = document.getElementById("stage_place_id");

    var secret_stage_place_id = document.getElementById("secret_stage_place_id");

    var bgm_set_id = document.getElementById("bgm_set_id");
    //#endregion

    //#region Setting up dropdown inputs
    setupDrowdown(ui_stage_id, uiStageIds);
    setupDrowdown(name_id, nameIds);
    setupDrowdown(ui_series_id, uiSeriesIds);
    setupDrowdown(stage_place_id, stagePlaceIds);
    setupDrowdown(secret_stage_place_id, secretStagePlaceIds);
    setupDrowdown(secret_stage_place_id, secretStagePlaceIds);
    setupDrowdown(bgm_set_id, bgmSetIds);
    //#endregion

    //#region Setting up event listeners
    ui_stage_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].hash40[0]["#text"] = e.target.value;
    });

    name_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].string["#text"] = e.target.value;
    });

    ui_series_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].hash40[1]["#text"] = e.target.value;
    });

    stage_place_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].hash40[2]["#text"] = e.target.value;
    });

    secret_stage_place_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].hash40[3]["#text"] = e.target.value;
    });

    bgm_set_id.addEventListener("input", function (e) {
        stageData.struct.list.struct[currentlySelected].hash40[6]["#text"] = e.target.value;
    });

    can_demo.addEventListener("input", function (e) {
        if (e.target.checked == true) {
            stageData.struct.list.struct[currentlySelected].bool[1]["#text"] = "True";;
        } else {
            stageData.struct.list.struct[currentlySelected].bool[1]["#text"] = "False";;
        }
    });
    //#endregion
}


function setupDrowdown(element, array) {
    i = 0;
    for (const item in array) {
        if (i == 0) {
            element.setAttribute("selectBoxOptions", `${array[item]};`)
        } else {
            element.setAttribute("selectBoxOptions", element.getAttribute("selectBoxOptions") + `${array[item]};`)
        }
        i++;
    }
    createEditableSelect(element);
}

function updateFields(id) {
    item = stageData.struct.list.struct[id];
    demo = item.bool[1]["#text"];

    document.getElementById("ui_stage_id").value = item.hash40[0]["#text"];
    document.getElementById("name_id").value = item.string["#text"];
    document.getElementById("ui_series_id").value = item.hash40[1]["#text"];
    document.getElementById("stage_place_id").value = item.hash40[2]["#text"];
    document.getElementById("secret_stage_place_id").value = item.hash40[3]["#text"];
    document.getElementById("bgm_set_id").value = item.hash40[6]["#text"];
    if (demo == "True") {
        document.getElementById("can_demo").checked = true;
    } else {
        document.getElementById("can_demo").checked = false;
    }

}


function setup() {

    cleanInputs();

    document.getElementById('open').addEventListener('click', openDialog);

    document.getElementById('save').addEventListener('click', saveSSSLayout);

    document.getElementById("default").addEventListener("click", loadDefault);

    document.getElementById("randomize").addEventListener("click", randomizeSSS);

    function saveSSSLayout() {

        if (stageData.length <= 0) {
            alert("No prc file is loaded!");
        } else {

            var display_stages = document.getElementById("non-hidden").children;
            var hidden_stages = document.getElementById("hidden").children;


            var i = 0;
            //#region Set the order of the stages
            for (let stage of display_stages) {

                stageData.struct.list.struct[stage.id].sbyte["#text"] = i;

                compare_stage_place_id = stageData.struct.list.struct[stage.id].hash40[2]["#text"];

                compare_secret_stage_place_id = stageData.struct.list.struct[stage.id].hash40[3]["#text"];

                //#region Can Select
                if (stageData.struct.list.struct[stage.id].string["#text"] == "Random") {
                    stageData.struct.list.struct[stage.id].bool[0]["#text"] = "False";
                } else {
                    stageData.struct.list.struct[stage.id].bool[0]["#text"] = "True";
                }
                //#endregion

                if (compare_stage_place_id != compare_secret_stage_place_id) {
                    stageData.struct.list.struct[stage.id].hash40[4]["#text"] = enableL_Loading;
                    stageData.struct.list.struct[stage.id].hash40[5]["#text"] = enableL_Loading;
                } else {
                    stageData.struct.list.struct[stage.id].hash40[4]["#text"] = disableL_Loading;
                    stageData.struct.list.struct[stage.id].hash40[5]["#text"] = disableL_Loading;
                }

                i++;
            }
            //#endregion

            //#region Hide the hidden stages
            for (let stage of hidden_stages) {
                stageData.struct.list.struct[stage.id].sbyte["#text"] = -1;

                stageData.struct.list.struct[stage.id].bool[0]["#text"] = "False";
            }
            //#endregion

            document.getElementById("jsonInput").value = JSON.stringify(stageData);
            document.getElementById("saveForm").submit();
        }
    }

    function openDialog() {
        document.getElementById('fileInput').click();
    }

    document.getElementById('fileInput').addEventListener('change', submitForm);

    function submitForm() {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            var file = document.getElementById("fileInput").files[0];
            var start = parseInt("0x00") || 0;
            var stop = parseInt("0x07");

            var reader = new FileReader();

            // If we use onloadend, we need to check the readyState.
            reader.onloadend = function (evt) {
                if (evt.target.readyState == FileReader.DONE) { // DONE == 2
                    if (evt.target.result == "paracobn") {
                        document.getElementById("openForm").submit();
                    } else {
                        alert("Invalid file has been submitted!");
                    }

                }
            };

            var blob = file.slice(start, stop + 1);
            reader.readAsBinaryString(blob);
        } else {
            var file = document.getElementById("fileInput").files[0];

            var file_ext = file.name.split('.').pop();

            if (file_ext == "prc") {
                document.getElementById("openForm").submit();
            } else {
                alert("Invalid file has been submitted!");
            }
        }

    }
}

function errorImage(e) {
    e.src = "./img/Stage/missing.png";
}


function cleanInputs() {
    document.getElementById("current_hover").innerHTML = "Nothing";
    document.getElementById("current_selected").innerHTML = "Nothing";
    document.getElementById("ui_stage_id").value = "";
    document.getElementById("name_id").value = "";
    document.getElementById("ui_series_id").value = "";
    document.getElementById("stage_place_id").value = "";
    document.getElementById("secret_stage_place_id").value = "";
    document.getElementById("bgm_set_id").value = "";
    document.getElementById("can_demo").checked = false;
}


function loadDefault() {
    if (Object.keys(stageData).length > 0) {
        var answer = confirm("Are you sure you want to load the default ui_stage_db.prc file (You will lose your current order and changes)?");

        if (answer) {
            window.location.href = "/prc/Stage/0";
        }
    } else {
        window.location.href = "/prc/Stage/0";
    }
}

function randomizeSSS() {
    var answer = confirm("Are you sure you want to randomize the order (You will lose your current order)?");

    if (answer) {
        $("#non-hidden").randomize(".item");
    }
}

/*
 * Thanks to Russ Cam and gruppler for this bit of code
 * https://stackoverflow.com/questions/1533910/randomize-a-sequence-of-div-elements-with-jquery
 */
(function ($) {

    $.fn.randomize = function (childElem) {
        return this.each(function () {
            var $this = $(this);
            var elems = $this.children(childElem);

            elems.sort(function () { return (Math.round(Math.random()) - 0.5); });

            $this.detach(childElem);

            for (var i = 0; i < elems.length; i++)
                $this.append(elems[i]);

        });
    }
})(jQuery);
