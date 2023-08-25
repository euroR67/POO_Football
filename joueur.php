<?php 

    class Joueur {
        private string $nom;
        private string $prenom;
        private string $date_de_naissance;
        private Pays $pays;
        private array $carriere = [];

        public function __construct(string $nom, string $prenom, string $date_de_naissance, Pays $pays) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_de_naissance = $date_de_naissance;
            $this->pays = $pays;
        }

        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

        public function getDateDeNaissance() {
            return $this->date_de_naissance;
        }

        public function setDateDeNaissance(string $date_de_naissance) {
            $this->date_de_naissance = new DateTime($date_de_naissance);
        }

        public function getPays() {
            return $this->pays;
        }

        public function setPays($pays) {
            $this->pays = $pays;
        }

        public function __toString() {
            return $this->nom . " " . $this->prenom . " " . $this->date_de_naissance . " " . $this->pays;
        }

        // méthode pour ajouter une carrière à un joueur
        public function setCarriere(Carriere $carriere) {
            array_push($this->carriere, $carriere);
        }

        // méthode pour afficher les carrières d'un joueur
        public function carrieres() {
            $carriere = [];
            foreach ($this->carriere as $carriere) {
                echo $carriere->getAnneeSaison() . " " . $carriere->getEquipe()->getNomEquipe();
            }
        }
    }

?>