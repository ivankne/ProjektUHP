<?php

namespace Controller;

use Model\ProjectRepository;

class ProjectController extends BaseController
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
        $projectId = isset($_GET['projectId']) ? $_GET['projectId'] : null;
        $projectRepository = new ProjectRepository();
        if ($projectId) {
            $vars['project'] = $projectRepository->getById($projectId);
        } else {
            $vars['projects'] = $projectRepository->getAll();
        }

        $this->render('./View/project/read.view.php', $vars);
    }

    public function deleteAction()
    {
    }
}