<?php

namespace Controller;

use Model\CompanyRepository;

class CompanyController extends BaseController
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
        $companyId = isset($_GET['companyId']) ? $_GET['companyId'] : null;
        $companyRepository = new CompanyRepository();
        if ($companyId) {
            $vars['company'] = $companyRepository->getById($companyId);
        } else {
            $vars['companys'] = $companyRepository->getAll();
        }

        $this->render('./View/company/read.view.php', $vars);
    }

    public function deleteAction()
    {
    }
}