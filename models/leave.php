<?php
class Leave
{
    //`Id`, `AccountId`, `EmployeeId`, `LeaveType`, `Reason`, `LeaveFrom`, `LeaveTo`, `Status`, `AppliedOn`
    public $Id;
    public $AccountId;
    public $EmployeeId;
    public $LeaveType;
    public $Reason;
    public $LeaveFrom;
    public $LeaveTo;
    public $Status;
    public $AppliedOn;

    function __construct(
        $id,
        $accountid,
        $employeeId,
        $leavetype,
        $reason,
        $leavefrom,
        $leaveto,
        $status,
        $appliedon
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->EmployeeId = $employeeId;
        $this->LeaveType = $leavetype;
        $this->Reason = $reason;
        $this->LeaveFrom = $leavefrom;
        $this->LeaveTo = $leaveto;
        $this->Status = $status;
        $this->AppliedOn = $appliedon;
    }

    function Validate()
    {
        $errors = array();
        if (empty($this->LeaveType)) {
            $errors['LeaveType']="Leave Type is required.";
        }
        if (empty($this->Reason)) {
            $errors['Reason']="Leave Reason is required.";
        }
        if (empty($this->LeaveFrom)) {
            $errors['LeaveFrom']="Leave start date is required.";
        }
        if (empty($this->LeaveTo)) {
            $errors['LeaveTo']="Leave end date is required.";
        }
        
        return $errors;
    }

    function __destruct()
    {
    }
}
