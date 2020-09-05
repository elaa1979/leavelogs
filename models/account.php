<?php
class Account
{
    public $Id;
    public $Name;
    public $Description;
    public $CreatedOn;
    public $Active;

    function __construct(
        $id,
        $name,
        $description,
        $createdon,
        $active
    ) {
        $this->Id = $id;
        $this->Name = $name;
        $this->Description = $description;
        $this->CreatedOn = $createdon;
        $this->Active = $active;
    }

    function Validate()
    {
        $errors = array();
        if (empty($this->Name)) {
            $errors['Name']="Name is required.";
        }
        if (empty($this->Description)) {
            $errors['Description']="Description is required.";
        }
        return $errors;
    }

    function __destruct()
    {
    }
}
