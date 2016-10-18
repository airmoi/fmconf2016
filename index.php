<?php
require('vendor/autoload.php');

$db = 'filemaker-test';
$host = "192.168.1.14";
$user = $pass = "filemaker";
$options = [
    'errorHandling' => 'exception',
    'locale' => 'fr',
    'prevalidate' => true,
]
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>FMCONF 2016 - Avignon</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/monokai_sublime.css">
        <script src="js/highlight.pack.js"></script>
        <script>hljs.initHighlightingOnLoad();</script>
    </head>
    <body>
        <header>
            <h1>API-PHP - Démo</h1>
        </header>
        <div id="content">
        <?php if(empty($_GET['page']) || !file_exists( 'pages/' . $_GET['page'] . '.php')) { ?>
            <ul class="sommaire">
                <li><a href="?page=installation">Installation</a></li>
                <li><a href="?page=settings">Paramétrage</a></li>
                <li><a href="?page=script-range">Limiter les résultats d'un script</a></li>
                <li><a href="?page=error-handeling">Gestion des erreurs</a></li>
                <li><a href="?page=define-globals">Définir une globale à l'execution</a></li>
                <li><a href="?page=more">Et plus encore...</a></li>
            </ul>
        <?php } else { ?>
            <?php include ( 'pages/' . $_GET['page'] . '.php');
        } ?>
            
        <a class="back" href="?">&lt; retour</a>
        </div>
    </body>
</html>
