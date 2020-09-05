<?php
class Department
{
    public $Id;
    public $AccountId;
    public $Name;
    public $ShortName;
    public $Code;
    public $Active;

    function __construct(
        $id,
        $accountid,
        $name,
        $shortname,
        $code,
        $active
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->Name = $name;
        $this->ShortName = $shortname;
        $this->Code = $code;
        $this->Active = $active;
    }

    public $IsValid;
    function Validate()
    {
        $errors = array();
        if (empty($this->Name)) {
            $errors['Name']="Name is required.";
        }
        if (empty($this->ShortName)) {
            $errors['ShortName']="Short Name is required.";
        }
        if (empty($this->Code)) {
            $errors['Code']="Department Code is required.";
        }

        return $errors;
    }

    function __destruct()
    {
    }
}
