//I'm gonna try and figure out how to store these arrays somewhere else soon.

var bgmsmashbtl = [
    ["Super Smash Bros. Series", "smash"],
    ["Battlefield", "bgm_crs2_02_senjyou", 1],
    ["Final Destination", "bgm_crs2_03_shuuten", 1],
    ["Mob Smash", "bgm_crs2_04_kumite", 1],
    ["Classic Mode: Bonus Stage", "bgm_crs2_16_bonusstage", 1],
    ["Master Hand", "bgm_crs2_05_masterhand", 1],
    ["Crazy Hand", "bgm_crs2_42_crazyhand", 1],
    ["Master Hand / Crazy Hand", "bgm_crs2_43_masterhand_crazyhand", 1],
    ["The Light Realm: Prologue", "bgm_crs2_12_adv_map_light", 1],
    ["The Light Realm: March", "bgm_crs2_48_adv_map_light_later", 1],
    ["The Light Realm: Base", "bgm_crs2_13_adv_map_light_subcommon", 1],
    ["The Dark Realm", "bgm_crs2_14_adv_map_dark", 1],
    ["The Dark Realm: The Mysterious Space", "bgm_crs2_45_adv_map_dark_subcommon", 1],
    ["The Final Battle", "bgm_crs2_15_adv_map_final", 1],
    ["Galeem", "bgm_crs2_17_vs_kiila1", 1],
    ["Dharkon", "bgm_crs2_19_vs_darz1", 1],
    ["Galeem/Dharkon", "bgm_crs2_21_vs_kiila_darz", 1],
    ["Training", "bgm_crs2_11_trainingstage", 1],
    ["Practice Fights", "bgm_crs2_36_simulationstage", 1],
    ["Opening - Super Smash Bros. Melee (Brawl)", "bgm_w49_sbdx_opening", 2],
    ["How to Play - Super Smash Bros. Melee", "bgm_w48_sbdx_asobikata", 3],
    ["Menu - Super Smash Bros. Melee (Brawl)", "bgm_w34_sbdx_menu", 2],
    ["Boss Battle - Super Smash Bros. Brawl", "bgm_x18_sbx_bossbattle", 2],
    ["Battlefield - Super Smash Bros. Melee", "bgm_w21_sbdx_senjyou", 1],
    ["Battlefield - Super Smash Bros. Melee (for 3DS / Wii U)", "bgm_w35_sbdx_menu_ver2", 2],
    ["Battlefield - Super Smash Bros. Brawl", "bgm_x04_sbx_senjyou", 1],
    ["Battlefield Ver. 2 - Super Smash Bros. Brawl", "bgm_x25_sbx_senjyou_ver2", 1],
    ["Battlefield - Super Smash Bros. for 3DS / Wii U", "bgm_crs02_senjyou", 1],
    ["Final Destination - Super Smash Bros.", "bgm_t25_sb_shuuten", 1],
    ["Final Destination - Super Smash Bros. Melee", "bgm_w25_sbdx_shuuten", 1],
    ["Giga Bowser", "bgm_w31_sbdx_gigakoopa", 1],
    ["Final Destination - Super Smash Bros. Brawl", "bgm_x05_sbx_shuuten", 1],
    ["Final Destination - Super Smash Bros. for 3DS / Wii U", "bgm_crs03_shuuten", 1],
    ["Final Destination Ver. 2", "bgm_crs26_shuuten_ver2", 1],
    ["Multi-Man Smash", "bgm_crs04_kumite", 1],
    ["Multi-Man Melee", "bgm_w23_sbdx_hyakuninkumite", 1],
    ["Multi-Man Melee 2", "bgm_w39_sbdx_hyakuninkumite2", 1],
    ["Cruel Smash", "bgm_x17_sbx_nasakemuyoukumite", 1],
    ["Credits - Super Smash Bros. (Brawl)", "bgm_t01_sb_staffroll", 2],
    ["Credits - Super Smash Bros. (for 3DS / Wii U)", "bgm_t07_sb_staffroll", 2],
    ["Bonus Game - Super Smash Bros.", "bgm_t23_sb_bonusgame", 1],
    ["Meta Crystal", "bgm_t22_sb_metacristal", 1],
    ["Duel Zone", "bgm_t24_sb_duelzone", 1],
    ["Training Mode", "bgm_t19_sb_trainingmode", 1],
    ["Targets!", "bgm_w44_sbdx_targetwokowase", 1],
    ["Metal Battle", "bgm_w40_sbdx_metalbattle", 1],
    ["Target Smash!", "bgm_x26_sbx_targetwokowase", 1],
    ["Step: Subspace Ver. 3", "bgm_y15_sbx_step_akuukan_ver3", 1],
    ["Boss Battle Song 1", "bgm_y05_sbx_bosssentoukyoku1", 1],
    ["Boss Battle Song 2", "bgm_y07_sbx_bosssentoukyoku2", 1],
    ["Master Hand - Super Smash Bros. for 3DS / Wii U", "bgm_crs05_masterhand", 1],
    ["Master Core", "bgm_crs06_mastercore", 1],
    ["Master Fortress: First Wave", "bgm_crs27_masterfortress01", 1],
    ["Master Fortress: Second Wave", "bgm_crs28_masterfortress02", 1],
    ["Master Orders: Ticket Selection", "bgm_crs39_order_masterside", 1],
    ["Trophy Rush", "bgm_crs20_figurerush", 1],
    ["How to Play - Super Smash Bros.", "bgm_t17_sb_howtoplay", 1],
    ["Menu - Super Smash Bros.", "bgm_t18_sb_menu", 1],
    ["Final Destination - Super Smash Bros.", "bgm_t25a_sb_shuuten_introcut", 0],
    ["Trophies", "bgm_w41_sbdx_figuremeikan", 1],
    ["All-Star Intro", "bgm_w42_sbdx_rest", 1],
    ["Opening - Super Smash Bros. Melee", "bgm_w43_sbdx_opening", 1],
    ["Tournament", "bgm_w45_sbdx_tornament1", 1],
    ["Tournament 2", "bgm_w46_sbdx_tornament2", 1],
    ["Tournament Registration", "bgm_x09_sbx_tornament_entry", 1],
    ["Tournament Grid", "bgm_x10_sbx_tornament_table", 1],
    ["Tournament Match End", "bgm_x11_sbx_tornament_finish", 1],
    ["All-Star Rest Area - Super Smash Bros. Brawl", "bgm_x15_sbx_rest", 1],
    ["Trophy Gallery", "bgm_x19_sbx_figuremeikan", 1],
    ["Sticker Album / Album / Chronicle", "bgm_x20_sealmeikan", 1],
    ["Adventure Map", "bgm_y01_sbx_adv_map", 1],
    ["Step: The Plain", "bgm_y02_sbx_step_heichi", 1],
    ["Step: Subspace", "bgm_y04_sbx_step_akuukan", 1],
    ["Spirits: Collection", "bgm_crs2_23_edit_common", 1],
    ["Vault", "bgm_crs2_40_collection", 1],
    ["Lifelight (JP)", "bgm_crs2_00a_maintheme_jp", 1],
    ["Lifelight", "bgm_crs2_00b_maintheme_en", 1],
    ["Menu", "bgm_crs2_01_menu", 1],
    ["Battlefield", "bgm_crs2_02_senjyou", 1],
    ["Mob Smash", "bgm_crs2_04_kumite", 1],
    ["The Light Realm: March", "bgm_crs2_48_adv_map_light_later", 1],
    ["Main Theme Piano Solo", "bgm_crs2_47_maintheme_piano", 1],
    ["Spectate", "bgm_crs2_38_online_watching", 1],
    ["Menu - Super Smash Bros. Melee", "bgm_w30_sbdx_menu", 1],
    ["Menu 2 - Super Smash Bros. Melee", "bgm_w33_sbdx_menu2", 1],
    ["Menu - Super Smash Bros. Brawl", "bgm_x02_sbx_menu1", 1],
    ["Menu - Super Smash Bros. for 3DS / Wii U", "bgm_crs01_menu", 1],
    ["Main Theme - Super Smash Bros. Brawl", "bgm_x01_sbx_maintheme", 1],
    ["How to Play - Super Smash Bros. Melee", "bgm_crs23_asobikata", 1],
    ["Fighter Selection - Super Smash Bros.", "bgm_t21_sb_characterselect", 1],
    ["Credits - Super Smash Bros.", "bgm_t27_sb_ending_staffroll", 1],
    ["Credits - Super Smash Bros. Brawl", "bgm_x27_sbx_staffroll", 1],
    ["Credits - Super Smash Bros. for 3DS / Wii U", "bgm_crs25_staffroll", 1],
    ["Coin Launcher", "bgm_x21_coinshooter", 1],
    ["Stage Builder", "bgm_x23_stageedit", 1],
    ["Online Practice Stage - Super Smash Bros. Brawl", "bgm_x07_sbx_onlinerenshuustage", 1],
    ["Trophy Shop", "bgm_crs19_figureshop", 1],
    ["Online Practice Stage - Super Smash Bros. for 3DS / Wii U", "bgm_crs07_online", 1],
    ["Events", "bgm_crs36_tournament_table", 1],
    ["Smash Tour: Map", "bgm_crs31_world_map", 1],
    ["Classic: Results Screen", "bgm_crs11_simple_result", 1],
    ["Classic: Final Results", "bgm_crs12_simple_result_final", 1],
    ["Classic: Fail", "bgm_crs13_simple_result_failure", 1],
    ["All-Star Rest Area - Super Smash Bros. for 3DS / Wii U", "bgm_crs15_rest", 1],
    ["Gallery/Hoard", "bgm_crs18_figuremeikan", 1],
    ["VS Matchup", "bgm_crs2_06_vs_matchup", 0],
    ["Tourney: Battle List", "bgm_crs2_07_vs_table", 1],
    ["Tourney: Winner Announcement", "bgm_crs2_08_vs_victory", 1],
    ["Free the Spirit!", "bgm_crs2_22_spiritsboard_roulette", 1],
    ["Spirits: Level Up!", "bgm_crs2_24_spirits_raise", 0],
    ["Spirits: Inventory/Items", "bgm_crs2_27_spirits_organize", 1],
    ["Classic Mode: Mural", "bgm_crs2_28_classic_dificulty", 1],
    ["Classic Mode: Matchup", "bgm_crs2_29_classic_matchup", 0],
    ["Classic Mode: Victory", "bgm_crs2_30_classic_result_win", 1],
    ["Classic Mode: Defeat", "bgm_crs2_31_classic_result_failure", 1],
    ["Classic Mode: Chronicle?", "bgm_crs2_32_classic_chronicle", 0],
    ["Classic Mode: Final Results", "bgm_crs2_33_classic_result_final", 1],
    ["Amiibo Join!", "bgm_crs2_34_amiibo_fpfighter", 0],
    ["Shop", "bgm_crs2_41_shop", 1],
    ["The Final Battle: After the Transformation", "bgm_crs2_46_adv_map_final_later", 1],
    ["Replay/Album/Records", "bgm_crs21_album", 1],
    ["StreetSmash", "bgm_crs22_surechigaidairantou", 1],
    ["Results Screen - Super Smash Bros. for 3DS / Wii U", "bgm_crs24_vs_result", 2],
]

