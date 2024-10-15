<?php

class Job extends CoreEntity


    {

        private $id;
        private $dateCreate;
        private $title;
        private $company;
        private $description;
        private $salary;
        private $type;
        private $city;
        private $provide;

    public function getId()
    {
        return $this->id;
    }

    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getCompany()
    {
        return $this->company;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getProvide()
    {
        return $this->provide;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setProvide($provide)
    {
        $this->provide = $provide;
    }

}

