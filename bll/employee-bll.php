<?php
include('../models/session.php');
include('../dal/employee-dal.php');
?>
<?php

interface IEmployeeBLL
{
    public function GetByUsernamePassword($uname, $password);
    public function GetById($id);
    public function GetByAccountId($accountId);
    public function Save(Employee $emp);
    public function Delete($id);
}

class EmployeeBLL implements IEmployeeBLL
{
    public $dal; 
    public function __construct(){
        $this->dal = new EmployeeDAL();
    }
    public function Get($uname, $pwd)
    {
        $password = md5($pwd);
        $result = EmployeeDAL::GetByUsernamePassword($uname, $password);

        if ($result != null) {

            if ($result->Status != "Active") {
                return "Your account is Inactive. Please contact admin";
            }

            $current_session = new Session(
                $result->Id,
                $result->FirstName . " " . $result->LastName,
                $result->AccountId,
                $result->Admin,
                $result->SuperAdmin
            );
            $_SESSION['CURRENT_SESSION'] = serialize($current_session);
            return "Success";
        }

        return "Invalid Email address or password!" . $password;
    }

    public function GetByUsernamePassword($uname, $password){
        return $this->dal->GetByUsernamePassword($uname, $password);
    }
    public function GetById($id){
        return $this->dal->GetById($id);
    }
    public function GetByAccountId($accountId){
        return $this->dal->GetByAccountId($accountId);
    }
    public function Save(Employee $emp){
        return $this->dal->Save($emp);
    }
    public function Delete($id){
        return $this->dal->Delete($id);
    }
}
?>

<?php

session_start();
$errors = array();
if (isset($_POST['login_user'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $msg = EmployeeBLL::Get($email, $password);
        if ($msg == "Success") {
            header('location: ../employee/my-dashboard.php');
        } else {
            array_push($errors, $msg);
        }
    }
}
?>