var bgmmario = [
    ["Super Mario Bros. Series", "mario"],
    ["Ground Theme - Super Mario Bros.", "bgm_a71_smb_chijyou", 1],
    ["Ground Theme - Super Mario Bros. Hurry Up!", "bgm_a73_smb_chijyou_hurryup", 0],
    ["Ground Theme - Super Mario Bros. (64)", "bgm_t10_smb_peachjyoujoku", 2],
    ["Ground Theme - Super Mario Bros. (Melee)", "bgm_w01_smb_peachjyou", 2],
    ["Ground Theme - Super Mario Bros. (Brawl)", "bgm_a01_smb_chijyou", 2],
    ["Ground Theme (Band Performance) - Super Mario Bros.", "bgm_a80_smo_smbtheme_bandplay", 1],
    ["Ground Theme / Underground Theme - Super Mario Bros.", "bgm_a24_smb_chijyou_chika", 2],
    ["Underground Theme - Super Mario Bros.", "bgm_a02_smb_chika", 2],
    ["Underwater Theme - Super Mario Bros.", "bgm_a03_smb_suichu", 2],
    ["Super Mario Bros. Medley", "bgm_a32_smb_medley", 2],
    ["Super Mario Bros.: The Lost Levels Medley", "bgm_a33_smb2_medley", 2],
    ["Ground Theme - Super Mario Bros. 2", "bgm_aa22_musa_chijyou", 3],
    ["Ground Theme - Super Mario Bros. 2", "bgm_a68_musa_chijyou", 1],
    ["Rolling Hills A", "bgm_aa05_mvdmin_rollinghills", 1],
    ["Boss Theme - Super Mario Bros. 2", "bgm_a74_musa_chijyou_hurryup", 1],
    ["Ground Theme - Super Mario Bros. 3 (Melee)", "bgm_w15_smb3_supermario3", 2],
    ["Ground Theme - Super Mario Bros. 3", "bgm_a85_smb3_chijyou", 3],
    ["Super Mario Bros. 3 Medley", "bgm_a25_smb3_medley", 2],
    ["Fortress Boss - Super Mario Bros. 3", "bgm_a86_smb3_toridenoboss", 3],
    ["Airship Theme - Super Mario Bros. 3", "bgm_a05_smb3_hikousen", 2],
    ["King Bowser - Super Mario Bros. 3", "bgm_a84_smb3_maoukuppa", 3],
    ["Underground Theme - Super Mario Land", "bgm_a04_lnd_chika", 2],
    ["Title/Ending - Super Mario World", "bgm_a07_wld_title_ending", 2],
    ["Ground Theme - Super Mario World", "bgm_a72_wld_chijyou", 1],
    ["Super Mario World Medley", "bgm_a35_wld_medley", 2],
    ["Castle / Boss Fortress - Super Mario World / SMB 3", "bgm_a06_wld_castle_toride", 2],
    ["Fortress Boss - Super Mario World", "bgm_a34_new2_touboss", 2],
    ["Main Theme - Super Mario 64", "bgm_a69_sm64_maintheme", 2],
    ["Main Theme - Super Mario 64", "bgm_a15_sm64_maintheme", 1],
    ["Slide", "bgm_w02_sm64_rainbowcruise", 2],
    ["Slide", "bgm_a67_sm64_slider", 1],
    ["Delfino Plaza", "bgm_a83_sms_dolpiktown", 3],
    ["Delfino Plaza", "bgm_a13_sms_dolpiktown", 1],
    ["Ricco Harbor", "bgm_a14_sms_riccoharbor", 1],
    ["Main Theme - New Super Mario Bros.", "bgm_a08_new_maintheme", 2],
    ["Super Mario Galaxy", "bgm_a56_glx_supermariogalaxy", 1],
    ["Egg Planet", "bgm_a38_glx_eggplanet", 2],
    ["Egg Planet", "bgm_a54_glx_eggplanet", 1],
    ["Rosalina in the Observatory / Luma's Theme", "bgm_a39_glx_tenmondainorosetta", 2],
    ["Gusty Garden Galaxy", "bgm_a55_glx_windgarden", 1],
    ["Champion Road", "bgm_a65_3dw_milkyway", 1],
    ["Theme of SMG2", "bgm_a60_glx2_themeofsmg2", 1],
    ["The Starship Sails", "bgm_a87_glx2_hoshibunehayuku", 1],
    ["Sky Station", "bgm_a57_glx2_sorajima", 1],
    ["Melty Monster", "bgm_a88_glx2_magmamonster", 1],
    ["Bowser's Galaxy Generator", "bgm_a58_glx2_shingingateikoku", 1],
    ["Fated Battle", "bgm_a59_glx2_shukumeinokessen", 1],
    ["Ground Theme / Underwater Theme - Super Mario 3D Land", "bgm_a27_3dl_smb_theme", 2],
    ["Athletic Theme - New Super Mario Bros. 2", "bgm_a26_new2_athletic_chijyou", 2],
    ["Ground Theme - New Super Mario Bros. 2", "bgm_a44_new2_chijyou", 1],
    ["Ground Theme - New Super Mario Bros. U", "bgm_a45_newu_chijyou", 1],
    ["Super Bell Hill", "bgm_a63_3dw_field01", 1],
    ["The Great Tower Showdown 2", "bgm_a64_3dw_finkoopa02", 1],
    ["Title Theme - Super Mario Maker", "bgm_a70_smm_title", 2],
    ["Fossil Falls", "bgm_a81_smo_waterfallkingdom", 1],
    ["New Donk City", "bgm_a79_smo_newdonkcity", 1],
    ["Jump Up, Super Star!", "bgm_a78_smo_jumpupsuperstar", 1],
    ["Steam Gardens", "bgm_a77_smo_forestkingdom", 1],
    ["Underground Moon Caverns", "bgm_a76_smo_finaldungeon", 1],
    ["Break Free (Lead the Way)", "bgm_a75_smo_breakfree", 1],
    ["Gritzy Desert", "bgm_a10_malrpg2_zarazarasabaku", 2],
    ["Tough Guy Alert!", "bgm_a48_malrpg3_choitotsuyoiyatsura", 1],
    ["The Grand Finale", "bgm_a49_malrpg3_inthefinal", 1],
    ["Paper Mario Medley", "bgm_a29_ppm_medley", 2],
    ["Try, Try Again", "bgm_a28_malrpg4_tryandtry", 2],
    ["Time's Running Out!", "bgm_aa06_malpmm_isogebamaniau", 1],
    ["Mixed-Up Scramble", "bgm_aa07_malpmm_toriodedaikonsen", 1],
    ["Attack and Run!", "bgm_aa08_malpmm_attackendrun", 1],
    ["Battle! - Paper Mario: Color Splash", "bgm_a90_pmc_battle", 1],
    ["This is Minion Turf!", "bgm_aa16_malr1d_koregabokosukabattle", 1],
    ["Pandemonium", "bgm_a47_pty9_minigame", 1],
    ["Title Theme - Mario Party: Island Tour", "bgm_a98_ptyis_maintheme", 1],
    ["Rocket Road", "bgm_a99_ptyis_boardbgm2", 1],
    ["Mario Tennis / Mario Golf", "bgm_r05_mtg_mariotennis_mariogolf", 2],
    ["World Tour", "bgm_a97_gfw_worldtornament", 1],
    ["Stadium Theme - Mario Tennis: Ultra Smash", "bgm_a91_tnsus_simpletennis", 1],
    ["Kingdom Stadium: Night", "bgm_aa14_sptss_kingdumstadium_yoru", 1],
    ["Country Field: away team", "bgm_aa15_sptss_countryfield_senkou", 1],
    ["Title Theme - Mario Tennis Aces", "bgm_aa23_tnsac_mariotennistheme", 1],
    ["Stadium Theme - Mario Tennis Aces", "bgm_aa24_tnsac_stadiumtheme", 1],
    ["Main Theme - Luigi's Mansion", "bgm_a82_lm_theme", 3],
    ["Main Theme - Luigi's Mansion (Brawl)", "bgm_a09_lm_theme", 2],
    ["Luigi's Mansion Series Medley", "bgm_a42_lm_medley", 2],
    ["On the Hunt -Gloomy Manor Ver.- (Instrumental)", "bgm_a62_lm2_urameshiyashiki", 1],
    ["Mario Bros.", "bgm_a17_mb_mariobrothers", 2],
    ["Fever", "bgm_w20_drm_drmario", 2],
    ["Chill (Brawl)", "bgm_q04_drm_chill", 2],
    ["Chill (for 3DS / Wii U)", "bgm_a40_drm_chill_ver2", 2],
    ["Mario Paint Medley", "bgm_a41_mpt_medley", 2],
    ["Plucky Pass Beginnings", "bgm_aa21_skt_kinopiotaicho_theme", 1],
    ["The King of Pyropuff Peak", "bgm_aa20_skt_dragonboss", 1],
    ["Title Theme - Mario vs. Donkey Kong: Tipping Stars", "bgm_aa04_mvdmin_title", 1],
    ["Ground Theme - Super Mario series", "bgm_z84_j_orekyoku_smm_chijyou_link", 1],
    ["Ground Theme (Band Performance) - Super Mario Bros.", "bgm_a80a_smo_smbtheme_bandplay_partlink", 0],
    ["Jump Up, Super Star!", "bgm_a78a_smo_jumpupsuperstar_partlink", 0],
    ["Jump Up, Super Star! (Full Band Performance)", "bgm_a78_smo_jumpupsuperstar_full", 1],
    ["Ground Theme (Full Band Performance) - Super Mario Bros.", "bgm_a80_smo_smbtheme_bandplay_full", 0],
]
var bgmmkart = [
    ["Mario Kart Series", "mariokart"],
    ["Mario Circuit - Super Mario Kart", "bgm_a20_smk_mariocircuit", 2],
    ["Luigi Raceway - Mario Kart 64", "bgm_a21_mk64_luigicircuit", 2],
    ["Rainbow Road - Mario Kart: Double Dash!!", "bgm_a23_mkdd_rainbowroad", 1],
    ["Waluigi Pinball - Mario Kart DS", "bgm_a22_mkds_waluigipinball", 2],
    ["Mushroom Gorge - Mario Kart Wii", "bgm_a50_mktw_kinokocanyon", 1],
    ["Circuit - Mario Kart 7", "bgm_a36_mkt7_circuit", 2],
    ["Rainbow Road - Mario Kart 7", "bgm_a31_mkt7_rainbowroad", 1],
    ["Rainbow Road Medley", "bgm_a30_mkt_rainbowroad_medley", 2],
    ["Mario Kart Stadium - Mario Kart 8", "bgm_a51_mkt8_mariokartstadium", 1],
    ["Mario Circuit - Mario Kart 8", "bgm_a52_mkt8_mariocircuit", 1],
    ["Cloudtop Cruise - Mario Kart 8", "bgm_a37_mkt8_skygarden", 2],
    ["Rainbow Road - Mario Kart 8", "bgm_a53_mkt8_rainbowroad", 1],
    ["Excitebike - Mario Kart 8", "bgm_aa17_mkt8d_excitebike", 1],
    ["Dragon Driftway", "bgm_aa18_mkt8d_dragonroad", 1],
    ["Ice Ice Outpost", "bgm_aa19_mkt8d_tsurutsurutwister", 1],
]
var bgmdk = [
    ["Donkey Kong Series", "donkeykong"],
    ["Opening - Donkey Kong", "bgm_b03_dk_opening", 2],
    ["Donkey Kong Country Returns", "bgm_b14_rtn_donkeykongreturnes", 1],
    ["Donkey Kong Country Returns (Vocals)", "bgm_b13_rtn_donkeykongreturnes_cv", 2],
    ["Donkey Kong", "bgm_b04_dk_donkeykong", 2],
    ["25m Theme", "bgm_b09_dk_25mbgm", 1],
    ["Donkey Kong / Donkey Kong Jr. Medley", "bgm_b20_dk_medley", 3],
    ["The Map Page / Bonus Level", "bgm_b22_spr_mappage_bonuslevel", 3],
    ["The Map Page / Bonus Level", "bgm_b02_spr_mappage_bonuslevel", 1],
    ["Jungle Level (64)", "bgm_t06_spr_kongojungle", 2],
    ["Jungle Level (Melee)", "bgm_w03_spr_junglegarden", 2],
    ["Jungle Level (Brawl)", "bgm_b01_spr_junglelevel_ver2", 2],
    ["Jungle Level Jazz Style (for 3DS / Wii U)", "bgm_b12_spr_junglelevel", 2],
    ["Jungle Level Tribal Style (for 3DS / Wii U)", "bgm_b19_spr_junglelevel_ethnic", 2],
    ["Jungle Hijinxs", "bgm_b15_rtn_bananajungle", 1],
    ["Swinger Flinger", "bgm_b18_tfr_theme03", 1],
    ["Ice Cave Chant", "bgm_b26_spr_theicecove", 1],
    ["Funky's Fugue", "bgm_b25_spr_funkykongpage", 1],
    ["Snakey Chantey", "bgm_b23_spr_shipdeck2", 3],
    ["Gang-Plank Galleon", "bgm_b24_spr_thepirateship", 3],
    ["King K. Rool / Ship Deck 2", "bgm_b05_spr_kingkrool_shipdeck2", 2],
    ["Stickerbush Symphony", "bgm_b06_spr2_togetogetarumeiro", 2],
    ["Crocodile Cacophony", "bgm_b21_spr2_crocodilecacophony", 3],
    ["DK Rap", "bgm_w26_dk64_monkyrap", 2],
    ["Battle for Storm Hill", "bgm_b07_jbt_arashigaokanotatakai", 1],
    ["Boss 2 - DK: Jungle Climber", "bgm_b27_jcl_btlcommon", 1],
    ["Mole Patrol", "bgm_b16_rtn_mogryanokoujigenba", 1],
    ["Gear Getaway", "bgm_b11_rtn_thrillgearflight", 2],
    ["Mangrove Cove", "bgm_b17_tfr_mangroves", 1],
]
var bgmzelda = [
    ["The Legend of Zelda Series", "zelda"],
    ["Title Theme - The Legend of Zelda", "bgm_c01_zld_title", 2],
    ["Overworld Theme - The Legend of Zelda", "bgm_c33_zld_chijiyou", 1],
    ["Overworld Theme - The Legend of Zelda (64)", "bgm_t11_zld_hyrulejiyou", 2],
    ["Overworld Theme - The Legend of Zelda (Melee)", "bgm_w36_zld_greatbay", 2],
    ["Overworld Theme - The Legend of Zelda (Brawl)", "bgm_c02_zld_maintheme", 2],
    ["Overworld & Underworld - The Legend of Zelda (for 3DS / Wii U)", "bgm_c20_zld_maintheme_chika", 2],
    ["The Legend of Zelda Medley", "bgm_c36_zld_medley", 2],
    ["Death Mountain", "bgm_c45_zld_deathmountain", 3],
    ["Temple Theme", "bgm_w24_lnk_shinden", 2],
    ["Great Temple / Temple", "bgm_c03_lnk_daishinden_shinden", 2],
    ["Overworld Theme - The Legend of Zelda: A Link to the Past", "bgm_c34_tri_omotenochijiyou", 1],
    ["Dark World (Brawl)", "bgm_c04_tri_yaminosekai", 2],
    ["Dark World (for 3DS / Wii U)", "bgm_c21_tri_uranochijyou_uradungeon", 2],
    ["Hidden Mountain & Forest", "bgm_c05_tri_uranoyamatomori", 2],
    ["Tal Tal Heights", "bgm_c07_yms_tarutarukougen", 2],
    ["Ocarina of Time Medley", "bgm_c09_tno_medley", 2],
    ["Hyrule Field Theme", "bgm_c08_tno_hyrulemaintheme", 2],
    ["Hyrule Field Theme", "bgm_c35_tno_hyrulemaintheme", 1],
    ["Saria's Theme", "bgm_c48_tno_sarianouta", 2],
    ["Saria's Song / Middle Boss Battle", "bgm_c25_tno_sarianouta", 2],
    ["Song of Storms", "bgm_c10_tno_arashinouta", 2],
    ["Gerudo Valley", "bgm_c22_tno_gerudonotani", 2],
    ["Gerudo Valley", "bgm_c28_tno_gerudonotani", 1],
    ["Termina Field", "bgm_c46_mnk_terminaheigen", 3],
    ["Termina Field", "bgm_c14_mnk_terminaheigen", 1],
    ["The Great Sea / Menu Select", "bgm_c26_kzt_oounabara_menuselect", 2],
    ["Dragon Roost Island", "bgm_c15_kzt_ryuunoshima", 1],
    ["Molgera", "bgm_c44_kzt_morudogeira", 3],
    ["Village of the Blue Maiden", "bgm_c12_4sw_aonomikonomura", 1],
    ["Main Theme - The Legend of Zelda: Twilight Princess", "bgm_c17_tpr_maintheme", 1],
    ["Midna's Lament", "bgm_c42_tpr_kizudarakenomidna", 3],
    ["The Hidden Village", "bgm_c18_tpr_wasureraretasato", 1],
    ["Full Steam Ahead", "bgm_c23_dnk_trainfield2", 2],
    ["Ballad of the Goddess", "bgm_c24_sws_megaminouta_ghirahim", 2],
    ["Ballad of the Goddess", "bgm_c29_sws_megaminouta", 1],
    ["Hyrule Main Theme", "bgm_c30_tri2_hyrulemaintheme", 1],
    ["Yuga Battle (Hyrule Castle)", "bgm_c32_tri2_yuganotheme", 1],
    ["Lorule Main Theme", "bgm_c31_tri2_lorulemaintheme", 1],
    ["Main Theme - The Legend of Zelda: Tri Force Heroes", "bgm_c43_tri3_maintheme", 3],
    ["Woodlands - The Legend of Zelda: Tri Force Heroes", "bgm_c47_tri3_moriarea", 1],
    ["Nintendo Switch Presentation 2017 Trailer BGM", "bgm_c41_zds_3rdtrailertheme", 3],
    ["Main Theme - The Legend of Zelda: Breath of the Wild", "bgm_c40_bow_maintheme", 3],
    ["Kass's Theme", "bgm_c39_bow_kasstheme", 3],
    ["Hyrule Castle (Outside)", "bgm_c38_bow_hyrulejyou_outside", 1],
    ["Calamity Ganon Battle - Second Form", "bgm_c37_bow_ganon_latter", 1],
]
var bgmmetroid = [
    ["Metroid Series", "metroid"],
    ["Title Theme - Metroid", "bgm_d11_mr_title", 2],
    ["Brinstar (64)", "bgm_t13_mr_wakuseizebes", 2],
    ["Brinstar (Melee)", "bgm_w27_mr_brinstar", 2],
    ["Brinstar (Brawl)", "bgm_d01_mr_maintheme", 2],
    ["Brinstar Depths", "bgm_d19_mr_brinstarshinbu", 3],
    ["Brinstar Depths (Melee)", "bgm_w04_mr_brinstarshinbu", 2],
    ["Norfair", "bgm_d02_mr_norfair", 2],
    ["Escape", "bgm_d12_mr_dasshutu", 2],
    ["Ending - Metroid", "bgm_d03_mr_ending", 2],
    ["Vs. Ridley", "bgm_d18_smr_vsridley", 3],
    ["Vs. Ridley (Brawl)", "bgm_d04_smr_vsridley", 2],
    ["Theme of Samus Aran, Space Warrior", "bgm_d05_smr_samusarannotheme", 2],
    ["Sector 1", "bgm_d06_fsn_sector1", 2],
    ["Opening/Menu - Metroid Prime", "bgm_d07_prm_opnening_menu", 2],
    ["Vs. Parasite Queen", "bgm_d17_prm_vsparasitequeen", 3],
    ["Vs. Meta Ridley", "bgm_d09_prm_vsmetaridley", 1],
    ["Multiplayer - Metroid Prime 2: Echoes", "bgm_d10_prm2_multiplay", 1],
    ["Psycho Bits", "bgm_d13_pht_psychobits", 1],
    ["Lockdown Battle Theme", "bgm_d15_otm_hanyoutojikomebattle", 1],
    ["The Burning Lava Fish", "bgm_d14_otm_yougangyobattle", 1],
    ["Nemesis Ridley", "bgm_d16_otm_ridleybattle", 1],
    ["Main Theme - Metroid Prime: Federation Force", "bgm_d20_pff_splashscreen", 1],
    ["Magmoor Caverns - Metroid: Samus Returns", "bgm_d22_srt_areabgmnettai", 1],
    ["Boss Battle 4 - Metroid: Samus Returns", "bgm_d23_srt_zetametroid", 1],
    ["End Results - Metroid: Samus Returns", "bgm_d21_srt_result", 1],
]
var bgmfzero = [
    ["F-Zero Series", "fzero"],
    ["Mute City", "bgm_i12_fzr_sfc_mutecity", 1],
    ["Mute City (Melee)", "bgm_w29_fzr_mutecity", 2],
    ["Mute City (Brawl)", "bgm_i01_fzr_mutecity", 2],
    ["Mute City (for 3DS / Wii U)", "bgm_i11_fzr_mutecity", 2],
    ["Big Blue", "bgm_i25_fzr_bigblue", 3],
    ["Big Blue", "bgm_i17_fzr_bigblue", 1],
    ["Big Blue (Melee)", "bgm_w11_fzr_bigblue", 2],
    ["Sand Ocean", "bgm_i16_fzr_sandocean", 3],
    ["Sand Ocean", "bgm_i21_fzr_sandocean", 1],
    ["Death Wind", "bgm_i18_fzr_deathwind", 1],
    ["F-ZERO Medley", "bgm_i15_fzr_medley", 3],
    ["Silence", "bgm_i22_fzr_sandocean", 1],
    ["Port Town", "bgm_i20_fzr_porttown", 1],
    ["Red Canyon", "bgm_i14_fzr_redcanyon", 1],
    ["White Land", "bgm_i02_fzr_whiteland", 2],
    ["White Land", "bgm_i23_fzr_whiteland1", 1],
    ["White Land II", "bgm_i24_fzr_whiteland2", 1],
    ["Fire Field", "bgm_i03_fzr_firefield", 2],
    ["Fire Field", "bgm_i19_fzr_firefield", 1],
    ["Car Select", "bgm_i04_fzx_carselect", 1],
    ["Dream Chaser", "bgm_i05_fzx_dreamchaser", 1],
    ["Devil's Call in Your Heart", "bgm_i06_fzx_devilscallinyourheart", 1],
    ["Climb Up! And Get the Last Chance!", "bgm_i07_fzx_climbup_andgetthelastchance", 1],
    ["Brain Cleaner", "bgm_i08_gx_braincleaner", 1],
    ["Shotgun Kiss", "bgm_i09_gx_shotgunkiss", 1],
    ["Planet Colors", "bgm_i10_gx_planetcolors", 1],
]
var bgmyoshi = [
    ["Yoshi Series", "yoshi"],
    ["Athletic Theme - Super Mario World", "bgm_w05_wld_yostertou", 2],
    ["Yoshi's Island (Brawl)", "bgm_e03_ild_yoshiisland", 2],
    ["Yoshi's Island (for 3DS / Wii U)", "bgm_e07_ild_stage1_1", 2],
    ["Obstacle Course - Yoshi's Island", "bgm_e02_ild_athletic", 2],
    ["Yoshi's Story (64)", "bgm_t08_sb_yoshiisland", 2],
    ["Yoshi's Story (Melee)", "bgm_w37_str_yoshistory", 2],
    ["Yoshi's Tale", "bgm_e01_str_ending", 2],
    ["Flower Field", "bgm_e05_cty_ohanabatake", 2],
    ["Wildlands", "bgm_e06_ilds_kouyanotheme", 2],
    ["Main Theme - Yoshi's New Island", "bgm_e12_nild_maintheme", 3],
    ["Main Theme - Yoshi's New Island", "bgm_e09_nild_maintheme", 1],
    ["Bandit Valley", "bgm_e10_nild_gypsy", 1],
    ["Main Theme - Yoshi's Woolly World", "bgm_e08_kny_keitonoyoshi", 2],
    ["Main Theme - Yoshi's Woolly World", "bgm_e11_wol_yoshiwoolworld", 1],
    ["Obstacle Course - Yoshi's Island", "bgm_e02c_ild_athletic_scenelink", 2],
]
var bgmkirby = [
    ["Kirby Series", "kirby"],
    ["Green Greens (Melee)", "bgm_w07_kby_greengreens", 2],
    ["Green Greens (for 3DS / Wii U)", "bgm_f13_kby_greengreens_ver2", 2],
    ["Kirby Retro Medley", "bgm_f42_kby_gb_medley", 1],
    ["King Dedede's Theme (Brawl)", "bgm_f02_kby_dededeounotheme", 2],
    ["King Dedede's Theme (for 3DS / Wii U)", "bgm_f20_sdx_dedededaiounotheme", 2],
    ["Staff Credits - Kirby's Dream Land", "bgm_f32_kby_staffroll", 3],
    ["Boss Theme Medley - Kirby Series", "bgm_f03_kby_bossthememedley", 2],
    ["Ice Cream Island", "bgm_f30_yim_icecreamisland", 2],
    ["Butter Building (Brawl)", "bgm_f04_yim_butterbuilding", 2],
    ["Butter Building (for 3DS / Wii U)", "bgm_f19_yim_butterbuilding", 2],
    ["Gourmet Race (Brawl)", "bgm_f05_sdx_gekitotsugourmetrace", 2],
    ["Gourmet Race (64)", "bgm_t09_sdx_pupupuland", 2],
    ["Gourmet Race (Melee)", "bgm_w06_sdx_yumenoizumi", 2],
    ["The Great Cave Offensive", "bgm_f21_sdx_doukutsudaisakusen", 2],
    ["Meta Knight's Revenge", "bgm_f06_sdx_metaknightnogyakushuu", 2],
    ["Vs. Marx", "bgm_f07_sdx_vsmarx", 2],
    ["Planet Popstar", "bgm_f28_kby64_popstar", 1],
    ["02 Battle", "bgm_f08_kby64_zerotwosen", 2],
    ["Forest Stage", "bgm_f27_air_moristage", 1],
    ["Celestial Valley", "bgm_f23_air_vallerion", 1],
    ["Frozen Hillside", "bgm_f11_air_colda", 1],
    ["City Trial", "bgm_f31_air_citytrial", 3],
    ["The Legendary Air Ride Machine", "bgm_f01_air_airridemachine", 2],
    ["Forest/Nature Area", "bgm_f22_knd_morishizenarea", 2],
    ["Squeak Squad Theme", "bgm_f12_sdd_dorochedannotheme", 2],
    ["The Adventure Begins", "bgm_f24_kbyw_boukennohajimari", 1],
    ["Through the Forest", "bgm_f25_kbyw_moriwonukete", 1],
    ["Sky Tower", "bgm_f33_wii_skytower", 1],
    ["Dangerous Dinner", "bgm_f34_wii_dagerousdiner", 1],
    ["CROWNED", "bgm_f35_wii_crowned", 1],
    ["Floral Fields", "bgm_f26_tdx_fuyuutairikunohanabatake", 1],
    ["Fatal Blooms in Moonlight", "bgm_f36_tdx_kyoukasuigetsu", 1],
    ["The World to Win", "bgm_f29_tdx_tamashiinotatakai", 1],
    ["CROWNED: Ver.2", "bgm_f37_ddz_crowned_ver2", 1],
    ["Venturing Into the Mechanized World", "bgm_f38_rbp_kikainosekainodaibouken", 1],
    ["Pink Ball Activate!", "bgm_f39_rbp_roboboarmor", 1],
    ["Kirby Battle Royale: Main Theme", "bgm_f40_bdx_maintheme", 1],
    ["A Battle of Friends and Bonds 2", "bgm_f41_sta_tomotokizunanotatakai2", 1],
    ["Kirby Retro Medley", "bgm_f42a_kby_gb_medley_scenelink", 1],
]
var bgmfox = [
    ["Star Fox Series", "starfox"],
    ["Main Theme - Star Fox", "bgm_g01_sfx_maintheme", 2],
    ["Corneria - Star Fox", "bgm_g02_sfx_corneria", 2],
    ["Space Armada", "bgm_g10_sfx_spacearmada", 2],
    ["Star Fox Medley", "bgm_w08_sfx_cornelia", 2],
    ["Main Theme - Star Fox 64 (64)", "bgm_t14_sfx64_sectorz", 2],
    ["Main Theme - Star Fox 64 (Melee)", "bgm_w28_sfx_wakuseivenom", 2],
    ["Main Theme - Star Fox 64 (Brawl)", "bgm_g03_sfx64_maintheme", 2],
    ["Star Wolf", "bgm_g09_ast_starwolf", 1],
    ["Star Wolf (Brawl)", "bgm_g05_sfx64_starwolf", 2],
    ["Star Wolf's Theme / Sector Z (for 3DS / Wii U)", "bgm_g12_sfx64_starwolf_sectorz", 2],
    ["Area 6 - Star Fox 64", "bgm_g04_sfx64_area6", 2],
    ["Area 6 Ver. 2 - Star Fox 64", "bgm_g11_sfx64_area6ver2", 2],
    ["Theme from Area 6 / Missile Slipstream", "bgm_g13_sfx64_cmd_area6_missle", 2],
    ["Space Battleground", "bgm_g07_ast_sentoutyuuiki", 1],
    ["Break: Through the Ice", "bgm_g08_ast_hyougentoppaseyo", 1],
    ["Corneria - Star Fox Zero", "bgm_g15_sfz_stgdefence", 1],
    ["Sector Ω", "bgm_g16_sfz_stgspace4", 1],
    ["Return to Corneria - Star Fox Zero", "bgm_g14_sfz_stgcorneria2", 1],
]
var bgmpokemon = [
    ["Pokemon Series", "pkmn"],
    ["Main Theme - Pokemon Red & Pokemon Blue (64)", "bgm_t15_pm_yamabukicity", 2],
    ["Main Theme - Pokemon Red & Pokemon Blue (Melee)", "bgm_w09_pm_pokemonstadium", 2],
    ["Main Theme - Pokemon Red & Pokemon Blue (Brawl)", "bgm_h01_pm_maintheme", 2],
    ["Road to Viridian City - Pokemon Red / Pokemon Blue", "bgm_h03_pm_tokiwahenomichi_nibicity", 2],
    ["Pokemon Center - Pokemon Red / Pokemon Blue", "bgm_h02_pm_pokemoncenter", 2],
    ["Pokemon Gym/Evolution - Pokemon Red / Pokemon Blue", "bgm_h04_pm_pokemongym_shinka", 2],
    ["Pokemon Red / Pokemon Blue Medley", "bgm_w10_pm_pokemonakuukan", 2],
    ["Pokemon Gold / Pokemon Silver Medley", "bgm_w16_kg_pekemonstadiumkingin", 2],
    ["Battle! (Wild Pokemon) - Pokemon Ruby / Pokemon Sapphire", "bgm_h05_rs_sentou_yaseipokemon", 2],
    ["Victory Road - Pokemon Ruby / Pokemon Sapphire", "bgm_h06_rs_championroad", 2],
    ["Battle! (Wild Pokemon) - Pokemon Diamond / Pokemon Pearl", "bgm_h07_dp_sentou_yaseipokemon", 2],
    ["Battle! (Team Galactic)", "bgm_h09_dp_gingadan", 2],
    ["Route 209 - Pokemon Diamond / Pokemon Pearl", "bgm_h10_dp_209bandouro", 2],
    ["Battle! (Dialga/Palkia) / Spear Pillar", "bgm_h08_dp_dialgapalkia_yarinohashira", 2],
    ["Battle! (Champion) / Champion Cynthia", "bgm_h16_dp_sentou_champion", 2],
    ["Route 10 - Pokemon Black / Pokemon White", "bgm_h17_bw_10bandouro", 2],
    ["N's Castle", "bgm_h11_bw_n_medley", 2],
    ["Battle! (Reshiram/Zekrom)", "bgm_h12_bw_sentou_zekrom_reshiram", 2],
    ["Route 23 - Pokemon Black 2 / Pokemon White 2", "bgm_h18_b2w2_23bandouro", 2],
    ["Battle! (Wild Pokemon) - Pokemon X / Pokemon Y", "bgm_h20_xy_sentou_yaseipokemon", 1],
    ["Battle! (Trainer Battle) - Pokemon X / Pokemon Y", "bgm_h13_xy_sentou_trainer", 2],
    ["Battle! (Team Flare)", "bgm_h19_xy_vs_flare", 2],
    ["Lumiose City", "bgm_h14_xy_miarecity", 1],
    ["Victory Road - Pokemon X / Pokemon Y", "bgm_h21_xy_championroad", 1],
    ["Battle! (Champion) - Pokemon X / Pokemon Y", "bgm_h22_xy_sentou_champion", 1],
    ["Battle! (Steven)", "bgm_h24_oras_kessen_daigo", 3],
    ["Battle! (Lorekeeper Zinnia)", "bgm_h29_oras_sentou_higana", 3],
    ["Battle! (Wild Pokemon) - Pokemon Sun / Pokemon Moon", "bgm_h23_sm_sentou_yaseipokemon", 3],
    ["Battle! (Trainer) - Pokemon Sun / Pokemon Moon", "bgm_h28_sm_sentou_trainer", 3],
    ["Battle! (Island Kahuna)", "bgm_h25_sm_sentou_shimakingshimaqueen", 3],
    ["Battle! (Gladion)", "bgm_h26_sm_sentou_gladion", 3],
    ["Battle! (Elite Four) / Battle! (Solgaleo/Lunala)", "bgm_h27_sm_sentou_shitennou_solgaleo_lunala", 3],
    ["The Battle at the Summit!", "bgm_h30_sm_choujoukessen", 3],
]
var bgmmother = [
    ["Earthbound Series", "mother"],
    ["Pollyanna (I Believe in You)", "bgm_w19_mtr_pollyanna", 2],
    ["Humoresque of a Little Dog", "bgm_k05_mtr_humoresqueofalittledog", 2],
    ["Magicant", "bgm_k14_mtr_magicant", 3],
    ["Magicant (for 3DS / Wii U)", "bgm_k11_mtr_magicant_eightmelodies", 2],
    ["Bein' Friends", "bgm_w12_mtr_onet", 2],
    ["Snowman", "bgm_k01_mtr_snowman", 2],
    ["Onett Theme / Winters Theme", "bgm_k13_mtr2_onettnotheme", 2],
    ["Fourside", "bgm_k15_mtr2_fourside", 3],
    ["Fourside (Melee)", "bgm_w32_mtr2_fourside", 2],
    ["Smiles and Tears", "bgm_k12_mtr2_smileandtears", 2],
    ["Mother 3 Love Theme", "bgm_k08_mtr3_ainotheme", 2],
    ["Unfounded Revenge / Smashing Song of Praise", "bgm_k09_mtr3_revenge_bukkowashisanka", 2],
    ["You Call This a Utopia?!", "bgm_k10_mtr3_utopiadesho", 2],
    ["Porky's Theme", "bgm_k07_mtr_porkynotheme", 2],
]
var bgmfe = [
    ["Fire Emblem Series", "fe"],
    ["Fire Emblem Theme", "bgm_j02_fem_theme", 2],
    ["Fire Emblem Theme (Heroic Origins)", "bgm_j40_hr_menutitle", 3],
    ["Code Name: F.E.", "bgm_r95_stm_sodename_fe", 1],
    ["Lords-A Chance Encounter", "bgm_r96_stm_lords_kaikou", 1],
    ["Story 5 Meeting", "bgm_w17_fem_fireemblem", 2],
    ["Shadow Dragon Medley", "bgm_j03_fem_aankokuryuumedley", 2],
    ["Coliseum Series Medley", "bgm_j18_ssk_tougijyou", 2],
    ["March to Deliverance", "bgm_j34_eco_mapb_a2", 1],
    ["With Mila's Divine Protection (Celica Map 1)", "bgm_j04_gdn_miranokagototomoni", 2],
    ["Fight 1 - Fire Emblem Gaiden", "bgm_j15_gdn_tatakai1", 2],
    ["Lords-Showdown", "bgm_r97_stm_lords_kessen", 1],
    ["Those Who Challenge Gods", "bgm_j32_eco_btl_a2", 1],
    ["Under This Banner", "bgm_j36_mnn_konohatanomotoni", 3],
    ["Advance", "bgm_j37_mnn_singeki", 3],
    ["Fire Emblem: Mystery of the Emblem Medley", "bgm_j17_mnn_singeki", 2],
    ["Meeting Theme Series Medley", "bgm_j16_mnn_deainotheme", 2],
    ["Edge of Adversity", "bgm_j30_ssk_shituinohate", 3],
    ["Beyond Distant Skies - Roy's Departure", "bgm_j38_fnk_anosoranomukouni_roynotabidachi", 3],
    ["Winning Road - Roy's Hope", "bgm_j07_fnk_winningroad_roynokibou", 2],
    ["Attack - Fire Emblem", "bgm_j08_rnk_kougeki", 2],
    ["Preparing to Advance", "bgm_j06_snk_shingekijunbi", 2],
    ["Victory Is Near", "bgm_j12_sek_victoryisnear", 1],
    ["Crimean Army Sortie", "bgm_j10_sek_crimeaarmysortie", 1],
    ["Against the Dark Knight", "bgm_j09_sek_againstthedarkknight", 1],
    ["Power-Hungry Fool", "bgm_j11_sek_powerhungryfool", 1],
    ["Eternal Bond", "bgm_j13_anm_ikenotheme", 1],
    ["The Devoted", "bgm_j20_anm_tyuugitsukusan", 1],
    ["Time of Action", "bgm_j21_anm_kekkinotoki", 1],
    ["Prelude (Ablaze)", "bgm_j29_ksi_jomaku_honoo", 3],
    ["Duty (Ablaze)", "bgm_j22_ksi_shimei_honoo", 1],
    ["Destiny (Ablaze)", "bgm_j31_ksi_shukumei_honoo", 3],
    ["Conquest (Ablaze)", "bgm_j23_ksi_ensei_honoo", 1],
    ["Id (Purpose)", "bgm_j39_ksi_i_i", 3],
    ["Id (Purpose)", "bgm_j14_ksi_i_i", 1],
    ["Lost in Thoughts All Alone", "bgm_j28_if_hitoriomou", 3],
    ["Lost in Thoughts All Alone (JP)", "bgm_j25_if_hitoriomou", 1],
    ["Lost in Thoughts All Alone", "bgm_j26_if_lostinthoughtsallalone", 1],
    ["Lost in Thoughts All Alone (for 3DS / Wii U)", "bgm_j24_if_hitoriomou", 2],
    ["Gear Up For...", "bgm_j27_hr_menu", 3],
    ["Lord of a Dead Empire", "bgm_j35_eco_mapb_rudlf", 1],
    ["The Scions' Dance in Purgatory", "bgm_j33_eco_btl_berkut2", 1],
    ["Fire Emblem: Three Houses Main Theme (JP)", "bgm_j41a_fsg_maintheme_jp", 3],
    ["Fire Emblem: Three Houses Main Theme", "bgm_j41b_fsg_maintheme_en", 3],
    ["Fodlan Winds", "bgm_j42_fsg_fodlanogyoufu", 1],
    ["The Edge of Dawn (Seasons of Warfare) (JP)", "bgm_j43a_fsg_hraesvelgrnoshoujo_fuukasetsugetsu", 1],
    ["The Edge of Dawn (Seasons of Warfare)", "bgm_j43b_fsg_theedgeofdawn_seasonsofwarfare", 1],
    ["Tearing Through Heaven", "bgm_j44_fsg_tensakuryuusei", 1],
    ["Chasing Daybreak", "bgm_j45_fsg_yabounochihei", 1],
    ["Blue Skies and a Battle", "bgm_j46_fsg_jujishitachinosoukyuu", 1],
    ["Between Heaven and Earth", "bgm_j47_fsg_tentochinokyoukai", 1],
    ["The Apex of the World", "bgm_j48_fsg_konosekainoitadakide", 1],
    ["Paths That Will Never Cross", "bgm_j49_fsg_majiwaranumichi", 1],
]
var bgmgamewatch = [
    ["Game & Watch Series", "gandw"],
    ["Flat Zone", "bgm_w14_gw_flatzone", 1],
    ["Flat Zone 2", "bgm_r04_gw_flatzone2", 1],
]
var bgmicaros = [
    ["Kid Icarus Series", "kid"],
    ["Title Theme - Kid Icarus", "bgm_p02_pnk_title", 2],
    ["Kid Icarus Retro Medley", "bgm_p04_pnk_genkyokumedley", 1],
    ["Underworld", "bgm_p01_pnk_meifukai", 2],
    ["Overworld", "bgm_p03_pnk_chijyoukai", 2],
    ["Boss Fight 1 - Kid Icarus: Uprising", "bgm_p07_shs_bosssen1", 1],
    ["Magnus's Theme", "bgm_p13_shs_magnanotheme", 1],
    ["Dark Pit's Theme", "bgm_p09_shs_blackpitnotheme", 1],
    ["In the Space-Pirate Ship", "bgm_p06_shs_seizokusen", 2],
    ["Hades's Infernal Theme", "bgm_p15_shs_hadesnotheme", 1],
    ["Wrath of the Reset Bomb", "bgm_p05_shs_syokikabakudannokyoufu", 2],
    ["Thunder Cloud Temple", "bgm_p16_shs_raiunnoteien", 1],
    ["Lightning Chariot Base", "bgm_p11_shs_ginganoseiiki", 2],
    ["Destroyed Skyworld", "bgm_p12_shs_houkaiengeland", 2],
]
var bgmwario = [
    ["WarioWare Series", "ww"],
    ["WarioWare, Inc.", "bgm_m01_miw_madeinwario", 2],
    ["WarioWare, Inc. Medley", "bgm_m02_miw_medley", 2],
    ["Ashley's Song (JP) (Brawl)", "bgm_m07_smw_ashreynotheme", 2],
    ["Ashley's Song", "bgm_m08_smw_ashreyssong", 2],
    ["Ashley's Song (JP) (for 3DS / Wii U)", "bgm_m19_smw_ashreynotheme", 2],
    ["Mike's Song (JP)", "bgm_m05_smw_mikegasukisuki", 2],
    ["Mike's Song", "bgm_m06_smw_mikessong", 2],
    ["Mona Pizza's Song (JP)", "bgm_m03_mmw_kochiramonapizza", 2],
    ["Mona Pizza's Song", "bgm_m04_mmw_monapizzassong", 2],
    ["Ruins - Wario Land: Shake It!", "bgm_m20_wls_1_1_1_iseki", 1],
    ["Gamer", "bgm_m21b_gaw_gamer_mom", 1],
    ["WarioWare, Inc.", "bgm_m01a_miw_madeinwario_scenelink", 2],
    ["Gamer", "bgm_m21c_gaw_gamer_scenelink", 1],
]
var bgmpikmin = [
    ["Pikmin Series", "pikmin"],
    ["Main Theme - Pikmin", "bgm_l17_pik_maintheme", 3],
    ["Main Theme - Pikmin", "bgm_l06_pik_maintheme", 1],
    ["Forest of Hope", "bgm_l02_pik_kibounomori", 1],
    ["Stage Clear / Title Theme - Pikmin", "bgm_l07_pik_clear_title", 2],
    ["Environmental Noises", "bgm_l03_pik_kankyouon", 2],
    ["World Map - Pikmin 2", "bgm_l01_pik2_worldmap", 2],
    ["Stage Select - Pikmin 2", "bgm_l09_pik2_stageselect", 2],
    ["Garden of Hope", "bgm_l12_pik3_saikainohanazono", 3],
    ["Garden of Hope", "bgm_l11_pik3_saikainohanazono", 1],
    ["Mission Mode - Pikmin 3", "bgm_l10_pik3_missionmode", 2],
    ["The Keeper of the Lake", "bgm_l14_hpk_boss2", 1],
    ["Flashes of Fear", "bgm_l15_hpk_boss4", 1],
    ["Over Wintry Mountains", "bgm_l13_hpk_tokusyucourse4omote", 1],
    ["Fragment of Hope", "bgm_l16_hpk_boss9later", 1],
]
var bgmanimal = [
    ["Animal Crossing Series", "ac"],
    ["Title Theme - Animal Crossing", "bgm_n21_dmp_title", 3],
    ["2:00 a.m. - Animal Crossing: Wild World", "bgm_n03_dnm_200am", 2],
    ["Go K.K. Rider!", "bgm_n02_dnm_yuke_kekerider", 2],
    ["Title Theme - Animal Crossing: Wild World", "bgm_n20_dnm_title", 3],
    ["Title Theme - Animal Crossing: Wild World (Brawl)", "bgm_n01_dnm_title", 2],
    ["Town Hall and Tom Nook's Store - Animal Crossing: Wild World", "bgm_n06_oid_yakubatotanukichi", 2],
    ["The Roost - Animal Crossing: Wild World", "bgm_n05_oid_junkissa_hatonosu", 2],
    ["Plaza / Title Theme - Animal Crossing: City Folk / Animal Crossing: Wild World", "bgm_n15_mhi_town_main", 2],
    ["Outdoors at 7 p.m. (Sunny) / Main Street - Animal Crossing: New Leaf", "bgm_n16_tbd_feild19ji_hare", 2],
    ["Kapp'n's Song", "bgm_n14_tbd_kappeinouta", 2],
    ["Tour - Animal Crossing: New Leaf", "bgm_n17_tbd_tour", 2],
    ["Tortimer Island Medley", "bgm_n13_tbd_kotobukiland_medley", 2],
    ["Bubblegum K.K.", "bgm_n18_tbd_kekeidol", 2],
    ["Title Theme - Animal Crossing: Happy Home Designer", "bgm_n19_hhd_title", 3],
    ["House Preview", "bgm_n24_hhd_kanseidemo", 1],
    ["K.K. Cruisin'", "bgm_n07_dnm_kk_urban", 1],
    ["K.K. Western", "bgm_n08_dnm_kk_western", 1],
    ["K.K. Gumbo", "bgm_n09_dnm_kk_neworleans", 1],
    ["Rockin' K.K.", "bgm_n10_dnm_kk_rocknroll", 1],
    ["DJ K.K.", "bgm_n11_dnm_kk_eurobeat", 1],
    ["K.K. Condor", "bgm_n12_dnm_kk_perunouta", 1],
]
var bgmwiifit = [
    ["Wii Fit Series", "wiifit"],
    ["Main Menu - Wii Fit", "bgm_r82_wft_mainmenu", 3],
    ["Super Hoop", "bgm_r28_wft_hoopdance", 2],
    ["Rhythm Boxing", "bgm_r44_wft_rhythmboxing", 1],
    ["Advanced Step", "bgm_r83_wft_fumidaidance", 1],
    ["Yoga", "bgm_r84_wft_yoga", 1],
    ["Skateboard Arena (Free Mode)", "bgm_r30_wftp_skebo_freemode", 2],
    ["Mischievous Mole-way", "bgm_r45_wftp_segwaychallange_tyuukyuu", 1],
    ["Wii Fit Plus Medley", "bgm_r29_wftp_athleticmii", 2],
    ["Training Menu - Wii Fit U", "bgm_r73_wftu_trainingmenu", 3],
    ["Core Luge", "bgm_r46_wftu_luge", 1],
]
var bgmpunchout = [
    ["Punch-Out!! Series", "punchout"],
    ["Minor Circuit", "bgm_q21_mpo_shiaityuu", 2],
    ["Minor Circuit", "bgm_r21_wpo_minorcircuit", 1],
    ["Jogging / Countdown", "bgm_q18_po_running_countdown", 2],
    ["World Circuit Theme", "bgm_r54_po_worldcircuitfight", 1],
    ["Title Theme - Punch-Out!! (Wii)", "bgm_r53_po_splashscreen", 1],
]
var bgmxenoblade = [
    ["Xenoblade Chronicles Series", "xenoblade"],
    ["Engage the Enemy", "bgm_r55_xbd_tekitonotaiji", 1],
    ["Time to Fight! - Xenoblade Chronicles", "bgm_r56_xbd_sentou", 1],
    ["Gaur Plain", "bgm_r23_xbd_gaurheigen", 1],
    ["Gaur Plain (Night)", "bgm_r57_xbd_gaurheigen_yoru", 1],
    ["Xenoblade Chronicles Medley", "bgm_r36_xbd_arrangemedley", 2],
    ["An Obstacle in Our Path - Xenoblade Chronicles", "bgm_r58_xbd_yukutewohabamumono", 1],
    ["You Will Know Our Names", "bgm_r24_xbd_nawokansurumonotachi", 1],
    ["Mechanical Rhythm", "bgm_r25_xbd_kinoritsudou", 1],
    ["Battle!! - Xenoblade Chronicles 2", "bgm_rr09_xbd2_sentou", 1],
    ["Those Who Stand Against Our Path - Xenoblade Chronicles 2", "bgm_rr11_xbd2_yukutewohabamumonotachi", 1],
    ["Still, Move Forward!", "bgm_rr10_xbd2_soredemomaeesusume", 1],
]
var bgmspla = [
    ["Splatoon Series", "splat"],
    ["Splattack!", "bgm_sp17_sp_splattack", 3],
    ["Splattack!", "bgm_sp01_sp_splattack", 1],
    ["Ink or Sink", "bgm_sp02_sp_inkorsink", 1],
    ["Seaskape", "bgm_sp16_sp_seaskape", 3],
    ["Kraken Up", "bgm_sp04_sp_krakenup", 1],
    ["Metalopod", "bgm_sp05_sp_metalopod", 1],
    ["Split & Splat", "bgm_sp10_sp_quickstart", 1],
    ["Now or Never!", "bgm_sp14_sp_nowornever", 3],
    ["Ink Me Up", "bgm_sp07_sp_kimiironisomete", 1],
    ["Octoweaponry", "bgm_sp11_sp_octoweaponry", 1],
    ["I Am Octavio", "bgm_sp12_sp_iamoctavio", 1],
    ["Calamari Inkantation", "bgm_sp09_sp_shiokarabushi", 1],
    ["Bomb Rush Blush", "bgm_sp15_sp_tokimekibombrush", 3],
    ["Inkoming!", "bgm_sp18_sp2_inkoming", 1],
    ["Rip Entry", "bgm_sp19_sp2_ripentry", 1],
    ["Undertow", "bgm_sp20_sp2_undertow", 1],
    ["Don't Slip", "bgm_sp21_sp2_dontslip", 1],
    ["Endolphin Surge", "bgm_sp22_sp2_endolphinsurge", 1],
    ["Ebb & Flow", "bgm_sp23_sp2_fullthrottle_tentacle", 1],
    ["Acid Hues", "bgm_sp24_sp2_ripplerefrain", 1],
    ["Muck Warfare", "bgm_sp25_sp2_redhotegoist", 1],
    ["Deluge Dirge", "bgm_sp26_sp2_gougou", 1],
]
var bgmmetalgear = [
    ["Metal Gear Solid Series", "mgs"],
    ["Theme of Tara", "bgm_mg03_mg_themeoftara", 2],
    ["Theme of Solid Snake", "bgm_mg13_mg2_themeofsolidsnake", 3],
    ["Cavern", "bgm_mg07_mgs_cavern", 1],
    ["Encounter", "bgm_mg02_mgs_encounter", 2],
    ["Yell \"Dead Cell\"", "bgm_mg04_mgs2_yelldeadcell", 1],
    ["Snake Eater", "bgm_mg12_mgs3_snakeeater", 3],
    ["Snake Eater (Instrumental)", "bgm_mg05_mgs3_snakeeater_instrumental", 1],
    ["Battle in the Base", "bgm_mg08_mgs3_battleinthebase", 1],
    ["MGS4 ~Theme of Love~", "bgm_mg06_mgs4_themeoflove", 2],
    ["Calling to the Night", "bgm_mg11_callingtothenight", 1],
    ["Main Theme - METAL GEAR SOLID PEACE WALKER", "bgm_mg14_msp_maintheme", 1],
]
var bgmsonic = [
    ["Sonic Series", "sonic"],
    ["Green Hill Zone", "bgm_u01_snc_greenhillzone", 1],
    ["Scrap Brain Zone", "bgm_u02_snc_scrapbrainzone", 1],
    ["Emerald Hill Zone", "bgm_u03_snc2_emeraldhillzone", 1],
    ["Sonic Boom", "bgm_u06_snccd_sonicboom", 1],
    ["Angel Island Zone", "bgm_u04_snc3_angelislandzone", 2],
    ["Super Sonic Racing", "bgm_u07_sncr_supersonicracing", 1],
    ["Open Your Heart", "bgm_u08_sadv_openyourheart", 1],
    ["Live & Learn", "bgm_u09_sadv2_liveandlearn", 1],
    ["Escape from the City", "bgm_u14_sadv2_escapefromthecity", 1],
    ["Sonic Heroes", "bgm_u10_shrs_sonicheroes", 1],
    ["His World (Theme of Sonic The Hedgehog - 2006 E3 Version -)", "bgm_u12_snc06_hisworld_instrumental", 1],
    ["Seven Rings in Hand", "bgm_u13_srng_sevenringsinhand", 1],
    ["Knight of the Wind", "bgm_u15_sblk_knightofthewind", 1],
    ["Reach for the Stars", "bgm_u16_sclr_reachforthestars", 1],
    ["Rooftop Run", "bgm_u17_sgen_rooftoprun", 1],
    ["Wonder World", "bgm_u18_slst_wonderworld", 1],
    ["Windy Hill - Zone 1", "bgm_u19_slst_windyhill_zone1", 1],
    ["Lights, Camera, Action! (Studiopolis Zone Act 1)", "bgm_u20_smn_studiopolis_act1", 1],
    ["Fist Bump", "bgm_u21_sfo_fistbump", 1],
    ["Sunset Heights", "bgm_u22_sfo_sunsetheight", 1],
]
var bgmrockman = [
    ["Mega Man Series", "megaman"],
    ["Cut Man Stage", "bgm_s05_rm_cutman_stage", 2],
    ["Guts Man Stage", "bgm_s24_rm_gutsmanstage", 3],
    ["Ice Man Stage", "bgm_s14_rm_icemanstage", 3],
    ["Bomb Man Stage", "bgm_s15_rm_bombmanstage", 3],
    ["Fire Man Stage", "bgm_s16_rm_firemanstage", 3],
    ["Mega Man 2 Medley", "bgm_s01_rm2_medley", 2],
    ["Metal Man Stage", "bgm_s17_rm2_metalmanstage", 3],
    ["Air Man Stage", "bgm_s02_rm2_airman_stage", 2],
    ["Quick Man Stage", "bgm_s06_rm2_quickman_stage", 2],
    ["Crash Man Stage", "bgm_s18_rm2_crashmanstage", 3],
    ["Flash Man Stage", "bgm_s31_rm2_flashmanstage", 3],
    ["Wood Man Stage", "bgm_s11_rm2_woodmanstage", 3],
    ["Hard Man Stage", "bgm_s25_rm3_hardmanstage", 3],
    ["Top Man Stage", "bgm_s13_rm3_topmanstage", 3],
    ["Snake Man Stage", "bgm_s30_rm3_snakemanstage", 3],
    ["Spark Man Stage", "bgm_s03_rm3_sparkman_stage", 2],
    ["Shadow Man Stage", "bgm_s07_rm3_shadowman_stage", 2],
    ["Mega Man 4 Medley", "bgm_s19_rm4_medley", 3],
    ["Gravity Man Stage", "bgm_s20_rm5_gravitymanstage", 3],
    ["Napalm Man Stage", "bgm_s21_rm5_napalmmanstage", 3],
    ["Dark Man Stage", "bgm_s12_rm5_darkmanstage", 3],
    ["Flash In The Dark (Dr. Wily Stage 1)", "bgm_s26_rm9_flashinthedark_wilystage1", 1],
    ["We're Robots (Dr. Wily Stage 2)", "bgm_s22_rm9_weretherobots_wilystage2", 3],
    ["Mega Man Retro Medley", "bgm_s08_rm_originalmedley", 1],
    ["Mega Man 2 Retro Medley", "bgm_s04_rm2_originalmedley", 1],
    ["Mega Man 3 Retro Medley", "bgm_s09_rm3_originalmedley", 1],
    ["Mega Man 4-6 Retro Medley", "bgm_s10_rm4_6_originalmedley", 1],
    ["Opening Stage", "bgm_s23_rmx_openingstage", 3],
    ["X vs ZERO", "bgm_s27_rmx5_xvszero", 1],
    ["Zero (Theme of ZERO (from Mega Man X))", "bgm_s28_rrz_themeofzero_fromx", 1],
    ["Shooting Star", "bgm_s29_rrm_shootingstar", 1],
]
var bgmpacman = [
    ["Pac-Man Series", "pacman"],
    ["PAC-MAN", "bgm_v01_pac_pacman", 2],
    ["PAC-MAN (Club Mix)", "bgm_v02_pac_pacman_clubmix", 2],
    ["PAC-MAN'S PARK / BLOCK TOWN", "bgm_v03_mna_pacmanspark_blocktown", 2],
    ["Galaga Medley", "bgm_v11_glg_medley", 3],
    ["Mappy Medley", "bgm_v12_mpy_medley", 3],
    ["Libble Rabble Retro Medley", "bgm_v04_lbl_libblelabble_medley", 1],
    ["Metro-Cross Retro Medley", "bgm_v05_mcr_metrocross_medley", 1],
    ["Sky Kid Retro Medley", "bgm_v08_skd_skykid_medley", 1],
    ["Area 1 - Dragon Spirit", "bgm_v13_dsp_area1", 3],
    ["Namco Arcade '80s Retro Medley 1", "bgm_v06_nmc_80smedley1", 1],
    ["Namco Arcade '80s Retro Medley 2", "bgm_v07_nmc_80smedley2", 1],
]
var bgmsf = [
    ["Street Fighter Series", "sf"],
    ["Ryu Stage", "bgm_sf05_sf2_ryustage", 2],
    ["Ken Stage", "bgm_sf06_sf2_kenstage", 2],
    ["Guile Stage", "bgm_sf07_sf2_guilestage", 3],
    ["Vega Stage", "bgm_sf08_sf2_balrogstage", 3],
    ["Ryu Stage Type A", "bgm_sf01a_sf2_ryu", 1],
    ["Ryu Stage Type A (Pinch)", "bgm_sf01b_sf2_ryu_pinch", 0],
    ["Ken Stage Type A", "bgm_sf03a_sf2_ken", 1],
    ["Ken Stage Tyoe A (Pinch)", "bgm_sf03b_sf2_ken_pinch", 0],
    ["E. Honda Stage Type A", "bgm_sf15a_sf2_ehonda", 1],
    ["E. Honda Stage Type A (Pinch)", "bgm_sf15b_sf2_ehonda_pinch", 0],
    ["Chun-Li Stage Type A", "bgm_sf13a_sf2_chunli", 1],
    ["Chun-Li Stage Type A (Pinch)", "bgm_sf13b_sf2_chunli_pinch", 0],
    ["Blanka Stage Type A", "bgm_sf09a_sf2_blanka", 1],
    ["Blanka Stage Type A (Pinch)", "bgm_sf09b_sf2_blanka_pinch", 0],
    ["Zangief Stage Type A", "bgm_sf17a_sf2_zangief", 1],
    ["Zangief Stage Type A (Pinch)", "bgm_sf17b_sf2_zangief_pinch", 0],
    ["Guile Stage Type A", "bgm_sf11a_sf2_guile", 1],
    ["Guile Stage Type A (Pinch)", "bgm_sf11b_sf2_guile_pinch", 0],
    ["Dhalsim Stage Type A", "bgm_sf19a_sf2_dhalsim", 1],
    ["Dhalsim Stage Type A (Pinch)", "bgm_sf19b_sf2_dhalsim_pinch", 0],
    ["Balrog Stage Type A", "bgm_sf21a_sf2_mbison", 1],
    ["Balrog Stage Type A (Pinch)", "bgm_sf21b_sf2_mbison_pinch", 0],
    ["Vega Stage Type A", "bgm_sf23a_sf2_balrog", 1],
    ["Vega Stage Type A (Pinch)", "bgm_sf23b_sf2_balrog_pinch", 0],
    ["Sagat Stage Type A", "bgm_sf25a_sf2_sagat", 1],
    ["Sagat Stage Type A (Pinch)", "bgm_sf25b_sf2_sagat_pinch", 0],
    ["M. Bison Stage Type A", "bgm_sf27a_sf2_vega", 1],
    ["M. Bison Stage Type A (Pinch)", "bgm_sf27b_sf2_vega_pinch", 0],
    ["T. Hawk Stage Type A", "bgm_sf31a_sf2_thawk", 1],
    ["T. Hawk Stage Type A (Pinch)", "bgm_sf31b_sf2_thawk_pinch", 0],
    ["Fei Long Stage Type A", "bgm_sf33a_sf2_feilong", 1],
    ["Fei Long Stage Type A (Pinch)", "bgm_sf33b_sf2_feilong_pinch", 0],
    ["Dee Jay Stage Type A", "bgm_sf29a_sf2_deejay", 1],
    ["Dee Jay Stage Type A (Pinch)", "bgm_sf29b_sf2_deejay_pinch", 0],
    ["Cammy Stage Type A", "bgm_sf35a_sf2_cammy", 1],
    ["Cammy Stage Type A (Pinch)", "bgm_sf35b_sf2_cammy_pinch", 0],
    ["Ryu Stage Type B", "bgm_sf02a_sf2_ryu_2", 1],
    ["Ryu Stage Type B (Pinch)", "bgm_sf02b_sf2_ryu_2_pinch", 0],
    ["Ken Stage Type B", "bgm_sf04a_sf2_ken_2", 1],
    ["Ken Stage Type B (Pinch)", "bgm_sf04b_sf2_ken_2_pinch", 0],
    ["E. Honda Stage Type B", "bgm_sf16a_sf2_ehonda_2", 1],
    ["E. Honda Stage Type B (Pinch)", "bgm_sf16b_sf2_ehonda_2_pinch", 0],
    ["Chun-Li Stage Type B", "bgm_sf14a_sf2_chunli_2", 1],
    ["Chun-Li Stage Type B (Pinch)", "bgm_sf14b_sf2_chunli_2_pinch", 0],
    ["Blanka Stage Type B", "bgm_sf10a_sf2_blanka_2", 1],
    ["Blanka Stage Type B (Pinch)", "bgm_sf10b_sf2_blanka_2_pinch", 0],
    ["Zangief Stage Type B", "bgm_sf18a_sf2_zangief_2", 1],
    ["Zangief Stage Type B (Pinch)", "bgm_sf18b_sf2_zangief_2_pinch", 0],
    ["Guile Stage Type B", "bgm_sf12a_sf2_guile_2", 1],
    ["Guile Stage Type B (Pinch)", "bgm_sf12b_sf2_guile_2_pinch", 0],
    ["Dhalsim Stage Type B", "bgm_sf20a_sf2_dhalsim_2", 1],
    ["Dhalsim Stage Type B (Pinch)", "bgm_sf20b_sf2_dhalsim_2_pinch", 0],
    ["Balrog Stage Type B", "bgm_sf22a_sf2_mbison_2", 1],
    ["Balrog Stage Type B (Pinch)", "bgm_sf22b_sf2_mbison_2_pinch", 0],
    ["Vega Stage Type B", "bgm_sf24a_sf2_balrog_2", 1],
    ["Vega Stage Type B (Pinch)", "bgm_sf24b_sf2_balrog_2_pinch", 0],
    ["Sagat Stage Type B", "bgm_sf26a_sf2_sagat_2", 1],
    ["Sagat Stage Type B (Pinch)", "bgm_sf26b_sf2_sagat_2_pinch", 0],
    ["M. Bison Stage Type B", "bgm_sf28a_sf2_vega_2", 1],
    ["M. Bison Stage Type B (Pinch)", "bgm_sf28b_sf2_vega_2_pinch", 0],
    ["T. Hawk Stage Type B", "bgm_sf32a_sf2_thawk_2", 1],
    ["T. Hawk Stage Type B (Pinch)", "bgm_sf32b_sf2_thawk_2_pinch", 0],
    ["Fei Long Stage Type B", "bgm_sf34a_sf2_feilong_2", 1],
    ["Fei Long Stage Type B (Pinch)", "bgm_sf34b_sf2_feilong_2_pinch", 0],
    ["Dee Jay Stage Type B", "bgm_sf30a_sf2_deejay_2", 1],
    ["Dee Jay Stage Type B (Pinch)", "bgm_sf30b_sf2_deejay_2_pinch", 0],
    ["Cammy Stage Type B", "bgm_sf36a_sf2_cammy_2", 1],
    ["Cammy Stage Type B (Pinch)", "bgm_sf36b_sf2_cammy_2_pinch", 0],
    ["Player Select Type A", "bgm_sf37a_sf2_playerselect", 1],
    ["Player Select Type B", "bgm_sf37b_sf2_playerselect", 1],
]
var bgmff = [
    ["Final Fantasy Series", "ff"],
    ["Let the Battles Begin!", "bgm_ff01_ff7_tatakaumonotachi", 1],
    ["Fight On!", "bgm_ff02_ff7_saranitatakaumonotachi", 1],
]
var bgmbeyo = [
    ["Bayonetta Series", "bayo"],
    ["Theme Of Bayonetta - Mysterious Destiny (Instrumental)", "bgm_by03_by_mysteriousdestiny", 2],
    ["One Of A Kind", "bgm_by01_by_oneofakind", 1],
    ["Riders Of The Light", "bgm_by02_by_ridersofthelight", 1],
    ["Let's Hit The Climax!", "bgm_by04_by_letshittheclimax", 1],
    ["Red & Black", "bgm_by05_by_redandblack", 1],
    ["After Burner (∞ Climax Mix)", "bgm_by06_by_afterburnerclimaxmix", 1],
    ["Friendship", "bgm_by07_by_tomoyo", 1],
    ["Let's Dance, Boys!", "bgm_by08_by_letsdanceboys", 1],
    ["Tomorrow Is Mine (Bayonetta 2 Theme) (Instrumental)", "bgm_by10_by2_tomorrowismine", 2],
    ["The Legend Of Aesir", "bgm_by09_by2_thelegendofaesir", 1],
    ["Time For The Climax!", "bgm_by11_by2_timefortheclimax", 1],
]
var bgmdracula = [
    ["Castlevania Series", "castle"],
    ["Vampire Killer", "bgm_ad15_ju_vampirekiller", 3],
    ["Vampire Killer", "bgm_ad38_ju_vampirekiller", 1],
    ["Starker / Wicked Child", "bgm_ad01_fc_starker", 3],
    ["Out of Time", "bgm_ad03_fc_outoftime", 3],
    ["Nothing to Lose", "bgm_ad28_hd_nothingtolose", 1],
    ["Black Night", "bgm_ad37_ac_blacknight_lasstboss2", 1],
    ["Bloody Tears / Monster Dance", "bgm_ad04_dc2_bloodytears", 3],
    ["Dwelling of Doom", "bgm_ad05_dc2_dwellingofdoom", 1],
    ["Cross Your Heart", "bgm_ad21_ac_jyujikawomuneni", 3],
    ["Can't Wait Until Night", "bgm_ad31_hd_yorumadematenai", 1],
    ["Beginning", "bgm_ad20_ac_beginning", 3],
    ["Mad Forest", "bgm_ad17_ju_madforest", 1],
    ["Aquarius", "bgm_ad32_hd_aquarius", 3],
    ["Simon Belmont Theme", "bgm_ad07_sfc_simonbelmontnotheme", 1],
    ["Simon Belmont Theme (The Arcade)", "bgm_ad22_ac_simonnotheme", 1],
    ["Divine Bloodlines", "bgm_ad14_gl_keishou_kekkonnoketsuzoku", 3],
    ["Slash", "bgm_ad33_hd_slash", 1],
    ["Dance of Illusions", "bgm_ad19_ju_danceofillusions", 1],
    ["Iron-Blue Intention", "bgm_ad08_vk_ironblueintention", 3],
    ["Dracula's Castle", "bgm_ad18_ju_draculascastle", 1],
    ["Dance of Gold", "bgm_ad36_gy_ougonnobukyoku", 3],
    ["Lost Painting", "bgm_ad27_hd_ushinawaretasaiga", 3],
    ["The Tragic Prince", "bgm_ad29_hd_hikyounokikoushi", 1],
    ["Awake", "bgm_ad09_cm_awake", 3],
    ["Ruined Castle Gallery", "bgm_ad23_hd_koujoukairou", 1],
    ["Lament of Innocence", "bgm_ad10_cv_shinjitsunonageki", 3],
    ["Jet Black Incursion", "bgm_ad11_sj_shikkokunoshinkou", 1],
    ["Crash in the Dark Night", "bgm_ad24_hd_yamiyonogekitotsu", 1],
    ["Ripped Silence", "bgm_ad26_hd_kirisakaretaseijaku", 1],
    ["Hail from the Past", "bgm_ad13_gl_hailfromthepast", 1],
    ["Jail of Jewel", "bgm_ad12_gl_jailofjewel", 1],
    ["Twilight Stigmata", "bgm_ad30_hd_tasogarenoseikon", 1],
    ["Jet Black Wings", "bgm_ad25_hd_shikkokunotsubasa", 1],
    ["Go! Getsu Fuma", "bgm_ad35_hd_ikegetsufuma", 1],
]
var bgmother = [
    ["Other", "other"],
    ["Duck Hunt Medley", "bgm_q28_dkh_medley", 3],
    ["Duck Hunt Medley (for 3DS / Wii U)", "bgm_q19_dkh_title", 2],
    ["Balloon Fight Medley", "bgm_q15_bft_medley", 2],
    ["Balloon Trip (Brawl)", "bgm_q06_bft_balloontrip", 2],
    ["Balloon Trip (for 3DS / Wii U)", "bgm_q16_bft_balloontrip", 2],
    ["Clu Clu Land", "bgm_q05_clu_clucluland", 2],
    ["Ice Climber (Melee)", "bgm_w13_ice_iciclemountain", 2],
    ["Ice Climber (Brawl)", "bgm_q07_ice_iceclimber", 2],
    ["Wrecking Crew Medley", "bgm_q29_wcr_bgmb", 3],
    ["Wrecking Crew Medley (for 3DS / Wii U)", "bgm_q20_wcr_gamestart", 2],
    ["Wrecking Crew Retro Medley", "bgm_q24_wcr_bgma", 1],
    ["Power-Up Music - Wrecking Crew", "bgm_q13_wcr_powerup", 1],
    ["Stack-Up/Gyromite", "bgm_q02_rob_blockandgyro", 2],
    ["Mach Rider", "bgm_w18_mrd_machrider", 2],
    ["Famicom Medley", "bgm_q01_fc_famicommedley", 1],
    ["The Mysterious Murasame Castle Medley", "bgm_q17_nmj_medley", 2],
    ["Douchuumen - The Mysterious Murasame Castle", "bgm_q14_nmj_douchu", 1],
    ["Shin Onigashima Medley", "bgm_q08_oni_shinonigashima", 2],
    ["Title Theme - 3D Hot Rally", "bgm_q09_3hr_title", 2],
    ["Tetris: Type A", "bgm_q10_trs_typea", 2],
    ["Tetris: Type B", "bgm_q11_trs_typeb", 2],
    ["Yuuki Medley", "bgm_q30_yyk_medley", 3],
    ["Light Plane", "bgm_q27_pw_lightplane", 3],
    ["Light Plane", "bgm_q26_pw_lightplane", 1],
    ["Light Plane (for 3DS / Wii U)", "bgm_q22_pw_lightplane", 2],
    ["Light Plane (Vocal Mix) (for 3DS / Wii U)", "bgm_q23_pw_lightplane_ver2", 2],
    ["Turbo Jet", "bgm_r39_pwr_hikouki", 2],
    ["Pedal Glider", "bgm_r40_pwr_hangglider", 2],
    ["Tunnel Scene - X", "bgm_q12_x_tunnelscene", 2],
    ["Tunnel Theme - X-Scape", "bgm_r59_xrt_tunnelnormal", 1],
    ["Lip's Theme - Panel de Pon", "bgm_r06_pdp_lipnotheme", 2],
    ["Culdcept", "bgm_r41_cct_opening", 2],
    ["Revolt -Striving for Hope-", "bgm_r98_ccr_revolt_kibouhenokekki", 1],
    ["Worthy Rival Battle", "bgm_r99_ccr_koutekishubattle", 1],
    ["Golden Forest", "bgm_r09_1080_goldenforest", 1],
    ["Battle Scene / Final Boss - Golden Sun", "bgm_r12_ont_sentou_boss", 2],
    ["Weyard", "bgm_r60_ont_worldmap", 1],
    ["Proof of a Hero ~ 4Version", "bgm_mh02_mh4_eiyuunoakashi", 1],
    ["Roar/Rathalos", "bgm_mh01_mhxx_houkou", 1],
    ["PictoChat", "bgm_r02_pictochat", 1],
    ["Electroplankton", "bgm_r75_electroplankton", 3],
    ["Electroplankton", "bgm_r03_electroplankton", 1],
    ["Bathtime Theme", "bgm_r78_ntd_shower", 3],
    ["Bathtime Theme (for 3DS / Wii U)", "bgm_r18_ntd_shower", 2],
    ["Bathtime Theme (Vocal Mix) (for 3DS / Wii U)", "bgm_r19_ntd_shower_ver2", 2],
    ["Brain Age: Train Your Brain in Minutes a Day!", "bgm_r15_nou_dstraning", 1],
    ["Menu - Brain Age 2: More Training in Minutes a Day!", "bgm_r49_motto_menu", 1],
    ["Title Theme - Big Brain Academy", "bgm_r08_yaj_title", 2],
    ["The Valedictory Elegy", "bgm_r34_bt2_thevaledictoryelegy", 2],
    ["Personal Trainer: Cooking", "bgm_r13_onv_shaberuoryourinavi", 2],
    ["Marionation Gear", "bgm_r07_mmg_marionationgear", 2],
    ["Wii Shop Channel", "bgm_r11_spc_wiishopingchannel", 2],
    ["Wii Shop Channel", "bgm_r72_spc_wiishopingchannel", 1],
    ["Mii Plaza", "bgm_r20_ngc_nigaoehiroba", 2],
    ["Mii Channel", "bgm_r10_ngc_nigaoechannel", 2],
    ["Charge! - Wii Play", "bgm_r17_hwi_ushidash", 1],
    ["Title Theme - Wii Sports", "bgm_r81_wsp_openingtheme", 3],
    ["Wii Sports Series Medley", "bgm_r31_wsp_title", 2],
    ["Title Theme - Wii Sports Resort", "bgm_r48_wsr_title", 1],
    ["Wii Sports Resort", "bgm_r32_wsr_title", 2],
    ["Wii Sports Resort Ver. 2", "bgm_r33_wsr_title_ver2", 2],
    ["Title Theme - Wii Sports Club", "bgm_r74_wsc_maintitle", 3],
    ["Tennis (Training)", "bgm_r87_wsc_tnstraining", 1],
    ["Baseball (Training)", "bgm_r88_wcs_bsbtraining", 1],
    ["Excite Truck", "bgm_r14_ext_excitetruck", 1],
    ["Attack - Soma Bringer", "bgm_r50_sbg_bosskyuumonsterbattle", 1],
    ["Glory of Heracles", "bgm_r35_hne_battleareaa_greecce", 2],
    ["PERFORMANCE", "bgm_r52_bbdx_performance", 1],
    ["Blue Birds", "bgm_r70_rtg_bluebirds", 1],
    ["Monkey Watch", "bgm_r71_mrt_sarudokei", 1],
    ["Fruit Basket", "bgm_r85_rtb_fruitsbasket", 1],
    ["Tomorrow's Passion", "bgm_r51_cap_macnouta", 1],
    ["Afternoon on the Island", "bgm_r80_tdcs_tomodachicollection", 3],
    ["Afternoon on the Island (for 3DS / Wii U)", "bgm_r22_tdcs_tomodachicollection", 2],
    ["Swan Lesson", "bgm_r61_egk_swan_lesson", 1],
    ["Dragon Battle", "bgm_r63_arg_dragonnotatakai", 1],
    ["Find Mii / Find Mii II Medley", "bgm_r76_scd_seriesmedley", 3],
    ["Save the World, Heroes!", "bgm_r26_scd2_sekaiwosukueyuushayo", 2],
    ["Dark Lord", "bgm_r27_scd2_yaminoou", 2],
    ["Filled with Hope", "bgm_r89_std_kibouwomuneni", 1],
    ["Freakyforms: Your Creations, Alive! Medley", "bgm_r38_iki_maintheme", 2],
    ["Boss 1 - Sakura Samurai: Art of the Sword", "bgm_r37_hsz_boss1", 2],
    ["Dillon's Rolling Western: The Last Ranger", "bgm_r66_rlw_move2", 1],
    ["Frontier Battle", "bgm_rr13_dhb_kaitakuchinotatakai", 1],
    ["Style Savvy: Trendsetters", "bgm_r43_wgf_title", 2],
    ["Pop Fashion Show", "bgm_r65_wgf_fashonshow", 1],
    ["Ring a Ding", "bgm_rr12_gm4_ringdongdang", 1],
    ["Title Theme - Nintendo Land", "bgm_r64_nld_title", 1],
    ["Nintendo Land Medley", "bgm_r42_nld_title", 2],
    ["ST01: Roll Out, Wonderful 100!", "bgm_r68_101_rolloutwonderful100", 1],
    ["Jergingha - Planet Destruction Form", "bgm_r69_101_jerginghaplanetdestructionform", 1],
    ["Final Results - Wii Party U", "bgm_r47_wptu_theme_1", 1],
    ["Title Theme - NES Remix 2", "bgm_r67_rmx_remix2_title", 1],
    ["Battle Start - Fossil Fighters: Frontier", "bgm_r92_khm_battlekaishi", 1],
    ["Title Theme - Nintendo Badge Arcade", "bgm_r90_btc_title_maintheme", 1],
    ["Arcade Bunny's Theme", "bgm_r91_btc_baitotheme", 1],
    ["Welcome Center", "bgm_r94_hpl_mapfirst", 1],
    ["Trouble Brewing II", "bgm_r77_stm_hotspot2", 3],
    ["Boss Battle", "bgm_rr02_mtp_eventsentou", 1],
    ["Boss: The Darkest Lord", "bgm_rr05_mtp_chomaousen_hontai", 1],
    ["Garage", "bgm_rr06_ttp_garage", 1],
    ["Noisy Notebook", "bgm_r79_snp_w1stage", 3],
    ["Dawn in the Desert", "bgm_rr07_eoa_fieldmain", 1],
    ["Struggle Against Chaos", "bgm_rr08_eoa_battle2later", 1],
    ["MEGALOVANIA", "bgm_rr14_ut_megalovania", 3],
    ["Floral Fury", "bgm_rr15_chd_floralfury_rekkanogotoku", 1],
]
var bgmjack = [
    ["Persona Series", "persona"],
    ["Mass Destruction", "bgm_ps01_p3_mass_destruction", 1],
    ["Battle Hymn of the Soul", "bgm_ps02_p3_subetenohitono_tamashiinotatakai", 1],
    ["Reach Out To The Truth", "bgm_ps03_p4_reachout_to_thetruth", 1],
    ["I'll Face Myself", "bgm_ps04_p4_illface_myself", 3],
    ["Time To Make History", "bgm_ps05_p4_timeto_makehistory", 1],
    ["Wake Up, Get Up, Get Out There", "bgm_ps06_p5_wakeup_getup_getoutthere", 1],
    ["Last Surprise", "bgm_ps07_p5_lastsurprise", 1],
    ["Rivers In the Desert", "bgm_ps08_p5_riversin_thedesert", 1],
    ["Our Beginning", "bgm_ps09_p5_ourbeginning", 1],
    ["Aria of the Soul", "bgm_ps10_p5_subetenohitono_tamashiinouta", 3],
    ["Beneath the Mask", "bgm_ps11_p5_beneath_themask", 3],
]
var bgmbrave = [
    ["Dragon Quest Series", "dq"],
    ["Unflinchable Courage", "bgm_dq01_dq11_hirumanuyuuki", 1],
    ["The Hero Goes Forth with a Determination ", "bgm_dq02_dq11_yuushahayuku", 1],
    ["Fighting Spirits - DRAGON QUEST III", "bgm_dq03_dq3_sentounotheme", 1],
    ["Adventure - DRAGON QUEST III", "bgm_dq04_dq3_boukennotabi", 1],
    ["Battle for the Glory - DRAGON QUEST IV", "bgm_dq05_dq4_sentou", 1],
    ["Wagon Wheel's March", "bgm_dq06_dq4_bashanomarch", 1],
    ["War Cry", "bgm_dq07_dq8_otakebiwoagete", 1],
    ["Marching through the Fields", "bgm_dq08_dq8_daiheigennomarch", 1],
]
var bgmbuddy = [
    ["Banjo & Kazooie Series", "banjo"],
    ["Spiral Mountain", "bgm_bk01_bk_kurukuruyamanofumoto", 3],
    ["Main Theme - Banjo-Kazooie", "bgm_bk02_bk_title", 3],
    ["Mumbo's Mountain", "bgm_bk03_bk_mumbomountain", 3],
    ["Treasure Trove Cove", "bgm_bk04_bk_otakarazakuzakubeach", 3],
    ["Freezeezy Peak", "bgm_bk05_bk_frozunzunyama", 1],
    ["Gobi's Valley", "bgm_bk06_bk_gobivalleysabaku", 3],
    ["Mad Monster Mansion", "bgm_bk07_bk_madnightmansion", 3],
    ["Vs. Klungo", "bgm_bk08_bk2_vsklungo", 3],
    ["Vs. Mr. Patch", "bgm_bk09_bk2_vsmrpatch", 1],
    ["Vs. Lord Woo Fak Fak", "bgm_bk10_bk2_vswoofakfakdaiou", 1],
]
var bgmdolly = [
    ["Fatal Fury/SNK Series", "fatalfury"],
    ["Kurikinton - FATAL FURY 2", "bgm_gd01_gd2_kurikinton", 1],
    ["Kurikinton - FATAL FURY 2", "bgm_gd02_gd2_kurikinton", 3],
    ["Haremar Faith Capoeira School - Song of the Fight (Believers Will Be Saved) - FATAL FURY", "bgm_gd03_gd_halemakyocapoereha_tatakainouta", 3],
    ["The Sea Knows - FATAL FURY", "bgm_gd04_gd_umihashitteiru", 1],
    ["Pasta - FATAL FURY 2", "bgm_gd05_gd2_pasta", 3],
    ["A New Poem That the South Thailand Wants to Tell - FATAL FURY 2", "bgm_gd06_gd2_thainanbunitsutaetai_atarashiiuta", 1],
    ["Tarkun and Kitapy - FATAL FURY 2", "bgm_gd07_gd2_takuntokitap", 3],
    ["Let's Go to Seoul! - FATAL FURY 2", "bgm_gd08_gd2_seoulniikou", 3],
    ["The London March - FATAL FURY 2", "bgm_gd09_gd2_londonmarch", 3],
    ["The Working Matador - FATAL FURY 2", "bgm_gd10_gd2_hatarakutougyushi", 1],
    ["Duck Dub Dub (Duck, You Too) - FATAL FURY SPECIAL", "bgm_gd11_gdsp_duckdubdub", 1],
    ["Soy Sauce for Geese - FATAL FURY SPECIAL", "bgm_gd12_gdsp_geesenishouyu", 1],
    ["Art of Fighting Ver.230000000.0 - FATAL FURY SPECIAL", "bgm_gd13_gdsp_ryukonoken_ver230000000", 1],
    ["Big Shot! - FATAL FURY 3", "bgm_gd14_gd3_bigshot", 1],
    ["11th Street - FATAL FURY WILD AMBITION", "bgm_gd16_gdwa_11thstreet", 3],
    ["Ne! - KOF '94", "bgm_gd17_kof94_ne", 1],
    ["Stormy Saxophone 2 - KOF '96", "bgm_gd18_kof96_arashinosaxophone", 3],
    ["W.W.III - KOF XIV", "bgm_gd20_kof99_ww3", 1],
    ["176th Street - KOF '99", "bgm_gd21_kof99_176thstreet", 1],
    ["Terry115 - KOF 2000", "bgm_gd22_kof00_terry115", 1],
    ["Street Dancer - KOF XI", "bgm_gd23_kofxi_streetdancer", 1],
    ["ESAKA!! - KOF 2002 UM", "bgm_gd24_kof02um_esaka", 1],
    ["DESERT REQUIEM ~Operation02UM~ - KOF 2002 UM", "bgm_gd25_kof02um_desertrequiem", 1],
    ["KD-0079+ - KOF 2002 UM", "bgm_gd26_kof02um_kd0079plus", 1],
    ["Undercover - KOF 2002 UM", "bgm_gd27_kof02um_undercover", 1],
    ["Cutting Edge - KOF 2002 UM", "bgm_gd28_kof02um_cuttingedge", 1],
    ["The Second Joker - KOF XIII", "bgm_gd29_kofxiii_thesecondjoker", 1],
    ["Esaka Continues... - KOF XIII", "bgm_gd30_kofxiii_esakacontinues", 1],
    ["Wild Street - KOF XIII", "bgm_gd31_kofxiii_wildstreet", 1],
    ["Tame a Bad Boy - KOF XIII", "bgm_gd32_kofxiii_tameabadboy", 1],
    ["KDD-0063 - KOF XIII", "bgm_gd33_kofxiii_kdd0063", 1],
    ["Yappari ESAKA - KOF XIV", "bgm_gd34_kofxiv_yappariesaka", 1],
    ["Departure from South Town - KOF XIV", "bgm_gd35_kofxiv_departure_from_southtown", 1],
    ["Soy Sauce for Geese - KOF XIV", "bgm_gd36_kofiv_geesenishouyu_xivver", 1],
    ["IKARI - KOF XIV", "bgm_gd37_kofxiv_ikari_xivver", 1],
    ["New Order - KOF XIV", "bgm_gd38_kofxiv_neworder_xivver", 1],
    ["Theme of SYD - Alpha Mission", "bgm_gd39_aso_themeofsyd", 3],
    ["Forest World - Athena", "bgm_gd40_atn_morinosekai", 3],
    ["Psycho Soldier Theme", "bgm_gd41_psy_psychosoldiertheme_jp", 3],
    ["Psycho Soldier Theme (Overseas Version)", "bgm_gd42_psy_psychosoldiertheme_en", 3],
    ["ART of FIGHT - Art of Fighting", "bgm_gd43_ryk_artoffight", 3],
    ["Tuna - SAMURAI SHODOWN", "bgm_gd44_ssp_maguro", 1],
    ["Banquet of Nature - SAMURAI SHODOWN", "bgm_gd45_ssp_shizennoutage", 3],
    ["Gaia - SAMURAI SHODOWN", "bgm_gd46_ssp_daichi", 3],
    ["Kuri Kinton Flavor - KOF XIV", "bgm_gd47_kofxiv_kurikintonfu", 1],
    ["Main Theme from Metal Slug - METAL SLUG", "bgm_gd48_mts1_maintheme", 3],
    ["Assault Theme - METAL SLUG 1-3", "bgm_gd49_mts1_3_assaulttheme", 3],
    ["Judgment - METAL SLUG 2", "bgm_gd50_mts2_judgment", 1],
    ["Blue Water Fangs (The Island of Dr. Moreau) - METAL SLUG 3", "bgm_gd51_mts3_soukainokiba", 1],
    ["Final Attack - METAL SLUG 1-6", "bgm_gd52_mts5_finalattack", 1],
]

