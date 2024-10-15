<?php

class SearchModel extends CoreModel
{
    private $_req;

    public function __destruct()
    {
        if (!empty($this->req)) {
            $this->_req->closeCursor();
        }
    }

    public function searchFilter ($searchName, $searchInput)
    {

        // $table = "user";

        try
        {
            $sql = "SELECT DISTINCT j.job_id, job_title, job_city, job_company, job_salary, job_type, job_dateCreate
        FROM joboffer j
        JOIN jobofferskills js ON j.job_id = js.job_id 
        JOIN skills s ON js.ski_id = s.ski_id 
        WHERE $searchName LIKE '%$searchInput%'";

            // WHERE job_title LIKE ':title' OR job_company LIKE ':company' OR job_city LIKE ':city' OR ski_name LIKE ':name'";

            $this->_req = $this->getDb()->prepare($sql);
            $this->_req->execute();

            // Récupération et retour des résultats
            $result = $this->_req->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }catch (PDOException $e) {
            // Gérer les exceptions PDO
            echo "Erreur : " . $e->getMessage();
            return false;
        }
    }
}