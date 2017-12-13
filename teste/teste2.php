<?php
define("CONSTANTE", "Alô Mundo.");
echo CONSTANTE; // mostra "Alô Mundo."
echo Constante; // mostra "Constante" e dá um aviso.

define("GREETING", "Alô Você.",TRUE);
echo GREETING; // mostra "Alô você."
echo Greeting; // mostra "Alô você."

?>