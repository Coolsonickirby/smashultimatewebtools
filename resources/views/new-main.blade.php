<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Ultimate Tools</title>
    <link rel="stylesheet" href="./css/new-front-page.css">
    <style>
        .hide{
            display: none;
        }


        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: white;
            margin: auto;
            padding: 20px;
            border: 2px solid black;
            width: 24%;
            max-height: calc(100vh - 210px);
            overflow-y: auto;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

    </style>
    <script src="./js/jquery-3.4.1.min.js"></script>

</head>

<body>

    <div id="softturnip" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close" onclick="HideModal('softturnip')">&times;</span>
            <img src="https://play.nintendo.com/images/profile-mk-peach.7bf2a8f2.aead314d58b63e27.png" alt="Princess Peach" />
        </div>
    </div>

    <div id="jack" class="modal">
        <!-- Modal content -->
        <div id="stan" class="modal-content">
            <span class="close" onclick="HideModal('jack')">&times;</span>
        </div>
    </div>

    <div class="header-desktop">
        <div class="tab">
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'About')" id="default">About</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'Updates')">Updates</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'Credits')">Credits</button>
            </div>
        </div>
        <img src="./img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="openTab(event, 'Main', 'grid')" id="main-header-img" />
        <div class="tab">
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'MiniGuides')">Mini-Guides</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'PAQ')">PAQ</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'ToDo')">To-Do List</button>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <img src="./img/front-page/tools_header.webp" alt="Smash Ultimate Tools" style="width: 100%; cursor: pointer;"
            onclick="openTab(event, 'Main', 'grid')" id="main-header-img" />
        <div class="tab">
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'About')" id="default">About</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'Updates')">Updates</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'Credits')">Credits</button>
            </div>
        </div>
        <div class="tab">
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'MiniGuides')">Mini-Guides</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'PAQ')">PAQ</button>
            </div>
            <div class="button-parent">
                <button class="tablinks" onclick="openTab(event, 'ToDo')">To-Do List</button>
            </div>
        </div>
    </div>

    <div class="main">
    <div class="main">
        <br>
            <div class="about">
                <h3>Notice: Smash Ultimate Tools will be going down by the end of Feburary due to me not wanting to spend anymore money on the server. SmashCustomMusic conversion will still work.</h3>
            </div>
        <br>

        <div class="grid-container tabcontent" id="Main">
            <img src="./img/front-page/tools_audio.webp" alt="Audio"
                onclick="window.location.href = this.getAttribute('data-href')" data-href="/audio">
            <img src="./img/front-page/tools_css.webp" alt="CSS Editor" onclick="window.location.href = this.getAttribute('data-href')" data-href="/prc/Chara/0">
            <img src="./img/front-page/tools_sss.webp" alt="SSS Editor" onclick="window.location.href = this.getAttribute('data-href')" data-href="/prc/Stage/0">
            <img src="./img/front-page/tools_fpe.webp" alt="Fighter Param Editor" onclick="window.location.href = this.getAttribute('data-href')" data-href="/prc/FighterParam/0">
            <img src="./img/front-page/tools_msbt.webp" alt="MSBT Editor" onclick="window.location.href = this.getAttribute('data-href')" data-href="/msbt">
            <img src="./img/front-page/tools_mc.webp" alt="Minecraft Skin Converter" onclick="window.location.href = this.getAttribute('data-href')" data-href="/skinConverter">
        </div>

        <div id="About" class="about tabcontent">
            <h1>About</h1>
            <hr>
            <p class="tab-text">
                Welcome to SmashUltimateTools!
                <br>
                <br>
                This is a site that I made for fun to improve my skills with PHP, HTML, JS, and CSS.
                It features a couple of different tools I made over time for modding Smash Ultimate (it's already been a year and a couple of months now!)
                <br>
                <br>
                Currently, progress is slow since I'm busy with College, but hopefully when I'm done I should have time to work on this site more.
                <br>
                <br>
                If you have the time, then please check out my <a href="https://www.youtube.com/channel/UCUp-3P4BdmQWYCJ7rRyzrbQ/">YouTube Channel</a> where I upload random stuff I'm currently working on (mostly Smush mods, but sometimes other stuff)!
                <br>
                <br>
                If you want to donate to me, then feel free to do so using either my <a href="https://ko-fi.com/coolsonickirby">Ko-Fi</a> link or my <a href="https://paypal.me/coolsonickirby">Paypal</a> link!
                <br>
                <br>
                If you're interested in talking about Smush Modding with other people, then feel free to join either of these 2 discords:<br>
                <ul style="font-weight: bold; line-height: 2;">
                    <li>
                        <a href="https://discord.gg/ASJyTrZ">Super Smash Bros. Ultimate Modding Discord</a>
                    </li>
                    <li>
                        <a href="https://discord.gg/x9Zss4hkH3">Smash Ultimate Modding Group</a>
                    </li>
                </ul>
            </p>
        </div>

        <div id="Updates" class="tabcontent">
            <div id="appendUpdates">

            </div>
        </div>

        <div id="Credits" class="tabcontent">
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">Main</button>
                <div class="content">
                    <h4>
                        <a href="https://github.com/laravel/laravel">Laravel Framework</a> - <a
                            href="https://github.com/taylorotwell">Taylor Otwell</a>
                    </h4>
                    <h4>
                        <a href="https://smashultimatetools.com">This Website</a> - <a
                            href="https://github.com/coolsonickirby/">Coolsonickirby</a>
                    </h4>
                    <h4>
                        <a href="https://www.youtube.com/watch?v=pAtd6NBvVA0">Major help with the redesign for the 1
                            year anniversary</a> - <a href="https://www.youtube.com/watch?v=pAtd6NBvVA0">Pizza 3.14</a>
                    </h4>
                    <h4>
                        <a href="https://fontmeme.com/fonts/super-smash-font/">Smash Font</a> - Pokemon-Diamond
                    </h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">Audio</button>
                <div class="content">
                    <h4>
                        <a href="https://github.com/Thealexbarney/VGAudio">VGAudio</a> - <a
                            href="https://github.com/Thealexbarney/">Thealexbarney</a>
                    </h4>
                    <h4>
                        <a href="https://github.com/jam1garner/nus3audio-rs">nus3audio</a> - <a
                            href="https://github.com/jam1garner/">jam1garner</a>
                    </h4>
                    <h4>
                        <a href="http://sox.sourceforge.net/">SoX</a> - <a
                            href="https://sourceforge.net/u/cbagwell/">cbagwell</a>, <a
                            href="https://sourceforge.net/u/mansr/profile/">mansr</a>, <a
                            href="https://sourceforge.net/u/robs/profile/">robs</a>,
                        <a href="https://sourceforge.net/u/uklauer/profile/">
                            uklauer
                        </a>
                    </h4>
                    <h4>
                        <a
                            href="https://cdn.discordapp.com/attachments/516449848057135124/653439158144073729/nus3audio.bat">Batch
                            Scripts used for reference</a> - <a
                            href="https://github.com/thatnintendonerd/">ThatNintendoNerd</a>
                    </h4>
                    <h4>
                        <a href="https://docs.google.com/document/d/13nnPPQK46HE1c30LlcVj8Nrfdxjx1t1vH0cWMJqaSVA/">Song
                            names and
                            file names (Victory themes missing from the document file for some reason)</a> - <a
                            href="https://gamebanana.com/members/1507074">PlayerRager</a>, <a
                            href="https://www.youtube.com/channel/UCaMTWkuqc_W1D5CIPN7DEiw">Spook Rake</a>,
                        <a href="https://gamebanana.com/members/1537331">zrksyd</a>
                    </h4>

                    <h4>
                        <a
                            href="https://docs.google.com/document/d/1MSzUOeCxIyCpBRZBuko2wXg84exVt8VM9be0i7eAOcE/edit?usp=sharing">Fire
                            Emblem Three Houses Songs</a> - <a href="https://gamebanana.com/members/1480709">VGIII
                            &lt;3</a>, <a href="https://gamebanana.com/members/1707207">A Mudkip</a>
                    </h4>

                    <h4>
                        <a
                            href="https://docs.google.com/spreadsheets/d/1LD9qmlV_MxJ8Lm-Dxi3QmH_ZU1LBXHpKFHRuPycmkfw/edit#gid=0">ARMS
                            Songs</a> - <a href="https://gamebanana.com/members/1513589">Mowjoh</a>
                    </h4>

                    <h4>
                        <a
                            href="https://cdn.discordapp.com/attachments/516449848057135124/662099184584753152/smashAudio.zip">Python
                            script
                            to convert audio (Used as refrence for getting the sample rate)</a> -
                        <a href="https://github.com/Genwald">Genwald</a>
                    </h4>

                    <h4>
                        Teaching me how to convert samples between sample rates - <a
                            href="https://gamebanana.com/members/1480857">JoeTE</a>
                    </h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">MSBT</button>
                <div class="content">
                    <h4><a href="https://github.com/exelix11/3DLandMSBTeditor">MSBT Original Source Code</a> - <a
                            href="https://github.com/exelix11/">exelix11</a></h4>
                    <h4><a href="https://github.com/IcySon55/3DLandMSBTeditor">MSBT Improved Source Code</a> - <a
                            href="https://github.com/IcySon55/">IcySon55</a></h4>
                    <h4><a href="https://github.com/Coolsonickirby/MSBTEditorCli">MSBTEditorCli</a> - <a
                            href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                    <h4><a href="http://smashultimatetools.com/msbt">MSBTEditor Web Interface</a> - <a
                            href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">CSS Editor</button>
                <div class="content">
                    <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a
                            href="https://github.com/BenHall-7">Ben Hall</a></h4>
                    <h4><a href="https://github.com/lukasoppermann/html5sortable">html5sortable</a> - <a
                            href="https://github.com/lukasoppermann">Lukas Oppermann</a></h4>
                    <h4>Helping me figure out how to sync animate child elements background (Unfortunatly not used
                        because
                        of preformance issues)</a> - <a href="https://github.com/jam1garner/">jam1garner</a></h4>
                    <h4><a href="http://smashultimatetools.com/prc/Chara">CSS Editor Web Interface</a> - <a
                            href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">SSS Editor</button>
                <div class="content">
                    <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a
                            href="https://github.com/BenHall-7">Ben Hall</a></h4>
                    <h4><a href="https://github.com/lukasoppermann/html5sortable">html5sortable</a> - <a
                            href="https://github.com/lukasoppermann">Lukas Oppermann</a></h4>
                    <h4><a
                            href="http://www.dhtmlgoodies.com/scripts/form_widget_editable_select/form_widget_editable_select.html">Editable
                            Input Select</a> - <a href="http://www.dhtmlgoodies.com/">Alf Magne Kalleland</a></h4>
                    <h4>Helping me get some stage icons and big images - <a
                            href="https://gamebanana.com/members/1537331">zrksyd</a> & <a
                            href="https://gamebanana.com/members/1707207">A Mudkip</a></h4>
                    <h4><a href="http://smashultimatetools.com/prc/Stage">Stage Editor Web Interface</a> - <a
                            href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">Fighter Param Editor</button>
                <div class="content">
                    <div class="msbt_credits">
                        <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a
                                href="https://github.com/BenHall-7">Ben Hall</a></h4>
                        <h4><a href="http://smashultimatetools.com/prc/FighterParam">Fighter Param Editor Web
                                Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a>
                        </h4>
                    </div>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">Minecraft Java Skin Converter</button>
                <div class="content">
                    <h4><a href="https://github.com/jam1garner/img2nutexb">img2nutexb</a> - <a
                            href="https://github.com/jam1garner">jam1garner</a></h4>
                    <h4><a href="http://smashultimatetools.com/skinConverter">Minecraft Java Skin Converter Web
                            Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-credits">Special Thanks</button>
                <div class="content">
                    <h4>Getting me the updated files - <a href="https://twitter.com/BruhLookAtThis">BruhLookAtThis</a>,
                        <a href="https://www.youtube.com/channel/UCm4vgCpCYLHkGwldLPNpSQw">AGhostsPumpkinSoup</a>,
                        æostal568,
                        <a href="https://twitter.com/Demonslayerx8">DemonSlayerx8</a>,
                        <a href="https://twitter.com/Lizar_Doug">Nin10Doug</a>,
                        <a href="https://twitter.com/Rman4100">Rman41</a>,
                        <a href="https://www.reddit.com/user/getsome2198">flamecrest920</a>
                    </h4>
                </div>
            </div>
            <br>
        </div>

        <div id="MiniGuides" class="tabcontent">
            <div class="button-parent button-block">
                <button type="button" class="collapsible-miniguide">Mini-tutorial for converting brstms (from Smash
                    Custom Music) to nus3audio (with loops!)</button>
                <div class="content">
                    <ol style="line-height: 2;">
                        <li>Go to <a href="http://www.smashcustommusic.net/">SmashCustomMusic</a> and look for the game
                            you want the audio from.
                        </li>
                        <li>Once you find the game, click on it and look for the song you want.</li>
                        <li>Click on the song name, then click "Download BRSTM" (blue box in image below). <span
                                class="strike">Make sure you note down everything in the highlighted section.</span> Not
                            necessary anymore.<br><img src="https://smashultimatetools.com/img/mini1.png"
                                alt="Download BRSTM" style="height:512px; width:auto;"></li>
                        <li>Go to <a href="https://smashultimatetools.com/audio/#music">"Music file"</a> and select the
                            brstm file you downloaded</li>
                        <li>Enable the <a href="https://smashultimatetools.com/audio/#loop">"Loop Samples"</a> checkbox
                        </li>
                        <li>Set the Sampling Rate to the proper one. (Set it to "Auto" if you're not sure.)</li>
                        <li><span class="strike">Enter the loop samples you got from the notes into the proper
                                fields</span> Not necessary anymore as it can auto-detect the loop points.</li>
                        <li>Select the song you want to replace.</li>
                        <li>Click "Convert"</li>
                        <li>Profit</li>
                    </ol>
                    <p>You can only convert BRSTMs directly to nus3audio using the main converter.</p>
                </div>
            </div>
            <br>
        </div>

        <div id="MiniGuides" class="tabcontent">
            <div class="button-parent button-block">
                <button type="button" class="collapsible-miniguide">Mini-tutorial for converting brstms (from Smash
                    Custom Music) to nus3audio (with loops!)</button>
                <div class="content">
                    <ol style="line-height: 2;">
                        <li>Go to <a href="http://www.smashcustommusic.net/">SmashCustomMusic</a> and look for the game
                            you want the audio from.
                        </li>
                        <li>Once you find the game, click on it and look for the song you want.</li>
                        <li>Click on the song name, then click "Download BRSTM" (blue box in image below). <span
                                class="strike">Make sure you note down everything in the highlighted section.</span> Not
                            necessary anymore.<br><img src="./img/mini1.png"
                                alt="Download BRSTM" style="height:512px; width:auto;"></li>
                        <li>Go to <a href="https://smashultimatetools.com/audio/#music">"Music file"</a> and select the
                            brstm file you downloaded</li>
                        <li>Enable the <a href="https://smashultimatetools.com/audio/#loop">"Loop Samples"</a> checkbox
                        </li>
                        <li>Set the Sampling Rate to the proper one. (Set it to "Auto" if you're not sure.)</li>
                        <li><span class="strike">Enter the loop samples you got from the notes into the proper
                                fields</span> Not necessary anymore as it can auto-detect the loop points.</li>
                        <li>Select the song you want to replace.</li>
                        <li>Click "Convert"</li>
                        <li>Profit</li>
                    </ol>
                    <p>You can only convert BRSTMs directly to nus3audio using the main converter.</p>
                </div>
            </div>
            <br>
        </div>

        <div id="PAQ" class="tabcontent">
            <h1>PAQ (Potentially Asked Questions):</h1>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">What's this for/What's the use for this?</button>
                <div class="content">
                    <p>If you don't have access to your PC or Discord for jam1garner's discord bot to convert wav, you
                        can use this website instead, as it converts the files on the server and sends it back to you.
                        This can be used on school/college computers or
                        on your phone. You can now also edit MSBT files :)</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">What's this meant for? (Audio)</button>
                <div class="content">
                    <p>Mostly for small stuff, like victory jingles, but you can get a BRSTM file off of Smash Custom
                        Music (Archive), use the "Convert brstm/idsp/lopus" under "Extra Stuff", and then convert it to
                        nus3audio (Don't forget to note down the BRSTM hz,
                        loop start, and loop end from Smash Custom Music).</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Why did you make this? (Audio)</button>
                <div class="content">
                    <p>Because I got tired of connecting to my computer through Google's Remote Desktop just to make
                        music mods at college (Also for me to easily make music mods on my phone). This also makes it
                        easier for me to take pre-existing BRSTMs and convert
                        them to a compatible nus3audio for Smash Ultimate.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Why is the file limit 100mb, and is there a limit on how
                    long files are stored?</button>
                <div class="content">
                    <p>1. The file limit is 100mb (with a bit of extra breathing space) because I only have 11-12GB free
                        on the server I'm using.
                        <br> 2. Every 5 mins, the task schedular checks for files that are older than 30 mins. So at
                        most, 34 mins, and at the least, 30 mins.
                    </p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Where can I upload the file after I download it?</button>
                <div class="content">
                    <p><a href="https://gamebanana.com/games/6498">Gamebanana.</a></p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">What does "Convert Song to Compatible wav" do?</button>
                <div class="content">
                    <p>All it does is take the audio file, resamples it to 48000hz, and exports it as a wav. (Not
                        necessary
                        anymore as the main input can now convert any audio file to a compatible wav if it isn't
                        already.)</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Why does "Convert brstm/idsp/lopus to Compatible wav"
                    export the wav file to 48000hz instead of the original?</button>
                <div class="content">
                    <p>Because I wanted it to automatically convert it to a compatible wav without uploading,
                        downloading, then
                        uploading it again. You can now convert the brstm directly to a nus3audio now.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Does this work with an unmodded switch?</button>
                <div class="content">
                    <p>Unfortunatly, we can't add custom music to smash offically yet (looking at you Nintendo).
                        However,
                        there's a great guide on modding your switch at <a href="https://switch.homebrew.guide/">Switch
                            Hombrew
                            Guide</a>, and a great Smash Ultimate modding guide on <a
                            href="https://gamebanana.com/tuts/12827">Gamebanana made by TNN (That Nintendo
                            Nerd)</a>.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Is this a replacement for making music mods natively on
                    your PC?</button>
                <div class="content">
                    <p>Short Answer: No<br>Long Answer: Making music mods natively gives you more options and flexibilty
                        than
                        making it here. You have to factor in upload and download speed + not as much options as using
                        cmd would
                        give you.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Is this a replacement for making MSBT Edits natively on
                    your PC?</button>
                <div class="content">
                    <p>Short Answer: No<br>Long Answer: I'm not even sure if MSBTEditorCli works with unlabeled MSBTs
                        (also no
                        option to add labels). Not sure how well other languages work too.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">How are you converting music online?</button>
                <div class="content">
                    <p>The website stores the file, then uses shell_exec to convert the file to lopus/idsp (if
                        lopus/idsp was
                        selected, it would return the file), then it injects it into a base nus3audio I have saved
                        somewhere.
                        For compatible wav, I store the file,
                        then use shell_exec with SoX to resample the audio file, then return it. <span
                            class="strike">Right now,
                            it's on a Windows Server, but once I figure out
                            how to get VGAudio to work on a linux server, I'll move the server over there for more
                            space,
                            bandwidth,
                            and speed at a cheaper price.</span> <span class="strike">Change of plans: MSBTEditorCli
                            only works with .NET 4.0 and I
                            don't know how to get that to work with Linux.</span> I can move everything over to linux,
                        but now I'm pretty comfy with Windows Server.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">How does the online MSBTEditor work?</button>
                <div class="content">
                    <p>The "Open" button submits the file to the server, the server then runs the msbt file through
                        MSBTEditorCli and saves it as a json. The server redirects you to "/msbt/{current id of your
                        msbt}".
                        jQuery takes the id and sends the server an "api"
                        request for the json text. jQuery parses the json text and stores it in an array. Javascript
                        appends the
                        array to the select element, then orders it alphabatically. After you edit the text and click
                        the button
                        "Save", the "Save" button
                        sends the server the array stringified. The server then stores the json string to a file, then
                        sends the
                        file through MSBTEditorCli to convert the json back to MSBT, then it returns the new MSBT file.
                    </p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Is this website only for audio?</button>
                <div class="content">
                    <p><span class="strike">Right now, it's only audio, but I will work on adding more tools and making
                            the
                            website look nicer on my free time. My main goal was audio, but the only good domain name I
                            could've
                            thought of was smashultimatetools.com and that wasn't taken.</span> MSBTEditor now
                        yayyyyyyy.</p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">Where can I find this website's source code?</button>
                <div class="content">
                    <p><a href="https://github.com/Coolsonickirby/smashultimatewebtools">Here.</a></p>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-PAQ">I have some questions, but they aren't answered here /
                    There's an error in your website. / Can you add
                    _______?</button>
                <div class="content">
                    <p>Contact me on discord @ Coolsonickirby#4030.</p>
                </div>
            </div>
            <br>
        </div>

        <div id="ToDo" class="tabcontent">
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">MSBTEditor</button>
                <div class="content">
                    <ul>
                        <li>Nothing as of now</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">Audio</button>
                <div class="content">
                    <ul>
                        <li><span class="strike">Allow custom sample rate instead of 48000 for idsp</span> Done</li>
                        <li>Fix error with nus3audio_replace not working with 14+ clips</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">CSS Editor</button>
                <div class="content">
                    <ul>
                        <li>Revamp the design and make it look nicer (cleaner? can't find a better term)</li>
                        <li>Add Echo Character Selection</li>
                        <li>Add Sopo, Sana, proper Ivy, proper Squirtle, and proper Charizard slots</li>
                        <li>Add announcer voice selection</li>
                        <li><span class="strike">Fix Gamma Issue? (not sure if the fix I applied to it is good or
                                not.)</span> Done</li>
                        <li>Add Ability to Change Costume Amount</li>
                        <li>Add Ability to change Character Tips order</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">SSS Editor</button>
                <div class="content">
                    <ul>
                        <li><span class="strike">Fix Gamma Issue</span> Done</li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">Fighter Param Editor</button>
                <div class="content">
                        <ul>
                            <li>Add More Options</li>
                            <li>Add More Randomization Options</li>
                            <li>Improve Randomizer</li>
                        </ul>
                </div>
            </div>
            <br>
            <div class="button-parent button-block">
                <button type="button" class="collapsible-ToDo">The Site Itself</button>
                <div class="content">
                    <ul>
                        <li><span class="strike">Make the front-page look nice instead of being garbage</span> Done (Thanks to pizza!)</li>
                        <li>Add more stuff
                            <ul>
                                <li>BGM DB Editor (On Hold for now since Sma5hMusic exists)</li>
                                <li>Damage Color Editor (Thanks to zrksyd for the idea)</li>
                            </ul>
                        </li>
                        <li>Fill in the About Tab</li>
                        <li>Clean up any bugs (tbh I didn't encounter as much as I thought I would)</li>
                        <li><span class="strike">Add CSS to make the To-Do List look more cleaner</span> Done</li>
                    </ul>
                </div>
            </div>
            <br>
        </div>
    </div>

    <br>
    <br>
    <br>

    <script>
        var updates = [{
            date: `2/2/2020`,
            text: `I've added the option of just selecting a brstm file in the main section, so you can just convert the brstm directly
    to a nus3audio!!!`
        }, {
            date: `2/5/2020`,
            text: `I finally merged "Convert song to compatible wav" to the main section! Now you can just select any supported audio
    file and convert it to a nus3audio, lopus, or idsp.<br>
    Added Byleth's Victory Theme and the new FE songs to the list (Thanks to VGII &lt;3 and A Mudkip).`
        }, {
            date: `2/8/2020`,
            text: `Added a new page to replace nus3audio sound banks with idsp/lopus.`
        }, {
            date: `2/9/2020`,
            text: `Added support for <strong>MM:SS.ms (Minutes:Seconds.milliseconds)</strong> in loop samples.`
        }, {
            date: `2/16/2020`,
            text: `Added support for:<br>
    lopus -> nus3audio/idsp<br>
    idsp -> lopus<br>
    Also added filters for the stage dropdown`
        }, {
            date: `2/24/2020`,
            text: `Fixed a problem with nus3audio replacment when invalid files were encountered. Also wanted to apologize for not being able to update this as frequently as I wanted to, as college exists :(
    <br>
    An hour later and I finally added something else, a <a class="return_link" href="/audio/compare">compare feature!</a>`
        }, {
            date: `3/22/2020`,
            text: `After nearly a month of me not doing anything, I added a MSBT Editor (yay). Had to make a cli program for converting MSBTs<->json so I can implement it to the website!`
        },
        {
            date: `3/29/2020`,
            text: `Added a web interface CSS editor (yipee). To be honest, this was easier than the MSBT Editor as I only had to make ParamXML output the xml as a json file, then just create the web interface. The hardest part was making the background animated (which I gave up on because preformance was horrible.)`
        },
        {
            date: `4/2/2020`,
            text: `"2 back-to-back updates with both including a new tool!?!?!
            Who are you and what have you done to Coolsonickirby???"
            Woah calm down. Being stuck in my house all day isn't helping me at all,
            so with the downtime I have, I have nothing better to do than work on this website
            (college being sad in the background). Anyways, a SSS editor, yayyyy.
            I might slow down a bit for now cause I wanna do other stuff, but enjoy making SSS mods now!`
        },
        {
            date: `4/5/2020`,
            text: `Ok, I'm done for now. I'll hopefully add something new next week, but I procrastinated on my college assignments for far too long.
            Anyway added a fighter_param editor mostly because of the randomize feature. @ me on discord if anything needs changing or something. gnite.`
        },
        {
            date: `7/1/2020`,
            text: `Uhh, just realized I added nothing new at all for the past 2 months. Pretty sorry about that. I added a To-Do List today, so I'll start by doing everything
            in the To-Do List. Sorry if you were expecting anything new soon. I promise I'll bring something new soon after I finish with everything I need to do tho.`
        },
        {
            date: `10/14/2020`,
            text: `MINECRAFT STEVE HYPE LETS GOOOOOOOOOOOOOOOOOOOOOO! Sorry about not doing anything, I've been busy for a long while now. Anyways I added a Minecraft Java Skin -> Smash Skin converter!
            Hopefully y'all have fun with this! I'll try and add something else soon, but I can't promise anything rn since I'm pretty busy.`
        },
        {
            date: `1/25/2021`,
            text: `Happy 1 year anniversary! This was my first project that I released to the public.
                I'll be honest, even though progress on it slowed down, I still learned a lot from it! It helped me
                improve my CSS, JS, PHP, and even my C# skills. It also taught me how to maintain and handle a server,
                as well as some networking stuff. Hopefully when I'm done with my current semester, I'll add a new tool
                I've been thinking about (although it will be a HUGE undertaking). Thank you to everyone who used this
                site and I look forward to another year!`
        }
        ];

        var passwords = [
            "softturnip",
            "jack"
        ];

        var password = "";

        window.onload = function () {
            stan();
            document.getElementById("main-header-img").click();

            updates.reverse();

            updates.forEach(function (item, index) {
                document.getElementById("appendUpdates").innerHTML += `
                    <div class="button-parent button-block">
                        <button type="button" class="collapsible-update">Update as of ${item.date}</button>
                        <div class="content">
                            <p>${item.text}</p>
                        </div>
                    </div>
                    <br>
                `;
            });

            // Thanks to W3Schools for this snippet of code!

            var coll_update = document.getElementsByClassName("collapsible-update");
            var i;

            for (i = 0; i < coll_update.length; i++) {
                coll_update[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }

            var coll_credits = document.getElementsByClassName("collapsible-credits");
            var i;

            for (i = 0; i < coll_credits.length; i++) {
                coll_credits[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }

            var coll_miniguide = document.getElementsByClassName("collapsible-miniguide");
            var i;

            for (i = 0; i < coll_miniguide.length; i++) {
                coll_miniguide[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }

            var coll_PAQ = document.getElementsByClassName("collapsible-PAQ");
            var i;

            for (i = 0; i < coll_PAQ.length; i++) {
                coll_PAQ[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }

            var coll_ToDo = document.getElementsByClassName("collapsible-ToDo");
            var i;

            for (i = 0; i < coll_ToDo.length; i++) {
                coll_ToDo[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        }

        function openTab(evt, type, display_type) {
            display_type = (typeof display_type !== 'undefined') ? display_type : "block"

            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(type).style.display = display_type;
            evt.currentTarget.className += " active";
        }

        function stan() {
            document.getElementById("stan").innerHTML += "WE ONLY STAN JACK FROST IN THIS HOUSE 😤😤😤😤😤😤😤😤<br><br>";
            let amount_of_pics = 13;
            for (let i = 1; i < amount_of_pics + 1; i++) {
                var node = document.createElement("img");
                node.setAttribute("src", `/img/stan_jack_frost/${i}.jpg`);
                node.style.width = "25%";
                document.getElementById("stan").appendChild(node);
            }
        }

        window.addEventListener("keypress", (e) => {
            var char = e.which || e.keyCode;
            var charStr = String.fromCharCode(char);
            var combined = password + charStr.toLowerCase();
            var re = new RegExp(combined,"g");
            var passed = false;
            for(let i = 0; i < passwords.length; i++){
                if(re.test(passwords[i]) && password.length <= passwords[i].length){
                    password = combined;
                    passed = true;
                }
            }

            if(!passed){
                password = "";
            }

            for(let i = 0; i < passwords.length; i++){
                if(password == passwords[i]){
                    ShowModal(passwords[i]);
                    password = "";
                }
            }
        });

        function ShowModal(id){
            $(`#${id}`).fadeIn(100);
            document.getElementById(id).style.overflow = "auto";
            document.body.style.overflow = "hidden";
        }

        function HideModal(id){
            $(`#${id}`).fadeOut(100);
            document.body.style.overflow = "auto";
        }
    </script>

</body>

</html>
