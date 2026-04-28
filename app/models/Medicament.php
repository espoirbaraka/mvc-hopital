<?php
class Medicament extends Model {
    public function getAllMedicaments($search = '')
    {
        if ($search !== '') {
            $query = $this->db->prepare(
                "SELECT code_medicament, designation, description, prix
                FROM tbl_medicament
                WHERE designation LIKE :search OR description LIKE :search
                ORDER BY designation ASC"
            );
            $query->execute(['search' => '%' . $search . '%']);
            return $query->fetchAll();
        }

        $query = $this->db->query(
            "SELECT code_medicament, designation, description, prix
            FROM tbl_medicament
            ORDER BY designation ASC"
        );

        return $query->fetchAll();
    }

    public function createMedicament($designation, $description, $prix)
    {
        $query = $this->db->prepare(
            "INSERT INTO tbl_medicament (designation, description, prix)
            VALUES (:designation, :description, :prix)"
        );

        $query->execute([
            'designation' => $designation,
            'description' => $description,
            'prix' => $prix,
        ]);
    }

    public function deleteMedicament($id)
    {
        $query = $this->db->prepare("DELETE FROM tbl_medicament WHERE code_medicament = :id");
        $query->execute(['id' => $id]);
    }

    public function countMedicaments()
    {
        return (int) $this->db->query("SELECT COUNT(*) FROM tbl_medicament")->fetchColumn();
    }

    public function getRecentMedicaments($limit = 5)
    {
        $limit = max(1, (int) $limit);

        $query = $this->db->query(
            "SELECT code_medicament, designation, description, prix
            FROM tbl_medicament
            ORDER BY code_medicament DESC
            LIMIT " . $limit
        );

        return $query->fetchAll();
    }

    public function getAveragePrice()
    {
        $average = $this->db->query("SELECT AVG(prix) FROM tbl_medicament")->fetchColumn();
        return $average ? (float) $average : 0.0;
    }
}
