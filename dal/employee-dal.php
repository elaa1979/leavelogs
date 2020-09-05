<?php include('../dal/config.php') ?>
<?php include('../models/employee.php') ?>
<?php
class EmployeeDAL
{
    public static function GetByUsernamePassword($uname, $password)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_employee WHERE EmailId=:uname and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':uname', $uname, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }

    public static function GetById($id)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_employee WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }

    public static function GetByAccountId($accountId)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_employee WHERE AccountId=:accountid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':accountid', $accountId, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }

    public static function Save(Employee $emp)
    {
        global $dbh;
        if ($emp->Id == null) {

            $sql = "INSERT INTO lms_employee(AccountId, EmployeeId, FirstName, LastName, EmailId, [Password], ProfilePicture, Gender, DOB, DepartmentId, [Address], City, Country, PhoneNumber, [Status], JoinedOn, ReleavedOn, Admin, SuperAdmin) VALUES (:accountid,:employeeid,:firstname,:lastname,:emailid, :password,:profilepicture,:gender,:dob,:departmentid,:address,:city,:country,:phonenumber,:status,:joinedon,:releavedon,:admin,:superadmin)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $emp->AccountId, PDO::PARAM_INT);
            $query->bindParam(':employeeid', $emp->EmployeeId, PDO::PARAM_STR);
            $query->bindParam(':firstname', $emp->FirstName, PDO::PARAM_STR);
            $query->bindParam(':lastname', $emp->LastName, PDO::PARAM_STR);
            $query->bindParam(':emailid', $emp->EmailId, PDO::PARAM_STR);
            $query->bindParam(':password', $emp->Password, PDO::PARAM_STR);
            $query->bindParam(':profilepicture', $emp->ProfilePicture, PDO::PARAM_STR);
            $query->bindParam(':gender', $emp->Gender, PDO::PARAM_STR);
            $query->bindParam(':dob', $emp->DOB, PDO::PARAM_STR);
            $query->bindParam(':departmentid', $emp->DepartmentId, PDO::PARAM_INT);
            $query->bindParam(':address', $emp->Address, PDO::PARAM_STR);
            $query->bindParam(':city', $emp->City, PDO::PARAM_STR);
            $query->bindParam(':country', $emp->Country, PDO::PARAM_STR);
            $query->bindParam(':phonenumber', $emp->PhoneNumber, PDO::PARAM_STR);
            $query->bindParam(':status', $emp->Status, PDO::PARAM_STR);
            $query->bindParam(':joinedon', $emp->JoinedOn, PDO::PARAM_STR);
            $query->bindParam(':releavedon', $emp->ReleavedOn, PDO::PARAM_STR);
            $query->bindParam(':admin', $emp->Admin, PDO::PARAM_BOOL);
            $query->bindParam(':superadmin', $emp->SuperAdmin, PDO::PARAM_BOOL);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $emp->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_employee SET AccountId=:accountid,EmployeeId=:employeeid,FirstName=:firstname,LastName=:lastname,EmailId=:emailid,Password=:password,ProfilePicture=:profilepicture,Gender=:gender,DOB=:dob,DepartmentId=:departmentid,Address=:address,City=:city,Country=:country,PhoneNumber=:phonenumber,Status=:status,JoinedOn=:joinedon,ReleavedOn=:releavedon,Admin=:admin,SuperAdmin=:superadmin WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $emp->Id, PDO::PARAM_INT);
            $query->bindParam(':accountid', $emp->AccountId, PDO::PARAM_INT);
            $query->bindParam(':employeeid', $emp->EmployeeId, PDO::PARAM_STR);
            $query->bindParam(':firstname', $emp->FirstName, PDO::PARAM_STR);
            $query->bindParam(':lastname', $emp->LastName, PDO::PARAM_STR);
            $query->bindParam(':emailid', $emp->EmailId, PDO::PARAM_STR);
            $query->bindParam(':password', $emp->Password, PDO::PARAM_STR);
            $query->bindParam(':profilepicture', $emp->ProfilePicture, PDO::PARAM_STR);
            $query->bindParam(':gender', $emp->Gender, PDO::PARAM_STR);
            $query->bindParam(':dob', $emp->DOB, PDO::PARAM_STR);
            $query->bindParam(':departmentid', $emp->DepartmentId, PDO::PARAM_INT);
            $query->bindParam(':address', $emp->Address, PDO::PARAM_STR);
            $query->bindParam(':city', $emp->City, PDO::PARAM_STR);
            $query->bindParam(':country', $emp->Country, PDO::PARAM_STR);
            $query->bindParam(':phonenumber', $emp->PhoneNumber, PDO::PARAM_STR);
            $query->bindParam(':status', $emp->Status, PDO::PARAM_STR);
            $query->bindParam(':joinedon', $emp->JoinedOn, PDO::PARAM_STR);
            $query->bindParam(':releavedon', $emp->ReleavedOn, PDO::PARAM_STR);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_employee WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

