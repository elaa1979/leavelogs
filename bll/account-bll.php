<?php
include('../dal/account-dal.php');
include('../custom/validation-exception.php');
?>
<?php

interface IAccountBLL
{
    public function Get();
    public  function GetById($id);
    public function Save(Account $account);
    public function Delete($id);
}

class AccountBLL implements IAccountBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new AccountDAL();
    }
    public function Get()
    {
        return $this->dal->Get();
    }

    public  function GetById($id)
    {
        return $this->dal->GetById($id);
    }

    public function Save(Account $account)
    {
        $errors = $account->Validate();
        if (count($errors) > 0) {
            throw new ValidationException($errors);
        }
        return $this->dal->Save($account);
    }

    public function Delete($id)
    {
        return $this->dal->Delete($id);
    }
}
?>

