var chara_data = [];

window.onload = function () {
    var radios = document.getElementsByName("css_style_1");

    for (radio in radios) {
        radios[radio].onclick = function () {
            var element = document.getElementById("non_hidden");
            if (this.value == "flex") {
                element.classList.remove("list-grid");
                element.classList.add("list-flex");
            } else {
                element.classList.remove("list-flex");
                element.classList.add("list-grid");
            }
        }
    }

    var radios = document.getElementsByName("css_style_2");

    for (radio in radios) {
        radios[radio].onclick = function () {
            var element = document.getElementById("hidden");
            if (this.value == "flex") {
                element.classList.remove("list-grid");
                element.classList.add("list-flex");
            } else {
                element.classList.remove("list-flex");
                element.classList.add("list-grid");
            }
        }
    }

    document.getElementById("css_style_1_flex").click();
    document.getElementById("css_style_2_flex").click();

    this.setup();

    this.setupCSS();

}


function setupCSS() {
    var result = /[^/]*$/.exec($(location).attr('href'))[0];

    result = parseInt(result);

    if (!isNaN(result)) {

        $.ajax({
            url: "./api/CharaJSON/" + result,
            dataType: 'json',
            success: function (data) {

                chara_data = data;

                // console.log(chara_data.struct.list.struct[0].string["#text"]);

                var randomId = 0;
                var randomElement;

                chara_data.struct.list.struct.forEach(function (item, index) {
                    var node = document.createElement("div");
                    var imageNode = document.createElement("div");
                    var name = document.createElement("p");

                    var chara_name = item.string["#text"];

                    name.innerHTML = TranslateName(chara_name).toUpperCase();
                    name.setAttribute("class", "chara_name");

                    node.setAttribute("class", "item");
                    node.setAttribute("id", index);
                    node.setAttribute("data-disp_order", item.sbyte[2]["#text"]);

                    imageNode.setAttribute("class", "image");

                    imageNode.setAttribute("style", `background-image: url("img/chara_7_${chara_name}_00.png");`);

                    node.appendChild(imageNode);
                    node.appendChild(name);

                    if (chara_name == "random") {
                        node.classList.add("disabled");
                        randomId = index;
                        randomElement = node;
                    }

                    if (item.sbyte[2]["#text"] == -1) {
                        document.getElementById("hidden").appendChild(node);
                    } else {
                        document.getElementById("non_hidden").appendChild(node);
                    }

                });


                /*
                 * Thanks to CertainPerformance for this snippet of code.
                 * https://stackoverflow.com/questions/53713114/order-divs-by-id-in-javascript
                 */
                const main = document.querySelector('#non_hidden');
                const divs = [...main.children];
                divs.sort((a, b) => a.getAttribute("data-disp_order") - b.getAttribute("data-disp_order"));
                divs.forEach(div => main.appendChild(div));


                sortable('.sortable', {
                    acceptFrom: '.list-grid, .list-flex', // Defaults to null
                    hoverClass: 'item-hover',
                })[0];



            },
            error: function (data) {
                alert("Failed getting json!");
            }
        });
    }
}

function setup() {

    document.getElementById('open').addEventListener('click', openDialog);

    document.getElementById('save').addEventListener('click', saveCSSLayout);

    function saveCSSLayout() {
        var display_characters = document.getElementById("non_hidden").children;
        var hidden_characters = document.getElementById("hidden").children;


        var i = 0;
        for (let chara of display_characters) {
            chara_data.struct.list.struct[chara.id].sbyte[2]["#text"] = i;

            if (chara_data.struct.list.struct[chara.id].string["#text"] == "random") {
                chara_data.struct.list.struct[chara.id].bool[3]["#text"] = "False";
            } else {
                chara_data.struct.list.struct[chara.id].bool[3]["#text"] = "True";
            }
            i++;
        }

        for (let chara of hidden_characters) {
            chara_data.struct.list.struct[chara.id].sbyte[2]["#text"] = -1;

            chara_data.struct.list.struct[chara.id].bool[3]["#text"] = "False";
        }

        if (chara_data.length <= 0) {
            alert("No prc file is loaded!");
        } else {
            document.getElementById("jsonInput").value = JSON.stringify(chara_data);

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

function RandomizeMain() {
    var answer = confirm("Are you sure you want to randomize the order (You will lose your current order)?");

    if (answer) {
        $("#non_hidden").randomize(".item");
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

function TranslateName(name) {
    switch (name) {
        case "donkey":
            return "Donkey Kong";
        case "samusd":
            return "Dark Samus";
        case "captain":
            return "Captain Falcon";
        case "purin":
            return "Jigglypuff";
        case "koopa":
            return "Bowser";
        case "ice_climber":
            return "Ice Climbers";
        case "mariod":
            return "Dr. Mario";
        case "younglink":
            return "Young Link";
        case "ganon":
            return "Ganondorf";
        case "gamewatch":
            return "Mr. Game & Watch";
        case "metaknight":
            return "Meta Knight";
        case "pitb":
            return "Dark Pit";
        case "szerosuit":
            return "Zero Suit Samus";
        case "ptrainer":
            return "Pokemon Trainer";
        case "diddy":
            return "Diddy Kong";
        case "dedede":
            return "King Dedede";
        case "pikmin":
            return "Olimar";
        case "robot":
            return "R.O.B.";
        case "toonlink":
            return "Toon Link";
        case "murabito":
            return "Villager";
        case "rockman":
            return "Mega Man";
        case "wiifit":
            return "Wii Fit Trainer";
        case "rosetta":
            return "Rosalina & Luma";
        case "littlemac":
            return "Little Mac";
        case "gekkouga":
            return "Greninja";
        case "pacman":
            return "Pac-Man";
        case "reflet":
            return "Robin";
        case "koopajr":
            return "Bowser Jr.";
        case "duckhunt":
            return "Duck Hunt";
        case "kamui":
            return "Corrin";
        case "krool":
            return "King K. Rool";
        case "shizue":
            return "Isabelle";
        case "gaogaen":
            return "Incineroar";
        case "packun":
            return "Piranha Plant";
        case "jack":
            return "Joker";
        case "brave":
            return "Hero";
        case "buddy":
            return "Banjo & Kazooie";
        case "dolly":
            return "Terry";
        case "master":
            return "Byleth";
        case "miifighter":
            return "Mii Brawler";
        case "miiswordsman":
            return "Mii Swordfighter";
        case "miigunner":
            return "Mii Gunner";
        case "miiall":
            return "Mii Fighters";
        case "pzenigame":
            return "Squirtle";
        case "pfushigisou":
            return "Ivysaur";
        case "plizardon":
            return "Charizard";
        default:
            return name;
    }
}
