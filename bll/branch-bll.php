<?php
include('../dal/branch-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface IBranchBLL
{
    public function GetByAccountId($accountid);
    public function GetById($id);
    public function Save(Branch $branch);
    public function Delete($id);
}

class BranchBLL implements IBranchBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new BranchDAL();
    }
    public function GetByAccountId($accountid)
    {
        return $this->dal->GetByAccountId($accountid);
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(Branch $branch)
    {
        $errors = $branch->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($branch);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

