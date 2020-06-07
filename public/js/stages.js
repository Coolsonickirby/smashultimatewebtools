//I'm gonna try and figure out how to store these arrays somewhere else soon.

var SmashSeries = [
    ["Super Smash Bros. Series", "smash"],
    ["Menu - Super Smash Bros. for 3DS / Wii U)", "bgm_crs01_menu", "1452752"],
    ["Battlefield - Super Smash Bros. for 3DS / Wii U", "bgm_crs02_senjyou", "1464656"],
    ["Lifelight (JP)", "bgm_crs2_00a_maintheme_jp", "2808568"],
    ["Lifelight", "bgm_crs2_00b_maintheme_en", "2808568"],
    ["Menu", "bgm_crs2_01_menu", "1954952"],
    ["Battlefield", "bgm_crs2_02_senjyou", "1962640"],
    ["Final Destination", "bgm_crs2_03_shuuten", "1934616"],
    ["Mob Smash", "bgm_crs2_04_kumite", "2013976"],
    ["Master Hand", "bgm_crs2_05_masterhand", "1305192"],
    ["Tourney: Battle List", "bgm_crs2_07_vs_table", "1260384"],
    ["Tourney: Winner Announcement", "bgm_crs2_08_vs_victory", "1324392"],
    ["Training", "bgm_crs2_11_trainingstage", "1866168"],
    ["The Light Realm: Prologue", "bgm_crs2_12_adv_map_light", "1260384"],
    ["The Light Realm: Base", "bgm_crs2_13_adv_map_light_subcommon", "1260400"],
    ["The Dark Realm", "bgm_crs2_14_adv_map_dark", "1327512"],
    ["The Final Battle", "bgm_crs2_15_adv_map_final", "1324392"],
    ["Classic Mode: Bonus Stage", "bgm_crs2_16_bonusstage", "1260384"],
    ["Galeem", "bgm_crs2_17_vs_kiila1", "2182616"],
    ["Dharkon", "bgm_crs2_19_vs_darz1", "1864432"],
    ["Galeem / Dharkon", "bgm_crs2_21_vs_kiila_darz", "2050184"],
    ["Free the Spirit!", "bgm_crs2_22_spiritsboard_roulette", "1260400"],
    ["Spirits: Collection", "bgm_crs2_23_edit_common", "1260384"],
    ["Spirits: Inventory / Items", "bgm_crs2_27_spirits_organize", "1054976"],
    ["Classic Mode: Mural", "bgm_crs2_28_classic_dificulty", "413400"],
    ["Classic Mode: Defeat", "bgm_crs2_31_classic_result_failure", "365040"],
    ["Classic Mode: Final Results", "bgm_crs2_33_classic_result_final", "1260400"],
    ["Practice Fights", "bgm_crs2_36_simulationstage", "482840"],
    ["Spectate", "bgm_crs2_38_online_watching", "1260400"],
    ["Vault", "bgm_crs2_40_collection", "1324392"],
    ["Shop", "bgm_crs2_41_shop", "672544"],
    ["Crazy Hand", "bgm_crs2_42_crazyhand", "1270472"],
    ["Master Hand / Crazy Hand", "bgm_crs2_43_masterhand_crazyhand", "2216112"],
    ["The Dark Realm: The Mysterious Space", "bgm_crs2_45_adv_map_dark_subcommon", "1260400"],
    ["The Final Battle: After the Transformation", "bgm_crs2_46_adv_map_final_later", "1324408"],
    ["Main Theme Piano Solo", "bgm_crs2_47_maintheme_piano", "2434104"],
    ["The Light Realm: March", "bgm_crs2_48_adv_map_light_later", "841696"],
    ["Final Destination - Super Smash Bros. for 3DS / Wii U", "bgm_crs03_shuuten", "1858480"],
    ["Multi-Man Smash", "bgm_crs04_kumite", "1634040"],
    ["Master Hand - Super Smash Bros. for 3DS / Wii U", "bgm_crs05_masterhand", "1599320"],
    ["Master Core", "bgm_crs06_mastercore", "2517168"],
    ["Online Practice Stage - Super Smash Bros. for 3DS / Wii U  ", "bgm_crs07_online", "813904"],
    ["Classic: Result Screen", "bgm_crs11_simple_result", "698088"],
    ["Classic: Final Results", "bgm_crs12_simple_result_final", "908904"],
    ["Classic: Fail", "bgm_crs13_simple_result_failure", "519792"],
    ["All-Star Rest Area - Super Smash Bros. for 3DS / Wii U", "bgm_crs15_rest", "564664"],
    ["Gallery/Hoard", "bgm_crs18_figuremeikan", "1906840"],
    ["Trophy Shop", "bgm_crs19_figureshop", "555984"],
    ["Trophy Rush", "bgm_crs20_figurerush", "2355472"],
    ["Replay/Album/Records", "bgm_crs21_album", "933192"],
    ["StreetSmash", "bgm_crs22_surechigaidairantou", "380664"],
    ["Results Screen - Super Smash Bros. for 3DS / Wii U", "bgm_crs24_vs_result", "648488"],
    ["Credits - Super Smash Bros. for 3DS / Wii U", "bgm_crs25_staffroll", "1642968"],
    ["Final Destination Ver. 2", "bgm_crs26_shuuten_ver2", "1583200"],
    ["Master Fortress: First Wave", "bgm_crs27_masterfortress01", "1516984"],
    ["Master Fortress: Second Wave", "bgm_crs28_masterfortress02", "1929408"],
    ["Smash Tour: Map", "bgm_crs31_world_map", "843664"],
    ["Events", "bgm_crs36_tournament_table", "1092160"],
    ["Master Orders: Ticket Selection", "bgm_crs39_order_masterside", "563672"],
    ["Credits - Super Smash Bros. (Brawl)", "bgm_t01_sb_staffroll", "1011312"],
    ["Credits - Super Smash Bros. (for 3DS / Wii U)", "bgm_t07_sb_staffroll", "1643464"],
    ["How to Play - Super Smash Bros.", "bgm_t17_sb_howtoplay", "1248896"],
    ["Menu - Super Smash Bros.", "bgm_t18_sb_menu", "1331280"],
    ["Training Mode", "bgm_t19_sb_trainingmode", "1848808"],
    ["Fighter Selection - Super Smash Bros.", "bgm_t21_sb_characterselect", "193656"],
    ["Meta Crystal - Super Smash Bros.", "bgm_t22_sb_metacristal", "1579976"],
    ["Bonus Game - Super Smash Bros.", "bgm_t23_sb_bonusgame", "1368432"],
    ["Duel Zone", "bgm_t24_sb_duelzone", "1248896"],
    ["Final Destination - Super Smash Bros.", "bgm_t25_sb_shuuten", "999408"],
    ["Credits - Super Smash Bros.", "bgm_t27_sb_ending_staffroll", "836240"],
    ["Battlefield - Super Smash Bros. Melee", "bgm_w21_sbdx_senjyou", "1061904"],
    ["Multi-Man Melee", "bgm_w23_sbdx_hyakuninkumite", "1261064"],
    ["Final Destination - Super Smash Bros. Melee", "bgm_w25_sbdx_shuuten", "1124152"],
    ["Menu - Super Smash Bros. Melee", "bgm_w30_sbdx_menu", "656920"],
    ["Giga Bowser", "bgm_w31_sbdx_gigakoopa", "1141016"],
    ["Menu 2 - Super Smash Bros. Melee", "bgm_w33_sbdx_menu2", "787864"],
    ["Menu - Super Smash Bros. Melee (Brawl)", "bgm_w34_sbdx_menu", "1329000"],
    ["Battlefield - Super Smash Bros. Melee (for 3DS / Wii U)", "bgm_w35_sbdx_menu_ver2", "1642224"],
    ["Multi-Man Melee 2", "bgm_w39_sbdx_hyakuninkumite2", "1145000"],
    ["Metal Battle - Trophies", "bgm_w40_sbdx_metalbattle", "694864"],
    ["Trophies", "bgm_w41_sbdx_figuremeikan", "1169040"],
    ["All-Star Intro", "bgm_w42_sbdx_rest", "331048"],
    ["Opening - Super Smash Bros. Melee", "bgm_w43_sbdx_opening", "1133328"],
    ["Targets!", "bgm_w44_sbdx_targetwokowase", "498216"],
    ["Tournament", "bgm_w45_sbdx_tornament1", "359568"],
    ["Tournament 2", "bgm_w46_sbdx_tornament2", "391064"],
    ["How to Play - Super Smash Bros. Melee", "bgm_w48_sbdx_asobikata", "1773416"],
    ["Opening - Super Smash Bros. Melee (Brawl)", "bgm_w49_sbdx_opening", "1215168"],
    ["Main Theme - Super Smash Bros. Brawl", "bgm_x01_sbx_maintheme", "1519712"],
    ["Menu - Super Smash Bros. Brawl", "bgm_x02_sbx_menu1", "1178960"],
    ["Battlefield - Super Smash Bros. Brawl", "bgm_x04_sbx_senjyou", "1134320"],
    ["Final Destination - Super Smash Bros. Brawl", "bgm_x05_sbx_shuuten", "2051672"],
    ["Online Practice Stage - Super Smash Bros. Brawl", "bgm_x07_sbx_onlinerenshuustage", "355368"],
    ["Tournament Registration", "bgm_x09_sbx_tornament_entry", "503424"],
    ["Tournament Grid", "bgm_x10_sbx_tornament_table", "530208"],
    ["Tournament Match End", "bgm_x11_sbx_tornament_finish", "507640"],
    ["All-Star Rest Area - Super Smash Bros. Brawl", "bgm_x15_sbx_rest", "459512"],
    ["Home-Run Contest", "bgm_x16_sbx_homeruncontest", "198368"],
    ["Cruel Smash", "bgm_x17_sbx_nasakemuyoukumite", "924776"],
    ["Boss Battle - Super Smash Bros. Brawl", "bgm_x18_sbx_bossbattle", "912112"],
    ["Trophy Gallery", "bgm_x19_sbx_figuremeikan", "1798216"],
    ["Sticker Album / Album / Chronicle", "bgm_x20_sealmeikan", "413384"],
    ["Coin Launcher", "bgm_x21_coinshooter", "663864"],
    ["Stage Builder", "bgm_x23_stageedit", "754384"],
    ["Battlefield Ver. 2 - Super Smash Bros. Brawl", "bgm_x25_sbx_senjyou_ver2", "922776"],
    ["Target Smash!!", "bgm_x26_sbx_targetwokowase", "607320"],
    ["Credits - Super Smash Bros. Brawl", "bgm_x27_sbx_staffroll", "1720096"],
    ["Adventure Map", "bgm_y01_sbx_adv_map", "475880"],
    ["Step: The Plain", "bgm_y02_sbx_step_heichi", "954520"],
    ["Step: Subspace", "bgm_y04_sbx_step_akuukan", "1124400"],
    ["Boss Battle Song 1", "bgm_y05_sbx_bosssentoukyoku1", "1392504"],
    ["Boss Battle Song 2", "bgm_y07_sbx_bosssentoukyoku2", "1243704"],
    ["Step: Subspace Ver. 3", "bgm_y15_sbx_step_akuukan_ver3", "1459464"]
];

