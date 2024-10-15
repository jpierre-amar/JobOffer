<?php

class SearchController
{

    public function search()
    {
        try
        {
            $searchValue = $_POST['search'];
            $searchName = $searchValue == 'name' ? 'ski_name' : "job_$searchValue";

            $searchInput = $_POST['searchInput'];



            $searchModel = new SearchModel();
            $datas = $searchModel->searchFilter($searchName,$searchInput);
            if($datas > 0){
                foreach ($datas as $data)
                {
                    $jobs[] = new Job($data);
                }
            }

            include "./views/job/index.php";
        } catch (Exception $e) {
            throw new Exception($e->getMessage(), $e->getCode(), $e);
        }
    }
}