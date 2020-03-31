var msbtArray = [

];

window.onload = function () {
    this.setupMSBTItems();

    document.getElementById("searchResults").innerHTML = "";
    document.getElementById("textarea").value = "";
    document.getElementById("lstStrings").innerHTML = "";
    document.getElementById("searchInput").value = "";
    document.getElementById("searchSection").style.display = "none";

    this.setup();
}

function setupMSBTItems() {
    var result = /[^/]*$/.exec($(location).attr('href'))[0];

    result = parseInt(result);


    if (!isNaN(result)) {

        $.ajax({
            url: "../api/jsonMSBT/" + result,
            dataType: 'json',
            success: function (data) {

                msbtArray = data;


                document.getElementById("lstStrings").innerHTML = "";

                document.getElementById("lstStrings").setAttribute("size", msbtArray.strings.length);

                msbtArray.strings.forEach(function (e, index) {
                    var option = document.createElement("option");
                    option.value = index;
                    option.innerHTML = e.label;
                    document.getElementById("lstStrings").append(option);
                });

                sortAlphabetically("lstStrings");



                document.getElementById("lstStrings").selectedIndex = 0;
                changeTextArea(document.getElementById("lstStrings"));
            },
            error: function (data) {
                alert("Failed getting json!");
            }
        });
    }
}

function sortAlphabetically(elementID) {
    /*
    * Thanks to Pointy for the code below
    * https://stackoverflow.com/questions/12073270/sorting-options-elements-alphabetically-using-jquery
    */
    var options = $(`#${elementID} option`);
    var arr = options.map(function (_, o) { return { t: $(o).text(), v: o.value }; }).get();
    arr.sort(function (o1, o2) { return o1.t > o2.t ? 1 : o1.t < o2.t ? -1 : 0; });
    options.each(function (i, o) {
        o.value = arr[i].v;
        $(o).text(arr[i].t);
    });
}

function changeTextArea(e) {
    document.getElementById("textarea").value = msbtArray.strings[e.value].value.replace(new RegExp('\r\r\n', 'g'), "\r\n");

    var old_element = document.getElementById("textarea");
    var new_element = old_element.cloneNode(true);
    old_element.parentNode.replaceChild(new_element, old_element);

    area = document.getElementById("textarea");
    if (area.addEventListener) {
        area.addEventListener('input', function () {
            msbtArray.strings[e.value].value = area.value.replace(new RegExp('\r\n', 'g'), "\r\r\n");
        }, false);
    }
};

function toggleSearch() {
    if (document.getElementById("searchSection").style.display == "none") {
        document.getElementById("searchSection").style.display = "flex";
    } else {
        document.getElementById("searchSection").style.display = "none";
    };
};

function setup() {
    document.getElementById('open').addEventListener('click', openDialog);

    document.getElementById('save').addEventListener('click', saveArray);

    document.getElementById('find').addEventListener('click', toggleSearch);

    document.getElementById('searchBtn').addEventListener('click', find);


    function saveArray() {
        if (msbtArray.length <= 0) {
            alert("No MSBT file is loaded!");
        } else {
            document.getElementById("jsonInput").value = JSON.stringify(msbtArray);

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
                    if (evt.target.result == "MsgStdBn") {
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

            if (file_ext == "msbt") {
                document.getElementById("openForm").submit();
            } else {
                alert("Invalid file has been submitted!");
            }
        }

    }

}

function find() {
    var search_value = document.getElementById("searchInput").value;

    document.getElementById("searchResults").innerHTML = "";

    if (search_value != null) {
        msbtArray.strings.forEach(function (item, index) {
            if (item.label.includes(search_value) || item.value.includes(search_value)) {
                var option = document.createElement("option");
                option.value = index;
                option.innerHTML = item.label;
                document.getElementById("searchResults").append(option);
            }
        });

        sortAlphabetically("searchResults");
    }
};