var MarioSeries = [
    ["Super Mario Bros. Series", "mario"],
    ["Ground Theme - Super Mario Bros. (Brawl)", "bgm_a01_smb_chijyou", "1361488"],
    ["Underground Theme - Super Mario Bros.", "bgm_a02_smb_chika", "1057936"],
    ["Underwater Theme - Super Mario Bros.", "bgm_a03_smb_suichu", "1162840"],
    ["Underground Theme - Super Mario Land", "bgm_a04_lnd_chika", "1524920"],
    ["Airship Theme - Super Mario Bros. 3", "bgm_a05_smb3_hikousen", "1676944"],
    ["Castle / Fortress Boss - Super Mario World / SMB 3", "bgm_a06_wld_castle_toride", "1325032"],
    ["Title/Ending - Super Mario World", "bgm_a07_wld_title_ending", "1576256"],
    ["Main Theme - New Super Mario Bros.", "bgm_a08_new_maintheme", "1164080"],
    ["Main Theme - Luigi's Mansion (Brawl)", "bgm_a09_lm_theme", "1124400"],
    ["Gritzy Desert", "bgm_a10_malrpg2_zarazarasabaku", "1176496"],
    ["Delfino Plaza", "bgm_a13_sms_dolpiktown", "2091352"],
    ["Ricco Harbor", "bgm_a14_sms_riccoharbor", "1441096"],
    ["Main Theme - Super Mario 64", "bgm_a15_sm64_maintheme", "916576"],
    ["Mario Bros.", "bgm_a17_mb_mariobrothers", "790592"],
    ["Ground Theme / Underground Theme - Super Mario Bros.", "bgm_a24_smb_chijyou_chika", "1414064"],
    ["Super Mario Bros. 3 Medley", "bgm_a25_smb3_medley", "1565840"],
    ["Athletic Theme - New Super Mario Bros. 2", "bgm_a26_new2_athletic_chijyou", "1259576"],
    ["Ground Theme / Underwater Theme - Super Mario 3D Land", "bgm_a27_3dl_smb_theme", "1453992"],
    ["Try, Try Again", "bgm_a28_malrpg4_tryandtry", "1427704"],
    ["Paper Mario Medley", "bgm_a29_ppm_medley", "1822520"],
    ["Super Mario Bros. Medley", "bgm_a32_smb_medley", "1508552"],
    ["Super Mario Bros.: The Lost Levels Medley", "bgm_a33_smb2_medley", "1577000"],
    ["Fortress Boss - Super Mario World", "bgm_a34_new2_touboss", "1566336"],
    ["Super Mario World Medley", "bgm_a35_wld_medley", "1488464"],
    ["Egg Planet", "bgm_a38_glx_eggplanet", "1451760"],
    ["Rosalina in the Observatory / Luma's Theme", "bgm_a39_glx_tenmondainorosetta", "1437888"],
    ["Chill (for 3DS / Wii U)", "bgm_a40_drm_chill_ver2", "1707696"],
    ["Mario Paint Medley", "bgm_a41_mpt_medley", "1333712"],
    ["Luigi's Mansion Series Medley", "bgm_a42_lm_medley", "1463912"],
    ["Ground Theme - New Super Mario Bros. 2", "bgm_a44_new2_chijyou", "1105304"],
    ["Ground Theme - New Super Mario Bros. U", "bgm_a45_newu_chijyou", "568632"],
    ["Pandemonium", "bgm_a47_pty9_minigame", "742480"],
    ["Tough Guy Alert!", "bgm_a48_malrpg3_choitotsuyoiyatsura", "931968"],
    ["The Grand Finale", "bgm_a49_malrpg3_inthefinal", "1131344"],
    ["Egg Planet", "bgm_a54_glx_eggplanet", "1051984"],
    ["Gusty Garden Galaxy", "bgm_a55_glx_windgarden", "1450768"],
    ["Super Mario Galaxy", "bgm_a56_glx_supermariogalaxy", "2134520"],
    ["Sky Station", "bgm_a57_glx2_sorajima", "1049504"],
    ["Bowser's Galaxy Generator", "bgm_a58_glx2_shingingateikoku", "1315624"],
    ["Fated Battle", "bgm_a59_glx2_shukumeinokessen", "1234776"],
    ["Theme of SMG2", "bgm_a60_glx2_themeofsmg2", "1488464"],
    ["On the Hunt - Gloomy Manor Ver. (Instrumental)", "bgm_a62_lm2_urameshiyashiki", "833512"],
    ["Super Bell Hill", "bgm_a63_3dw_field01", "711232"],
    ["The Great Tower Showdown 2", "bgm_a64_3dw_finkoopa02", "1662560"],
    ["Champion Road", "bgm_a65_3dw_milkyway", "1488216"],
    ["Slide", "bgm_a67_sm64_slider", "1050000"],
    ["Ground Theme - Super Mario Bros. 2", "bgm_a68_musa_chijyou", "535152"],
    ["Main Theme - Super Mario 64", "bgm_a69_sm64_maintheme", "1312632"],
    ["Title Theme - Super Mario Maker", "bgm_a70_smm_title", "1440104"],
    ["Ground Theme - Super Mario Bros.", "bgm_a71_smb_chijyou", "1116464"],
    ["Ground Theme - Super Mario World", "bgm_a72_wld_chijyou", "1047024"],
    ["Boss Theme - Super Mario Bros. 2", "bgm_a74_musa_chijyou_hurryup", "334216"],
    ["Break Free (Lead the Way)", "bgm_a75_smo_breakfree", "2193032"],
    ["Underground Moon Caverns", "bgm_a76_smo_finaldungeon", "1043056"],
    ["Steam Gardens", "bgm_a77_smo_forestkingdom", "1423736"],
    ["Jump Up, Super Star!", "bgm_a78_smo_jumpupsuperstar_full", "2985408"],
    ["New Donk City", "bgm_a79_smo_newdonkcity", "1236496"],
    ["Ground Theme (Band Performance) - Super Mario Bros.", "bgm_a80_smo_smbtheme_bandplay", "789864"],
    ["Fossil Falls", "bgm_a81_smo_waterfallkingdom", "1542296"],
    ["Main Theme - Luigi's Mansion", "bgm_a82_lm_theme", "1768456"],
    ["Delfino Plaza", "bgm_a83_sms_dolpiktown", "1826240"],
    ["King Bowser - Super Mario Bros. 3", "bgm_a84_smb3_maoukuppa", "1672976"],
    ["Ground Theme - Super Mario Bros. 3", "bgm_a85_smb3_chijyou", "1939328"],
    ["Fortress Boss - Super Mario Bros. 3", "bgm_a86_smb3_toridenoboss", "1787552"],
    ["The Starship Sails", "bgm_a87_glx2_hoshibunehayuku", "921552"],
    ["Melty Monster", "bgm_a88_glx2_magmamonster", "1020736"],
    ["Battle! - Paper Mario: Color Splash", "bgm_a90_pmc_battle", "1143248"],
    ["Stadium Theme - Mario Tennis: Ultra Smash", "bgm_a91_tnsus_simpletennis", "1305936"],
    ["World Tour", "bgm_a97_gfw_worldtornament", "1959664"],
    ["Title Theme - Mario Party: Island Tour", "bgm_a98_ptyis_maintheme", "411648"],
    ["Rocket Road", "bgm_a99_ptyis_boardbgm2", "1533848"],
    ["Title Theme - Mario vs. Donkey Kong: Tipping Stars", "bgm_aa04_mvdmin_title", "694864"],
    ["Rolling Hills A", "bgm_aa05_mvdmin_rollinghills", "476392"],
    ["Time's Running Out!", "bgm_aa06_malpmm_isogebamaniau", "623704"],
    ["Mixed-Up Scramble", "bgm_aa07_malpmm_toriodedaikonsen", "1100112"],
    ["Attack and Run!", "bgm_aa08_malpmm_attackendrun", "827312"],
    ["Kingdom Stadium: Night", "bgm_aa14_sptss_kingdumstadium_yoru", "1381840"],
    ["Country Field: away team", "bgm_aa15_sptss_countryfield_senkou", "1132600"],
    ["This is Minion Turf!", "bgm_aa16_malr1d_koregabokosukabattle", "924776"],
    ["The King of Pyropuff Peak", "bgm_aa20_skt_dragonboss", "833496"],
    ["Plucky Pass Beginnings", "bgm_aa21_skt_kinopiotaicho_theme", "1072584"],
    ["Ground Theme - Super Mario Bros. 2", "bgm_aa22_musa_chijyou", "1971816"],
    ["Title Theme - Mario Tennis Aces", "bgm_aa23_tnsac_mariotennistheme", "1235272"],
    ["Stadium Theme - Mario Tennis Aces", "bgm_aa24_tnsac_stadiumtheme", "1325296"],
    ["Chill (Brawl)", "bgm_q04_drm_chill", "1571792"],
    ["Mario Tennis / Mario Golf", "bgm_r05_mtg_mariotennis_mariogolf", "1265776"],
    ["Ground Theme - Super Mario Bros. (64)", "bgm_t10_smb_peachjyoujoku", "1058184"],
    ["Ground Theme - Super Mario Bros. (Melee)", "bgm_w01_smb_peachjyou", "1058184"],
    ["Slide", "bgm_w02_sm64_rainbowcruise", "1017016"],
    ["Ground Theme - Super Mario Bros. 3 (Melee)", "bgm_w15_smb3_supermario3", "1259560"],
    ["Fever", "bgm_w20_drm_drmario", "928728"]
];

var MarioKartSeries = [
    ["Mario Kart Series", "mariokart"],
    ["Mario Circuit - Super Mario Kart", "bgm_a20_smk_mariocircuit", "895248"],
    ["Luigi Raceway - Mario Kart 64", "bgm_a21_mk64_luigicircuit", "1430432"],
    ["Waluigi Pinball - Mario Kart DS", "bgm_a22_mkds_waluigipinball", "1025216"],
    ["Rainbow Road - Mario Kart: Double Dash!!", "bgm_a23_mkdd_rainbowroad", "1083232"],
    ["Rainbow Road Medley", "bgm_a30_mkt_rainbowroad_medley", "1447808"],
    ["Rainbow Road - Mario Kart 7", "bgm_a31_mkt7_rainbowroad", "1401168"],
    ["Circuit - Mario Kart 7", "bgm_a36_mkt7_circuit", "1411336"],
    ["Cloudtop Cruise - Mario Kart 8", "bgm_a37_mkt8_skygarden", "1525664"],
    ["Mushroom Gorge - Mario Kart Wii", "bgm_a50_mktw_kinokocanyon", "671552"],
    ["Mario Kart Stadium - Mario Kart 8", "bgm_a51_mkt8_mariokartstadium", "772008"],
    ["Mario Circuit - Mario Kart 8", "bgm_a52_mkt8_mariocircuit", "810928"],
    ["Rainbow Road - Mario Kart 8", "bgm_a53_mkt8_rainbowroad", "890040"],
    ["Excitebike - Mario Kart 8", "bgm_aa17_mkt8d_excitebike", "709000"],
    ["Dragon Driftway", "bgm_aa18_mkt8d_dragonroad", "877392"],
    ["Ice Ice Outpost", "bgm_aa19_mkt8d_tsurutsurutwister", "691160"]
];

var DKSeries = [
    ["Donkey Kong Series", "donkeykong"],
    ["Jungle Level (Brawl)", "bgm_b01_spr_junglelevel_ver2", "1469880"],
    ["The Map Page / Bonus Level", "bgm_b02_spr_mappage_bonuslevel", "1268752"],
    ["Opening - Donkey Kong", "bgm_b03_dk_opening", "1012304"],
    ["Donkey Kong", "bgm_b04_dk_donkeykong", "1256336"],
    ["King K. Rool / Ship Deck 2", "bgm_b05_spr_kingkrool_shipdeck2", "1636536"],
    ["Stickerbush Symphony", "bgm_b06_spr2_togetogetarumeiro", "1424496"],
    ["Battle for Storm Hill", "bgm_b07_jbt_arashigaokanotatakai", "1310168"],
    ["25m BGM", "bgm_b09_dk_25mbgm", "250696"],
    ["Gear Getaway", "bgm_b11_rtn_thrillgearflight", "1648440"],
    ["Jungle Level Jazz Style (for 3DS / Wii U)", "bgm_b12_spr_junglelevel", "1357520"],
    ["Donkey Kong Country Returns (Vocals)", "bgm_b13_rtn_donkeykongreturnes_cv", "2749064"],
    ["Donkey Kong Country Returns", "bgm_b14_rtn_donkeykongreturnes", "1160128"],
    ["Jungle Hijinx", "bgm_b15_rtn_bananajungle", "1617176"],
    ["Mole Patrol", "bgm_b16_rtn_mogryanokoujigenba", "946104"],
    ["Mangrove Cove", "bgm_b17_tfr_mangroves", "2507992"],
    ["Swinger Flinger", "bgm_b18_tfr_theme03", "1778128"],
    ["Jungle Level Tribal Style (for 3DS / Wii U)", "bgm_b19_spr_junglelevel_ethnic", "1625376"],
    ["Donkey Kong / Donkey Kong Jr. Medley", "bgm_b20_dk_medley", "1795488"],
    ["Crocodile Cacophony", "bgm_b21_spr2_crocodilecacophony", "1638520"],
    ["The Map Page / Bonus Level", "bgm_b22_spr_mappage_bonuslevel", "1891728"],
    ["Snakey Chantey", "bgm_b23_spr_shipdeck2", "1496896"],
    ["Gang-Plank Galleon", "bgm_b24_spr_thepirateship", "1932384"],
    ["Funky's Fugue", "bgm_b25_spr_funkykongpage", "927984"],
    ["Ice Cave Chant", "bgm_b26_spr_theicecove", "1374136"],
    ["Boss 2 (DK : Jungle Climber)", "bgm_b27_jcl_btlcommon", "633112"],
    ["Jungle Level (64)", "bgm_t06_spr_kongojungle", "1773416"],
    ["Jungle Level (Melee)", "bgm_w03_spr_junglegarden", "2251808"],
    ["DK Rap", "bgm_w26_dk64_monkyrap", "1462672"]
];

var ZeldaSeries = [
    ["The Legend of Zelda Series", "zelda"],
    ["Title Theme - The Legend of Zelda", "bgm_c01_zld_title", "1327512"],
    ["Overworld Theme -The Legend of Zelda (Brawl)", "bgm_c02_zld_maintheme", "1623872"],
    ["Great Temple / Temple", "bgm_c03_lnk_daishinden_shinden", "954784"],
    ["Dark World (Brawl)", "bgm_c04_tri_yaminosekai", "1068600"],
    ["Hidden Mountain & Forest", "bgm_c05_tri_uranoyamatomori", "861040"],
    ["Tal Tal Heights", "bgm_c07_yms_tarutarukougen", "949808"],
    ["Hyrule Field Theme", "bgm_c08_tno_hyrulemaintheme", "1495672"],
    ["Ocarina of Time Medley", "bgm_c09_tno_medley", "1397696"],
    ["Song of Storms", "bgm_c10_tno_arashinouta", "1534840"],
    ["Village of the Blue Maiden", "bgm_c12_4sw_aonomikonomura", "789600"],
    ["Termina Field", "bgm_c14_mnk_terminaheigen", "1050496"],
    ["Dragon Roost Island", "bgm_c15_kzt_ryuunoshima", "1355040"],
    ["Main Theme - The Legend of Zelda: Twilight Princess", "bgm_c17_tpr_maintheme", "1284360"],
    ["The Hidden Village", "bgm_c18_tpr_wasureraretasato", "804992"],
    ["Overworld / Underworld - The Legend of Zelda (for 3DS / Â»", "bgm_c20_zld_maintheme_chika", "1614216"],
    ["Dark World (for 3DS / Wii U)", "bgm_c21_tri_uranochijyou_uradungeon", "1538824"],
    ["Gerudo Valley", "bgm_c22_tno_gerudonotani", "1487472"],
    ["Full Steam Ahead", "bgm_c23_dnk_trainfield2", "1557408"],
    ["Ballad of the Goddess", "bgm_c24_sws_megaminouta_ghirahim", "1352328"],
    ["Saria's Song / Middle Boss Battle", "bgm_c25_tno_sarianouta", "1470112"],
    ["The Great Sea / Menu Select", "bgm_c26_kzt_oounabara_menuselect", "1387792"],
    ["Gerudo Valley", "bgm_c28_tno_gerudonotani", "1092904"],
    ["Ballad of the Goddess", "bgm_c29_sws_megaminouta", "1136056"],
    ["Hyrule Main Theme", "bgm_c30_tri2_hyrulemaintheme", "1113752"],
    ["Lorule Main Theme", "bgm_c31_tri2_lorulemaintheme", "903944"],
    ["Yuga Battle (Hyrule Castle)", "bgm_c32_tri2_yuganotheme", "1012552"],
    ["Overworld Theme - The Legend of Zelda", "bgm_c33_zld_chijiyou", "480840"],
    ["Overworld Theme - The Legend of Zelda: A Link to the Past", "bgm_c34_tri_omotenochijiyou", "528472"],
    ["Hyrule Field Theme", "bgm_c35_tno_hyrulemaintheme", "1911320"],
    ["The Legend of Zelda Medley", "bgm_c36_zld_medley", "1489208"],
    ["Calamity Ganon - Second Form", "bgm_c37_bow_ganon_latter", "1373888"],
    ["Hyrule Castle (Outside)", "bgm_c38_bow_hyrulejyou_outside", "1927936"],
    ["Kass's Theme", "bgm_c39_bow_kasstheme", "1222112"],
    ["Main Theme (The Legend of Zelda: Breath of the Wild)", "bgm_c40_bow_maintheme", "1548728"],
    ["Nintendo Switch Presentation 2017 Trailer BGM", "bgm_c41_zds_3rdtrailertheme", "1844608"],
    ["Midna's Lament", "bgm_c42_tpr_kizudarakenomidna", "2013000"],
    ["Main Theme - The Legend of Zelda: Tri Force Heroes", "bgm_c43_tri3_maintheme", "1807144"],
    ["Molgera", "bgm_c44_kzt_morudogeira", "1679176"],
    ["Death Mountain ", "bgm_c45_zld_deathmountain", "1922712"],
    ["Termina Field ", "bgm_c46_mnk_terminaheigen", "1996120"],
    ["Woodlands - The Legend of Zelda: Tri Force Heroes", "bgm_c47_tri3_moriarea", "1008584"],
    ["Saria's Theme", "bgm_c48_tno_sarianouta", "414624"],
    ["Overworld Theme - The Legend of Zelda (64)", "bgm_t11_zld_hyrulejiyou", "561440"],
    ["Temple Theme", "bgm_w24_lnk_shinden", "1240464"],
    ["Overworld Theme - The Legend of Zelda (Melee)", "bgm_w36_zld_greatbay", "1319576"]
];

