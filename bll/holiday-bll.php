<?php
include('../dal/holiday-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface IHolidayBLL
{
    public function GetByAccountId($accountid);
    public function GetById($id);
    public function Save(Holiday $holiday);
    public function Delete($id);
}

class HolidayBLL implements IHolidayBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new HolidayDAL();
    }
    public function GetByAccountId($accountid)
    {
        return $this->dal->GetByAccountId($accountid);
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(Holiday $holiday)
    {
        $errors = $holiday->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($holiday);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

