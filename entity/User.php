<?php

class User extends CoreEntity
{
    private $id;
    private $isCompany;
    private $nameCompany;
    private $firstName;
    private $lastName;
    private $email;
    private $pwd;
    private $description;
    private $link;
    private $speciality;
    private $city;

    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getIsCompany() {
        return $this->isCompany;
    }

    public function setIsCompany($isCompany) {
        $this->isCompany = $isCompany;
    }

    public function getNameCompany() {
        return $this->nameCompany;
    }

    public function setNameCompany($nameCompany) {
        $this->nameCompany = $nameCompany;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPwd() {
        return $this->pwd;
    }

    public function setPwd($pwd) {
        $this->pwd = $pwd;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getLink() {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function getSpeciality() {
        return $this->speciality;
    }

    public function setSpeciality($speciality) {
        $this->speciality = $speciality;
    }

    public function getCity() {
        return $this->city;
    }

    public function setCity($city) {
        $this->city = $city;
    }
}