var MetroidSeries = [
    ["Metroid Series", "metroid"],
    ["Brinstar (Brawl)", "bgm_d01_mr_maintheme", "1678432"],
    ["Norfair", "bgm_d02_mr_norfair", "1817808"],
    ["Ending - Metroid", "bgm_d03_mr_ending", "1688104"],
    ["Vs. Ridley (Brawl)", "bgm_d04_smr_vsridley", "849616"],
    ["Theme of Samus Aran, Space Warrior", "bgm_d05_smr_samusarannotheme", "1281400"],
    ["Sector 1", "bgm_d06_fsn_sector1", "1390504"],
    ["Opening / Menu - Metroid Prime", "bgm_d07_prm_opnening_menu", "2526096"],
    ["Vs. Meta Ridley", "bgm_d09_prm_vsmetaridley", "813408"],
    ["Multiplayer - Metroid Prime 2: Echoes", "bgm_d10_prm2_multiplay", "2086640"],
    ["Title Theme - Metroid", "bgm_d11_mr_title", "1379592"],
    ["Escape", "bgm_d12_mr_dasshutu", "1774408"],
    ["Psycho Bits", "bgm_d13_pht_psychobits", "886320"],
    ["The Burning Lava Fish", "bgm_d14_otm_yougangyobattle", "1105568"],
    ["Lockdown Battle Theme", "bgm_d15_otm_hanyoutojikomebattle", "751176"],
    ["Nemesis Ridley", "bgm_d16_otm_ridleybattle", "1418280"],
    ["Vs. Parasite Queen", "bgm_d17_prm_vsparasitequeen", "1731024"],
    ["Vs. Ridley", "bgm_d18_smr_vsridley", "1863688"],
    ["Brinstar Depths", "bgm_d19_mr_brinstarshinbu", "1710920"],
    ["Main Theme - Metroid Prime: Federation Force", "bgm_d20_pff_splashscreen", "1446056"],
    ["End Results - Metroid: Samus Returns", "bgm_d21_srt_result", "1026440"],
    ["Magmoor Caverns - Metroid: Samus Returns", "bgm_d22_srt_areabgmnettai", "1637016"],
    ["Boss Battle 4 - Metroid: Samus Returns", "bgm_d23_srt_zetametroid", "1126136"],
    ["Brinstar (64)", "bgm_t13_mr_wakuseizebes", "819856"],
    ["Brinstar Depths (Melee)", "bgm_w04_mr_brinstarshinbu", "1683144"],
    ["Brinstar (Melee)", "bgm_w27_mr_brinstar", "1248896"]
];

var YoshiSeries = [
    ["Yoshi Series", "yoshi"],
    ["Yoshi's Tale", "bgm_e01_str_ending", "2155336"],
    ["Obstacle Course - Yoshi's Island", "bgm_e02_ild_athletic", "1594608"],
    ["Yoshi's Island (Brawl)", "bgm_e03_ild_yoshiisland", "1772672"],
    ["Flower Field", "bgm_e05_cty_ohanabatake", "819608"],
    ["Wildlands", "bgm_e06_ilds_kouyanotheme", "1215664"],
    ["Yoshi's Island (for 3DS / Wii U)", "bgm_e07_ild_stage1_1", "1488464"],
    ["Main Theme - Yoshi's Woolly World", "bgm_e08_kny_keitonoyoshi", "1361240"],
    ["Main Theme - Yoshi's New Island", "bgm_e09_nild_maintheme", "1224592"],
    ["Bandit Valley", "bgm_e10_nild_gypsy", "1240464"],
    ["Main Theme - Yoshi's Woolly World", "bgm_e11_wol_yoshiwoolworld", "997672"],
    ["Main Theme - Yoshi's New Island", "bgm_e12_nild_maintheme", "1949248"],
    ["Yoshi's Story (64)", "bgm_t08_sb_yoshiisland", "1369176"],
    ["Athletic Theme - Super Mario World", "bgm_w05_wld_yostertou", "1069096"],
    ["Yoshi's Story (Melee)", "bgm_w37_str_yoshistory", "1400920"]
];

var KirbySeries = [
    ["Kirby Series", "kirby"],
    ["The Legendary Air Ride Machine", "bgm_f01_air_airridemachine", "1172512"],
    ["King Dedede's Theme (Brawl)", "bgm_f02_kby_dededeounotheme", "1223120"],
    ["Boss Theme Medley - Kirby Series", "bgm_f03_kby_bossthememedley", "1385560"],
    ["Butter Building (Brawl)", "bgm_f04_yim_butterbuilding", "1144736"],
    ["Gourmet Race (Brawl)", "bgm_f05_sdx_gekitotsugourmetrace", "1323312"],
    ["Meta Knight's Revenge", "bgm_f06_sdx_metaknightnogyakushuu", "1500632"],
    ["Vs. Marx", "bgm_f07_sdx_vsmarx", "1345864"],
    ["02 Battle", "bgm_f08_kby64_zerotwosen", "1376120"],
    ["Frozen Hillside", "bgm_f11_air_colda", "1043304"],
    ["Squeak Squad Theme", "bgm_f12_sdd_dorochedannotheme", "1287848"],
    ["Green Greens (for 3DS / Wii U)", "bgm_f13_kby_greengreens_ver2", "1586192"],
    ["Butter Building (for 3DS / Wii U)", "bgm_f19_yim_butterbuilding", "1517976"],
    ["King Dedede's Theme (for 3DS / Wii U)", "bgm_f20_sdx_dedededaiounotheme", "1457976"],
    ["The Great Cave Offensive", "bgm_f21_sdx_doukutsudaisakusen", "1554448"],
    ["Forest / Nature Area", "bgm_f22_knd_morishizenarea", "1488464"],
    ["Celestial Valley", "bgm_f23_air_vallerion", "754632"],
    ["The Adventure Begins", "bgm_f24_kbyw_boukennohajimari", "1190136"],
    ["Through the Forest", "bgm_f25_kbyw_moriwonukete", "480592"],
    ["Floral Fields", "bgm_f26_tdx_fuyuutairikunohanabatake", "990248"],
    ["Forest Stage", "bgm_f27_air_moristage", "584256"],
    ["Planet Popstar", "bgm_f28_kby64_popstar", "1070832"],
    ["The World to Win", "bgm_f29_tdx_tamashiinotatakai", "1220392"],
    ["Ice Cream Island", "bgm_f30_yim_icecreamisland", "1448784"],
    ["City Trial", "bgm_f31_air_citytrial", "1741920"],
    ["Staff Credits - Kirby's Dream Land", "bgm_f32_kby_staffroll", "1453744"],
    ["Sky Tower", "bgm_f33_wii_skytower", "661384"],
    ["Dangerous Dinner", "bgm_f34_wii_dagerousdiner", "478112"],
    ["CROWNED", "bgm_f35_wii_crowned", "1839880"],
    ["Fatal Blooms in Moonlight", "bgm_f36_tdx_kyoukasuigetsu", "1575512"],
    ["CROWNED: Ver. 2", "bgm_f37_ddz_crowned_ver2", "1434400"],
    ["Venturing Into the Mechanized World", "bgm_f38_rbp_kikainosekainodaibouken", "761592"],
    ["Pink Ball Activate!", "bgm_f39_rbp_roboboarmor", "1098360"],
    ["Kirby Battle Royale: Main Theme", "bgm_f40_bdx_maintheme", "1124152"],
    ["A Battle of Friends and Bonds 2", "bgm_f41_sta_tomotokizunanotatakai2", "1202040"],
    ["Kirby Retro Medley", "bgm_f42_kby_gb_medley", "2200968"],
    ["Gourmet Race (64)", "bgm_t09_sdx_pupupuland", "845896"],
    ["Gourmet Race (Melee)", "bgm_w06_sdx_yumenoizumi", "2016952"],
    ["Green Greens (Melee)", "bgm_w07_kby_greengreens", "1169288"]
];

var StarFoxSeries = [
    ["Star Fox Series", "starfox"],
    ["Main Theme - Star Fox", "bgm_g01_sfx_maintheme", "1475320"],
    ["Corneria - Star Fox", "bgm_g02_sfx_corneria", "1092656"],
    ["Main Theme - Star Fox 64 (Brawl)", "bgm_g03_sfx64_maintheme", "992712"],
    ["Area 6 - Star Fox 64", "bgm_g04_sfx64_area6", "808200"],
    ["Star Wolf (Brawl)", "bgm_g05_sfx64_starwolf", "1080752"],
    ["Space Battleground", "bgm_g07_ast_sentoutyuuiki", "818616"],
    ["Break: Through the Ice", "bgm_g08_ast_hyougentoppaseyo", "824832"],
    ["Star Wolf", "bgm_g09_ast_starwolf", "1320320"],
    ["Space Armada", "bgm_g10_sfx_spacearmada", "1226328"],
    ["Area 6 Ver. 2 - Star Fox 64", "bgm_g11_sfx64_area6ver2", "1235504"],
    ["Star Wolf's Theme / Sector Z (for 3DS / Wii U)", "bgm_g12_sfx64_starwolf_sectorz", "1495672"],
    ["Theme from Area 6 / Missile Slipstream", "bgm_g13_sfx64_cmd_area6_missle", "1342408"],
    ["Return to Corneria - Star Fox Zero", "bgm_g14_sfz_stgcorneria2", "1499128"],
    ["Corneria - Star Fox Zero", "bgm_g15_sfz_stgdefence", "999904"],
    ["Sector O", "bgm_g16_sfz_stgspace4", "1041816"],
    ["Main Theme - Star Fox 64 (64)", "bgm_t14_sfx64_sectorz", "1092408"],
    ["Star Fox Medley", "bgm_w08_sfx_cornelia", "931952"],
    ["Main Theme - Star Fox 64 (Melee)", "bgm_w28_sfx_wakuseivenom", "1370416"]
];

var PkmnSeries = [
    ["Pokemon Series", "pkmn"],
    ["Main Theme - Pokemon Red & Blue (Brawl)", "bgm_h01_pm_maintheme", "1312136"],
    ["Pokemon Center - Pokemon Red / Pokemon Blue", "bgm_h02_pm_pokemoncenter", "1249640"],
    ["Road to Viridian City - Pokemon Red / Pokemon Blue", "bgm_h03_pm_tokiwahenomichi_nibicity", "1244944"],
    ["Pokemon Gym / Evolution - Pokemon Red / Pokemon Blue", "bgm_h04_pm_pokemongym_shinka", "1434416"],
    ["Battle! (Wild Pokemon) - Pokemon Ruby / Pokemon Sapphire", "bgm_h05_rs_sentou_yaseipokemon", "1140536"],
    ["Victory Road - Pokemon Ruby / Pokemon Sapphire", "bgm_h06_rs_championroad", "1531616"],
    ["Battle! (Wild Pokemon) - Pokemon Diamond / Pokemon Pearl", "bgm_h07_dp_sentou_yaseipokemon", "1147480"],
    ["Battle! (Dialga/Palkia) / Spear Pillar", "bgm_h08_dp_dialgapalkia_yarinohashira", "2291256"],
    ["Battle! (Team Galactic)", "bgm_h09_dp_gingadan", "965680"],
    ["Route 209 - Pokemon Diamond / Pokemon Pearl", "bgm_h10_dp_209bandouro", "1086208"],
    ["N's Castle", "bgm_h11_bw_n_medley", "1514504"],
    ["Battle! (Reshiram / Zekrom)", "bgm_h12_bw_sentou_zekrom_reshiram", "1453264"],
    ["Battle! (Trainer Battle) - Pokemon X / Pokemon Y", "bgm_h13_xy_sentou_trainer", "1471848"],
    ["Lumiose City", "bgm_h14_xy_miarecity", "649480"],
    ["Battle! (Champion) / Champion Cynthia", "bgm_h16_dp_sentou_champion", "1546496"],
    ["Route 10 - Pokemon Black / Pokemon White", "bgm_h17_bw_10bandouro", "1486728"],
    ["Route 23 -  Pokemon Black 2 / Pokemon White 2", "bgm_h18_b2w2_23bandouro", "1597832"],
    ["Battle! (Team Flare)", "bgm_h19_xy_vs_flare", "1336936"],
    ["Battle! (Wild Pokemon) - Pokemon X / Pokemon Y", "bgm_h20_xy_sentou_yaseipokemon", "578816"],
    ["Victory Road - Pokemon X / Pokemon Y", "bgm_h21_xy_championroad", "755624"],
    ["Battle! (Champion) - Pokemon X / Pokemon Y", "bgm_h22_xy_sentou_champion", "1127128"],
    ["Battle! (Wild Pokemon) - Pokemon Sun / Pokemon Moon", "bgm_h23_sm_sentou_yaseipokemon", "1535352"],
    ["Battle! (Steven)", "bgm_h24_oras_kessen_daigo", "1533352"],
    ["Battle! (Island Kahuna)", "bgm_h25_sm_sentou_shimakingshimaqueen", "1599336"],
    ["Battle! (Gladion)", "bgm_h26_sm_sentou_gladion", "1962640"],
    ["Battle! (Elite Four) / Battle! (Solgaleo / Lunala)", "bgm_h27_sm_sentou_shitennou_solgaleo_lunala", "1880336"],
    ["Battle! (Trainer) - Pokemon Sun / Pokemon Moon", "bgm_h28_sm_sentou_trainer", "1605520"],
    ["Battle! (Lorekeeper Zinnia)", "bgm_h29_oras_sentou_higana", "1865176"],
    ["The Battle at the Summit!", "bgm_h30_sm_choujoukessen", "1968344"],
    ["Main Theme - Pokemon Red & Blue (64)", "bgm_t15_pm_yamabukicity", "777696"],
    ["Main Theme - Pokemon Red & Blue (Melee)", "bgm_w09_pm_pokemonstadium", "1309904"],
    ["Pokemon Red / Pokemon Blue Medley", "bgm_w10_pm_pokemonakuukan", "1724312"],
    ["Pokemon Gold / Pokemon Silver Medley", "bgm_w16_kg_pekemonstadiumkingin", "1208240"]
];

