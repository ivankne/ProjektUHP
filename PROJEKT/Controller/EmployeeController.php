<?php

namespace Controller;

use Model\EmployeeRepository;

class EmployeeController extends BaseController
{
    public function createAction()
    {
        die('md test');
    }

    public function updateAction()
    {
    }


    public function readAction()
    {
        $employeeId = isset($_GET['employeeId']) ? $_GET['employeeId'] : null;
        $employeeRepository = new EmployeeRepository();
        if ($employeeId) {
            $vars['employee'] = $employeeRepository->getById($employeeId);
        } else {
            $vars['employees'] = $employeeRepository->getAll();
        }

        $this->render('./View/employee/read.view.php', $vars);
    }

    public function deleteAction()
    {
    }
}