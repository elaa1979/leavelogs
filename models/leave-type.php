<?php
class LeaveType
{
    //SELECT `Id`, `AccountId`, `Name`, `Description`, `Date` FROM `lms_holiday` WHERE 1
    public $Id;
    public $AccountId;
    public $Name;
    public $Description;
    public $MaxLimit;
    public $Active;

    function __construct(
        $id,
        $accountid,
        $name,
        $description,
        $maxlimit,
        $active
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->Name = $name;
        $this->Description = $description;
        $this->MaxLimit = $maxlimit;
        $this->Active=$active;
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
        if (empty($this->MaxLimit)) {
            $errors['MaxLimit']="Max Limit is required.";
        }
        
        return $errors;
    }

    function __destruct()
    {
    }
}
