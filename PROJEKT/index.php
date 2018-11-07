<?php

require_once ('./Config/autoload.php');



$controller = new \Controller\CompanyController();
$controller->readAction();

$controller = new \Controller\UserController();
$controller->readAction();

$controller = new \Controller\DocumentController();
$controller->readAction();

$controller = new \Controller\EmployeeController();
$controller->readAction();

$controller = new \Controller\ProjectController();
$controller->readAction();