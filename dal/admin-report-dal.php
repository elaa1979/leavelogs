<?php include('../dal/config.php') ?>
<?php include('../models/account.php') ?>
<?php
class AdminReportDAL
{
    public static function Leaves($accountid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leaves WHERE AccountId=:accountid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':accountid', $accountid, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }
    
}
?>

