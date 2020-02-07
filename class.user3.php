<?php

class User extends DataBoundObject {

        
        protected $Username;
        protected $Password;
        protected $LockedSta;
        protected $LoggedSta;
        protected $Email;
        protected $ORGID;
        protected $SUBORGID;

        protected function DefineTableName() {
                return("users");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "user_name" => "Username",
                        "password" => "Password",
                        "lockedstatus" => "LockedSta",
                        "loggedstatus" => "LoggedSta",
                        "email" => "Email",
                        "org_id" => "ORGID",
                        "suborg_id" => "SUBORGID"));
        }
}

class Employee extends DataBoundObject {

        
        protected $EMPID;
        protected $Name;
        protected $DESIGID;
        protected $DEPARTID;
        protected $Tipo;

        protected function DefineTableName() {
                return("employee");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "employee_id" => "EMPID",
                        "emp_name" => "Name",
                        "designation_id" => "DESIGID",
                        "departament_id" => "DEPARTID",
                        "staff_type" => "Tipo"));
        }
}

class Departament extends DataBoundObject {

        
        protected $NameDept;
        protected $Description;

        protected function DefineTableName() {
                return("departament");
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "dept_name" => "NameDept",
                        "dept_description" => "Description"));
        }
}

?>
