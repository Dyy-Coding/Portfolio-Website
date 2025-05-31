<?php

class DataController extends BaseController
{
    public function message(): void
{
 

    // ✅ Check if user is logged in
    if (!isset($_SESSION['logged_in'])) {
        $_SESSION['error'] = "Please log in to access the data.";
        header("Location: /LoginForm");
        exit;
    }

    print_r (!isset($_SESSION['logged_in'])) ;

    // ✅ Continue to show contacts if logged in
    $contactModel = new ContactModel();
    $contacts = $contactModel->getAllContacts();

    $this->renderView('DataMessage/dataMessage', ['contacts' => $contacts]);
}

}
