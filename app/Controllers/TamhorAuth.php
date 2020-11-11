<?php

namespace App\Controllers;

/**
 * ------------------------------------------
 * TamhorAuth
 * ------------------------------------------
 * 
 * TamhorAuth is make you to setting AuthController components.
 * Use this Class for declare any Function, Helpers, Models, Libraries, etc.
 * 
 */

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\ActivationModel;
use App\Models\ResetpassModel;

class TamhorAuth extends Controller
{
    protected $helpers = ['form', 'text'];

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->session = \Config\Services::session();
        $this->users = new UserModel();
        $this->resetpass = new ResetpassModel();
        $this->activation = new ActivationModel();
    }

    protected function key()
    {

        /**
         * This function for configure what key you wanna use.
         * The key is using for users activation and reset password.
         * 
         * For Example :
         *      If you wanna using Encryption Class on Codeigniter 4
         * 
         *          use Config\Encryption;
         *          $key = Encryption::createKey(32);
         * 
         * https://codeigniter.com/user_guide/libraries/encryption.html
         *      
         */

        $key = random_string('alnum', 20);
        return $key;
    }

    protected function sendEmail($destination, $subject, $message)
    {

        /**
         * This function for configure your sending email.
         * Any Controller can using this function.
         * 
         * For Example :
         * 
         * class AuthController extends TamhorAuth {
         *      public function feedback {
         *          $this->sendEmail('this@destination.com', 'This is Subject', 'This is Messages')
         *      }
         * }
         * 
         */

        $email = \Config\Services::email();
        $email->setFrom('tamhor.dev@gmail.com', 'Tamhor Developer');
        $email->setTo($destination);
        $email->setSubject($subject);
        $email->setMessage($message);
        $email->send();
        return $email;
    }

    /**
     * 
     *                          SUCCESS & ERRORS
     * --------------------------------------------------------------------
     * This function for configure the flash data with default HTML tag.
     * Can make easier to get the message with $('.class').html() on JQuery.
     * You can using all HTML tag you want, just setting the $data with your own.
     * --------------------------------------------------------------------
     * 
     */
    protected function success($title, $paragraph = null)
    {
        $data = '<div class="success">' . $title . '<p class="text-muted">' . $paragraph . '</p></div>';
        return $data;
    }
    protected function errors($title, $paragraph = null)
    {
        $data = '<div class="errors">' . $title . '<p class="text-muted">' . $paragraph . '</p></div>';
        return $data;
    }
}
