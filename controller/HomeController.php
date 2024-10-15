<?php

class HomeController
{
    public function index()
    {
        try {
            $jobModel = new JobModel();
            $datas = $jobModel->readAll();
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
}