<?php 

    class Equipe {
        private string $nom_equipe;
        private int $annee_creation;
        private Pays $pays;
        private array $carriere = [];

        public function __construct(string $nom_equipe,int $annee_creation, Pays $pays) {
            $this->nom_equipe = $nom_equipe;
            $this->annee_creation = $annee_creation;
            $this->pays = $pays;
            $pays->setEquipe($this);
        }

        public function getNomEquipe() {
            return $this->nom_equipe;
        }

        public function setNomEquipe($nom_equipe) {
            $this->nom_equipe = $nom_equipe;
        }

        public function getAnneeCreation() {
            return $this->annee_creation;
        }

        public function setAnneeCreation(int $annee_creation) {
            $this->annee_creation = $annee_creation;
        }

        // méthode pour ajouter un joueur à une équipe
        public function setJoueur($joueurs) {
            array_push($this->joueurs, $joueurs);
        }

        // méthode pour ajouter une carrière à une équipe
        public function setCarriere(Carriere $carriere) {
            array_push($this->carriere, $carriere);
        }

        public function __toString() {
            return $this->nom_equipe . " " . $this->annee_creation . " " . $this->pays;
        }

        // méthode pour afficher les joueurs d'une équipe
        public function joueurs() {
            $joueurs = [];
            foreach ($this->carriere as $joueur) {
                echo $joueur->getJoueur();
            }
            return implode(", ", $joueurs);
        }

    }

?>