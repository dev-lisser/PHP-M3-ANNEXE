<?php

echo "Saisir le mot de passe : ";
$motDePasse  = rtrim(fgets(STDIN));

if ($motDePasse === "admin123") {
    echo "Mot de passe correct. Accès au système autorisé.";
}else {
echo "Mot de passe incorrect. Accès au système bloqué.";
}
?>
