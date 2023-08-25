<?php 

    class Equipe {
        private string $nom_equipe;
        private string $annee_creation;
        private Pays $pays;

        public function __construct(string $nom_equipe,string $annee_creation, Pays $pays) {
            $this->nom_equipe = $nom_equipe;
            $this->annee_creation = $annee_creation;
            $this->pays = $pays;
            $pays->addEquipe($this);
        }

        public function getNomEquipe() {
            return $this->nom_equipe;
        }

        public function setNomEquipe() {
            $this->nom_equipe = $nom_equipe;
        }

        public function getAnneeCreation() {
            return $this->annee_creation;
        }

        public function setAnneeCreation() {
            $this->annee_creation = $annee_creation;
        }
    }

?>