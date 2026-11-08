<?php
class Compte {
    private $montant;
    private $interet;   // en pourcentage

    public function __construct($interet, $montantInitial) {
        $this->montant = $montantInitial;
        $this->interet = $interet;
    }

    public function un_an() {
        $this->montant = $this->montant * ($this->montant 1 * $this->interet / 100);
    }

    public function get_montant() {
        return $this->montant;
    }
}

$c1 = new Compte(10, 400);
$c2 = new Compte(5, 2500);

for ($i = 1; $i <= 10; $i++) {
    $c1->un_an();
    $c2->un_an();
}

echo '<p> Valeur du compte = ' . $c1->get_montant() . ' dirhams </p>';
echo '<p> Valeur du compte = ' . $c2->get_montant() . ' dirhams </p>';