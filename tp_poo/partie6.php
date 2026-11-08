<?php
class Animal {
    public function manger(): void {
        echo "Je mange." . PHP_EOL;
    }
}

class Chien extends Animal {
    public function aboyer(): void {
        echo "Wouf !" . PHP_EOL;
    }
}

class chat extends Animal{
    public function miauler():void{
        echo "Miaou !" . PHP_EOL;
    }
}

$c = new Chien();
$c->manger();    // héritée d'Animal
$c->aboyer();    // propre à Chien
// $c->miauler();    // Erreur : la méthode miauler() n'existe pas dans Chien

echo "<br>";
echo "<br>";


class Personne {
    public function __construct(protected string $nom) {}

    public function presentation(): string {
        return "Je suis " . $this->nom;
    }
}

class Etudiant extends Personne {
    public function __construct(string $nom, private string $filiere) {
        parent::__construct($nom);   // appelle le constructeur du parent
    }

    public function presentation(): string {
        return parent::presentation() . ", étudiant en " . $this->filiere;
    }
}

$e = new Etudiant("Ahmed", "Informatique");
echo $e->presentation() . PHP_EOL;


echo "<br>";
echo "<br>";


<?php
class Base {
    final public function afficher(): void {
        echo "Méthode finale" . PHP_EOL;
    }
}

final class Outil {
    public const VERSION = "1.0";
}

class Produit {
    public function __construct(public readonly string $reference) {}
}

$p = new Produit("REF-001");
echo $p->reference . PHP_EOL;
