<?php

/**
 * The goal of this file is to allow developers a location
 * where they can overwrite core procedural functions and
 * replace them with their own. This file is loaded during
 * the bootstrap process and is called during the frameworks
 * execution.
 *
 * This can be looked at as a `master helper` file that is
 * loaded early on, and may also contain additional functions
 * that you'd like to use throughout your entire application
 *
 * @link: https://codeigniter4.github.io/CodeIgniter4/
 */

 if (! function_exists('currency')) {
    function currency($amount)
    {
        return is_numeric($amount)||empty($amount)?"&#8358; ".number_format(round($amount, 2), 2):$amount;
    }
}

if (! function_exists('is_logged_in')) {
    function is_logged_in()
    {
        return session()->has("logged_in") && session("logged_in") == true;
    }
}

 if (! function_exists('set_message')) {
     function set_message($status, $title, $message)
     {
         $notification_body = "
        <div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-delay='15000' data-autohide='true' style='min-width:250px'>
            <div class='toast-header bg-{$status}'>
                <strong class='mr-auto'>$title</strong>
                <small>".date('H:ia')."</small>
                <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'><span>&times;</span></button>
            </div>
            <div class='toast-body'>
                $message
            </div>
        </div>
        ";
         session()->setFlashdata('notification', $notification_body);
     }
 }

 if (! function_exists('auth_attempt')) {
    function auth_attempt(array $credentials)
    {
        $valid_username = "demo";
        $valid_password = "demo";

        $user = ($credentials['password']) == $valid_password && $credentials['username'] == $valid_username;
        if (!$user) {
            set_message('danger', 'Login Failed', 'Unable to log you in. Please check your credentials.');
            return false;
        }
        session()->set(["logged_in"=>true]);
        return true;
    }
}


