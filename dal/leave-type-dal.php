<?php include('../dal/config.php') ?>
<?php include('../models/leave-type.php') ?>
<?php
class LeaveTypeDAL
{
    public static function GetByAccountId($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leavetype WHERE AccountId=:accountid";
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
        $sql = "SELECT * FROM lms_leavetype WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public static function Save(LeaveType $leavetype)
    {
        global $dbh;
        if ($leavetype->Id == null) {
            $sql = "INSERT INTO lms_leavetype(AccountId, Name, Description, MaxLimit,Active) 
            VALUES (:accountid,:name,:description,:maxlimit,:active)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $leavetype->AccountId, PDO::PARAM_INT);
            $query->bindParam(':name', $leavetype->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $leavetype->Description, PDO::PARAM_STR);
            $query->bindParam(':maxlimit', $leavetype->MaxLimit, PDO::PARAM_STR);
            $query->bindParam(':active', $leavetype->MaxLimit, PDO::PARAM_BOOL);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $leavetype->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_leavetype SET Name=:name,Description=:description,MaxLimit=:maxlimit,Active=:active WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $leavetype->Id, PDO::PARAM_INT);
            $query->bindParam(':name', $leavetype->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $leavetype->Description, PDO::PARAM_STR);
            $query->bindParam(':maxlimit', $leavetype->MaxLimit, PDO::PARAM_STR);
            $query->bindParam(':active', $leavetype->MaxLimit, PDO::PARAM_BOOL);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_leavetype WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

