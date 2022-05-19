<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censuraree. -->


<?php

$text = 'Lorem Ipsum è un testo segnaposto utilizzato nel settore della tipografia e della stampa. Lorem Ipsum è considerato il testo segnaposto standard sin dal sedicesimo secolo, quando un anonimo tipografo prese una cassetta di caratteri e li assemblò per preparare un testo campione. È sopravvissuto non solo a più di cinque secoli, ma anche al passaggio alla videoimpaginazione';
echo $text . "<br>" . "lunghezza:  "   . strlen($text) . "<br>" . "<br>";


echo str_replace($_GET['bruttaparola'], '****', $text) . '<br>' . 'lunghezza: ' . strlen(str_replace($_GET['bruttaparola'], '*****', $text));
?>