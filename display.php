<?php
include_once 'crud.php';
$crud=new employee();
$crud->getEmployeeProfile();

$dept=new departement();
$dept->getDepartementName();

$com=new company();
$com->getCompanyName();


?>