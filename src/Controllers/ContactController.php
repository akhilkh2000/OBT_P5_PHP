<?php


namespace App\Controllers;


use App\Model\ValidatorMessage;

class ContactController extends AbstractController
{

    /**
     * @var
     */
    protected static $db;

    /**
     * @var
     */
    protected $errors;

    public function contact($params)
    {
        if (!empty($_POST)) {
            $_POST['name'] = preg_quote($_POST['name']);
            $_POST['lastName'] = preg_quote($_POST['lastName']);
            $_POST['message'] = preg_quote($_POST['message']);
        }


        $validator = new ValidatorMessage($_POST);
        dump($validator);


        $rules = array(
            'name' => array(
                'lenghMin' => 4,
                'lenghMax' => 30
            ),
            'lastName' => array(
                'lenghMin' => 4,
                'lenghMax' => 30
            ),
            'message' => array(
                'lenghMin' => 4,
                'lenghMax' => 200,
            ),
            'mail' => array(
                'validMail' => true
            )
        );

        $validator->check($rules);
        $errors = $validator->getError();
        $name = $_POST['name'] ?? null;
        $lastName = $_POST['lastName'] ?? null;
        $mail = $_POST['mail'] ?? null;
        $message = $_POST['message'] ?? null;


        if ($_SERVER['REQUEST_METHOD'] === 'POST' && count($errors) === 0) {
            echo 'ecriture en base';
            return $this->renderResponse("core/contact.html.twig");
        }
        echo 'du con';
        return $this->renderResponse('core/contact.html.twig', [
            'errors' => $errors,
            'mail' => $mail,
            'name' => $name,
            'lastName' => $lastName
        ]);

    }
}