var FZeroSeries = [
    ["F-Zero Series", "fzero"],
    ["Mute City (Brawl)", "bgm_i01_fzr_mutecity", "1435640"],
    ["White Land", "bgm_i02_fzr_whiteland", "1803176"],
    ["Fire Field", "bgm_i03_fzr_firefield", "853832"],
    ["Car Select", "bgm_i04_fzx_carselect", "250200"],
    ["Dream Chaser", "bgm_i05_fzx_dreamchaser", "842672"],
    ["Devil's Call in Your Heart", "bgm_i06_fzx_devilscallinyourheart", "533680"],
    ["Climb Up! And Get the Last Chance!", "bgm_i07_fzx_climbup_andgetthelastchance", "622712"],
    ["Brain Cleaner", "bgm_i08_gx_braincleaner", "1267248"],
    ["Shotgun Kiss", "bgm_i09_gx_shotgunkiss", "1598328"],
    ["Planet Colors", "bgm_i10_gx_planetcolors", "1582704"],
    ["Mute City (for 3DS / Wii U)", "bgm_i11_fzr_mutecity", "1400920"],
    ["Mute City", "bgm_i12_fzr_sfc_mutecity", "865240"],
    ["Red Canyon", "bgm_i14_fzr_redcanyon", "865488"],
    ["F-ZERO Medley", "bgm_i15_fzr_medley", "1774160"],
    ["Sand Ocean", "bgm_i16_fzr_sandocean", "1562864"],
    ["Big Blue", "bgm_i17_fzr_bigblue", "795552"],
    ["Death Wind", "bgm_i18_fzr_deathwind", "858792"],
    ["Fire Field", "bgm_i19_fzr_firefield", "1091912"],
    ["Port Town", "bgm_i20_fzr_porttown", "813160"],
    ["Sand Ocean", "bgm_i21_fzr_sandocean", "781168"],
    ["Silence", "bgm_i22_fzr_sandocean", "534160"],
    ["White Land", "bgm_i23_fzr_whiteland1", "871688"],
    ["White Land II", "bgm_i24_fzr_whiteland2", "625672"],
    ["Big Blue", "bgm_i25_fzr_bigblue", "1695544"],
    ["Big Blue (Melee)", "bgm_w11_fzr_bigblue", "1446800"],
    ["Mute City (Melee)", "bgm_w29_fzr_mutecity", "1283120"]
];

var EarthboundSeries = [
    ["Earthbound Series", "mother"],
    ["Snowman", "bgm_k01_mtr_snowman", "1622136"],
    ["Humoresque of a Little Dog", "bgm_k05_mtr_humoresqueofalittledog", "1203776"],
    ["Porky's Theme", "bgm_k07_mtr_porkynotheme", "1314120"],
    ["Mother 3 Love Theme", "bgm_k08_mtr3_ainotheme", "1371656"],
    ["Unfounded Revenge / Smashing Song of Praise", "bgm_k09_mtr3_revenge_bukkowashisanka", "1414576"],
    ["You Call This a Utopia?!", "bgm_k10_mtr3_utopiadesho", "1084472"],
    ["Magicant (for 3DS / Wii U)", "bgm_k11_mtr_magicant_eightmelodies", "1657864"],
    ["Smiles and Tears", "bgm_k12_mtr2_smileandtears", "1526904"],
    ["Onett Theme / Winters Theme", "bgm_k13_mtr2_onettnotheme", "1517480"],
    ["Magicant", "bgm_k14_mtr_magicant", "1786560"],
    ["Fourside", "bgm_k15_mtr2_fourside", "1728528"],
    ["Bein' Friends", "bgm_w12_mtr_onet", "1400672"],
    ["Pollyanna (I Believe in You)", "bgm_w19_mtr_pollyanna", "1321808"],
    ["Fourside (Melee)", "bgm_w32_mtr2_fourside", "1399432"]
];

var FireEmblemSeries = [
    ["Fire Emblem Series", "fe"],
    ["Fire Emblem Theme", "bgm_j02_fem_theme", "2164512"],
    ["Shadow Dragon Medley", "bgm_j03_fem_aankokuryuumedley", "1725568"],
    ["With Mila's Divine Protection (Celica Map 1)", "bgm_j04_gdn_miranokagototomoni", "1571808"],
    ["Preparing to Advance", "bgm_j06_snk_shingekijunbi", "1517232"],
    ["Winning Road - Roy's Hope", "bgm_j07_fnk_winningroad_roynokibou", "1349600"],
    ["Attack - Fire Emblem", "bgm_j08_rnk_kougeki", "1451264"],
    ["Against the Dark Knight", "bgm_j09_sek_againstthedarkknight", "627920"],
    ["Crimean Army Sortie", "bgm_j10_sek_crimeaarmysortie", "1561640"],
    ["Power-Hungry Fool", "bgm_j11_sek_powerhungryfool", "1419536"],
    ["Victory is Near", "bgm_j12_sek_victoryisnear", "781912"],
    ["Eternal Bond", "bgm_j13_anm_ikenotheme", "1701248"],
    ["Id (Purpose)", "bgm_j14_ksi_i_i", "1561376"],
    ["Battle 1 - Fire Emblem Gaiden", "bgm_j15_gdn_tatakai1", "1476808"],
    ["Meeting Theme Series Medley", "bgm_j16_mnn_deainotheme", "1542032"],
    ["Fire Emblem: Mystery of the Emblem Medley", "bgm_j17_mnn_singeki", "1516240"],
    ["Coliseum Series Medley", "bgm_j18_ssk_tougijyou", "1506072"],
    ["The Devoted", "bgm_j20_anm_tyuugitsukusan", "545320"],
    ["Time of Action", "bgm_j21_anm_kekkinotoki", "559208"],
    ["Duty (Ablaze)", "bgm_j22_ksi_shimei_honoo", "1614696"],
    ["Conquest (Ablaze)", "bgm_j23_ksi_ensei_honoo", "1575016"],
    ["Lost in Thoughts All Alone (for 3DS / Wii U)", "bgm_j24_if_hitoriomou", "1847072"],
    ["Lost in Thoughts All Alone (JP)", "bgm_j25_if_hitoriomou", "1976528"],
    ["Lost in Thoughts All Alone (EN)", "bgm_j26_if_lostinthoughtsallalone", "1976544"],
    ["Gear Up For?", "bgm_j27_hr_menu", "1745888"],
    ["Lost in Thoughts All Alone", "bgm_j28_if_hitoriomou", "1953464"],
    ["Prelude (Ablaze)", "bgm_j29_ksi_jomaku_honoo", "1675952"],
    ["Edge of Adversity", "bgm_j30_ssk_shituinohate", "2113176"],
    ["Destiny (Ablaze)", "bgm_j31_ksi_shukumei_honoo", "1862944"],
    ["Those Who Challenge Gods", "bgm_j32_eco_btl_a2", "780920"],
    ["The Scions' Dance in Purgatory", "bgm_j33_eco_btl_berkut2", "1073560"],
    ["March to Deliverance", "bgm_j34_eco_mapb_a2", "1422000"],
    ["Lord of a Dead Empire", "bgm_j35_eco_mapb_rudlf", "1857488"],
    ["Under This Banner", "bgm_j36_mnn_konohatanomotoni", "1827248"],
    ["Advance", "bgm_j37_mnn_singeki", "1571296"],
    ["Beyond Distant Skies - Roy's Departure", "bgm_j38_fnk_anosoranomukouni_roynotabidachi", "1633328"],
    ["Id (Purpose)", "bgm_j39_ksi_i_i", "2399616"],
    ["Fire Emblem Theme (Heroic Origins)", "bgm_j40_hr_menutitle", "1787056"],
    ["Code Name: FE", "bgm_r95_stm_sodename_fe", "1041320"],
    ["Lords-A Chance Encounter", "bgm_r96_stm_lords_kaikou", "1672480"],
    ["Lords-Showdown", "bgm_r97_stm_lords_kessen", "1432912"],
    ["Story 5 Meeting", "bgm_w17_fem_fireemblem", "1429688"],
    ["Fire Emblem: Three Houses Main Theme (JP)", "bgm_j41a_fsg_maintheme_jp", "1236864"],
    ["Fire Emblem: Three Houses Main Theme", "bgm_j41b_fsg_maintheme_en", "1236864"],
    ["Fódlan Winds", "bgm_j42_fsg_fodlanogyoufu", "1360008"],
    ["The Edge of Dawn", "bgm_j43a_fsg_hraesvelgrnoshoujo_fuukasetsugetsu", "2497736"],
    ["The Edge of Dawn (Seasons of Warfare)", "bgm_j43b_fsg_theedgeofdawn_seasonsofwarfare", "2497736"],
    ["Tearing Through Heaven", "bgm_j44_fsg_tensakuryuusei", "1420656"],
    ["Chasing Daybreak", "bgm_j45_fsg_yabounochihei", "1217040"],
    ["Blue Skies and a Battle", "bgm_j46_fsg_jujishitachinosoukyuu", "1476448"],
    ["Between Heaven and Earth", "bgm_j47_fsg_tentochinokyoukai", "1476448"],
    ["Apex of the World", "bgm_j48_fsg_konosekainoitadakide", "2268568"],
    ["Paths That Will Never Cross", "bgm_j49_fsg_majiwaranumichi", "570256"],
];

var GameAndWatchSeries = [
    ["Game & Watch Series", "gandw"],
    ["Flat Zone", "bgm_w14_gw_flatzone", "1326024"],
    ["Flat Zone 2", "bgm_r04_gw_flatzone2", "1525664"]
];

var KidIcarusSeries = [
    ["Kid Icarus Series", "kid"],
    ["Underworld", "bgm_p01_pnk_meifukai", "1446056"],
    ["Title Theme - Kid Icarus", "bgm_p02_pnk_title", "1038840"],
    ["Overworld", "bgm_p03_pnk_chijyoukai", "1122168"],
    ["Kid Icarus Retro Medley", "bgm_p04_pnk_genkyokumedley", "1572288"],
    ["Wrath of the Reset Bomb", "bgm_p05_shs_syokikabakudannokyoufu", "1666296"],
    ["In the Space-Pirate Ship", "bgm_p06_shs_seizokusen", "1593368"],
    ["Boss Fight 1 - Kid Icarus: Uprising", "bgm_p07_shs_bosssen1", "1177472"],
    ["Dark Pit's Theme", "bgm_p09_shs_blackpitnotheme", "1313392"],
    ["Lightning Chariot Base", "bgm_p11_shs_ginganoseiiki", "1651648"],
    ["Destroyed Skyworld", "bgm_p12_shs_houkaiengeland", "1527648"],
    ["Magnus's Theme", "bgm_p13_shs_magnanotheme", "1658840"],
    ["Hades's Infernal Theme", "bgm_p15_shs_hadesnotheme", "881360"],
    ["Thunder Cloud Temple", "bgm_p16_shs_raiunnoteien", "1627344"]
];

var WarioWareSeries = [
    ["WarioWare Series", "ww"],
    ["WarioWare, Inc.", "bgm_m01_miw_madeinwario", "1231784"],
    ["WarioWare, Inc. Medley", "bgm_m02_miw_medley", "1889728"],
    ["Mona Pizza's Song (JP)", "bgm_m03_mmw_kochiramonapizza", "1418048"],
    ["Mona Pizza's Song", "bgm_m04_mmw_monapizzassong", "1421504"],
    ["Mike's Song (JP)", "bgm_m05_smw_mikegasukisuki", "1801192"],
    ["Mike's Song", "bgm_m06_smw_mikessong", "1823512"],
    ["Ashley's Song (JP)", "bgm_m07_smw_ashreynotheme", "1730512"],
    ["Ashley's Song", "bgm_m08_smw_ashreyssong", "1730264"],
    ["Ashley's Song (JP) (for 3DS / Wii U)", "bgm_m19_smw_ashreynotheme", "1309408"],
    ["Ruins - Wario Land: Shake It!", "bgm_m20_wls_1_1_1_iseki", "959480"],
    ["Gamer (Mom's in the room)", "bgm_m21b_gaw_gamer_mom", "401728"],
    ["Gamer", "bgm_m21a_gaw_gamer_normal", "62464"]
];

var PikminSeries = [
    ["Pikmin Series", "pikmin"],
    ["World Map - Pikmin 2", "bgm_l01_pik2_worldmap", "1064632"],
    ["Forest of Hope", "bgm_l02_pik_kibounomori", "2099288"],
    ["Environmental Noises", "bgm_l03_pik_kankyouon", "1560632"],
    ["Main Theme - Pikmin", "bgm_l06_pik_maintheme", "768768"],
    ["Stage Clear / Title Theme - Pikmin", "bgm_l07_pik_clear_title", "1265760"],
    ["Stage Select - Pikmin 2", "bgm_l09_pik2_stageselect", "1494664"],
    ["Mission Mode - Pikmin 3", "bgm_l10_pik3_missionmode", "1414312"],
    ["Garden of Hope", "bgm_l11_pik3_saikainohanazono", "1481536"],
    ["Garden of Hope", "bgm_l12_pik3_saikainohanazono", "1693328"],
    ["Over Wintry Mountains", "bgm_l13_hpk_tokusyucourse4omote", "787632"],
    ["The Keeper of the Lake", "bgm_l14_hpk_boss2", "1212936"],
    ["Flashes of Fear", "bgm_l15_hpk_boss4", "881608"],
    ["Fragment of Hope", "bgm_l16_hpk_boss9later", "1073312"],
    ["Main Theme - Pikmin", "bgm_l17_pik_maintheme", "1712160"]
];

var AnimalCrossingSeries = [
    ["Animal Crossing Series", "ac"],
    ["Title Theme - Animal Crossing", "bgm_n21_dmp_title", "2024888"]
    ["Title Theme - Animal Crossing: Wild World (Brawl)", "bgm_n01_dnm_title", "792824"],
    ["Go K.K. Rider!", "bgm_n02_dnm_yuke_kekerider", "1285352"],
    ["2:00 a.m. - Animal Crossing: Wild World", "bgm_n03_dnm_200am", "1572784"],
    ["The Roost - Animal Crossing: Wild World", "bgm_n05_oid_junkissa_hatonosu", "1218656"],
    ["Town Hall and Tom Nook's Store - Animal Crossing: Wild World", "bgm_n06_oid_yakubatotanukichi", "1137312"],
    ["K.K. Cruisin'", "bgm_n07_dnm_kk_urban", "1725800"],
    ["K.K. Western", "bgm_n08_dnm_kk_western", "1626848"],
    ["K.K. Gumbo", "bgm_n09_dnm_kk_neworleans", "1630816"],
    ["Rockin' K.K.", "bgm_n10_dnm_kk_rocknroll", "1339664"],
    ["DJ K.K.", "bgm_n11_dnm_kk_eurobeat", "1661320"],
    ["K.K. Condor", "bgm_n12_dnm_kk_perunouta", "1181440"],
    ["Tortimer Island Medley", "bgm_n13_tbd_kotobukiland_medley", "1639264"],
    ["Kapp'n's Song", "bgm_n14_tbd_kappeinouta", "1525416"],
    ["Plaza / Title Theme (Animal Crossing: City Folk)", "bgm_n15_mhi_town_main", "1527400"],
    ["Outdoors at 7 p.m. (Sunny) / Main Street", "bgm_n16_tbd_feild19ji_hare", "1271960"],
    ["Tour - Animal Crossing: New Leaf", "bgm_n17_tbd_tour", "1582704"],
    ["Bubblegum K.K.", "bgm_n18_tbd_kekeidol", "1442584"],
    ["Title Theme - Animal Crossing: Happy Home Designer", "bgm_n19_hhd_title", "1827976"],
    ["Title Theme - Animal Crossing: Wild World", "bgm_n20_dnm_title", "1939328"],
    ["House Preview", "bgm_n24_hhd_kanseidemo", "835728"]
];

