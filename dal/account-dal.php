<?php include('../dal/config.php') ?>
<?php
class AccountDAL
{
    public  function Get()
    {
        global $dbh;
        $sql = "SELECT * FROM lms_account";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }

    public  function GetById($id)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_account WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public  function Save(Account $account)
    {
        global $dbh;
        if ($account->Id == null) {

            $sql = "INSERT INTO lms_account(Name, Description, CreatedOn, Active) VALUES (:name,:description,:createdon,:active)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':name', $account->AccountId, PDO::PARAM_STR);
            $query->bindParam(':description', $account->EmployeeId, PDO::PARAM_STR);
            $query->bindParam(':createdon', $account->FirstName, PDO::PARAM_STR);
            $query->bindParam(':active', $account->LastName, PDO::PARAM_BOOL);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $account->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_account SET Name=:name,Description=:description,CreatedOn=:createdon,Active=:active WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $account->Id, PDO::PARAM_INT);
            $query->bindParam(':name', $account->AccountId, PDO::PARAM_STR);
            $query->bindParam(':description', $account->EmployeeId, PDO::PARAM_STR);
            $query->bindParam(':createdon', $account->FirstName, PDO::PARAM_STR);
            $query->bindParam(':active', $account->LastName, PDO::PARAM_BOOL);
            $query->execute();
        }
    }

    public  function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_account WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