var bgmtantan = [
    ["ARMS Series", "arms"],
    ["ARMS Grand Prix Official Theme Song", "bgm_am01_am_armsgrandprixtheme", 3],
    ["Ramen Bowl", "bgm_am02_am_ramenbowl_springstadium", 3],
    ["Spring Stadium", "bgm_am03_am_springstadium", 1],
    ["Ribbon Ring", "bgm_am04_am_ribbonring", 1],
    ["Ninja College", "bgm_am05_am_ninjacollege", 1],
    ["Mausoleum", "bgm_am06_am_mausoleum", 1],
    ["Scrapyard", "bgm_am07_am_scrapyard", 1],
    ["Cinema Deux", "bgm_am08_am_cinemadeux", 1],
    ["Buster Beach", "bgm_am09_am_busterbeach", 1],
    ["Snake Park", "bgm_am10_am_snakepark", 1],
    ["DNA Lab", "bgm_am11_am_dnalab", 1],
    ["Via Dolce", "bgm_am12_am_viadolce", 1],
    ["Temple Grounds", "bgm_am13_am_templegrounds", 1],
    ["Sparring Ring", "bgm_am14_am_sparringring", 1],
    ["[NAME REDACTED]", "bgm_am15_am_nameredacted", 1],
    ["Sky Arena", "bgm_am16_am_skyarena", 1],
    ["Vs. Hedlok", "bgm_am17_am_hedlok_battletheme", 1],
    ["ARMS Grand Prix Final Battle", "bgm_am18_am_hedlok_lastbattle", 1],
]