var WiiFitSeries = [
    ["Wii Fit Series", "wiifit"],
    ["Super Hoop", "bgm_r28_wft_hoopdance", "1333464"],
    ["Wii Fit Plus Medley", "bgm_r29_wftp_athleticmii", "1311640"],
    ["Skateboard Arena (Free Mode)", "bgm_r30_wftp_skebo_freemode", "1400192"],
    ["Rhythm Boxing", "bgm_r44_wft_rhythmboxing", "2229488"],
    ["Mischievous Mole-Way", "bgm_r45_wftp_segwaychallange_tyuukyuu", "585016"],
    ["Core Luge", "bgm_r46_wftu_luge", "1140024"],
    ["Training Menu - Wii Fit U", "bgm_r73_wftu_trainingmenu", "1722824"],
    ["Main Menu - Wii Fit", "bgm_r82_wft_mainmenu", "1313376"],
    ["Advanced Step", "bgm_r83_wft_fumidaidance", "2616616"],
    ["Yoga", "bgm_r84_wft_yoga", "1297504"]
];

var PunchOutSeries = [
    ["Punch-Out!! Series", "punchout"],
    ["Minor Circuit", "bgm_q21_mpo_shiaityuu", "1517232"],
    ["Minor Circuit", "bgm_r21_wpo_minorcircuit", "1079264"],
    ["Title Theme - Punch-Out!! (Wii)", "bgm_r53_po_splashscreen", "1675456"],
    ["World Circuit Theme", "bgm_r54_po_worldcircuitfight", "792840"]
];

var XenobladeSeries = [
    ["Xenoblade Chronicles Series", "xenoblade"],
    ["Gaur Plain", "bgm_r23_xbd_gaurheigen", "1627592"],
    ["Gaur Plain (Night)", "bgm_r57_xbd_gaurheigen_yoru", "1299504"],
    ["You Will Know Our Names", "bgm_r24_xbd_nawokansurumonotachi", "1728048"],
    ["Mechanical Rhythm", "bgm_r25_xbd_kinoritsudou", "2073000"],
    ["Xenoblade Chronicles Medley", "bgm_r36_xbd_arrangemedley", "1544264"],
    ["Engage the Enemy", "bgm_r55_xbd_tekitonotaiji", "1800448"],
    ["Time to Fight! - Xenoblade Chronicles", "bgm_r56_xbd_sentou", "1842360"],
    ["An Obstacle in Our Path - Xenoblade Chronicles", "bgm_r58_xbd_yukutewohabamumono", "1411352"],
    ["Battle!! - Xenoblade Chronicles 2", "bgm_rr09_xbd2_sentou", "2478232"],
    ["Still, Move Forward!", "bgm_rr10_xbd2_soredemomaeesusume", "2431624"],
    ["Those Who Stand Against Our Path - Xenoblade Chronicles 2", "bgm_rr11_xbd2_yukutewohabamumonotachi", "2491888"]
];

var SplatoonSeries = [
    ["Splatoon Series", "splat"],
    ["Splattack!", "bgm_sp01_sp_splattack", "2394904"],
    ["Ink or Sink", "bgm_sp02_sp_inkorsink", "1563608"],
    ["Kraken Up", "bgm_sp04_sp_krakenup", "1464904"],
    ["Metalopod", "bgm_sp05_sp_metalopod", "1651400"],
    ["Now or Never! - Splatoon", "bgm_sp06_sp_nowornever", "762816"],
    ["Ink Me Up", "bgm_sp07_sp_kimiironisomete", "1531632"],
    ["Now or Never! (Splatfest Version) - Splatoon", "bgm_sp08_sp_imanuraneba", "760584"],
    ["Calamari Inkantation", "bgm_sp09_sp_shiokarabushi", "1031400"],
    ["Split & Splat", "bgm_sp10_sp_quickstart", "1671488"],
    ["Octoweaponry", "bgm_sp11_sp_octoweaponry", "2330920"],
    ["I Am Octavio", "bgm_sp12_sp_iamoctavio", "2674648"],
    ["Now or Never!", "bgm_sp14_sp_nowornever", "1703976"],
    ["Bomb Rush Blush", "bgm_sp15_sp_tokimekibombrush", "1802944"],
    ["Seaskape", "bgm_sp16_sp_seaskape", "934432"],
    ["Splattack!", "bgm_sp17_sp_splattack", "1882288"],
    ["Inkoming!", "bgm_sp18_sp2_inkoming", "1072320"],
    ["Rip Entry", "bgm_sp19_sp2_ripentry", "915832"],
    ["Undertow", "bgm_sp20_sp2_undertow", "915336"],
    ["Don't Slip", "bgm_sp21_sp2_dontslip", "1006104"],
    ["Endolphin Surge", "bgm_sp22_sp2_endolphinsurge", "1489224"],
    ["Ebb & Flow", "bgm_sp23_sp2_fullthrottle_tentacle", "1068368"],
    ["Acid Hues", "bgm_sp24_sp2_ripplerefrain", "1270472"],
    ["Muck Warfare", "bgm_sp25_sp2_redhotegoist", "1234760"],
    ["Deluge Dirge", "bgm_sp26_sp2_gougou", "1064136"],
    ["Now or Never! - Splatoon 2", "bgm_sp27_sp2_nowornever", "767776"],
    ["Now or Never! (Splatfest Version) - Splatoon 2", "bgm_sp28_sp2_imanuraneba", "770752"]
];

var MGSSeries = [
    ["Metal Gear Solid Series", "mgs"],
    ["Encounter", "bgm_mg02_mgs_encounter", "1703232"],
    ["Theme of Tara", "bgm_mg03_mg_themeoftara", "957248"],
    ["Yell \"Dead Cell\"", "bgm_mg04_mgs2_yelldeadcell", "993456"],
    ["Snake Eater (Instrumental)", "bgm_mg05_mgs3_snakeeater_instrumental", "2076240"],
    ["MGS4 ~Theme of Love~", "bgm_mg06_mgs4_themeoflove", "1561128"],
    ["Cavern", "bgm_mg07_mgs_cavern", "1466640"],
    ["Battle in the Base", "bgm_mg08_mgs3_battleinthebase", "1604792"],
    ["Calling to the Night", "bgm_mg11_callingtothenight", "2475752"],
    ["Snake Eater", "bgm_mg12_mgs3_snakeeater", "1405880"],
    ["Theme of Solid Snake", "bgm_mg13_mg2_themeofsolidsnake", "1907104"],
    ["Main Theme - METAL GEAR SOLID PEACE WALKER", "bgm_mg14_msp_maintheme", "1343880"]
];

var SonicSeries = [
    ["Sonic Series", "sonic"],
    ["Green Hill Zone", "bgm_u01_snc_greenhillzone", "658904"],
    ["Scrap Brain Zone", "bgm_u02_snc_scrapbrainzone", "895992"],
    ["Emerald Hill Zone", "bgm_u03_snc2_emeraldhillzone", "558976"],
    ["Angel Island Zone", "bgm_u04_snc3_angelislandzone", "1690600"],
    ["Sonic Boom", "bgm_u06_snccd_sonicboom", "1179456"],
    ["Super Sonic Racing", "bgm_u07_sncr_supersonicracing", "1627608"],
    ["Open Your Heart", "bgm_u08_sadv_openyourheart", "1836408"],
    ["Live and Learn", "bgm_u09_sadv2_liveandlearn", "1505328"],
    ["Sonic Heroes", "bgm_u10_shrs_sonicheroes", "1607008"],
    ["His World (Theme of Sonic the Hedgehog - 2006 E3 Version)", "bgm_u12_snc06_hisworld_instrumental", "988016"],
    ["Seven Rings in Hand", "bgm_u13_srng_sevenringsinhand", "1721104"],
    ["Escape from the City", "bgm_u14_sadv2_escapefromthecity", "1607024"],
    ["Knight of the Wind", "bgm_u15_sblk_knightofthewind", "1814848"],
    ["Reach for the Stars", "bgm_u16_sclr_reachforthestars", "1466160"],
    ["Rooftop Run", "bgm_u17_sgen_rooftoprun", "1490448"],
    ["Wonder World", "bgm_u18_slst_wonderworld", "1467632"],
    ["Windy Hill - Zone 1", "bgm_u19_slst_windyhill_zone1", "1488976"],
    ["Lights, Camera, Action! (Studiopolis Zone Act 1)", "bgm_u20_smn_studiopolis_act1", "1147728"],
    ["Fist Bump", "bgm_u21_sfo_fistbump", "1549968"],
    ["Sunset Heights", "bgm_u22_sfo_sunsetheight", "1423984"]
];

var MegaManSeries = [
    ["Mega Man Series", "megaman"],
    ["Mega Man 2 Medley", "bgm_s01_rm2_medley", "1477800"],
    ["Air Man Stage", "bgm_s02_rm2_airman_stage", "1520208"],
    ["Spark Man Stage", "bgm_s03_rm3_sparkman_stage", "1568320"],
    ["Mega Man 2 Retro Medley", "bgm_s04_rm2_originalmedley", "2429376"],
    ["Cut Man Stage", "bgm_s05_rm_cutman_stage", "1515248"],
    ["Quick Man Stage", "bgm_s06_rm2_quickman_stage", "1508304"],
    ["Shadow Man Stage", "bgm_s07_rm3_shadowman_stage", "1220640"],
    ["Mega Man Retro Medley", "bgm_s08_rm_originalmedley", "1538312"],
    ["Mega Man 3 Retro Medley", "bgm_s09_rm3_originalmedley", "1545504"],
    ["Mega Man 4-6 Retro Medley", "bgm_s10_rm4_6_originalmedley", "1450784"],
    ["Wood Man Stage", "bgm_s11_rm2_woodmanstage", "1764488"],
    ["Dark Man Stage", "bgm_s12_rm5_darkmanstage", "1725304"],
    ["Top Man Stage", "bgm_s13_rm3_topmanstage", "1980744"],
    ["Ice Man Stage", "bgm_s14_rm_icemanstage", "1649416"],
    ["Bomb Man Stage", "bgm_s15_rm_bombmanstage", "572848"],
    ["Fire Man Stage", "bgm_s16_rm_firemanstage", "1567824"],
    ["Metal Man Stage", "bgm_s17_rm2_metalmanstage", "1732992"],
    ["Crash Man Stage", "bgm_s18_rm2_crashmanstage", "1414064"],
    ["Mega Man 4 Medley", "bgm_s19_rm4_medley", "1860712"],
    ["Gravity Man Stage", "bgm_s20_rm5_gravitymanstage", "1721104"],
    ["Napalm Man Stage", "bgm_s21_rm5_napalmmanstage", "1782592"],
    ["We're Robots (Dr. Wily Stage 2)", "bgm_s22_rm9_weretherobots_wilystage2", "2172216"],
    ["Opening Stage", "bgm_s23_rmx_openingstage", "1785816"],
    ["Guts Man Stage", "bgm_s24_rm_gutsmanstage", "1902872"],
    ["Hard Man Stage", "bgm_s25_rm3_hardmanstage", "1648672"],
    ["Flash in the Dark (Dr. Wily Stage 1)", "bgm_s26_rm9_flashinthedark_wilystage1", "663880"],
    ["X vs. ZERO", "bgm_s27_rmx5_xvszero", "858296"],
    ["Zero (Theme of ZERO (from Mega Man X))", "bgm_s28_rrz_themeofzero_fromx", "658920"],
    ["Shooting Star", "bgm_s29_rrm_shootingstar", "916328"],
    ["Snake Man Stage", "bgm_s30_rm3_snakemanstage", "1826488"],
    ["Flash Man Stage", "bgm_s31_rm2_flashmanstage", "2175176"]
];

var PacManSeries = [
    ["Pac-Man Series", "pacman"],
    ["PAC-MAN (Club Mix)", "bgm_v02_pac_pacman_clubmix", "1462176"],
    ["PAC-MAN'S PARK / BLOCK TOWN", "bgm_v03_mna_pacmanspark_blocktown", "1420528"],
    ["Libble Rabble Retro Medley", "bgm_v04_lbl_libblelabble_medley", "1832456"],
    ["Metro-Cross Retro Medley", "bgm_v05_mcr_metrocross_medley", "1652408"],
    ["Namco Arcade '80s Retro Medley 1", "bgm_v06_nmc_80smedley1", "1579976"],
    ["Namco Arcade '80s Retro Medley 2", "bgm_v07_nmc_80smedley2", "1668512"],
    ["Sky Kid Retro Medley", "bgm_v08_skd_skykid_medley", "1492680"],
    ["Galaga Medley", "bgm_v11_glg_medley", "1909072"],
    ["Mappy Medley", "bgm_v12_mpy_medley", "1916512"],
    ["Area 1 - Dragon Spirit", "bgm_v13_dsp_area1", "1938088"]
];

