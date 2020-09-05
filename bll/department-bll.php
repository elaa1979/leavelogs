<?php
include('../dal/department-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface IDepartmentBLL
{
    public function GetByAccountId($accountid);
    public function GetById($id);
    public function Save(Department $department);
    public function Delete($id);
}

class DepartmentBLL implements IDepartmentBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new DepartmentDAL();
    }
    public function GetByAccountId($accountid)
    {
        return $this->dal->GetByAccountId($accountid);
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(Department $department)
    {
        $errors = $department->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($department);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

