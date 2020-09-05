<?php include('../dal/config.php') ?>
<?php include('../models/branch.php') ?>
<?php
class BranchDAL
{
    public static function GetByAccountId($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_branch WHERE AccountId=:accountid";
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
        $sql = "SELECT * FROM lms_branch WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public static function Save(Branch $branch)
    {
        global $dbh;
        if ($branch->Id == null) {
            $sql = "INSERT INTO lms_branch(AccountId, Name, Description, Address, TimeZone, Active, ModifiedOn) 
            VALUES (:accountid,:name,:description,:address,:timezone,:active, modifiedon)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $branch->AccountId, PDO::PARAM_INT);
            $query->bindParam(':name', $branch->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $branch->Description, PDO::PARAM_STR);
            $query->bindParam(':address', $branch->Address, PDO::PARAM_STR);
            $query->bindParam(':timezone', $branch->TimeZone, PDO::PARAM_STR);
            $query->bindParam(':active', $branch->Active, PDO::PARAM_BOOL);
            $query->bindParam(':modifiedon', $branch->ModifiedOn, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $branch->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_branch SET Name=:name,Description=:description,Address=:address,TimeZone=:timezone,Active=:active,ModifiedOn=:modifiedon WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $branch->Id, PDO::PARAM_INT);
            $query->bindParam(':name', $branch->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $branch->Description, PDO::PARAM_STR);
            $query->bindParam(':address', $branch->Address, PDO::PARAM_STR);
            $query->bindParam(':timezone', $branch->TimeZone, PDO::PARAM_STR);
            $query->bindParam(':active', $branch->Active, PDO::PARAM_BOOL);
            $query->bindParam(':modifiedon', $branch->ModifiedOn, PDO::PARAM_STR);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_branch WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

