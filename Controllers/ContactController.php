<?php

class ContactController extends BaseController
{
    // Render the contact form view
    public function contact()
    {
        $viewData = [];
        $this->renderView('Contact/contact', $viewData);
    }

    // Handle form submission to insert data
    public function addSubmission()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Sanitize inputs
            $name = htmlspecialchars(trim($_POST['name']));
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
            $message = htmlspecialchars(trim($_POST['message']));

            // Validate
            if (empty($name) || empty($email) || empty($message)) {
                die("⚠ All fields are required.");
            }

            $contactModel = new ContactModel();
            $isInserted = $contactModel->insertSubmission($name, $email, $message);

            if ($isInserted) {
                header("Location: /Contact?success=1");
                exit();
            } else {
                echo "❌ Failed to submit your message. Try again.";
            }
        } else {
            http_response_code(405); // Method Not Allowed
            echo "❌ Invalid request method.";
        }
    }

    // Handle deletion of a contact submission
    public function deleteSubmission($id)
    {
        // Allow DELETE method via fetch or method override
        if ($_SERVER['REQUEST_METHOD'] !== 'DELETE') {
            // Support override via POST + hidden input _method=DELETE
            if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_X_REQUESTED_WITH'] !== 'XMLHttpRequest') {
                http_response_code(405);
                echo "❌ Method Not Allowed";
                return;
            }
        }

        $contactModel = new ContactModel();
        $isDeleted = $contactModel->deleteContact($id);

        if ($isDeleted) {
            // For AJAX/fetch: respond with 200
            http_response_code(200);
            echo "✅ Contact deleted";
        } else {
            http_response_code(500);
            echo "❌ Failed to delete contact.";
        }
    }
}
