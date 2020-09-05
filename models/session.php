<?php
class Session
{
    public $Id;
    public $Name;
    public $AccountId;
    public $Admin;
    public $SuperAdmin;

    function __construct(
        $id,
        $name,
        $accountid,
        $admin,
        $superadmin
    ) {
        $this->Id = $id;
        $this->Name = $name;
        $this->AccountId = $accountid;
        $this->Admin = $admin;
        $this->SuperAdmin = $superadmin;
    }

    function __destruct()
    {
    }
}
