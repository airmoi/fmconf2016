<h2>Installation (manuelle)</h2>
<div>
    <div style="width: 50%; float: left; box-sizing: border-box; padding-right:10px; ">
        <h3>Avant</h3>
        <p>Copier le dossier de l'API-PHP dans votre projet</p>
        <p>Inclure le fichier FileMaker.php</p>
        <pre><code class="php">
require('FileMaker.php');

$fm = new FileMaker();
...
        </code></pre>
    </div>
    <div style="width: 50%; float: left; box-sizing: border-box; padding-left:10px; ">
        <h3>Après</h3>
        <p>Copier le dossier de l'API-PHP dans votre projet</p>
        <p>Inclure le fichier autoloader.php</p>
        <p>Déclarer l'espace de nom à utiliser</p>
        <pre><code class="php">
require('autoloader.php');

use airmoi\FileMaker\FileMaker;

$fm = new FileMaker();
...
        </code></pre>
    </div>
    <div style="text-align: right">
        <a href="?page=composer" >Via composer...</a>
    </div>
</div>


