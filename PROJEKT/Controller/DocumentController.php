<?php

namespace Controller;

use Model\DocumentRepository;

class DocumentController extends BaseController
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
        $documentId = isset($_GET['documentId']) ? $_GET['documentId'] : null;
        $documentRepository = new DocumentRepository();
        if ($documentId) {
            $vars['document'] = $documentRepository->getById($documentId);
        } else {
            $vars['documents'] = $documentRepository->getAll();
        }

        $this->render('./View/document/read.view.php', $vars);
    }

    public function deleteAction()
    {
    }
}