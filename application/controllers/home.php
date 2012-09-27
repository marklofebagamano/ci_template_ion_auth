<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->username = ($this->ion_auth->logged_in()) ? $this->ion_auth->user()->row()->username : '';
    }

    // Gets the subdomain to check if he/she is a registered user
    private function _has_subdomain()
    {
        $subdomain_arr = explode('.', $_SERVER['HTTP_HOST'], 2);
        //creates the various parts
        $subdomain[] = $subdomain_arr[0];
        //assigns the first part
        $subdomain[] = $subdomain_arr[1];
        //assigns the second part

        if ($subdomain_arr[1] === 'localhost.com' OR $subdomain_arr[1] === 'localhost') {
            return TRUE;
        } else {
            return FALSE;
        }

        // return $subdomain_arr;
        // for testing only
    }

    public function index()
    {

        /*
         * set up title and keywords (if not the default in custom.php config file will be set)
         */
        $this->title = "CI Template 2";

//        if (!$this->_has_subdomain()) {
//            if (!$this->ion_auth->logged_in()) {
//                redirect('auth/login', 'refresh');
//            } else {
//                $this->_render('pages/user-main');
//            }
//        } else {
            if (!$this->ion_auth->logged_in()) {
                //view user's public profile
//                $this->_render('pages/home');
                redirect('auth/login');
            } else {
                $this->_render('pages/user-main');
            }
//        }
    }

    public function mail_test()
    {
        $this->email->clear();
        // $config['protocol'] = 'sendmail';
        // $config['mailpath'] = '/usr/sbin/sendmail';
        // $config['mailpath'] = 'D:\Program Files\wamp\sendmail';
        // $config['charset'] = 'iso-8859-1';
        // $config['wordwrap'] = TRUE;
        // $this->email->initialize($config);

        $this->email->from('admin@admin.com', 'Mark Lofe Bagamano');
        $this->email->to('marklofebagamano@gmail.com');

        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');

        $this->email->send();

        echo $this->email->print_debugger();
    }

    function test_email()
    {
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'marklofebagamano@gmail.com',
            'smtp_pass' => 'cyreneseguia'
        );

        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from("marklofebagamano@gmail.com", 'Mark Lofe Bagamano');
        $this->email->to('marklofebagamano@gmail.com');
        $this->email->subject('Test Email');
        $this->email->message('This is a test mail from nettuts');

        if ($this->email->send()) {
            echo 'Email has been sent';
        } else {
            echo $this->email->print_debugger();
        }
    }

}
