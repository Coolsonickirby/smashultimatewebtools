var chara_data = [];
var chara_context_menu = document.getElementById("context-menu-controller");
var current_selected_index = 0;
var chara_ids = [];
var fighter_types = [];

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
                    var mainImageNode = document.createElement("div");
                    var imageNode = document.createElement("div");
                    var name = document.createElement("p");

                    var chara_name = item.string["#text"];

                    name.innerHTML = TranslateName(chara_name).toUpperCase();
                    name.setAttribute("class", "chara_name");

                    node.setAttribute("class", "item");
                    node.setAttribute("id", index);
                    node.setAttribute("data-disp_order", item.sbyte[2]["#text"]);

                    mainImageNode.setAttribute("class", "image");

                    imageNode.setAttribute("class", "chara_icon");
                    imageNode.setAttribute("style", `background-image: url("./img/Chara/chara_7_${chara_name}_00.png");`);

                    mainImageNode.appendChild(imageNode);

                    node.appendChild(mainImageNode);
                    node.appendChild(name);

                    node.addEventListener("contextmenu", function(e) {
                        moveElement(node);
                        return false;
                    });

                    node.addEventListener("click", function(e) {
                        showCustomContextMenu(node, e);
                        return false;
                    });

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

                    chara_ids.push(item["hash40"][0]["#text"]);
                    if(!fighter_types.includes(item["hash40"][4]["#text"])){
                        fighter_types.push(item["hash40"][4]["#text"]);
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


                var sorted = sortable('.sortable', {
                    acceptFrom: '.list-grid, .list-flex', // Defaults to null
                    hoverClass: 'item-hover',
                })

                for(var i = 0; i < sorted.length; i++){
                    sorted[i].addEventListener('sortstart', function(e) {
                        chara_context_menu.style.display = "none";
                    });
                }

                for(var i = 0; i < chara_ids.length; i++){
                    document.getElementById("echo_fighters").innerHTML += `<option value="${chara_ids[i]}">${chara_ids[i]}</option>`;
                }

                for(var i = 0; i < fighter_types.length; i++){
                    document.getElementById("fighter_types").innerHTML += `<option value="${fighter_types[i]}">${fighter_types[i]}</option>`;
                }
            },
            error: function (data) {
                console.log(data);
                alert("Failed getting json! (Please contact me on discord if this wasn't intentional @ Coolsonickirby#4030.)");
            }
        });
    }
}

function moveElement(element) {
    chara_context_menu.style.display = "none";
    var id = element.parentNode.id;
    if (id == "non_hidden") {
        $(element).appendTo("#hidden");
    } else {
        $(element).appendTo("#non_hidden");
    }
}

function showCustomContextMenu(element, e){
    var chara_index = element.id;
    current_selected_index = chara_index;
    var char_info = chara_data.struct.list.struct[current_selected_index];

    //#region Display Character Context Menu
    var bodyRect = document.body.getBoundingClientRect(),
    elemRect = element.getBoundingClientRect(),
    offset   = elemRect.top - bodyRect.top;
    console.log(offset);

    chara_context_menu.style.display = "none";

    chara_context_menu.style.left = `${elemRect.left + element.offsetWidth + 5}px`;
    chara_context_menu.style.top = `${offset - 110}px`;
    chara_context_menu.style.display = "block";
    //#endregion

    //#region Setup Character Context Menu
    document.getElementById("chara_name").innerHTML = TranslateName(char_info.string["#text"]);
    document.getElementById("ui_chara_id").value = char_info["hash40"][0]["#text"];
    document.getElementById("echo_fighters").value = char_info["hash40"][5]["#text"];
    document.getElementById("fighter_types").value = char_info["hash40"][4]["#text"];
    document.getElementById("exhibit_year").value = char_info["short"]["#text"];
    document.getElementById("can_select").checked = char_info["bool"][3]["#text"] == "True" ? true : false;
    document.getElementById("is_mii").checked = char_info["bool"][6]["#text"] == "True" ? true : false;
    document.getElementById("is_boss").checked = char_info["bool"][7]["#text"] == "True" ? true : false;
    document.getElementById("is_hidden_boss").checked = char_info["bool"][8]["#text"] == "True" ? true : false;
    //#endregion
}

function setup() {
    window.addEventListener("click", function(e){
        var hide_menu = true;
        for(var i = 0; i < e.path.length; i++){
            if(e.path[i].classList != undefined){
                if(e.path[i].classList.contains("item")){
                    hide_menu = false;
                }else if(e.path[i].id == "context-menu-controller"){
                    hide_menu = false;
                }
            }
        }
        if(hide_menu){
            chara_context_menu.style.display = "none";
        }
    })

    //#region Setup Character Context Menu Listeners
    document.getElementById("ui_chara_id").addEventListener("input", function(e){
        chara_data.struct.list.struct[current_selected_index]["hash40"][0]["#text"] = this.value;
    });

    document.getElementById("echo_fighters").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["hash40"][5]["#text"] = this.value;
    });

    document.getElementById("fighter_types").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["hash40"][4]["#text"] = this.value;
    });

    document.getElementById("exhibit_year").addEventListener("input", function(e){
        chara_data.struct.list.struct[current_selected_index]["short"]["#text"] = this.value;
    });

    document.getElementById("can_select").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["bool"][3]["#text"] = this.checked == true ? "True" : "False";
    });

    document.getElementById("is_mii").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["bool"][6]["#text"] = this.checked == true ? "True" : "False";
    });

    document.getElementById("is_boss").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["bool"][7]["#text"] = this.checked == true ? "True" : "False";
    });

    document.getElementById("is_hidden_boss").addEventListener("change", function(e){
        chara_data.struct.list.struct[current_selected_index]["bool"][8]["#text"] = this.checked == true ? "True" : "False";
    });
    //#endregion

    document.getElementById('open').addEventListener('click', openDialog);

    document.getElementById('save').addEventListener('click', saveCSSLayout);

    function saveCSSLayout() {
        var display_characters = document.getElementById("non_hidden").children;
        var hidden_characters = document.getElementById("hidden").children;

        if (chara_data.length <= 0) {
            alert("No prc file is loaded!");
        } else {
            var i = 0;
            for (let chara of display_characters) {
                chara_data.struct.list.struct[chara.id].sbyte[2]["#text"] = i;
                chara_data.struct.list.struct[chara.id].sbyte[1]["#text"] = i;

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
    chara_context_menu.style.display = "none";

    setTimeout(function(){
        var answer = confirm("Are you sure you want to randomize the order (You will lose your current order)?");

        if (answer) {
            var amount = prompt("How many do you want to keep? (0 for all)");
            if(amount){

                if(amount == 0){
                    amount = 999;
                }
                $("#non_hidden").randomize(".item");

                $("#non_hidden>div").slice(amount).each(function(){
                    if($(this, ".class_name").text() != "RANDOM"){
                        moveElement(this);
                    }
                });
            }


        }
    }, 50);
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
