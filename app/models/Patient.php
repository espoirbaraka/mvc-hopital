<?php
    class Patient extends Model
    {
        public $code;
        public $nom;	
        public $postnom;
        public $prenom;	
        public $date_naissance;	
        private $adresse;
        private $telephone;

        public function getAllPatients(){
            $requette = $this->db->prepare("SELECT * FROM tbl_patient");
            $requette->execute([]);
            return $resultat = $requette->fetchAll();
        }

        public function addPatient($nom, $postom, $prenom, $date_naissance,
                                	$adresse, $telephone)
        {
            $this->nom = $nom;
            $this->postnom = $postom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->adresse = $adresse; 
            $this->telephone = $telephone;

            $requette = $this->db->prepare("INSERT INTO tbl_patient
                    (nom, postnom, prenom, date_naissance, adresse, telephone)
                    VALUES(?, ?, ?, ?, ?, ?)");

            $requette->execute([$this->nom, $this->postnom, $this->prenom, $this->date_naissance,
                                    $this->adresse, $this->telephone]);
        }

        public function updatePatient($code_patient, $nom, $postom, $prenom, $date_naissance,
                                	$adresse, $telephone)
        {
            $this->code_patient = $code_patient;
            $this->nom = $nom;
            $this->postnom = $postom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->adresse = $adresse; 
            $this->telephone = $telephone;

            $requette = $this->db->prepare("UPDATE tbl_patient SET nom=?, postnom=?, prenom=?, 
                date_naissance=?, adresse=?, telephone=? WHERE code_patient=?");
            $requette->execute([$this->nom, $this->postnom, $this->prenom, $this->date_naissance,
                                    $this->adresse, $this->telephone, $this->code_patient]);
        }

        public function deletePatient($code_patient){
            $this->code = $code_patient;
            $request = $this->db->prepare("DELETE FROM tbl_patient WHERE code_patient=?");
            $request->execute([$this->code]);
        }

        public function searchPatient($keyword)
        {
            $request = $this->db->prepare("SELECT * FROM tbl_patient WHERE CONCAT(nom, postnom, prenom, adresse, telephone, 
                                                                            date_naissance) LIKE ?");
            $request->execute(["%$keyword%"]);
            return $result = $request->fetchAll();
        }
        }
?>