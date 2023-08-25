<?php 

    class Joueur {
        private string $nom;
        private string $prenom;
        private string $date_de_naissance;
        private 

        public function __construct(string $nom, string $prenom, string $date_de_naissance) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_de_naissance = $date_de_naissance;
        }
    }

?>