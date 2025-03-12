<?php
require 'vendor/autoload.php';

use xPaw\MinecraftQuery;
use xPaw\MinecraftQueryException;

$serverIP = "enx-soc-18.enx.host";
$serverPort = 10090;    



$Query = new MinecraftQuery();

try {
    $Query->Connect($serverIP, $serverPort);

    $info = $Query->GetInfo();
    $players = $Query->GetPlayers();

    //echo "Server is online!\n";
    //echo "Players online: " . implode(", ", $players);
} catch (MinecraftQueryException $e) {
    //echo "Server is offline or query is not enabled.";
}
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>n sei se comento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @font-face {
            font-family: "Minecraft";
            src: url('minecraft_font.tff');
        }
         
         .center-table {
            .center-table {
            margin: 0 auto;
            width: 50%;
           
            padding: 10px;
            background-color: black;
            background-repeat: repeat;
            background-size: 100px 50px;
            
        }
        }
        /* Estilo para o ícone */
        .icon {
            width: 20px;
            height: 20px;
            margin-left: 500px;
            margin-right: -460px;
            align-items: right;
        }
        borda{
            padding-bottom: 40px;
            padding-top: 40px;
        }
        /* Estilo para a tabela */
        table {
            background-color: white; /* Fundo branco para a tabela */
            width: 100%; /* Largura total */
            background-size: cover;
            
        }
        tbody{
            margin-top: 40px;
            font-family: "Minecraft";
        }
    </style>
</head>
<body background>
    <div class="container mt-5" >
        <h1 class="text-center mb-4" ><img src = "src\naoseisecomento.png"></h1> <br>
        <div class="center-table" background = "borda.png">
            <div class = "borda">
            <table class="table" >
                
            
                
                
                <tbody >
                <tr>
                        <td></td>
                        <td></td>
                </tr>
                <?php
                // Dados de exemplo (pode ser substituído por uma consulta ao banco de dados)
                $MinecraftQuery = new MinecraftQuery(); 

                // Loop para gerar as linhas da tabela
                foreach ($players as $player) {
                    
                    $icon = "https://crafatar.com/avatars/8667ba71-b85a-4004-af54-457a9734eed7";
                    $url = "https://api.mojang.com/users/profiles/minecraft/".urlencode($player);
                    $response = file_get_contents($url);
                    $data = json_decode($response,true);
                    $icon = "https://crafatar.com/avatars/".urlencode($data['id']);
                    echo "
                    <tr>
                        <td><img src='$icon' class='icon' alt='Ícone'></td>
                        <td>{$player}</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
    
        </table>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, se precisar de funcionalidades JS) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>