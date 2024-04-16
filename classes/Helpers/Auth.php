<?php
namespace Helpers;
class Auth
{
    static $loginUrl = 'index.php';

    static function check()
    {
        session_start();
        if(isset($_SESSION['user']) && $_SESSION['login'] == true) {
        return $_SESSION['user'];
        } else {
            if(isset($_COOKIE['user'])){
                $_SESSION['user'] = unserialize($_COOKIE['user']);
                $_SESSION['login'] = true;

                // return auth data 
                return $_SESSION['user'];
            }else{
                HTTP::redirect(static::$loginUrl);
            }
        
        }
    }
}