var VictoryThemes = [
    ["Victory Themes", "victory"],
    ["Mii Fighter", "bgm_z00_f_miifighter", 0],
    ["Mario", "bgm_z01_f_mario", 0],
    ["Dr. Mario", "bgm_z60_f_mariod", 0],
    ["Donkey Kong", "bgm_z02_f_donkey", 0],
    ["Link", "bgm_z03_f_link", 0],
    ["Samus", "bgm_z04_f_samus", 0],
    ["Yoshi", "bgm_z05_f_yoshi", 0],
    ["Kirby", "bgm_z06_f_kirby", 0],
    ["Fox / Wolf", "bgm_z07_f_fox", 0],
    ["Pikachu", "bgm_z08_f_pikachu", 0],
    ["Luigi", "bgm_z09_f_luigi", 0],
    ["Captain Falcon", "bgm_z10_f_captain", 0],
    ["Ness", "bgm_z11_f_ness", 0],
    ["Jigglypuff", "bgm_z37_f_purin", 0],
    ["Peach / Daisy", "bgm_z13_f_peach", 0],
    ["Bowser", "bgm_z12_f_koopa", 0],
    ["Ice Climbers", "bgm_z16_f_iceclimber", 0],
    ["Sheik", "bgm_z15_f_sheik", 0],
    ["Zelda", "bgm_z14_f_zelda", 0],
    ["Pichu", "bgm_z88_f_pichu", 0],
    ["Falco", "bgm_z19_f_falco", 0],
    ["Marth", "bgm_z17_f_marth", 0],
    ["Lucina / Chrom", "bgm_z61_f_lucina", 0],
    ["Young Link", "bgm_z89_f_younglink", 0],
    ["Ganondorf", "bgm_z20_f_ganon", 0],
    ["Mewtwo", "bgm_z80_f_mewtwo", 0],
    ["Roy", "bgm_z83_f_roy", 0],
    ["Mr. Game & Watch", "bgm_z18_f_gamewatch", 0],
    ["Meta Knight", "bgm_z22_f_metaknight", 0],
    ["Pit", "bgm_z23_f_pit", 0],
    ["Dark Pit", "bgm_z62_f_pitb", 0],
    ["Zero Suit Samus", "bgm_z24_f_zerosamus", 0],
    ["Wario", "bgm_z21_f_wario", 0],
    ["Snake", "bgm_z46_f_snake", 0],
    ["Ike", "bgm_z34_f_ike", 0],
    ["Pokemon Trainer", "bgm_z28_f_ptrainer", 0],
    ["Diddy Kong", "bgm_z27_f_diddy", 0],
    ["Lucas", "bgm_z82_f_lucas", 0],
    ["Sonic", "bgm_z47_f_sonic", 0],
    ["King Dedede", "bgm_z32_f_dedede", 0],
    ["Olimar / Alph", "bgm_z25_f_pikmin", 0],
    ["Lucario", "bgm_z33_f_lucario", 0],
    ["R.O.B.", "bgm_z35_f_robot", 0],
    ["Toon Link", "bgm_z41_f_toonlink", 0],
    ["Villager", "bgm_z66_f_murabito", 0],
    ["Mega Man", "bgm_z74_f_rockman", 0],
    ["Wii Fit Trainer", "bgm_z64_f_wiifit", 0],
    ["Rosalina & Luma", "bgm_z63_f_rosetta", 0],
    ["Little Mac", "bgm_z65_f_littlemac", 0],
    ["Greninja", "bgm_z72_f_gekkouga", 0],
    ["Palutena", "bgm_z67_f_palutena", 0],
    ["Pac-Man", "bgm_z73_f_pacman", 0],
    ["Robin", "bgm_z68_f_reflet", 0],
    ["Shulk", "bgm_z71_f_shulk", 0],
    ["Bowser Jr.", "bgm_z70_f_koopajr", 0],
    ["Duck Hunt", "bgm_z69_f_duckhunt", 0],
    ["Ryu / Ken", "bgm_z81_f_ryu", 0],
    ["Cloud", "bgm_z85_f_cloud", 0],
    ["Corrin", "bgm_z87_f_kamui", 0],
    ["Bayonetta", "bgm_z86_f_bayonetta", 0],
    ["Inkling", "bgm_z93_f_inkling", 0],
    ["Ridley / Dark Samus", "bgm_z94_f_ridley", 0],
    ["Simon / Richter", "bgm_z96_f_simon", 0],
    ["King K. Rool", "bgm_z95_f_krool", 0],
    ["Isabelle", "bgm_z90_f_shizue", 0],
    ["Incineroar", "bgm_z91_f_gaogaen", 0],
    ["Piranha Plant", "bgm_z92_f_packun", 0],
    ["Joker (Persona 5)", "bgm_z97a_f_jack_p5", 0],
    ["Joker (Persona 4)", "bgm_z97b_f_jack_p4", 0],
    ["Joker (Persona 3)", "bgm_z97c_f_jack_p3", 0],
    ["Hero", "bgm_z98_f_brave", 0],
    ["Banjo & Kazooie", "bgm_z99_f_buddy", 0],
    ["Terry", "bgm_zz01_f_dolly", 0],
    ["Byleth", "bgm_zz02_f_master", 0],
    ["Normal Victory Theme", "bgm_crs24_vs_result", 0],
];

