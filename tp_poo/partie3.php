<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    public function __set(string $name, mixed $value): void {
        if (property_exists($this, $name)) {
            if(empty($value) || strlen($value) < 2) {
                throw new InvalidArgumentException("Le nom ne doit pas être vide et doit contenir au moins 2 caractères.");
            } else {
                $this->$name=$value;
            }
        } else {
            echo "Propriété $name inexistante";
        }
    }

    public function __get(string $name): mixed {
        return $this->$name ?? null;
    }

    public function __isset(string $name): bool {
        return isset($this->$name);
    }

    public function __unset(string $name): void {
        if (property_exists($this, $name)) {
            $this->$name = "";
        }
    }
}

$p = new Personne();
$p->nom = "Hachimi";             // → __set
echo $p->nom . PHP_EOL;         // → __get
var_dump(isset($p->nom));       // → __isset
unset($p->nom);                 // → __unset
var_dump(isset($p->nom));
$p->telephone = "0600000000";

?>