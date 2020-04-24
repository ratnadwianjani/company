<?php
include_once 'crud.php';

$fname = $POST ['name'];
$title=$POST['title'];
$crud=new employee();
$crud->setEmployeeName($name,$title);

$companyname=$POST['name'];
$company=new company();
$company->setCompanyName($companyname);

$deptname=$POST['name'];
$dept=new departement();
$dept->setDepartement($deptname);
?>