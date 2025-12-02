<?php
echo '<br><br><i style="color:white;font-size:1px;font-family:calibri ;">';
echo "Very simple password changer for recommended routine. There are 12 charachers on password. Takes very long on the bruteforcing attack method to guess this cpu created password to answer the correlation is very difficult. This is source code of the program to avoid foil hatting about logging. Site is anothersearchengine.dy.fi and github alias is Duunari2 there are these two options. Also gives md5 hash of password as output.

Thats for debugging the thing here is this is finished and ready to modify to better purpoises just let this here.";


function generatePassword($_len) {

    $_alphaSmall = 'abcdefghijklmnopqrstuvwxyz';            // small letters
    $_alphaCaps  = strtoupper($_alphaSmall);                // CAPITAL LETTERS
    $_numerics   = '1234567890';                            // numerics
    $_specialChars = '`~!@#$%^&*()-_=+]}[{;:,<.>/?\'"\|';   // Special Characters

    $_container = $_alphaSmall.$_alphaCaps.$_numerics.$_specialChars;  //full picture of the containers

    $password = '';         // will contain the desired pass

    for($i = 0; $i < $_len; $i++) {                                 // Loop till the length mentioned
        $_rand = rand(0, strlen($_container) - 1);                  // Get Randomized Length
        $password .= substr($_container, $_rand, 1);                // returns part of the string [ high tensile strength ;) ] 
    }

    return $password;       // Returns the generated Pass
}
echo '<br><br><i style="color:green;font-size:30px;font-family:calibri ;">';
echo "New 12 digits generated password: <br><br>";
echo generatePassword(12);
echo '<br><br><i style="color:red;font-size:30px;font-family:calibri ;">';
echo "<br><br>MD5 hash of the password: <br><br>".md5($password);

?>