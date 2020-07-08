<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smash Ultimate Tools</title>
    <link rel="stylesheet" href="./css/front-page.css">
</head>

<body>

    <div class="header">
        <a href="{{Request::root()}}">Smash Ultimate Tools</a>
    </div>

    <div class="links">
        <div class="links-div">
            <a class="link-tool" href="/msbt">
                MSBTEditor
            </a>
            <a class="link-tool" href="/audio">
                Audio
            </a>
            <a class="link-tool" href="/prc/Chara/0">
                CSS Editor
            </a>
            <a class="link-tool" href="/prc/Stage/0">
                SSS Editor
            </a>
            <a class="link-tool" href="/prc/FighterParam/0">
                Fighter Param Editor
            </a>
        </div>
    </div>

    <div class="main">
        <!-- CREDITS TO W3SCHOOLS for all this (Specifcally the tabs)-->
        <!-- Tab links -->
        <div class="tab">
            <button class="tablinks" onclick="openTab(event, 'About')" id="default">About</button>
            <button class="tablinks" onclick="openTab(event, 'Updates')">Updates</button>
            <button class="tablinks" onclick="openTab(event, 'Credits')">Credits</button>
            <button class="tablinks" onclick="openTab(event, 'MiniGuides')">Mini-Guides</button>
            <button class="tablinks" onclick="openTab(event, 'PAQ')">PAQ</button>
            <button class="tablinks" onclick="openTab(event, 'ToDo')">To-Do List</button>
        </div>

        <!-- Tab content -->
        <div id="About" class="tabcontent">
            <h1>About</h1>
            <p class="tab-text">I'll write this one later<br> Also join the <a href="https://discord.gg/ASJyTrZ">Super Smash Bros. Ultimate Modding Discord</a>
            </p>
        </div>

        <div id="Updates" class="tabcontent">
            <h1>Updates</h1>
            <div id="appendUpdates">

            </div>
        </div>

        <div id="Credits" class="tabcontent">
            <h1>Credits</h1>

            <div class="main_credits">
                <h2>Main:</h2>
                <h4>
                    <a href="https://github.com/laravel/laravel">Laravel Framework</a> - <a href="https://github.com/taylorotwell">Taylor Otwell</a>
                </h4>
                <h4>
                    <a href="{{Request::root()}}">This Website</a> - <a href="https://github.com/coolsonickirby/">Coolsonickirby</a>
                </h4>
            </div>
            <hr>
            <div class="audio_credits">
                <h2>Audio:</h2>
                <h4>
                    <a href="https://github.com/Thealexbarney/VGAudio">VGAudio</a> - <a href="https://github.com/Thealexbarney/">Thealexbarney</a>
                </h4>
                <h4>
                    <a href="https://github.com/jam1garner/nus3audio-rs">nus3audio</a> - <a href="https://github.com/jam1garner/">jam1garner</a>
                </h4>
                <h4>
                    <a href="http://sox.sourceforge.net/">SoX</a> - <a href="https://sourceforge.net/u/cbagwell/">cbagwell</a>, <a href="https://sourceforge.net/u/mansr/profile/">mansr</a>, <a href="https://sourceforge.net/u/robs/profile/">robs</a>,
                    <a href="https://sourceforge.net/u/uklauer/profile/">
                        uklauer
                    </a>
                </h4>
                <h4>
                    <a href="https://cdn.discordapp.com/attachments/516449848057135124/653439158144073729/nus3audio.bat">Batch
                        Scripts used for reference</a> - <a href="https://github.com/thatnintendonerd/">ThatNintendoNerd</a>
                </h4>
                <h4>
                    <a href="https://docs.google.com/document/d/13nnPPQK46HE1c30LlcVj8Nrfdxjx1t1vH0cWMJqaSVA/">Song
                        names and
                        file names (Victory themes missing from the document file for some reason)</a> - <a href="https://gamebanana.com/members/1507074">PlayerRager</a>, <a href="https://www.youtube.com/channel/UCaMTWkuqc_W1D5CIPN7DEiw">Spook Rake</a>,
                    <a href="https://gamebanana.com/members/1537331">zrksyd</a>
                </h4>

                <h4>
                    <a href="https://docs.google.com/document/d/1MSzUOeCxIyCpBRZBuko2wXg84exVt8VM9be0i7eAOcE/edit?usp=sharing">Fire
                        Emblem Three Houses Songs</a> - <a href="https://gamebanana.com/members/1480709">VGIII
                        &lt;3</a>, <a href="https://gamebanana.com/members/1707207">A Mudkip</a>
                </h4>

                <h4>
                    <a href="https://cdn.discordapp.com/attachments/516449848057135124/662099184584753152/smashAudio.zip">Python
                        script
                        to convert audio (Used as refrence for getting the sample rate)</a> -
                    <a href="https://github.com/Genwald">Genwald</a>
                </h4>

                <h4>
                    Teaching me how to convert samples between sample rates - <a href="https://gamebanana.com/members/1480857">JoeTE</a>
                </h4>
            </div>
            <hr>
            <div class="msbt_credits">
                <h2>MSBT:</h2>
                <h4><a href="https://github.com/exelix11/3DLandMSBTeditor">MSBT Original Source Code</a> - <a href="https://github.com/exelix11/">exelix11</a></h4>
                <h4><a href="https://github.com/IcySon55/3DLandMSBTeditor">MSBT Improved Source Code</a> - <a href="https://github.com/IcySon55/">IcySon55</a></h4>
                <h4><a href="https://github.com/Coolsonickirby/MSBTEditorCli">MSBTEditorCli</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
                <h4><a href="http://smashultimatetools.com/msbt">MSBTEditor Web Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
            </div>
            <hr>
            <div class="msbt_credits">
                <h2>CSS Editor:</h2>
                <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a href="https://github.com/BenHall-7">Ben Hall</a></h4>
                <h4><a href="https://github.com/lukasoppermann/html5sortable">html5sortable</a> - <a href="https://github.com/lukasoppermann">Lukas Oppermann</a></h4>
                <h4>Helping me figure out how to sync animate child elements background (Unfortunatly not used because of preformance issues)</a> - <a href="https://github.com/jam1garner/">jam1garner</a></h4>
                <h4><a href="http://smashultimatetools.com/prc/Chara">CSS Editor Web Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
            </div>
            <hr>
            <div class="msbt_credits">
                <h2>SSS Editor:</h2>
                <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a href="https://github.com/BenHall-7">Ben Hall</a></h4>
                <h4><a href="https://github.com/lukasoppermann/html5sortable">html5sortable</a> - <a href="https://github.com/lukasoppermann">Lukas Oppermann</a></h4>
                <h4><a href="http://www.dhtmlgoodies.com/scripts/form_widget_editable_select/form_widget_editable_select.html">Editable Input Select</a> - <a href="http://www.dhtmlgoodies.com/">Alf Magne Kalleland</a></h4>
                <h4>Helping me get some stage icons and big images -  <a href="https://gamebanana.com/members/1537331">zrksyd</a> & <a href="https://gamebanana.com/members/1707207">A Mudkip</a></h4>
                <h4><a href="http://smashultimatetools.com/prc/Stage">Stage Editor Web Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
            </div>
            <hr>
            <div class="msbt_credits">
                <h2>Fighter Param Editor:</h2>
                <h4><a href="https://github.com/BenHall-7/paracobNET">ParamXML</a> - <a href="https://github.com/BenHall-7">Ben Hall</a></h4>
                <h4><a href="http://smashultimatetools.com/prc/FighterParam">Fighter Param Editor Web Interface</a> - <a href="https://github.com/Coolsonickirby/">Coolsonickirby/Random</a></h4>
            </div>
            <hr>
            <div class="msbt_credits">
                <h2>Special Thanks:</h2>
                <h4>Getting me the updated files - <a href="https://twitter.com/BruhLookAtThis">BruhLookAtThis</a> & <a href="https://www.youtube.com/channel/UCm4vgCpCYLHkGwldLPNpSQw">AGhostsPumpkinSoup</a></h4>
            </div>
        </div>

        <div id="MiniGuides" class="tabcontent">
            <h1>Mini-Guides</h1>

            <h2>Mini-tutorial for converting brstms (from Smash Custom Music) to nus3audio (with loops!)</h3>

                <ol>
                    <li>Go to <a href="http://www.smashcustommusic.net/">SmashCustomMusic</a> and look for the game you want the audio from.
                    </li>
                    <li>Once you find the game, click on it and look for the song you want.</li>
                    <li>Click on the song name, then click "Download BRSTM" (blue box in image below). <span class="strike">Make sure you note down everything in the highlighted section.</span> Not necessary anymore.<br><img src="./img/mini1.png" alt="Download BRSTM" style="height:512px; width:auto;"></li>
                    <li>Go to <a href="{{Request::root()}}/audio/#music">"Music file"</a> and select the brstm file you downloaded</li>
                    <li>Enable the <a href="{{Request::root()}}/audio/#loop">"Loop Samples"</a> checkbox</li>
                    <li>Set the Sampling Rate to the proper one. (Set it to "Auto" if you're not sure.)</li>
                    <li><span class="strike">Enter the loop samples you got from the notes into the proper fields</span> Not necessary anymore as it can auto-detect the loop points.</li>
                    <li>Select the song you want to replace.</li>
                    <li>Click "Convert"</li>
                    <li>Profit</li>
                </ol>

                <p>You can only convert BRSTMs directly to nus3audio using the main converter.</p>
        </div>

        <div id="PAQ" class="tabcontent">
            <h1>PAQ (Potentially Asked Questions):</h1>
            <h4>What's this for/What's the use for this?</h4>
            <p>If you don't have access to your PC or Discord for jam1garner's discord bot to convert wav, you can use this website instead, as it converts the files on the server and sends it back to you. This can be used on school/college computers or
                on your phone. You can now also edit MSBT files :)</p>

            <h4>What's this meant for? (Audio)</h4>
            <p>Mostly for small stuff, like victory jingles, but you can get a BRSTM file off of Smash Custom Music (Archive), use the "Convert brstm/idsp/lopus" under "Extra Stuff", and then convert it to nus3audio (Don't forget to note down the BRSTM hz,
                loop start, and loop end from Smash Custom Music).</p>

            <h4>Why did you make this? (Audio)</h4>
            <p>Because I got tired of connecting to my computer through Google's Remote Desktop just to make music mods at college (Also for me to easily make music mods on my phone). This also makes it easier for me to take pre-existing BRSTMs and convert
                them to a compatible nus3audio for Smash Ultimate.</p>

            <h4>Why is the file limit 100mb, and is there a limit on how long files are stored?</h4>
            <p>1. The file limit is 100mb (with a bit of extra breathing space) because I only have 11-12GB free on the server I'm using.
                <br> 2. Every 5 mins, the task schedular checks for files that are older than 30 mins. So at most, 34 mins, and at the least, 30 mins.
            </p>

            <h4>Where can I upload the file after I download it?</h4>
            <p><a href="https://gamebanana.com/games/6498">Gamebanana.</a></p>

            <h4>What does "Convert Song to Compatible wav" do?</h4>
            <p>All it does is take the audio file, resamples it to 48000hz, and exports it as a wav. (Not necessary anymore as the main input can now convert any audio file to a compatible wav if it isn't already.)</p>

            <h4>Why does "Convert brstm/idsp/lopus to Compatible wav" export the wav file to 48000hz instead of the original?
            </h4>
            <p>Because I wanted it to automatically convert it to a compatible wav without uploading, downloading, then uploading it again. You can now convert the brstm directly to a nus3audio now.</p>

            <h4>Does this work with an unmodded switch?</h4>
            <p>Unfortunatly, we can't add custom music to smash offically yet (looking at you Nintendo). However, there's a great guide on modding your switch at <a href="https://switch.homebrew.guide/">Switch Hombrew
                    Guide</a>, and a great Smash Ultimate modding guide on <a href="https://gamebanana.com/tuts/12827">Gamebanana made by TNN (That Nintendo
                    Nerd)</a>.</p>

            <h4>Is this a replacement for making music mods natively on your PC?</h4>
            <p>Short Answer: No<br>Long Answer: Making music mods natively gives your more options and flexibilty than making it here. You have to factor in upload and download speed + not as much options as using cmd would give you.</p>

            <h4>Is this a replacement for making MSBT Edits natively on your PC?</h4>
            <p>Short Answer: No<br>Long Answer: I'm not even sure if MSBTEditorCli works with unlabeled MSBTs (also no option to add labels). Not sure how well other languages work too.</p>

            <h4>How are you converting music online?</h4>
            <p>The website stores the file, then uses shell_exec to convert the file to lopus/idsp (if lopus/idsp was selected, it would return the file), then it injects it into a base nus3audio I have saved somewhere. For compatible wav, I store the file,
                then use shell_exec with SoX to resample the audio file, then return it. <span class="strike">Right now, it's on a Windows Server, but once I figure out
                    how to get VGAudio to work on a linux server, I'll move the server over there for more space,
                    bandwidth,
                    and speed at a cheaper price.</span> Change of plans: MSBTEditorCli only works with .NET 4.0 and I don't know how to get that to work with Linux.</p>

            <h4>How does the online MSBTEditor work?</h4>
            <p>The "Open" button submits the file to the server, the server then runs the msbt file through MSBTEditorCli and saves it as a json. The server redirects you to "/msbt/{current id of your msbt}". jQuery takes the id and sends the server an "api"
                request for the json text. jQuery parses the json text and stores it in an array. Javascript appends the array to the select element, then orders it alphabatically. After you edit the text and click the button "Save", the "Save" button
                sends the server the array stringified. The server then stores the json string to a file, then sends the file through MSBTEditorCli to convert the json back to MSBT, then it returns the new MSBT file.</p>

            <h4>Is this website only for audio?</h4>
            <p><span class="strike">Right now, it's only audio, but I will work on adding more tools and making the website look nicer on my free time. My main goal was audio, but the only good domain name I could've thought of was smashultimatetools.com and that wasn't taken.</span>                MSBTEditor now yayyyyyyy.</p>

            <h4>Where can I find this website's source code?</h4>
            <p><a href="https://github.com/Coolsonickirby/smashultimatewebtools">Here.</a></p>

            <h4>I have some questions, but they aren't answered here / There's an error in your website. / Can you add _______?
            </h4>
            <p>Contact me on discord @ Coolsonickirby#4030.</p>
        </div>

    </div>

    <div id="ToDo" class="tabcontent">
    <h4>
        <ol>
            <li><span class="strike">Add the To-Do List</span> Done</li>
            <li>
                MSBTEditor:
                <ul>
                    <li>Nothing as of now</li>
                </ul>
            </li>
            <li>
                Audio:
                <ul>
                    <li><span class="strike">Allow custom sample rate instead of 48000 for idsp</span> Done</li>
                </ul>
            </li>
            <li>
                CSS Editor:
                <ul>
                    <li>Revamp the design and make it look nicer (cleaner? can't find a better term)</li>
                    <li>Add Echo Character Selection</li>
                    <li>Add Sopo, Sana, proper Ivy, proper Squirtle, and proper Charizard slots</li>
                    <li>Add announcer voice selection</li>
                    <li>Fix Gamma Issue? (not sure if the fix I applied to it is good or not.)</li>
                    <li>Add Ability to Change Costume Amount</li>
                </ul>
            </li>
            <li>
                SSS Editor:
                <ul>
                    <li>Fix Gamma Issue</li>
                </ul>
            </li>
            <li>
                Fighter Param Editor:
                <ul>
                    <li>Add More Options</li>
                    <li>Add More Randomization Options</li>
                    <li>Improve Randomizer</li>
                </ul>
            </li>
            <li>
                The Site Itself:
                <ul>
                    <li>Make the front-page look nice instead of being garbage</li>
                    <li>Add more stuff
                    <ul>
                        <li>BGM DB Editor</li>
                        <li>Damage Color Editor (Thanks to zrksyd for the idea)</li>
                    </ul>
                    </li>
                    <li>Fill in the About Tab</li>
                    <li>Clean up any bugs (tbh I didn't encounter as much as I thought I would)</li>
                    <li><span class="strike">Add CSS to make the To-Do List look more cleaner</span> Done</li>
                </ul>
            </li>
        </ol>
        </h4>
    </div>

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
        }
    ];

        window.onload = function() {
            document.getElementById("default").click();

            updates.reverse();

            updates.forEach(function(item, index) {
                if ((updates.length - 1) != index) {
                    document.getElementById("appendUpdates").innerHTML += `<h2 class="update-date">Update as of ${item.date}</h2> <p class="update-text">${item.text}</p><hr>`;
                } else {
                    document.getElementById("appendUpdates").innerHTML += `<h2 class="update-date">Update as of ${item.date}</h2> <p class="update-text">${item.text}</p>`;
                }

            });
        }

        function openTab(evt, type) {
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
            document.getElementById(type).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>

</body>

</html>
