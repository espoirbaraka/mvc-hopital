<?php
class Patient extends Model
{
    public function getAllPatients($search = '')
    {
        if ($search !== '') {
            $query = $this->db->prepare(
                "SELECT code_patient, nom, postnom, prenom, date_naissance, adresse, telephone
                FROM tbl_patient
                WHERE nom LIKE :search
                    OR postnom LIKE :search
                    OR prenom LIKE :search
                    OR telephone LIKE :search
                ORDER BY nom ASC, postnom ASC, prenom ASC"
            );
            $query->execute(['search' => '%' . $search . '%']);
            return $query->fetchAll();
        }

        $query = $this->db->query(
            "SELECT code_patient, nom, postnom, prenom, date_naissance, adresse, telephone
            FROM tbl_patient
            ORDER BY nom ASC, postnom ASC, prenom ASC"
        );

        return $query->fetchAll();
    }

    public function createPatient($payload)
    {
        $query = $this->db->prepare(
            "INSERT INTO tbl_patient
            (nom, postnom, prenom, date_naissance, adresse, telephone)
            VALUES (:nom, :postnom, :prenom, :date_naissance, :adresse, :telephone)"
        );

        $query->execute($payload);
    }

    public function deletePatient($id)
    {
        $query = $this->db->prepare("DELETE FROM tbl_patient WHERE code_patient = :id");
        $query->execute(['id' => $id]);
    }

    public function countPatients()
    {
        return (int) $this->db->query("SELECT COUNT(*) FROM tbl_patient")->fetchColumn();
    }

    public function getRecentPatients($limit = 5)
    {
        $limit = max(1, (int) $limit);

        $query = $this->db->query(
            "SELECT code_patient, nom, postnom, prenom, date_naissance, adresse, telephone
            FROM tbl_patient
            ORDER BY code_patient DESC
            LIMIT " . $limit
        );

        return $query->fetchAll();
    }
}
