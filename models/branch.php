<?php
class Branch
{
    public $Id;
    public $AccountId;
    public $Name;
    public $Description;
    public $Address;
    public $TimeZone;
    public $ModifiedOn;
    public $Active;

    function __construct(
        $id,
        $accountid,
        $name,
        $description,
        $address,
        $timezone,
        $modifiedon,
        $active
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->Name = $name;
        $this->Description = $description;
        $this->Address = $address;
        $this->TimeZone = $timezone;
        $this->ModifiedOn = $modifiedon;
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
        if (empty($this->Address)) {
            $errors['Address']="Address is required.";
        }
        if (empty($this->TimeZone)) {
            $errors['TimeZone']="TimeZone is required.";
        }
        return $errors;
    }

    function __destruct()
    {
    }
}
