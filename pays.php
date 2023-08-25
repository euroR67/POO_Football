<?php 

    class Pays {
        private string $nom_pays;

        public function __construct(string $nom_pays) {
            $this->nom_pays = $nom_pays;
        }

        public function getNomPays() {
            return $this->nom_pays;
        }

        public function setNomPays() {
            $this->nom_pays = $nom_pays;
        }
    }

?>