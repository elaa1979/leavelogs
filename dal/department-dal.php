<?php include('../dal/config.php') ?>
<?php include('../models/department.php') ?>
<?php
class DepartmentDAL
{
    public static function GetByAccountId($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_department WHERE AccountId=:accountid";
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
        $sql = "SELECT * FROM lms_department WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public static function Save(Department $department)
    {
        global $dbh;
        if ($department->Id == null) {
            $sql = "INSERT INTO lms_department(AccountId, Name, ShortName, Code, Active) VALUES (:accountid,:name,:shortname,:code,:active)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $department->AccountId, PDO::PARAM_INT);
            $query->bindParam(':name', $department->Name, PDO::PARAM_STR);
            $query->bindParam(':shortname', $department->ShortName, PDO::PARAM_STR);
            $query->bindParam(':code', $department->Code, PDO::PARAM_STR);
            $query->bindParam(':active', $department->Active, PDO::PARAM_BOOL);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $department->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_department SET Name=:name,ShortName=:shortname,Code=:code,Active=:active WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $department->Id, PDO::PARAM_INT);
            $query->bindParam(':name', $department->Name, PDO::PARAM_STR);
            $query->bindParam(':shortname', $department->ShortName, PDO::PARAM_STR);
            $query->bindParam(':code', $department->Code, PDO::PARAM_STR);
            $query->bindParam(':active', $department->Active, PDO::PARAM_BOOL);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_department WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

