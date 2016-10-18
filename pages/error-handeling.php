<?php 
use airmoi\FileMaker\FileMaker;
use airmoi\FileMaker\FileMakerException;
use airmoi\FileMaker\FileMakerValidationException;
?><div>
    <h2>Gestion des erreurs</h2> 
<?php
try {
    $fm = new FileMaker($db, $host, $user, $pass, $options);
    $fm->setProperty('locale', 'fr');
    $layout = $fm->getLayout('sample');
    
    $record = $fm->newFindAnyCommand('sample')->execute()->getFirstRecord();
    $record->setField("calculation_field", "Bienvenue à la FMCONF !");
    $record->setField("text_field", str_repeat("a", 51));
    $record->commit();
  
} catch (FileMakerValidationException $e ) {
   printf ("Erreur de validation %d : %s" , $e->getCode(), $e->getMessage());
} catch ( FileMakerException $e ) {
    printf ("Erreur %d : %s" , $e->getCode(), $e->getMessage());
}
?>
<pre><code id="code" class="php"><?php 
    preg_match_all('#<\?php\s(.*)\?>#Uis', file_get_contents(__FILE__), $matches);
    echo htmlspecialchars($matches[1][1]);
?></code></pre>
</div>
