<?php include('../dal/config.php') ?>
<?php include('../models/account.php') ?>
<?php
class SuperAdminReportDAL
{
    public static function Leaves()
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leaves WHERE 1";
        $query = $dbh->prepare($sql);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }
    
}
?>

