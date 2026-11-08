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
    public function __toString(): string {
        return "prnom : " .$this->prenom . " nom : " . $this->nom . " date de naissance : " . $this->dateNaissance ."ans";
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
$p->nom = "Hachimi";
$p->prenom = "Ahmed";
$p->dateNaissance = "1990-01-01";
echo $p . "<br>";         // → __get
var_dump(isset($p->nom));       // → __isset
unset($p->nom);                 // → __unset
var_dump(isset($p->nom));
$p->telephone = "0600000000";

?>