var StreetFighterSeries = [
    ["Street Fighter Series", "sf"],
    ["Ryu Stage Type A", "bgm_sf01a_sf2_ryu", "751408"],
    ["Ryu Stage Type A (Pinch)", "bgm_sf01b_sf2_ryu_pinch", "324600"],
    ["Ryu Stage Type B", "bgm_sf02a_sf2_ryu_2", "779928"],
    ["Ryu Stage Type B (Pinch)", "bgm_sf02b_sf2_ryu_2_pinch", "338240"],
    ["Ken Stage Type A", "bgm_sf03a_sf2_ken", "863008"],
    ["Ken Stage Type A (Pinch)", "bgm_sf03b_sf2_ken_pinch", "460256"],
    ["Ken Stage Type B", "bgm_sf04a_sf2_ken_2", "898472"],
    ["Ken Stage Type B (Pinch)", "bgm_sf04b_sf2_ken_2_pinch", "513824"],
    ["Ryu Stage", "bgm_sf05_sf2_ryustage", "1970080"],
    ["Ken Stage", "bgm_sf06_sf2_kenstage", "1521448"],
    ["Guile Stage", "bgm_sf07_sf2_guilestage", "2100032"],
    ["Vega Stage", "bgm_sf08_sf2_balrogstage", "1731008"],
    ["Blanka Stage Type A", "bgm_sf09a_sf2_blanka", "875408"],
    ["Blanka Stage Type A (Pinch)", "bgm_sf09b_sf2_blanka_pinch", "420824"],
    ["Blanka Stage Type B", "bgm_sf10a_sf2_blanka_2", "921536"],
    ["Blanka Stage Type B (Pinch)", "bgm_sf10b_sf2_blanka_2_pinch", "415136"],
    ["Guile Stage Type A", "bgm_sf11a_sf2_guile", "1035864"],
    ["Guile Stage Type A (Pinch)", "bgm_sf11b_sf2_guile_pinch", "763312"],
    ["Guile Stage Type B", "bgm_sf12a_sf2_guile_2", "1090424"],
    ["Guile Stage Type B (Pinch)", "bgm_sf12b_sf2_guile_2_pinch", "800280"],
    ["Chun-Li Stage Type A", "bgm_sf13a_sf2_chunli", "815888"],
    ["Chun-Li Stage Type A (Pinch)", "bgm_sf13b_sf2_chunli_pinch", "458272"],
    ["Chun-Li Stage Type B", "bgm_sf14a_sf2_chunli_2", "906408"],
    ["Chun-Li Stage Type B (Pinch)", "bgm_sf14b_sf2_chunli_2_pinch", "445144"],
    ["E. Honda Stage Type A", "bgm_sf15a_sf2_ehonda", "1024952"],
    ["E. Honda Stage Type A (Pinch)", "bgm_sf15b_sf2_ehonda_pinch", "497208"],
    ["E. Honda Stage Type B", "bgm_sf16a_sf2_ehonda_2", "1114728"],
    ["E. Honda Stage Type B (Pinch)", "bgm_sf16b_sf2_ehonda_2_pinch", "514832"],
    ["Zangief Stage Type A", "bgm_sf17a_sf2_zangief", "942616"],
    ["Zangief Stage Type A (Pinch)", "bgm_sf17b_sf2_zangief_pinch", "458040"],
    ["Zangief Stage Type B", "bgm_sf18a_sf2_zangief_2", "860528"],
    ["Zangief Stage Type B (Pinch)", "bgm_sf18b_sf2_zangief_2_pinch", "454072"],
    ["Dhalsim Stage Type A", "bgm_sf19a_sf2_dhalsim", "1273200"],
    ["Dhalsim Stage Type A (Pinch)", "bgm_sf19b_sf2_dhalsim"],
    ["Dhalsim Stage Type B", "bgm_sf20a_sf2_dhalsim_2", "842920"],
    ["Dhalsim Stage Type B (Pinch)", "bgm_sf20b_sf2_dhalsim_2_pinch", "730840"],
    ["Balrog Stage Type A", "bgm_sf21a_sf2_mbison", "869456"],
    ["Balrog Stage Type A (Pinch)", "bgm_sf21b_sf2_mbison_pinch", "435952"],
    ["Balrog Stage Type B", "bgm_sf22a_sf2_mbison_2", "841680"],
    ["Balrog Stage Type B (Pinch)", "bgm_sf22b_sf2_mbison_2_pinch", "453080"],
    ["Vega Stage Type A", "bgm_sf23a_sf2_balrog", "988248"],
    ["Vega Stage Type A (Pinch)", "bgm_sf23b_sf2_balrog_pinch", "805968"],
    ["Vega Stage Type B", "bgm_sf24a_sf2_balrog_2", "926992"],
    ["Vega Stage Type B (Pinch)", "bgm_sf24b_sf2_balrog_2_pinch", "719680"],
    ["Sagat Stage Type A", "bgm_sf25a_sf2_sagat", "789848"],
    ["Sagat Stage Type A (Pinch)", "bgm_sf25b_sf2_sagat_pinch", "399000"],
    ["Sagat Stage Type B", "bgm_sf26a_sf2_sagat_2", "1294032"],
    ["Sagat Stage Type B (Pinch)", "bgm_sf26b_sf2_sagat_2_pinch", "328584"],
    ["M. Bison Stage Type A", "bgm_sf27a_sf2_vega", "1018504"],
    ["M. Bison Stage Type A (Pinch)", "bgm_sf27b_sf2_vega_pinch", "915832"],
    ["M. Bison Stage Type B", "bgm_sf28a_sf2_vega_2", "1050744"],
    ["M. Bison Stage Type B (Pinch)", "bgm_sf28b_sf2_vega_2_pinch", "803984"],
    ["Dee Jay Stage Type A", "bgm_sf29a_sf2_deejay", "822336"],
    ["Dee Jay Stage Type A (Pinch)", "bgm_sf29b_sf2_deejay_pinch", "245984"],
    ["Dee Jay Stage Type B", "bgm_sf30a_sf2_deejay_2", "700568"],
    ["Dee Jay Stage Type B (Pinch)", "bgm_sf30b_sf2_deejay_2_pinch", "244760"],
    ["T. Hawk Stage Type A", "bgm_sf31a_sf2_thawk", "649728"],
    ["T. Hawk Stage Type A (Pinch)", "bgm_sf31b_sf2_thawk_pinch", "821592"],
    ["T. Hawk Stage Type B", "bgm_sf32a_sf2_thawk_2", "646752"],
    ["T. Hawk Stage Type B (Pinch)", "bgm_sf32b_sf2_thawk_2_pinch", "247488"],
    ["Fei Long Stage Type A", "bgm_sf33a_sf2_feilong", "686184"],
    ["Fei Long Stage Type A (Pinch)", "bgm_sf33b_sf2_feilong_pinch", "525744"],
    ["Fei Long Stage Type B", "bgm_sf34a_sf2_feilong_2", "691888"],
    ["Fei Long Stage Type B (Pinch)", "bgm_sf34b_sf2_feilong_2_pinch", "445888"],
    ["Cammy Stage Type A", "bgm_sf35a_sf2_cammy", "1012800"],
    ["Cammy Stage Type A (Pinch)", "bgm_sf35b_sf2_cammy_pinch", "463232"],
    ["Cammy Stage Type B", "bgm_sf36a_sf2_cammy_2", "861272"],
    ["Cammy Stage Type B (Pinch)", "bgm_sf36b_sf2_cammy_2_pinch", "353384"],
    ["Player Select Type A", "bgm_sf37a_sf2_playerselect", "338488"],
    ["Player Select Type B", "bgm_sf37b_sf2_playerselect", "338488"]
];

var FFSeries = [
    ["Final Fantasy Series", "ff"],
    ["Let the Battles Begin!", "bgm_ff01_ff7_tatakaumonotachi", "1002152"],
    ["Fight On!", "bgm_ff02_ff7_saranitatakaumonotachi", "1275448"]
];

var BayoSeries = [
    ["Bayonetta Series", "bayo"],
    ["One of a Kind", "bgm_by01_by_oneofakind", "3278528"],
    ["Riders of the Light", "bgm_by02_by_ridersofthelight", "853848"],
    ["Theme of Bayonetta - Mysterious Destiny (Instrumental)", "bgm_by03_by_mysteriousdestiny", "1017032"],
    ["Let's Hit the Climax!", "bgm_by04_by_letshittheclimax", "651232"],
    ["Red & Black", "bgm_by05_by_redandblack", "1922216"],
    ["After Burner (8 Climax Mix)", "bgm_by06_by_afterburnerclimaxmix", "3784464"],
    ["Friendship", "bgm_by07_by_tomoyo", "1312384"],
    ["Let's Dance, Boys!", "bgm_by08_by_letsdanceboys", "2663984"],
    ["The Legend of Aesir", "bgm_by09_by2_thelegendofaesir", "2649120"],
    ["Tomorrow is Mine (Bayonetta 2 Theme) (Instrumental)", "bgm_by10_by2_tomorrowismine", "1131856"],
    ["Time for the Climax!", "bgm_by11_by2_timefortheclimax", "998928"]
];

var CastleSeries = [
    ["Castlevania Series", "castle"],
    ["Starker / Wicked Child", "bgm_ad01_fc_starker", "1964128"],
    ["Out of Time", "bgm_ad03_fc_outoftime", "1668016"],
    ["Bloody Tears / Monster Dance", "bgm_ad04_dc2_bloodytears", "1717616"],
    ["Dwelling of Doom", "bgm_ad05_dc2_dwellingofdoom", "558232"],
    ["Simon Belmont Theme", "bgm_ad07_sfc_simonbelmontnotheme", "1533864"],
    ["Iron-Blue Intention", "bgm_ad08_vk_ironblueintention", "1775912"],
    ["Awake", "bgm_ad09_cm_awake", "1881544"],
    ["Lament of Innocence", "bgm_ad10_cv_shinjitsunonageki", "1982992"],
    ["Jet Black Incursion", "bgm_ad11_sj_shikkokunoshinkou", "1208736"],
    ["Jail of Jewel", "bgm_ad12_gl_jailofjewel", "1068696"],
    ["Hail from the Past", "bgm_ad13_gl_hailfromthepast", "1694320"],
    ["Divine Bloodlines", "bgm_ad14_gl_keishou_kekkonnoketsuzoku", "1643976"],
    ["Vampire Killer", "bgm_ad15_ju_vampirekiller", "1918744"],
    ["Mad Forest", "bgm_ad17_ju_madforest", "1374384"],
    ["Dracula's Castle", "bgm_ad18_ju_draculascastle", "1359504"],
    ["Dance of Illusions", "bgm_ad19_ju_danceofillusions", "1694816"],
    ["Beginning", "bgm_ad20_ac_beginning", "1324536"],
    ["Cross Your Heart", "bgm_ad21_ac_jyujikawomuneni", "1883544"],
    ["Simon Belmont Theme (The Arcade)", "bgm_ad22_ac_simonnotheme", "1747128"],
    ["Ruined Castle Gallery", "bgm_ad23_hd_koujoukairou", "1217152"],
    ["Crash in the Dark Night", "bgm_ad24_hd_yamiyonogekitotsu", "686944"],
    ["Jet Black Wings", "bgm_ad25_hd_shikkokunotsubasa", "1351088"],
    ["Ripped Silence", "bgm_ad26_hd_kirisakaretaseijaku", "1316120"],
    ["Lost Painting", "bgm_ad27_hd_ushinawaretasaiga", "1309920"],
    ["Nothing to Lose", "bgm_ad28_hd_nothingtolose", "1018256"],
    ["The Tragic Prince", "bgm_ad29_hd_hikyounokikoushi", "2564304"],
    ["Twilight Stigmata", "bgm_ad30_hd_tasogarenoseikon", "1276440"],
    ["Can't Wait Until Night", "bgm_ad31_hd_yorumadematenai", "1683904"],
    ["Aquarius", "bgm_ad32_hd_aquarius", "1834176"],
    ["Slash", "bgm_ad33_hd_slash", "1040328"],
    ["Go! Getsu Fuma", "bgm_ad35_hd_ikegetsufuma", "680480"],
    ["Dance of Gold", "bgm_ad36_gy_ougonnobukyoku", "1902872"],
    ["Black Night", "bgm_ad37_ac_blacknight_lasstboss2", "990000"],
    ["Vampire Killer", "bgm_ad38_ju_vampirekiller", "1222608"]
];

