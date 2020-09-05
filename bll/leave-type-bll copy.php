<?php
include('../dal/leave-type-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface ILeaveTypeBLL
{
    public function GetByAccountId($accountid);
    public function GetById($id);
    public function Save(LeaveType $leavetype);
    public function Delete($id);
}

class LeaveTypeBLL implements ILeaveTypeBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new LeaveTypeDAL();
    }
    public function GetByAccountId($accountid)
    {
        return $this->dal->GetByAccountId($accountid);
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(LeaveType $leavetype)
    {
        $errors = $leavetype->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($leavetype);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