var series = [
    bgmsmashbtl,
    bgmmario,
    bgmmkart,
    bgmdk,
    bgmzelda,
    bgmmetroid,
    bgmfzero,
    bgmyoshi,
    bgmkirby,
    bgmfox,
    bgmpokemon,
    bgmmother,
    bgmfe,
    bgmgamewatch,
    bgmicaros,
    bgmwario,
    bgmpikmin,
    bgmanimal,
    bgmwiifit,
    bgmpunchout,
    bgmxenoblade,
    bgmspla,
    bgmmetalgear,
    bgmsonic,
    bgmrockman,
    bgmpacman,
    bgmsf,
    bgmff,
    bgmbeyo,
    bgmdracula,
    bgmother,
    bgmjack,
    bgmbrave,
    bgmbuddy,
    bgmdolly,
    bgmtantan,
    VictoryThemes,
];

window.onload = function () {

    $("#search_box").on("keyup", function() {
        var value = $(this).val().toLowerCase();

        var index_value = 0;

        $("#stages option").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });

        $("#stages optgroup").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });

        try {
            index_value = $('#stages').children().filter(':visible:first')[0].index;
        }
        catch(err) {
            $("#stages option").filter(function() {
                $(this).toggle($(this).val().toLowerCase().indexOf(value) > -1);
            });

            $("#stages optgroup").filter(function() {
                $(this).toggle($(this).val().toLowerCase().indexOf(value) > -1);
            });

            index_value = $('#stages').children().filter(':visible:first')[0].index;
            console.log(err);
        }


        $("#stages").prop("selectedIndex", index_value).val();
        document.getElementById("filenameOutput").value = $("#stages").val();
    });

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

    setInputFilter(document.getElementById("sample_rate"), function (value) {
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

function recordTypeColor(record){
    switch(record){
        case 0:
            return ["black", ""]
        case 1:
            return ["black", ""]
        case 2:
            return ["blue", " (Remix)"]
        case 3:
            return ["red", " (New Remix)"]
        default:
            return ["black", ""]
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
            record_result = recordTypeColor(element[2])
            option.innerHTML = `${element[0]} ${record_result[1]}`;
            option.style.color = record_result[0];
            option.setAttribute('data-size', element[2]);
            document.getElementById("stages").append(option);
        };
    });
}

