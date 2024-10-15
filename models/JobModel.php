<?php

class jobModel extends CoreModel
{
    private $_req;

    public function __destruct()
    {
        if (!empty($this->_req)) {
            $this->_req->closeCursor();
        }
    }

    public function readAll(): array
    {
        $sql = 'SELECT job_id, job_dateCreate, job_title, job_company, job_description, job_salary, job_type, job_city, job_provide FROM joboffer';

        // Préparation de la requête
        $this->_req = $this->getDb()->prepare($sql);
        $this->_req->execute();

        // Récupération et retour des résultats
        $result = $this->_req->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        exit();
    }

    public function readOne($id): array
    {
        $sql = 'SELECT job_id, job_dateCreate, job_title, job_company, job_description, job_salary, job_type, job_city, job_provide FROM joboffer WHERE job_id = :id';
    }
}
