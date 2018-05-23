<?php

require_once '../repository/HaushaltRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class HaushaltController
{
    public function index()
    {
        $haushaltRepository = new HaushaltRepository();

        $view = new View('user_index');
        $view->title = 'Haushalt';
        $view->heading = 'Haushalt';
        $view->haushalte = $haushaltRepository->readAll();
        $view->display();
    }

    public function create()
    {
        $view = new View('user_create');
        $view->title = 'Haushalt erstellen';
        $view->heading = 'Haushalt erstellen';
        $view->display();
    }

    public function doCreate()
    {
        if ($_POST['send']) {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userRepository = new UserRepository();
            $userRepository->create($firstName, $lastName, $email, $password);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function delete()
    {
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
