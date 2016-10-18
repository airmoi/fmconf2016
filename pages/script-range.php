<?php 
use airmoi\FileMaker\FileMaker;
use airmoi\FileMaker\FileMakerException;
use airmoi\FileMaker\FileMakerValidationException;
?><div>
    <h2>Limiter les résultats d'un script</h2> 
<?php
    $fm = new FileMaker($db, $host, $user, $pass, $options);
    
    $result = $fm
            ->newPerformScriptCommand('sample', 'create sample data', 50 )
            ->setRange(5, 20)
            ->execute();
    
    echo $result->getFetchCount() . '/' . $result->getFoundSetCount() . " enregistrement renvoyés"  ;
?>
<pre><code id="code" class="php"><?php 
    preg_match_all('#<\?php\s(.*)\?>#Uis', file_get_contents(__FILE__), $matches);
    echo htmlspecialchars($matches[1][1]);
?></code></pre>
</div>
