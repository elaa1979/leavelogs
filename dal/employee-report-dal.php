<?php include('../dal/config.php') ?>
<?php include('../models/account.php') ?>
<?php
class EmployeeReportDAL
{
    public static function Leaves($employeeid)
    {
        global $dbh;
        $sql = "SELECT * FROM lms_leaves WHERE EmployeeId=:employeeid";
        $query = $dbh->prepare($sql);
        $query->bindParam(':employeeid', $employeeid, PDO::PARAM_INT);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() > 0) {
            return $results;
        }

        return null;
    }
    
}
?>

