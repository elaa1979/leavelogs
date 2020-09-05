<?php
class Employee
{
    public $Id;
    public $AccountId;
    public $EmployeeId;
    public $FirstName;
    public $LastName;
    public $EmailId;
    public $Password;
    public $ProfilePicture;
    public $Gender;
    public $DOB;
    public $DepartmentId;
    public $Address;
    public $City;
    public $Country;
    public $PhoneNumber;
    public $Status;
    public $JoinedOn;
    public $ReleavedOn;
    public $Active;
    public $Admin;
    public $SuperAdmin;

    function __construct(
        $id,
        $accountid,
        $employeeid,
        $firstname,
        $lastname,
        $emailid,
        $password,
        $profilepicture,
        $gender,
        $dob,
        $departmentid,
        $address,
        $city,
        $country,
        $phonenumber,
        $status,
        $joinedon,
        $releavedon,
        $active,
        $admin,
        $superadmin
    ) {
        $this->Id = $id;
        $this->AccountId = $accountid;
        $this->EmployeeId = $employeeid;
        $this->FirstName = $firstname;
        $this->LastName = $lastname;
        $this->EmailId = $emailid;
        $this->Password = $password;
        $this->ProfilePicture=$profilepicture;
        $this->Gender = $gender;
        $this->DOB = $dob;
        $this->DepartmentId = $departmentid;
        $this->Address = $address;
        $this->City = $city;
        $this->Country = $country;
        $this->PhoneNumber = $phonenumber;
        $this->Status = $status;
        $this->JoinedOn = $joinedon;
        $this->ReleavedOn = $releavedon;
        $this->Active = $active;
        $this->Admin=$admin;
        $this->SuperAdmin=$superadmin;
    }

    function Validate()
    {
        $errors = array();
        if (empty($this->EmployeeId)) {
            $errors['EmployeeId']="EmployeeId is required.";
        }
        if (empty($this->FirstName)) {
            $errors['FirstName']="First Name is required.";
        }
        if (empty($this->LastName)) {
            $errors['LastName']="Last Name is required.";
        }
        if (empty($this->EmailId)) {
            $errors['EmailId']="Email Address is required.";
        }
        else if (!filter_var($this->EmailId, FILTER_VALIDATE_EMAIL)) {
            $errors['EmailId']="Email Address is invalid.";
          }
        if (empty($this->Password)) {
            $errors['Password']="Password is required.";
        }
        if (empty($this->Gender)) {
            $errors['Gender']="Gender is required.";
        }
        if (empty($this->DepartmentId)) {
            $errors['DepartmentId']="Department is required.";
        }
        if (empty($this->Address)) {
            $errors['Address']="Address is required.";
        }
        if (empty($this->City)) {
            $errors['City']="City is required.";
        }

        if (empty($this->Country)) {
            $errors['Country']="Country is required.";
        }
        if (empty($this->JoinedOn)) {
            $errors['JoinedOn']="Joined Date is required.";
        }

        return $errors;
    }

    function __destruct()
    {
    }
}
