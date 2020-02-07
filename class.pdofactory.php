<?php
        require("class.pdofactory.php");
        require("abstract.databoundobject.php");
        require("class.user3.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=dades;host=localhost;port=5432;user=postgres;password=";
        $objPDO = PDOFactory::GetPDO($strDSN, "dades", "", 
            array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $objUser = new User($objPDO);
        $objUser->setUsername('Harry Potter')->setPassword('Rowlings')->setLockedSta(true)->setLoggedSta(true)->setEmail('Nowickiss@gmail.com')->setORGID(1)->setSUBORGID(1);

        print "First name is " . $objUser->getUsername() . "<br />";
        print "Last name is " . $objUser->getPassword() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        $id = $objUser->getID();
        print "ID in database is " . $id . "<br />";

        print "Destroying object...<br />";
        unset($objUser);

        print "Recreating object from ID $id<br />";
        $objUser = new Employee($objPDO);
        $objUser->setEMPID(1)->setName('J. K. Rowlings')->setDESIGID(1)->setDEPARTID(1)->setTipo(1);

        print "First name is " . $objUser->getName() . "<br />";
        print "Last name is " . $objUser->getTipo() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        $id = $objUser->getID();
        print "ID in database is " . $id . "<br />";

        print "Destroying object...<br />";
        unset($objUser);

        $objUser = new Departament($objPDO);
        $objUser->setNameDept("Departamento 2")->setDescription('Malisima');

        print "First name is " . $objUser->getNameDept() . "<br />";
        print "Last name is " . $objUser->getDescription() . "<br />";

        print "Saving...<br />";

        $objUser->Save();

        $id = $objUser->getID();
        print "ID in database is " . $id . "<br />";

        print "Destroying object...<br />";
        unset($objUser);
        /*$objUser->setFirstName("Steven");
        $objUser->setLastName("Nowickcow");
        print "Saving...<br />";
        $objUser->Save();*/
?>
