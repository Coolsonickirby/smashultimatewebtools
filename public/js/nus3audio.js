class FileStorage {
    constructor() {
        this.fileOffset = 0;
        this.fileSize = 0;
    }
}

class FileEntry{
    constructor(){
        this.name = "";
        this.data = 0;
    }
}

class HEADER {
    constructor() {
        this.magic = [];
        this.size = 0;
    }
}

class AUDIINDX {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.count = 0;
    }
}

class TNID {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.trackNumbers = [];
        this.data = [];
    }
}

class NMOF {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.names = [];
        this.data = [];
    }
}

class ADOF {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.fileEntries = [];
        this.data = [];
    }
}

class TNNM {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.string_section = [];
    }
}

class JUNK {
    constructor() {
        this.magic = [];
        this.size = 0;
        this.padding = [];
    }
}

class PACK {
    constructor() {
        this.magic = [];
        this.size = 0;
    }
}

class NUS3AUDIO {
    constructor() {
        //#region Setup Variables

        this.arrayBuffer = [];
        this.position = 0;
        this.entries = [];
        this.backup = [];
        this.count = 0;
        this.result = [];

        this.head = new HEADER();
        this.audi = new AUDIINDX();
        this.tnid = new TNID();
        this.nmof = new NMOF();
        this.adof = new ADOF();
        this.tnnm = new TNNM();
        this.junk = new JUNK();
        this.pack = new PACK();

        //#endregion
    }

    ParseArrayBuffer(arrayBuffer, status) {

        if(status == null || status == undefined){
            status = document.createElement("span");
        }

        this.arrayBuffer = arrayBuffer;

        //#region Parse Header
        status.innerHTML = "Parsing Header...";
        this.head.magic = this.ReadString(4);
        this.head.size = this.ReadUInt32();
        //#endregion

        //#region Parse Audiindx
        status.innerHTML = "Parsing Audiindx...";
        this.audi.magic = this.ReadString(8);
        this.audi.size = this.ReadUInt32();
        this.audi.count = this.ReadUInt32();
        //#endregion

        //#region Parse Tone ID
        status.innerHTML = "Parsing Tone ID...";
        this.tnid.magic = this.ReadString(4);
        this.tnid.size = this.ReadUInt32();

        if (this.tnid.size >= this.audi.count * 4) {
            for (let i = 0; i < this.audi.count; i++) {
                this.tnid.trackNumbers[i] = this.ReadUInt32();
                this.count += 1;
            }
        } else {
            for (let i = 0; i < this.tnid.size; i++) {
                this.tnid.data[i] = this.ReadByte();
            }
        }
        //#endregion

        //#region Parse NMOF
        status.innerHTML = "Parsing NMOF...";
        this.nmof.magic = this.ReadString(4);
        this.nmof.size = this.ReadUInt32();

        if (this.nmof.size >= this.audi.count * 4) {
            for (let i = 0; i < this.audi.count; i++) {
                this.nmof.names[i] = this.ReadUInt32();
            }
        } else {
            for (let i = 0; i < this.nmof.size; i++) {
                this.nmof.data[i] = this.ReadUInt32();
            }
        }

        //#endregion

        //#region Parse ADOF
        status.innerHTML = "Parsing Audio Offset...";
        this.adof.magic = this.ReadString(4);
        this.adof.size = this.ReadUInt32();

        if (this.adof.size >= this.audi.count * 4) {
            for (let i = 0; i < this.audi.count; i++) {
                let entry = new FileStorage();
                entry.fileOffset = this.ReadUInt32();
                entry.fileSize = this.ReadUInt32();
                this.adof.fileEntries[i] = entry;
            }
        } else {
            for (let i = 0; i < this.adof.size; i++) {
                this.adof.data[i] = this.ReadByte();
            }
        }

        //#endregion

        //#region Parse Tone Name
        status.innerHTML = "Parsing Tone Name...";
        this.tnnm.magic = this.ReadString(4);
        this.tnnm.size = this.ReadUInt32();

        let tone_name = "";
        for (let i = 0; i < this.tnnm.size; i++) {

            let byte = this.ReadByte();

            if (byte != 0) {
                tone_name += String.fromCharCode(byte);
            } else {
                this.tnnm.string_section.push(tone_name);
                tone_name = "";
            }
        }
        //#endregion

        //#region Parse JUNK
        status.innerHTML = "Parsing JUNK...";
        this.junk.magic = this.ReadString(4);
        this.junk.size = this.ReadUInt32();

        for (let i = 0; i < this.junk.size; i++) {
            this.junk.padding[i] = this.ReadByte();
        }
        //#endregion

        //#region Parse PACK
        status.innerHTML = "Parsing PACK...";
        this.pack.magic = this.ReadString(4);
        this.pack.size = this.ReadUInt32();

        //#endregion

        //#region Store everything important in entries
        status.innerHTML = "Storing Entries...";
        for(let i = 0; i < this.count; i++){
            let file = new FileEntry();

            file.name = this.tnnm.string_section[i];
            file.size = this.adof.fileEntries[i].fileSize;
            file.data = this.ReadBytesFromOffset(this.adof.fileEntries[i].fileOffset, file.size);

            this.entries.push(file);

        };
        status.innerHTML = "Backing up entries...";
        this.backup = JSON.parse(JSON.stringify(this.entries));
        //#endregion

        // Clear Array Buffer
        status.innerHTML = "Clearing Array Buffer...";
        this.arrayBuffer = null;
    }

