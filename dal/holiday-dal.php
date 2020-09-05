<?php include('../dal/config.php') ?>
<?php include('../models/holiday.php') ?>
<?php
class HolidayDAL
{
    public static function GetByAccountId($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_holiday WHERE AccountId=:accountid";
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
        $sql = "SELECT * FROM lms_holiday WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {
            return $results[0];
        }

        return null;
    }


    public static function Save(Holiday $holiday)
    {
        global $dbh;
        if ($holiday->Id == null) {
            $sql = "INSERT INTO lms_holiday(AccountId, Name, Description, Date) 
            VALUES (:accountid,:name,:description,:date)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':accountid', $holiday->AccountId, PDO::PARAM_INT);
            $query->bindParam(':name', $holiday->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $holiday->Description, PDO::PARAM_STR);
            $query->bindParam(':date', $holiday->Date, PDO::PARAM_STR);
            $query->execute();
            $lastInsertId = $dbh->lastInsertId();
            if ($lastInsertId) {
                $holiday->Id = $lastInsertId;
            }
        } else {

            $sql = "UPDATE lms_holiday SET Name=:name,Description=:description,Date=:date WHERE Id=:id";
            $query = $dbh->prepare($sql);
            $query->bindParam(':id', $holiday->Id, PDO::PARAM_INT);
            $query->bindParam(':name', $holiday->Name, PDO::PARAM_STR);
            $query->bindParam(':description', $holiday->Description, PDO::PARAM_STR);
            $query->bindParam(':date', $holiday->Date, PDO::PARAM_STR);
            $query->execute();
        }
    }

    public static function Delete($id)
    {
        global $dbh;
        $sql = "delete from lms_holiday WHERE Id=:id";
        $query = $dbh->prepare($sql);
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->execute();
    }
}
?>