function UpdateStage(e) {
    document.getElementById("filenameOutput").value = e.value;

    // var song_size_bytes = e.options[e.selectedIndex].getAttribute('data-size');

    // var song_size_kb = song_size_bytes / 1024;

    // if (song_size_kb > 1000) {
    //     song_size_mb = song_size_kb / 1024;

    //     document.getElementById("og_size").innerHTML = `Original File Size: <strong>${song_size_mb.toFixed(2)}MB</strong>`;
    // } else {
    //     document.getElementById("og_size").innerHTML = `Original File Size: <strong>${song_size_kb.toFixed(2)}KB</strong>`;
    // }
}

function UpdateType(e) {
    document.getElementById("filetype").value = e.value;

    if (e.value == "idsp" || e.value == "toBrstm") {
        document.getElementById("sample_rate_section").style.display = "block";
    } else {
        document.getElementById("sample_rate_section").style.display = "none";
    }

    if(e.value == "youtube"){
        document.getElementById("music_label").innerHTML = "YouTube Link:";
        document.getElementById("yt_link").style.display = "block";
        document.getElementById("music").style.display = "none";
        document.getElementById("loop_hz_options").style.display = "none";
    }else{
        document.getElementById("music_label").innerHTML = "Music File:";
        document.getElementById("yt_link").style.display = "none";
        document.getElementById("music").style.display = "block";
        document.getElementById("loop_hz_options").style.display = "block";
    }
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

// function orderBySizeH2L() {
//     $("#stages").each(function () {
//         $(this).html($(this).children('option').sort(function (a, b) {
//             return ($(a).data('size')) < ($(b).data('size')) ? 1 : -1;
//         }));
//     });

//     document.getElementById("h2l").style.display = "none";
//     document.getElementById("l2h").style.display = "inline";
//     document.getElementById("stages").selectedIndex = 0;

//     UpdateStage(document.getElementById("stages"));
// }

// function orderBySizeL2H() {
//     $("#stages").each(function () {
//         $(this).html($(this).children('option').sort(function (a, b) {
//             return ($(b).data('size')) < ($(a).data('size')) ? 1 : -1;
//         }));
//     });

//     document.getElementById("l2h").style.display = "none";
//     document.getElementById("h2l").style.display = "inline";
//     document.getElementById("stages").selectedIndex = 0;

//     UpdateStage(document.getElementById("stages"));
// }

function orderBySeries() {
    SetupStageList(bgmsmashbtl);
    SetupStageList(bgmmario);
    SetupStageList(bgmmkart);
    SetupStageList(bgmdk);

    SetupStageList(bgmzelda);
    SetupStageList(bgmmetroid);
    SetupStageList(bgmfzero);
    SetupStageList(bgmyoshi);

    SetupStageList(bgmkirby);
    SetupStageList(bgmfox);
    SetupStageList(bgmpokemon);
    SetupStageList(bgmmother);

    SetupStageList(bgmfe);
    SetupStageList(bgmgamewatch);
    SetupStageList(bgmicaros);
    SetupStageList(bgmwario);

    SetupStageList(bgmpikmin);
    SetupStageList(bgmanimal);
    SetupStageList(bgmwiifit);
    SetupStageList(bgmpunchout);

    SetupStageList(bgmxenoblade);
    SetupStageList(bgmspla);
    SetupStageList(bgmmetalgear);
    SetupStageList(bgmsonic);

    SetupStageList(bgmrockman);
    SetupStageList(bgmpacman);
    SetupStageList(bgmsf);
    SetupStageList(bgmff);

    SetupStageList(bgmbeyo);
    SetupStageList(bgmdracula);
    SetupStageList(bgmother);
    SetupStageList(bgmjack);

    SetupStageList(bgmbrave);
    SetupStageList(bgmbuddy);
    SetupStageList(bgmdolly);
    SetupStageList(bgmtantan);

    SetupStageList(VictoryThemes);

    UpdateStage(document.getElementById("stages"));
}

function orderBySelected() {

    var all = $("#filters :checkbox");
    var checked = $("div :checkbox:checked").length;

    var check = false;

    document.getElementById("stages").innerHTML = "";

    $(all).each(function (i) {
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

    $(all).each(function () {
        this.checked = false;
    });

    // document.getElementById("l2h").style.display = "none";
    // document.getElementById("h2l").style.display = "inline";

    orderBySeries();
}

