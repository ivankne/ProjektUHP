<?php

namespace Controller;

use Model\UserRepository;

class UserController extends BaseController
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
        $userId = isset($_GET['userId']) ? $_GET['userId'] : null;
        $userRepository = new UserRepository();
        if ($userId) {
            $vars['user'] = $userRepository->getById($userId);
        } else {
            $vars['users'] = $userRepository->getAll();
        }

        $this->render('./View/user/read.view.php', $vars);
    }

    public function deleteAction()
    {
    }
}