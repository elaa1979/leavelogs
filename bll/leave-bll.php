<?php
include('../dal/leave-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface ILeaveBLL
{
    public function GetByAccountId($accountid);
    public function GetById($id);
    public function Save(Leave $leave);
    public function Delete($id);
}

class LeaveBLL implements ILeaveBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new LeaveDAL();
    }
    public function GetByAccountId($accountid)
    {
        return $this->dal->GetByAccountId($accountid);
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(Leave $leave)
    {
        $errors = $leave->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($leave);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