    GetPaddingAmount(offset){
        return ((0x18 - (offset % 0x10)) % 0x10);
    }

    ReadString(amount) {
        let res = "";
        for (var i = 0; i < amount; i++) {
            res += String.fromCharCode(this.arrayBuffer[this.position]);
            this.position += 1;
        }
        return res;
    }

    ReadByte() {
        let res = this.arrayBuffer[this.position];
        this.position += 1;
        return res;
    }

    ReadBytes(amount){
        let res = [];
        for(let i = 0; i < amount; i++){
            res.push(this.ReadByte());
        }
        return res;
    }

    ReadBytesFromOffset(offset, amount){
        this.position = offset;
        return this.ReadBytes(amount);
    }

    ReadUInt32() {
        let uint8 = Uint8Array.from(this.arrayBuffer.slice(this.position, this.position + 4));

        let dataView = new DataView(uint8.buffer);

        this.position += 4;

        return dataView.getInt32(0, true);
    }

    GetName(id){
        return this.entries[id].name;
    }

    GetSize(id){
        return this.entries[id].data.length;
    }

    SetName(id, value){
        this.entries[id].name = value;
    }

    SetFile(id, buffer){
        this.entries[id].data = Array.from(buffer);
        this.entries[id].size = buffer.length;
    }

    RestoreID(id){
        this.entries[id] = this.backup[id];
    }

    ExportFile(id){
        let data = this.entries[id].data;

        let blob = new Blob([new Uint8Array(data)], {type: "application/octet-stream"});

        let magic = `${String.fromCharCode(data[0])}${String.fromCharCode(data[1])}${String.fromCharCode(data[2])}${String.fromCharCode(data[3])}`;
        let ext = "";

        switch(magic){
            case "IDSP":
                ext = ".idsp";
                break;
            case "OPUS":
                ext = ".lopus";
                break;
            default:
                ext = ".unk";
        }

        let link = document.createElement("a");
        link.href = window.URL.createObjectURL(blob);
        link.download = `${this.entries[id].name}${ext}`;

        link.click();
    }

