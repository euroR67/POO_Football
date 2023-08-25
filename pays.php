<?php 

    class Pays {
        private string $nom_pays;
        private array $equipes = [];

        public function __construct(string $nom_pays) {
            $this->nom_pays = $nom_pays;
        }

        public function getNomPays() {
            return $this->nom_pays;
        }

        public function setNomPays($nom_pays) {
            $this->nom_pays = $nom_pays;
        }

        // méthode pour ajouter une équipe à un pays
        public function setEquipe($equipes) {
            array_push($this->equipes, $equipes);
        }

        public function __toString() {
            return $this->nom_pays;
        }

        // méthode pour afficher les équipes d'un pays
        public function equipes() {
            $equipes = [];
            foreach ($this->equipes as $equipe) {
                echo $equipes[] = $equipe->getNomEquipe();
            }
        }
    }

?>