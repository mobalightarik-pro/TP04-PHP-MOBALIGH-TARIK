<?php

class Voiture {
    public string $couleur;
    public int $vitesse;

    public function __construct(string $couleur = "Blanche", int $vitesse = 0) {
        $this->couleur = $couleur;
        $this->vitesse = $vitesse;
    }

    public function afficher(): void {
        echo "Couleur : {$this->couleur} | Vitesse : {$this->vitesse} km/h" . PHP_EOL;
    }
}

$v1 = new Voiture();
$v2 = new Voiture("Rouge", 50);
$v1->afficher();
$v2->afficher();
$vNoire->afficher();

try {
    new Voiture(120);
} catch (TypeError $exception) {
    echo "new Voiture(120) provoque une TypeError avec le typage strict." . PHP_EOL;
}

echo PHP_EOL . "2.3.a - Destruction avec unset" . PHP_EOL;
$maVoiture = new Voiture("Blanche");
unset($maVoiture);
echo "Fin après unset." . PHP_EOL;

echo PHP_EOL . "2.3.b - Destruction sans unset" . PHP_EOL;
$voitureSansUnset = new Voiture("Bleue");
echo "Fin du script (la voiture bleue sera détruite à l'arrêt)." . PHP_EOL;

echo PHP_EOL . "2.3.c - Destruction de deux objets sans unset" . PHP_EOL;
$a = new Voiture("Verte");
$b = new Voiture("Noire");
echo "Fin du script (les objets seront détruits à l'arrêt)." . PHP_EOL;
