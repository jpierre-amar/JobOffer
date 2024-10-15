<?php

class JobController
{
    public function showOffer()
    {
        try {
            $jobModel = new JobModel();
            $datas = $jobModel->readOne($id);
            foreach ($datas as $data)
            {
                $jobs[] = new Job($data);
            }
            include "views/job/index.php";
        }
        catch (Exception $e)
        {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }

    public function createOffer() {

    }
}
