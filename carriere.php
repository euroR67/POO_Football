<?php 

    class Carriere {
        private int $annee_saison;
        private Equipe $equipe;
        private Joueur $joueur;

        public function __construct(int $annee_saison, Equipe $equipe, Joueur $joueur) {
            $this->annee_saison = $annee_saison;
            $this->equipe = $equipe;
            $this->joueur = $joueur;
            $equipe->setCarriere($this);
            $joueur->setCarriere($this);
        }

        public function getAnneeSaison() {
            return $this->annee_saison;
        }

        public function setAnneeSaison(int $annee_saison) {
            $this->annee_saison = $annee_saison;
        }

        public function getEquipe() {
            return $this->equipe;
        }

        public function setEquipe($equipe) {
            $this->equipe = $equipe;
        }

        public function getJoueur() {
            return $this->joueur;
        }

        public function setJoueur($joueur) {
            $this->joueur = $joueur;
        }

        public function __toString() {
            return $this->annee_saison . " " . $this->equipe . " " . $this->joueur;
        }
    }

?>