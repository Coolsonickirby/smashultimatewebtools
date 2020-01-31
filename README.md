<h2>Smash Ultimate Web Tools (Currently supports only Audio)</h2>

<h3><strong>Setup</strong></h3>

<ol>
    <li>Download <a href="https://github.com/Thealexbarney/VGAudio/releases">VGAudioCli</a>, <a
            href="https://github.com/jam1garner/nus3audio-rs/releases">nus3audio</a>, <a
            href="http://sox.sourceforge.net/">SoX</a>, and get a base nus3audio (use CrossArc for this).</li>
    <br>
    <li>Place VGAudioCli.exe, VGAudioCli.dll, nus3audio.exe, and your nus3audio (make sure it's
        "<strong>base</strong>.nus3audio") in "./public/convert/".</li>
    <br>
    <li>Create a new folder in there called "sox" ("./public/convert/sox").</li>
    <br>
    <li> Extract everything in the SoX zip into the sox folder.</li>
    <br>
    <li>Create and setup the ".env" file</li>
    <br>
    <li>Run "php artisan migrate && php artisan storage:link" in the Command Line (CMD)/Terminal</li>
    <br>
    <li>Give the appropiate permissions.</li>
</ol>

<p>
    These instructions were written for setting it up on a Windows local or server machine (You don't have to worry
    about permissions on a local machine). I would've loved to put this on a linux server, but WINE is giving me a bit
    of trouble by not letting VGAudio run unless there's a X server running (GUI problems for some reason). Once I
    figure it out, I'm moving everything from the Windows Server to the Linux Server (as IIS is such a pain in the ass.)
</p>

<h3><strong>Credits:</strong></h3>
<h4>
    <a href="https://github.com/laravel/laravel">Laravel Framework</a> - <a
        href="https://github.com/taylorotwell">Taylor Otwell</a>
</h4>
<h4>
    <a href="https://github.com/Thealexbarney/VGAudio">VGAudio</a> - <a
        href="https://github.com/Thealexbarney/">Thealexbarney</a>
</h4>
<h4>
    <a href="https://github.com/jam1garner/nus3audio">nus3audio</a> - <a
        href="https://github.com/jam1garner/">jam1garner</a>
</h4>
<h4>
    <a href="http://sox.sourceforge.net/">SoX</a> - <a href="https://sourceforge.net/u/cbagwell/">cbagwell</a>, <a
        href="https://sourceforge.net/u/mansr/profile/">mansr</a>, <a
        href="https://sourceforge.net/u/robs/profile/">robs</a>, <a href="https://sourceforge.net/u/uklauer/profile/">
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
        file names (Victory themes missing from the document file for some reason)</a> - <a
        href="https://gamebanana.com/members/1507074">PlayerRager</a>, <a
        href="https://www.youtube.com/channel/UCaMTWkuqc_W1D5CIPN7DEiw">Spook Rake</a>, <a
        href="https://gamebanana.com/members/1537331">zrksyd</a>
</h4>
<h4>
    Teaching me how to convert samples between sample rates - <a href="https://gamebanana.com/members/1480857">JoeTE</a>
</h4>
<h4>
    <a href="https://github.com/Coolsonickirby/smashultimatewebtools">This Website</a> - <a
        href="https://github.com/coolsonickirby/">Coolsonickirby</a>
</h4>
