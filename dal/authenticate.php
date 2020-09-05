<?php include('../dal/config.php') ?>
<?php
class Authenticate
{
    public static function Login($uname, $pwd)
    {
        global $dbh;
        $password = md5($pwd);
        $sql = "SELECT * FROM lms_employee WHERE EmailId=:uname and Password=:password";
        $query = $dbh->prepare($sql);
        $query->bindParam(':uname', $uname, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 1) {

            if ($results[0]->Status != "Active") {
                return "Your account is Inactive. Please contact admin";
            }

            $_SESSION['Id'] = $results[0]->Id;
            $_SESSION['Name'] = $results[0]->FirstName . " " . $results[0]->LastName;

            return "Success";
        }

        return "Invalid Email address or password!".$password;
    }
}
?>

<?php
session_start();
$errors = array();
if (isset($_POST['login_user'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $msg = Authenticate::Login($email, $password);
        if ($msg == "Success") {
            header('location: my-profile.php');
        } else {
            array_push($errors, $msg);
        }
    }
}
?>