var OtherSeries = [
    ["Other", "other"],
    ["Roar / Rathalos", "bgm_mh01_mhxx_houkou", "690648"],
    ["Proof of a Hero ~ 4Version", "bgm_mh02_mh4_eiyuunoakashi", "1232776"],
    ["Famicom Medley", "bgm_q01_fc_famicommedley", "1698024"],
    ["Stack-Up / Gyromite", "bgm_q02_rob_blockandgyro", "1256336"],
    ["Clu Clu Land", "bgm_q05_clu_clucluland", "1315360"],
    ["Balloon Trip (Brawl)", "bgm_q06_bft_balloontrip", "1348344"],
    ["Ice Climber (Brawl)", "bgm_q07_ice_iceclimber", "1344376"],
    ["Shin Onigashima Medley", "bgm_q08_oni_shinonigashima", "2441528"],
    ["Title Theme - 3D Hot Rally", "bgm_q09_3hr_title", "1315360"],
    ["Tetris: Type A", "bgm_q10_trs_typea", "1571792"],
    ["Tetris: Type B", "bgm_q11_trs_typeb", "2063080"],
    ["Tunnel Scene - X", "bgm_q12_x_tunnelscene", "1240960"],
    ["Power-Up Music - Wrecking Crew", "bgm_q13_wcr_powerup", "481832"],
    ["Douchuumen - The Mysterious Murasame Castle", "bgm_q14_nmj_douchu", "552264"],
    ["Balloon Fight Medley", "bgm_q15_bft_medley", "1412824"],
    ["Balloon Trip (for 3DS / Wii U)", "bgm_q16_bft_balloontrip", "1587664"],
    ["The Mysterious Murasame Castle Medley", "bgm_q17_nmj_medley", "1432664"],
    ["Duck Hunt Medley (for 3DS / Wii U)", "bgm_q19_dkh_title", "1536328"],
    ["Wrecking Crew Medley (for 3DS / Wii U)", "bgm_q20_wcr_gamestart", "1530624"],
    ["Light Plane (for 3DS / Wii U)", "bgm_q22_pw_lightplane", "1511032"],
    ["Light Plane (Vocal Mix) (for 3DS / Wii U)", "bgm_q23_pw_lightplane_ver2", "1511280"],
    ["Wrecking Crew Retro Medley", "bgm_q24_wcr_bgma", "1553688"],
    ["Light Plane", "bgm_q26_pw_lightplane", "653448"],
    ["Light Plane", "bgm_q27_pw_lightplane", "1949496"],
    ["Duck Hunt Medley", "bgm_q28_dkh_medley", "1732744"],
    ["Wrecking Crew Medley", "bgm_q29_wcr_bgmb", "1832688"],
    ["Yuyuki Medley", "bgm_q30_yyk_medley", "1932880"],
    ["PictoChat", "bgm_r02_pictochat", "832256"],
    ["Electroplankton", "bgm_r03_electroplankton", "1796480"],
    ["Lip's Theme - Panel de Pon", "bgm_r06_pdp_lipnotheme", "1546000"],
    ["Marionation Gear", "bgm_r07_mmg_marionationgear", "1188400"],
    ["Title Theme - Big Brain Academy", "bgm_r08_yaj_title", "1059176"],
    ["Golden Forest", "bgm_r09_1080_goldenforest", "955264"],
    ["Mii Channel", "bgm_r10_ngc_nigaoechannel", "1060664"],
    ["Wii Shop Channel (for 3DS / Wii U)", "bgm_r11_spc_wiishopingchannel", "1466904"],
    ["Battle Scene / Final Boss - Golden Sun", "bgm_r12_ont_sentou_boss", "2087880"],
    ["Personal Trainer: Cooking", "bgm_r13_onv_shaberuoryourinavi", "1291320"],
    ["Excite Truck", "bgm_r14_ext_excitetruck", "1105800"],
    ["Brain Age: Train Your Brain in Minutes a Day!", "bgm_r15_nou_dstraning", "1820536"],
    ["Charge! - Wii Play", "bgm_r17_hwi_ushidash", "312944"],
    ["Bathtime Theme (for 3DS / Wii U)", "bgm_r18_ntd_shower", "1537072"],
    ["Bathtime Theme (Vocal Mix) (for 3DS / Wii U)", "bgm_r19_ntd_shower_ver2", "1537072"],
    ["Mii Plaza", "bgm_r20_ngc_nigaoehiroba", "1619160"],
    ["Afternoon on the Island (for 3DS / Wii U)", "bgm_r22_tdcs_tomodachicollection", "1592392"],
    ["Save The World, Heroes!", "bgm_r26_scd2_sekaiwosukueyuushayo", "1495424"],
    ["Dark Lord", "bgm_r27_scd2_yaminoou", "1389512"],
    ["Wii Sports Series Medley", "bgm_r31_wsp_title", "1534344"],
    ["Wii Sports Resort", "bgm_r32_wsr_title", "1346856"],
    ["Wii Sports Resort Ver. 2", "bgm_r33_wsr_title_ver2", "1537072"],
    ["The Valedictory Elegy", "bgm_r34_bt2_thevaledictoryelegy", "1490960"],
    ["Glory of Heracles", "bgm_r35_hne_battleareaa_greecce", "1475088"],
    ["Boss 1 - Sakura Samurai: Art of the Sword", "bgm_r37_hsz_boss1", "1554184"],
    ["Freakyforms: Your Creations, Alive! Medley", "bgm_r38_iki_maintheme", "1445560"],
    ["Turbo Jet", "bgm_r39_pwr_hikouki", "1652392"],
    ["Pedal Glider", "bgm_r40_pwr_hangglider", "1496152"],
    ["Culdcept", "bgm_r41_cct_opening", "1397696"],
    ["Nintendo Land Medley", "bgm_r42_nld_title", "1502352"],
    ["Style Savvy: Trendsetters", "bgm_r43_wgf_title", "1291552"],
    ["Final Results - Wii Party U", "bgm_r47_wptu_theme_1", "834488"],
    ["Title Theme - Wii Sports Resort", "bgm_r48_wsr_title", "1195328"],
    ["Menu - Brain Age 2: More Training in Minutes a Day!", "bgm_r49_motto_menu", "1445312"],
    ["Attack - Soma Bringer", "bgm_r50_sbg_bosskyuumonsterbattle", "1004136"],
    ["Tomorrow's Passion", "bgm_r51_cap_macnouta", "1344624"],
    ["PERFORMANCE", "bgm_r52_bbdx_performance", "1073064"],
    ["Tunnel Scene - X-Scape", "bgm_r59_xrt_tunnelnormal", "516800"],
    ["Weyard", "bgm_r60_ont_worldmap", "1201280"],
    ["Swan Lesson", "bgm_r61_egk_swan_lesson", "955512"],
    ["Dragon Battle", "bgm_r63_arg_dragonnotatakai", "1362744"],
    ["Title Theme - Nintendo Land", "bgm_r64_nld_title", "1371160"],
    ["Pop Fashion Show", "bgm_r65_wgf_fashonshow", "910872"],
    ["Dillon's Rolling Western: The Last Ranger", "bgm_r66_rlw_move2", "1001888"],
    ["Title Theme - NES Remix 2", "bgm_r67_rmx_remix2_title", "1427456"],
    ["ST01: Roll Out, Wonderful 100!", "bgm_r68_101_rolloutwonderful100", "2030856"],
    ["Jergingha: Planet Destruction Form", "bgm_r69_101_jerginghaplanetdestructionform", "2376816"],
    ["Blue Birds", "bgm_r70_rtg_bluebirds", "787864"],
    ["Monkey Watch", "bgm_r71_mrt_sarudokei", "1265264"],
    ["Wii Shop Channel", "bgm_r72_spc_wiishopingchannel", "771016"],
    ["Title Theme - Wii Sports Club", "bgm_r74_wsc_maintitle", "1488464"],
    ["Electroplankton", "bgm_r75_electroplankton", "1931392"],
    ["Find Mii / Find Mii II Medley", "bgm_r76_scd_seriesmedley", "1846576"],
    ["Trouble Brewing II", "bgm_r77_stm_hotspot2", "1911056"],
    ["Bathtime Theme", "bgm_r78_ntd_shower", "1895680"],
    ["Noisy Notebook", "bgm_r79_snp_w1stage", "1927920"],
    ["Afternoon on the Island", "bgm_r80_tdcs_tomodachicollection", "1927192"],
    ["Title Theme - Wii Sports", "bgm_r81_wsp_openingtheme", "1341648"],
    ["Fruit Basket 2", "bgm_r85_rtb_fruitsbasket", "913352"],
    ["Tennis (Training)", "bgm_r87_wsc_tnstraining", "1226328"],
    ["Baseball (Training)", "bgm_r88_wcs_bsbtraining", "1131592"],
    ["Filled with Hope", "bgm_r89_std_kibouwomuneni", "745208"],
    ["Title Theme - Nintendo Badge Arcade", "bgm_r90_btc_title_maintheme", "714720"],
    ["Arcade Bunny's Theme", "bgm_r91_btc_baitotheme", "562432"],
    ["Battle Start - Fossil Fighters: Frontier", "bgm_r92_khm_battlekaishi", "903184"],
    ["Welcome Center", "bgm_r94_hpl_mapfirst", "1594608"],
    ["Revolt -Striving for Hope-", "bgm_r98_ccr_revolt_kibouhenokekki", "1363984"],
    ["Worthy Rival Battle", "bgm_r99_ccr_koutekishubattle", "440680"],
    ["Boss Battle Time", "bgm_rr02_mtp_eventsentou", "872680"],
    ["Boss: The Darkest Lord", "bgm_rr05_mtp_chomaousen_hontai", "2871080"],
    ["Garage", "bgm_rr06_ttp_garage", "992960"],
    ["Dawn in the Desert", "bgm_rr07_eoa_fieldmain", "1503096"],
    ["Struggle Against Chaos", "bgm_rr08_eoa_battle2later", "1539552"],
    ["Ring a Ding", "bgm_rr12_gm4_ringdongdang", "2148640"],
    ["Frontier Battle", "bgm_rr13_dhb_kaitakuchinotatakai", "927760"],
    ["MEGALOVANIA", "bgm_rr14_ut_megalovania", "1210152"],
    ["Ice Climber (Melee)", "bgm_w13_ice_iciclemountain", "1482760"],
    ["Mach Rider", "bgm_w18_mrd_machrider", "1606760"]
];

var PersonaSeries = [
    ["Persona Series", "persona"],
    ["Aria of the Soul", "bgm_ps10_p5_subetenohitono_tamashiinouta", "2815408"],
    ["Battle Hymn of the Soul", "bgm_ps02_p3_subetenohitono_tamashiinotatakai", "1426232"],
    ["Beneath the Mask", "bgm_ps11_p5_beneath_themask", "2311240"],
    ["I'll Face Myself", "bgm_ps04_p4_illface_myself", "1039296"],
    ["Last Surprise", "bgm_ps07_p5_lastsurprise", "1984632"],
    ["Mass Destruction", "bgm_ps01_p3_mass_destruction", "769336"],
    ["Our Beginning", "bgm_ps09_p5_ourbeginning", "1314816"],
    ["Reach Out to the Truth", "bgm_ps03_p4_reachout_to_thetruth", "782104"],
    ["Rivers in the Desert", "bgm_ps08_p5_riversin_thedesert", "2606584"],
    ["Time to Make History", "bgm_ps05_p4_timeto_makehistory", "661144"],
    ["Wake Up, Get Up, Get Out There", "bgm_ps06_p5_wakeup_getup_getoutthere", "2313256"]
];

var DQSeries = [
    ["Dragon Quest Series", "dq"],
    ["Adventure - DRAGON QUEST III", "bgm_dq04_dq3_boukennotabi", "792672"],
    ["Battle for the Glory - DRAGON QUEST IV", "bgm_dq05_dq4_sentou", "519336"],
    ["Fighting Spirits - DRAGON QUEST III", "bgm_dq03_dq3_sentounotheme", "337560"],
    ["Wagon Wheel's March", "bgm_dq06_dq4_bashanomarch", "1269960"],
    ["The Hero Goes Forth with a Determination", "bgm_dq02_dq11_yuushahayuku", "597120"],
    ["War Cry", "bgm_dq07_dq8_otakebiwoagete", "837376"],
    ["Marching through the Fields", "bgm_dq08_dq8_daiheigennomarch", "580168"],
    ["Unflinchable Courage", "bgm_dq01_dq11_hirumanuyuuki", "962872"]
];

var BanjoSeries = [
    ["Banjo & Kazooie Series", "banjo"],
    ["Spiral Mountain", "bgm_bk01_bk_kurukuruyamanofumoto", "1255024"],
    ["Main Theme - Banjo-Kazooie", "bgm_bk02_bk_title", "1460808"],
    ["Mumbo’s Mountain", "bgm_bk03_bk_mumbomountain", "1238040"],
    ["Treasure Trove Cove", "bgm_bk04_bk_otakarazakuzakubeach", "1115584"],
    ["Freezeezy Peak", "bgm_bk05_bk_frozunzunyama", "1084656"],
    ["Gobi’s Valley", "bgm_bk06_bk_gobivalleysabaku", "1261240"],
    ["Mad Monster Mansion", "bgm_bk07_bk_madnightmansion", "1024024"],
    ["Vs. Klungo", "bgm_bk08_bk2_vsklungo", "943872"],
    ["Vs. Mr. Patch", "bgm_bk09_bk2_vsmrpatch", "1044336"],
    ["Vs. Lord Woo Fak Fak", "bgm_bk10_bk2_vswoofakfakdaiou", "1020160"]
];

var FatalFurySeries = [
    ["Fatal Fury/SNK Series", "fatalfury"],
    ["Haremar Faith Capoeira School - Song of the Fight - FATAL FURY", "bgm_gd03_gd_halemakyocapoereha_tatakainouta", "1556432"],
    ["The Sea Knows - FATAL FURY", "bgm_gd04_gd_umihashitteiru", "491448"],
    ["Kurikinton - FATAL FURY 2 [Remix]", "bgm_gd02_gd2_kurikinton", "1293984"],
    ["Kurikinton - FATAL FURY 2 [Original]", "bgm_gd01_gd2_kurikinton", "477504"],
    ["Kuri Kinton Flavor - KOF XIV", "bgm_gd47_kofxiv_kurikintonfu", "927928"],
    ["Pasta - FATAL FURY 2", "bgm_gd05_gd2_pasta", "925896"],
    ["A New Poem That the South Thailand Wants to Tell - FATAL FURY 2", "bgm_gd06_gd2_thainanbunitsutaetai_atarashiiuta", "538520"],
    ["Tarkun and Kitapy - FATAL FURY 2", "bgm_gd07_gd2_takuntokitap", "1324560"],
    ["Let's Go To Seoul! - FATAL FURY 2", "bgm_gd08_gd2_seoulniikou", "1243248"],
    ["The London March - FATAL FURY 2", "bgm_gd09_gd2_londonmarch", "1289784"],
    ["The Working Matador - FATAL FURY 2", "bgm_gd10_gd2_hatarakutougyushi", "565720"],
    ["Duck Dub Dub (Duck You Too) - FATAL FURY SPECIAL", "bgm_gd11_gdsp_duckdubdub", "869448"],
    ["Soy Sauce for Geese - FATAL FURY SPECIAL", "bgm_gd12_gdsp_geesenishouyu", "792016"],
    ["Soy Sauce for Geese - KOF XIV", "bgm_gd36_kofiv_geesenishouyu_xivver", "1441168"],
    ["Big Shot! - FATAL FURY 3", "bgm_gd14_gd3_bigshot", "582000"],
    ["11th Street - FATAL FURY WILD AMBITION", "bgm_gd16_gdwa_11thstreet", "1410240"],
    ["176th Street - KOF '99", "bgm_gd21_kof99_176thstreet", "849792"],
    ["Ne! - KOF '94", "bgm_gd17_kof94_ne", "633912"],
    ["DESERT REQUIEM ~Operation02UM~ - KOF 2002 UM", "bgm_gd25_kof02um_desertrequiem", "731536"],
    ["ESAKA!! - KOF 2002 UM", "bgm_gd24_kof02um_esaka", "850800"],
    ["Stormy Saxophone 2 - KOF '96", "bgm_gd18_kof96_arashinosaxophone", "1354816"],
    ["KD-0079+ - KOF 2002 UM", "bgm_gd26_kof02um_kd0079plus", "878704"],
    ["W.W.III - KOF XIV", "bgm_gd20_kof99_ww3", "1059120"],
    ["Terry115 - KOF 2000", "bgm_gd22_kof00_terry115", "880536"],
    ["Street Dancer - KOF XI", "bgm_gd23_kofxi_streetdancer", "875512"],
    ["New Order - KOF XIV", "bgm_gd38_kofxiv_neworder_xivver", "839056"],
    ["Undercover - KOF 2002 UM", "bgm_gd27_kof02um_undercover", "813520"],
    ["Cutting Edge - KOF 2002 UM", "bgm_gd28_kof02um_cuttingedge", "912136"],
    ["The Second Joker - KOF XIII", "bgm_gd29_kofxiii_thesecondjoker", "871312"],
    ["Esaka Continues... - KOF XIII", "bgm_gd30_kofxiii_esakacontinues", "888784"],
    ["Wild Street - KOF XIII", "bgm_gd31_kofxiii_wildstreet", "823600"],
    ["Tame a Bad Boy - KOF XIII", "bgm_gd32_kofxiii_tameabadboy", "1027216"],
    ["KDD-0063 - KOF XIII", "bgm_gd33_kofxiii_kdd0063", "866760"],
    ["Yappari ESAKA - KOF XIV", "bgm_gd34_kofxiv_yappariesaka", "1817488"],
    ["Departure from South Town - KOF XIV", "bgm_gd35_kofxiv_departure_from_southtown", "1704424"],
    ["Theme of SYD - Alpha Mission", "bgm_gd39_aso_themeofsyd", "1092216"],
    ["IKARI - KOF XIV", "bgm_gd37_kofxiv_ikari_xivver", "620992"],
    ["Forest World - Athena", "bgm_gd40_atn_morinosekai", "1102968"],
    ["Psycho Soldier Theme", "bgm_gd41_psy_psychosoldiertheme_jp", "1525840"],
    ["Psycho Soldier Theme (Overseas Version)", "bgm_gd42_psy_psychosoldiertheme_en", "1525840"],
    ["ART of FIGHT - Art of Fighting", "bgm_gd43_ryk_artoffight", "1214520"],
    ["Art of Fighting Ver-230000000.0 - FATAL FURY SPECIAL", "bgm_gd13_gdsp_ryukonoken_ver230000000", "849808"],
    ["Tuna - SAMURAI SHODOWN", "bgm_gd44_ssp_maguro", "604176"],
    ["Banquet of Nature - SAMURAI SHODOWN", "bgm_gd45_ssp_shizennoutage", "1498944"],
    ["Gaia - SAMURAI SHODOWN", "bgm_gd46_ssp_daichi", "1114392"],
    ["Main Theme from Metal Slug - METAL SLUG", "bgm_gd48_mts1_maintheme", "1149840"],
    ["Assault Theme - METAL SLUG 1-3", "bgm_gd49_mts1_3_assaulttheme", "1168840"],
    ["Final Attack - METAL SLUG 1-6", "bgm_gd52_mts5_finalattack", "818040"],
    ["Judgment - METAL SLUG 2", "bgm_gd50_mts2_judgment", "750168"],
    ["Blue Water Fangs (The Island of Dr Moreau) - METAL SLUG 3", "bgm_gd51_mts3_soukainokiba", "914136"]
];