    Save(){
        this.position = 0;
        this.result = [];

        //#region Setup Variables
        let string_offsets = [];
        let file_offsets = [];

        let nus3_size = "NUS3".length + 4;
        let audi_size = "AUDIINDX".length + (4 * 2);
        let tnid_size = "TNID".length + 4 + (4 * this.entries.length);
        let nmof_size = tnid_size;
        let adof_size = "ADOF".length + 4 + (4 * this.entries.length * 2);

        let string_section_start = nus3_size + audi_size + tnid_size + nmof_size + adof_size + "TNNM".length + 4;
        let string_section_size = 0;

        for(let i = 0; i < this.entries.length; i++){
            string_offsets[i] = string_section_start + string_section_size;
            string_section_size += this.entries[i].name.length + 1;
        }

        let junk_pad = this.GetPaddingAmount(string_section_start + string_section_size + "JUNK".length + 4);
        let junk_size = "JUNK".length + 4 + junk_pad;

        let pack_section_start = string_section_start + string_section_size + junk_size + "PACK".length + 4;

        let pack_section_size_no_pad = 0;
        let pack_section_size = 0;

        // Uses md5 hash function
        let existing_files = {};
        let files_to_pack = [];

        for (let i = 0; i < this.entries.length; i++) {
            let hash = md5(Uint8Array.from(this.entries[i].data));

            let offset_pair = new FileStorage();

            if(hash in offset_pair){
                offset_pair = existing_files[hash];
            }else{
                offset_pair.fileOffset = pack_section_start + pack_section_size;
                offset_pair.fileSize = this.entries[i].data.length;

                existing_files[hash] = offset_pair;
                files_to_pack.push(this.entries[i]);
                pack_section_size_no_pad = pack_section_size + this.entries[i].data.length;
                pack_section_size += parseInt((this.entries[i].data.length + 0xF) / 0x10) * 0x10;
            }
            file_offsets[i] = offset_pair;
        }

        if(this.entries.length == 1){
            pack_section_size = pack_section_size_no_pad;
        }

        let filesize = pack_section_start + pack_section_size;
        //#endregion

        this.WriteString("NUS3");
        this.WriteUInt32(filesize - nus3_size);

        this.WriteString("AUDIINDX");
        this.WriteUInt32(4);
        this.WriteUInt32(this.entries.length);

        this.WriteString("TNID");
        this.WriteUInt32(this.entries.length * 4);
        for (let i = 0; i < this.entries.length; i++) {
            this.WriteUInt32(i);
        }

        this.WriteString("NMOF");
        this.WriteUInt32(this.entries.length * 4);
        for(let i = 0; i < string_offsets.length; i++){
            this.WriteUInt32(string_offsets[i]);
        }

        this.WriteString("ADOF");
        this.WriteUInt32(this.entries.length * 8);
        for(let i = 0; i < file_offsets.length; i++){
            this.WriteUInt32(file_offsets[i].fileOffset);
            this.WriteUInt32(file_offsets[i].fileSize);
        }

        this.WriteString("TNNM");
        this.WriteUInt32(string_section_size);
        for(let i = 0; i < this.entries.length; i++){
            this.WriteString(this.entries[i].name);
            this.WriteByte(0);
        }

        this.WriteString("JUNK");
        this.WriteUInt32(junk_pad);
        for(let i = 0; i < junk_pad; i++){
            this.WriteByte(0);
        }

        this.WriteString("PACK");
        this.WriteUInt32(pack_section_size);

        if(this.entries.length == 1){
            this.WriteBytes(this.entries[0].data);
        }else{
            for(let i = 0; i < files_to_pack.length; i++){
                this.WriteBytes(files_to_pack[i].data);
                let fill = 16 - (this.position % 16);
                for(let x = 0; x < fill; x++){
                    this.WriteByte(0);
                }
            }
        }
    }

    Download(outputName){
        this.Save();

        let blob = new Blob([new Uint8Array(this.result)], {type: "application/octet-stream"});

        if(!outputName.includes(".nus3audio")){
            outputName += ".nus3audio";
        }

        let link = document.createElement("a");
        link.href = window.URL.createObjectURL(blob);
        link.download = `${outputName}`;

        link.click();

    }

    WriteByte(byte){
        this.result.push(byte);
        this.position += 1;
    }

    WriteBytes(byteArray){
        this.result = [].concat(this.result, byteArray);
        this.position += byteArray.length;
    }

    WriteUInt32(number){
        let arrayBuf = new ArrayBuffer(4);
        let dataView = new DataView(arrayBuf);

        dataView.setInt32(0, number, true);

        let res = Array.from(new Uint8Array(dataView.buffer));

        this.result = [].concat(this.result, res);
        this.position += 4;
    }

    WriteString(str){
        for(let i = 0; i < str.length; i++){
            this.result[this.position] = str.charCodeAt(i);
            this.position += 1;
        }
    }
}
