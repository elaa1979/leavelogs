<?php include('../dal/config.php') ?>
<?php include('../models/leave.php') ?>
<?php
class LeaveDAL
{
    public static function GetByAccountId($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leave WHERE AccountId=:accountid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':accountid', $accountid, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }

    public static function GetById($id)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leave WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public static function Save(Leave $leave)
    {
        //INSERT INTO `lms_leave`(`Id`, `AccountId`, `EmployeeId`, `LeaveType`, `Reason`, `LeaveFrom`, `LeaveTo`, `Status`, `AppliedOn`) 
        //VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])
        global $dbh;
        if ($leave->Id == null) {
            $sql = "INSERT INTO lms_leave(AccountId, EmployeeId, LeaveType, Reason, LeaveFrom, LeaveTo, Status, AppliedOn) VALUES (:accountid,:employeeid,:leavetype,:reason,:leavefrom,:leaveto,:status,:appliedon)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $leave->AccountId, PDO::PARAM_INT);
            $query->bindParam(':employeeid', $leave->EmployeeId, PDO::PARAM_INT);
            $query->bindParam(':leavetype', $leave->LeaveType, PDO::PARAM_STR);
            $query->bindParam(':reason', $leave->Reason, PDO::PARAM_STR);
            $query->bindParam(':leavefrom', $leave->LeaveFrom, PDO::PARAM_STR);
            $query->bindParam(':leaveto', $leave->LeaveTo, PDO::PARAM_STR);
            $query->bindParam(':status', $leave->Status, PDO::PARAM_STR);
            $query->bindParam(':appliedon', $leave->AppliedOn, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $leave->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_leave SET LeaveType=:leavetype,Reason=:reason,LeaveFrom=:leavefrom,LeaveTo=:leaveto,Status=:status WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $leave->Id, PDO::PARAM_INT);
            $query->bindParam(':employeeid', $leave->EmployeeId, PDO::PARAM_INT);
            $query->bindParam(':leavetype', $leave->LeaveType, PDO::PARAM_STR);
            $query->bindParam(':reason', $leave->Reason, PDO::PARAM_STR);
            $query->bindParam(':leavefrom', $leave->LeaveFrom, PDO::PARAM_STR);
            $query->bindParam(':leaveto', $leave->LeaveTo, PDO::PARAM_STR);
            $query->bindParam(':status', $leave->Status, PDO::PARAM_STR);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_leave WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