var VictoryThemes = [
    ["Victory Themes", "victory"],
    ["Mii Fighter", "bgm_z00_f_miifighter", "74304"],
    ["Mario", "bgm_z01_f_mario", "92968"],
    ["Dr. Mario", "bgm_z60_f_mariod", "92968"],
    ["Donkey Kong", "bgm_z02_f_donkey", "81560"],
    ["Link", "bgm_z03_f_link", "78584"],
    ["Samus", "bgm_z04_f_samus", "78088"],
    ["Yoshi", "bgm_z05_f_yoshi", "90984"],
    ["Kirby", "bgm_z06_f_kirby", "57008"],
    ["Fox / Wolf", "bgm_z07_f_fox", "72632"],
    ["Pikachu", "bgm_z08_f_pikachu", "78584"],
    ["Luigi", "bgm_z09_f_luigi", "92968"],
    ["Captain Falcon", "bgm_z10_f_captain", "79824"],
    ["Ness", "bgm_z11_f_ness", "90240"],
    ["Jigglypuff", "bgm_z37_f_purin", "78584"],
    ["Peach / Daisy", "bgm_z13_f_peach", "92968"],
    ["Bowser", "bgm_z12_f_koopa", "83296"],
    ["Ice Climbers", "bgm_z16_f_iceclimber", "64392"],
    ["Sheik", "bgm_z15_f_sheik", "78584"],
    ["Zelda", "bgm_z14_f_zelda", "78584"],
    ["Pichu", "bgm_z88_f_pichu", "78584"],
    ["Falco", "bgm_z19_f_falco", "72632"],
    ["Marth", "bgm_z17_f_marth", "92968"],
    ["Lucina / Chrom", "bgm_z61_f_lucina", "89256"],
    ["Young Link", "bgm_z89_f_younglink", "78584"],
    ["Ganondorf", "bgm_z20_f_ganon", "78584"],
    ["Mewtwo", "bgm_z80_f_mewtwo", "78584"],
    ["Roy", "bgm_z83_f_roy", "92968"],
    ["Mr. Game & Watch", "bgm_z18_f_gamewatch", "69408"],
    ["Meta Knight", "bgm_z22_f_metaknight", "81808"],
    ["Pit", "bgm_z23_f_pit", "62712"],
    ["Dark Pit", "bgm_z62_f_pitb", "87512"],
    ["Zero Suit Samus", "bgm_z24_f_zerosamus", "78088"],
    ["Wario", "bgm_z21_f_wario", "95200"],
    ["Snake", "bgm_z46_f_snake", "55272"],
    ["Ike", "bgm_z34_f_ike", "92968"],
    ["Pokemon Trainer", "bgm_z28_f_ptrainer", "78584"],
    ["Diddy Kong", "bgm_z27_f_diddy", "81560"],
    ["Lucas", "bgm_z82_f_lucas", "90240"],
    ["Sonic", "bgm_z47_f_sonic", "92968"],
    ["King Dedede", "bgm_z32_f_dedede", "57008"],
    ["Olimar / Alph", "bgm_z25_f_pikmin", "67424"],
    ["Lucario", "bgm_z33_f_lucario", "78584"],
    ["R.O.B.", "bgm_z35_f_robot", "73872"],
    ["Toon Link", "bgm_z41_f_toonlink", "78584"],
    ["Villager", "bgm_z66_f_murabito", "91480"],
    ["Mega Man", "bgm_z74_f_rockman", "82552"],
    ["Wii Fit Trainer", "bgm_z64_f_wiifit", "84784"],
    ["Rosalina & Luma", "bgm_z63_f_rosetta", "91976"],
    ["Little Mac", "bgm_z65_f_littlemac", "78088"],
    ["Greninja", "bgm_z72_f_gekkouga", "78584"],
    ["Palutena", "bgm_z67_f_palutena", "62712"],
    ["Pac-Man", "bgm_z73_f_pacman", "76848"],
    ["Robin", "bgm_z68_f_reflet", "87240"],
    ["Shulk", "bgm_z71_f_shulk", "94208"],
    ["Bowser Jr.", "bgm_z70_f_koopajr", "83296"],
    ["Duck Hunt", "bgm_z69_f_duckhunt", "91728"],
    ["Ryu / Ken", "bgm_z81_f_ryu", "81064"],
    ["Cloud", "bgm_z85_f_cloud", "330552"],
    ["Corrin", "bgm_z87_f_kamui", "78584"],
    ["Bayonetta", "bgm_z86_f_bayonetta", "90984"],
    ["Inkling", "bgm_z93_f_inkling", "62712"],
    ["Ridley / Dark Samus", "bgm_z94_f_ridley", "92968"],
    ["Simon / Richter", "bgm_z96_f_simon", "74864"],
    ["King K. Rool", "bgm_z95_f_krool", "76848"],
    ["Isabelle", "bgm_z90_f_shizue", "91480"],
    ["Incineroar", "bgm_z91_f_gaogaen", "78584"],
    ["Piranha Plant", "bgm_z92_f_packun", "83296"],
    ["Joker (Persona 5)", "bgm_z97a_f_jack_p5", "430968"],
    ["Joker (Persona 4)", "bgm_z97b_f_jack_p4", "394848"],
    ["Joker (Persona 3)", "bgm_z97c_f_jack_p3", "336720"],
    ["Hero", "bgm_z98_f_brave", "53640"],
    ["Banjo & Kazooie", "bgm_z99_f_buddy", "53640"],
    ["Terry", "bgm_zz01_f_dolly", "59184"],
    ["Byleth", "bgm_zz02_f_master", "60864"],
    ["Normal Victory Theme", "bgm_crs24_vs_result", "648488"]
];

var series = [SmashSeries, MarioSeries, MarioKartSeries, YoshiSeries, DKSeries, ZeldaSeries, MetroidSeries, KirbySeries, StarFoxSeries, PkmnSeries, FZeroSeries, EarthboundSeries, GameAndWatchSeries, KidIcarusSeries,FireEmblemSeries, WarioWareSeries, PikminSeries, AnimalCrossingSeries, WiiFitSeries, PunchOutSeries, XenobladeSeries, SplatoonSeries, MGSSeries, SonicSeries, MegaManSeries, PacManSeries, StreetFighterSeries, FFSeries, BayoSeries, CastleSeries, OtherSeries, PersonaSeries, DQSeries, BanjoSeries, FatalFurySeries, VictoryThemes];

window.onload = function () {

    orderBySelected();

    AlertFilesize();

    UpdateLoopSelect(document.getElementById("loop_samples_select"));

    LoopSamples(document.getElementById("loop"));
    AdvancedOptions(document.getElementById("advanced"));

    UpdateStage(document.getElementById("stages"));
    UpdateType(document.getElementById("type"));
    UpdateHZ(document.getElementById("sampleHZ"));


    setInputFilter(document.getElementById("sampleHZinput"), function (value) {
        return /^-?\d*$/.test(value);
    });

    setInputFilter(document.getElementById("start_loop"), function (value) {
        return /^-?\d*[:]?\d*[.,]?\d*$/.test(value);
    });


    setInputFilter(document.getElementById("end_loop"), function (value) {
        return /^-?\d*[:]?\d*[.,]?\d*$/.test(value);
    });

    setInputFilter(document.getElementById("filenameOutput"), function (value) {
        return /^[a-zA-Z0-9_]*$/i.test(value);
    });

    setInputFilter(document.getElementById("hz"), function (value) {
        return /^-?\d*$/.test(value);
    });

}

function LoopSamples(checkbox) {
    if (checkbox.checked) {
        document.getElementById("loopsection").style.display = "block";
    } else {
        document.getElementById("loopsection").style.display = "none";
    }
}

function AdvancedOptions(checkbox) {
    if (checkbox.checked) {
        document.getElementById("advancedoptions").style.display = "block";
    } else {
        document.getElementById("advancedoptions").style.display = "none";
    }
}

function displayFilters() {
    if (document.getElementById("filters").style.display == "none") {
        document.getElementById("filters").style.display = "block";
        document.getElementById("more").innerHTML = "Hide Options";
    } else {
        document.getElementById("filters").style.display = "none";
        document.getElementById("more").innerHTML = "More Options";
    }
}

function SetupStageList(series) {
    id = "";
    i = 0;
    series.forEach(element => {
        if (i == 0) {
            var optgroup = document.createElement("optgroup");
            optgroup.id = element[1];
            id = element[1];
            optgroup.label = element[0];
            document.getElementById("stages").append(optgroup);
            i++;
        } else {
            var option = document.createElement("option");
            option.value = element[1];
            option.innerHTML = element[0];
            option.setAttribute('data-size', element[2]);
            document.getElementById("stages").append(option);
        };
    });
}

function UpdateStage(e) {
    document.getElementById("filenameOutput").value = e.value;

    var song_size_bytes = e.options[e.selectedIndex].getAttribute('data-size');

    var song_size_kb = song_size_bytes / 1024;

    if (song_size_kb > 1000) {
        song_size_mb = song_size_kb / 1024;

        document.getElementById("og_size").innerHTML = `Original File Size: <strong>${song_size_mb.toFixed(2)}MB</strong>`;
    } else {
        document.getElementById("og_size").innerHTML = `Original File Size: <strong>${song_size_kb.toFixed(2)}KB</strong>`;
    }
}

function UpdateType(e) {
    document.getElementById("filetype").value = e.value;
}

function UpdateHZ(e) {
    if (e.value == "auto") {
        document.getElementById("sampleHZdiv").style.display = "none";
        document.getElementById("sampleHZinput").value = "auto";
    } else if (e.value == "48") {
        document.getElementById("sampleHZdiv").style.display = "none";
        document.getElementById("sampleHZinput").value = "48000";
    } else if (e.value == "441") {
        document.getElementById("sampleHZdiv").style.display = "none";
        document.getElementById("sampleHZinput").value = "44100";
    } else {
        document.getElementById("sampleHZdiv").style.display = "block";
    }
}



/*
    Thanks to the Stackoverflow community wiki
    Source: https://stackoverflow.com/posts/469362/revisions
*/
function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function (event) {
        textbox.addEventListener(event, function () {
            if (inputFilter(this.value)) {
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    });
}

function orderBySizeH2L() {
    $("#stages").each(function () {
        $(this).html($(this).children('option').sort(function (a, b) {
            return ($(a).data('size')) < ($(b).data('size')) ? 1 : -1;
        }));
    });

    document.getElementById("h2l").style.display = "none";
    document.getElementById("l2h").style.display = "inline";
    document.getElementById("stages").selectedIndex = 0;

    UpdateStage(document.getElementById("stages"));

}

function orderBySizeL2H() {
    $("#stages").each(function () {
        $(this).html($(this).children('option').sort(function (a, b) {
            return ($(b).data('size')) < ($(a).data('size')) ? 1 : -1;
        }));
    });

    document.getElementById("l2h").style.display = "none";
    document.getElementById("h2l").style.display = "inline";
    document.getElementById("stages").selectedIndex = 0;

    UpdateStage(document.getElementById("stages"));
}

function orderBySeries() {
    SetupStageList(SmashSeries);
    SetupStageList(MarioSeries);
    SetupStageList(MarioKartSeries);
    SetupStageList(YoshiSeries);

    SetupStageList(DKSeries);
    SetupStageList(ZeldaSeries);
    SetupStageList(MetroidSeries);
    SetupStageList(KirbySeries);

    SetupStageList(StarFoxSeries);
    SetupStageList(PkmnSeries);
    SetupStageList(FZeroSeries);
    SetupStageList(EarthboundSeries);

    SetupStageList(GameAndWatchSeries);
    SetupStageList(FireEmblemSeries);
    SetupStageList(WarioWareSeries);
    SetupStageList(PikminSeries);

    SetupStageList(AnimalCrossingSeries);
    SetupStageList(WiiFitSeries);
    SetupStageList(PunchOutSeries);
    SetupStageList(XenobladeSeries);

    SetupStageList(SplatoonSeries);
    SetupStageList(MGSSeries);
    SetupStageList(SonicSeries);
    SetupStageList(MegaManSeries);


    SetupStageList(PacManSeries);
    SetupStageList(StreetFighterSeries);
    SetupStageList(FFSeries);
    SetupStageList(BayoSeries);

    SetupStageList(CastleSeries);
    SetupStageList(OtherSeries);
    SetupStageList(PersonaSeries);
    SetupStageList(DQSeries);

    SetupStageList(BanjoSeries);
    SetupStageList(FatalFurySeries);
    SetupStageList(VictoryThemes);

    UpdateStage(document.getElementById("stages"));
}

function orderBySelected() {

    var all = $("#filters :checkbox");
    var checked = $("div :checkbox:checked").length;

    var check = false;

    document.getElementById("stages").innerHTML = "";

    $(all).each(function(i) {
        if (this.checked) { SetupStageList(series[i]); check = true }
    });

    if (check == false) {
        orderBySeries();
    }

    UpdateStage(document.getElementById("stages"));
}

function resetFilters() {
    var all = $("#filters :checkbox");

    document.getElementById("stages").innerHTML = "";

    $(all).each(function() {
        this.checked = false;
    });

    document.getElementById("l2h").style.display = "none";
    document.getElementById("h2l").style.display = "inline";

    orderBySeries();
}

