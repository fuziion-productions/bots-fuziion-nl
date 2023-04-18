<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FUZIION | Discord Bots</title>
    <link href="assets/css/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-white">
    <header class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
            <img src="https://refuzion.nl/wp-content/uploads/2023/01/fuziondevelopment-1-1024x387.png" class="max-h-16">
        </div>
    </header>
    <main class="flex items-center justify-center py-12">
        <div class="max-w-7xl mx-auto px-4 py-8 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            <div class="p-6 bg-gray-700 rounded-lg flex flex-col items-center">
                <img src="assets/img/fusion.png" class="w-36 h-36 rounded-full mb-6">
                <h2 class="text-3xl font-bold mb-2">Fusion</h2>
                <p>Status: <?php echo (shell_exec("sudo -S pm2 pid Fusion") != 0) ? "<strong class='text-green-500'>Online</strong>" : "<strong class='text-red-500'>Offline</strong>" ?></p>
                <p class="text-center">An all round discord bot.</p>
                <p class="text-center">Prefix: None (Uses slash commands see: /help)</p>
                <a href="#" class="mt-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Comming Soon
                </a>
            </div>
            <div class="p-6 bg-gray-700 rounded-lg flex flex-col items-center">
                <img src="assets/img/favicon.png" class="w-36 h-36 rounded-full mb-6">
                <h2 class="text-3xl font-bold mb-2">Roovy</h2>
                <p>Status: <?php echo (shell_exec("sudo -S pm2 pid RoovyJS") != 0) ? "<strong class='text-green-500'>Online</strong>" : "<strong class='text-red-500'>Offline</strong>" ?></p>
                <p class="text-center">A simple music bot with spotify support.</p>
                <p class="text-center">Prefix: - (can change in -config)</p>
                <a target="_blank" href="https://discord.com/api/oauth2/authorize?client_id=909172011920678983&permissions=8&scope=bot%20applications.commands" class="mt-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to your server
                </a>
            </div>
            <div class="p-6 bg-gray-700 rounded-lg flex flex-col items-center">
                <img src="assets/img/valiion.png" class="w-36 h-36 rounded-full mb-6">
                <h2 class="text-3xl font-bold mb-2">VALIION</h2>
                <p>Status: <?php echo (shell_exec("sudo -S pm2 pid VALIION") != 0) ? "<strong class='text-green-500'>Online</strong>" : "<strong class='text-red-500'>Offline</strong>" ?></p>
                <p class="text-center">A VALORANT stats information bot.</p>
                <p class="text-center">Prefix: None (Uses slash commands see: /help)</p>
                <a target="_blank" href="https://discord.com/api/oauth2/authorize?client_id=1080095856616820736&permissions=8&scope=bot%20applications.commands" class="mt-auto bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Add to your server
                </a>
            </div>
        </div>
    </main>
    <footer class="bg-gray-800 text-white fixed bottom-0 w-full">
        <div class="w-full px-4 py-4 flex flex-col sm:flex-row items-center text-center">
            <p class="w-full text-white text-center">&copy; 2023 My Discord Bots</p>
        </div>
    </footer>
</body>

</html>
