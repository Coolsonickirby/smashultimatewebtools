var nus3audio;

window.onload = function(){

    AlertFilesize();

    setInputFilter(document.getElementById("files_id_0"), function (value) {
        return /^-?\d*$/.test(value);
    });

    if (window.File && window.FileReader && window.FileList && window.Blob) {
        setup();
        document.getElementById("new-main").classList.add("active");
    }else{
        console.log("This browser doesn't support the File API! Using older system.");
        document.getElementById("old-main").classList.add("active");
    }
}

function setup(){
    document.getElementById("file").addEventListener("change", () => {
        if(document.getElementById("file").files.length > 0){
            var reader = new FileReader();

            reader.onloadend = (evt) => {
                if (evt.target.readyState == FileReader.DONE){
                    nus3audio = new NUS3AUDIO();
                    nus3audio.ParseArrayBuffer(new Uint8Array(evt.target.result), document.getElementById("prog"));
                    setupForm();
                }
            };

            document.getElementById("prog").innerHTML = "Reading File...";

            reader.readAsArrayBuffer(document.getElementById("file").files[0]);
        }
    });

    document.getElementById("open").addEventListener("click", () => {
        document.getElementById("file").click();
    });

    document.getElementById("save").addEventListener("click", () => {
        if(nus3audio != undefined){
            let res = prompt("Output Filename:");
            nus3audio.Download(res);
        }
    });
}

function setupForm(){
    document.getElementById("prog").style.display = "none";
    document.getElementById("main-section").style.display = "block";
    document.getElementById("main-entries").innerHTML =
    `
    <tr>
        <td>ID</td>
        <td>NUS3Bank ID</td>
        <td>Name</td>
        <td>Size</td>
        <td>Export</td>
        <td>Replace</td>
        <td>Restore</td>
    </tr>
    `;

    var nus3bank_id = 0;

    for(let i = 0; i < nus3audio.entries.length; i++){
        let tableRow = document.createElement("tr");

        let id = document.createElement("td");
        id.innerHTML = i;

        tableRow.appendChild(id);

        let bank_id = document.createElement("td");
        if (nus3audio.GetSize(i) == 0){
            bank_id.innerHTML = "None";
        } else {
            bank_id.innerHTML = nus3bank_id;
            nus3bank_id += 1;
        }

        tableRow.appendChild(bank_id);

        let nameHolder = document.createElement("td");

        let name = document.createElement("input");
        name.value = nus3audio.GetName(i);
        name.oninput = (e) => {
            nus3audio.SetName(i, e.target.value);
        }

        nameHolder.appendChild(name);

        tableRow.appendChild(nameHolder);

        let size = document.createElement("td");
        size.innerHTML = nus3audio.GetSize(i);

        tableRow.appendChild(size);

        let exportHolder = document.createElement("td");

        let exportBtn = document.createElement("button");
        exportBtn.innerHTML = "Export";
        exportBtn.onclick = () =>{
            nus3audio.ExportFile(i);
        };

        exportHolder.appendChild(exportBtn);
        tableRow.appendChild(exportHolder);

        let replaceHolder = document.createElement("td");

        let replace = document.createElement("input");

        replace.type = "file";

        replace.accept = ".idsp, .lopus, .wav";

        replace.onchange = (e) => {
            if(e.target.files.length > 0){
                var reader = new FileReader();

                reader.onloadend = (evt) => {
                    if (evt.target.readyState == FileReader.DONE){
                        nus3audio.SetFile(i, new Uint8Array(evt.target.result));
                        size.innerHTML = nus3audio.GetSize(i);
                        tableRow.style.backgroundColor = "lightblue";
                    }
                };

                reader.readAsArrayBuffer(e.target.files[0]);
            }
        };

        replaceHolder.appendChild(replace);

        tableRow.appendChild(replaceHolder);

        let restoreHolder = document.createElement("td");

        let restoreBtn = document.createElement("button");
        restoreBtn.innerHTML = "Restore";
        restoreBtn.onclick = () =>{
            if(confirm("Are you sure you'd like to restore this entry? (Name and File Data will be restored)")){
                nus3audio.RestoreID(i);
                size.innerHTML = nus3audio.GetSize(i);
                name.value = nus3audio.GetName(i);
                replace.value = "";
                tableRow.style.backgroundColor = "white";
            }
        };

        restoreHolder.appendChild(restoreBtn);
        tableRow.appendChild(restoreHolder);

        document.getElementById("main-entries").appendChild(tableRow);
    }
}

function toggleEditors(){
    if(document.getElementById("new-main").classList.contains("active")){
        document.getElementById("new-main").classList.remove("active");
        document.getElementById("old-main").classList.add("active");
    }else{
        document.getElementById("new-main").classList.add("active");
        document.getElementById("old-main").classList.remove("active");
    }

}
