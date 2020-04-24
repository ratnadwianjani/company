<?php
include_once 'crud.php';
$crud=new crudop();
$crud->display();

$dept=new departement();
$dept->displaydept();

$com=new company();
$com->displaycom();


?>