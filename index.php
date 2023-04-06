<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REFUZIION - Discord Bots</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <div class="section">
            <img src="https://refuzion.nl/wp-content/uploads/2023/01/fuziondevelopment-1-1024x387.png">
            <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
        </div>
    </header>
    <content class="main">
        <div class="section">
            <div class="column">
                <img src="assets/img/favicon.png">
                <h2>Roovy</h2>
                <p>Status:<?php echo (shell_exec("sudo -S pm2 pid RoovyJS") != 0) ? "<strong>Online</strong>" : "<strong>Offline</strong>" ?></p>
                <p>A music bot that can play songs from SoundCloud, YouTube and Spotify!</p>
                <p>Prefix: - (Changable with the command: -config)</p>
                <a href="https://discord.com/api/oauth2/authorize?client_id=909172011920678983&permissions=8&scope=bot%20applications.commands" class="invite-btn">Add to your server</a>
            </div>
            <div class="column">
                <img src="https://dashboard.fuziion.nl/assets/img/valiion.png">
                <h2>VALIION</h2>
                <p>Status:<?php echo (shell_exec("sudo -S pm2 pid VALIION") != 0) ? "<strong>Online</strong>" : "<strong>Offline</strong>" ?></p>
                <p>A VALORANT stats information bot.</p>
                <p>Prefix: None (Uses slash commands see: /help)</p>
                <a target="_blank" href="https://discord.com/api/oauth2/authorize?client_id=1080095856616820736&permissions=8&scope=bot%20applications.commands" class="invite-btn">Add to your server</a>
            </div>
        </div>
    </content>
    <footer>
        <p class="copy"><a target="_blank" href="https://refuzion.nl/">REFUZIION</a> © 2023</p>
    </footer>
</body>
</html>
