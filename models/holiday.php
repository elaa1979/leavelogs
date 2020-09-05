<?php
class Holiday
{
    //SELECT `Id`, `AccountId`, `Name`, `Description`, `Date` FROM `lms_holiday` WHERE 1
    public $Id;
    public $AccountId;
    public $Name;
    public $Description;
    public $Date;

    function __construct(
        $id,
        $accountid,
        $name,
        $description,
        $date
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->Name = $name;
        $this->Description = $description;
        $this->Date = $date;
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
        if (empty($this->Date)) {
            $errors['Date']="Date is required.";
        }
        
        return $errors;
    }

    function __destruct()
    {
    }
}
