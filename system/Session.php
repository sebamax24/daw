<?php
class Session {

    //put your code here

    public function __construct() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function setSessionUser($user) {
        $_SESSION['user'] = $user;
    }

    public function getSessionUser() {
        return (isset($_SESSION['user'])) ? $_SESSION['user'] : false;
    }

    public function setSessionAtribute($nome, $valor) {
        $_SESSION['user'][$nome] = $value;
    }

    public function getSessionAtribute($nome) {
        return $_SESSION['user'][$nome];
    }

    public function isSessionExist($nome = 'user') {
        return (isset($_SESSION[$nome])) ? true : false;
    }

    public function destroySession() {
        session_destroy();
    }

}

?>
