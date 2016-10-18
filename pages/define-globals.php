<?php 
use airmoi\FileMaker\FileMaker;
use airmoi\FileMaker\FileMakerException;
use airmoi\FileMaker\FileMakerValidationException;
?><div>
    <h2>Définir une globale à l'execution d'une recherche</h2> 
<?php
    $fm = new FileMaker($db, $host, $user, $pass, $options);

    $result = $fm->newFindCommand('sample')
            ->setGlobal('global_field', date('m/d/Y'))
            ->addFindCriterion('test_field', 1)
            ->execute();
    
    echo $result->getFetchCount() . " enregistrement trouvés";
?>
<pre><code id="code" class="php"><?php 
    preg_match_all('#<\?php\s(.*)\?>#Uis', file_get_contents(__FILE__), $matches);
    echo htmlspecialchars($matches[1][1]);
?></code></pre>
</div>
