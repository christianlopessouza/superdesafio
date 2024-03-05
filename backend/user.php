<?php
class user
{
    private $id;

    private $pass;

    private $login;

    public function __construct($l, $p)
    {

        global $db;
        session_start();

        $this->login = SQLite3::escapeString($l);
        $this->pass = SQLite3::escapeString($p);

        $test = $db->query("SELECT * FROM users");
        var_dump($test->fetchArray());


        $sql_admin = $db->query("SELECT * FROM users WHERE login = '{$this->login}' AND password = '{$this->pass}' LIMIT 1");

        echo "SELECT * FROM users WHERE login = '{$this->login}' AND pass = '{$this->pass}' LIMIT 1";
        if ($sql_admin) {;
            $_SESSION['login'] = true;
            $_SESSION['user_id'] = $sql_admin->fetchArray()['user_id'];
            $_SESSION['first_name'] = $sql_admin->fetchArray()['first_name'];
            $_SESSION['last_name'] = $sql_admin->fetchArray()['last_name'];
            $_SESSION['email'] = $sql_admin->fetchArray()['email'];
            $_SESSION['module'] = "admin";
            header("Location: /admin");
        } else {
            $sql_empresa = $db->query("SELECT * FROM users_company WHERE login = '{$this->login}' AND password = '{$this->pass}' LIMIT 1");
            if ($sql_empresa) {
                $_SESSION['login'] = true;
                $_SESSION['first_name'] = $sql_empresa->fetchArray()['first_name'];
                $_SESSION['last_name'] = $sql_empresa->fetchArray()['last_name'];
                $_SESSION['email'] = $sql_empresa->fetchArray()['email'];
                $_SESSION['module'] = "empresa";
                header("Location: /empresa");
            } else {
                $_SESSION['login'] = false;
            }
        }
    }

    public function login()
    {
        return $_SESSION['login'];
    }

    public function logout()
    {
        session_destroy();
        header("Location: /");
        exit();
    }

    public function getId()
    {
        return $_SESSION['user_id'];
    }
    public function getFirstName()
    {
        return $_SESSION['first_name'];
    }
    public function getLastName()
    {
        return $_SESSION['last_name'];
    }
    public function getEmail()
    {
        return $_SESSION['email'];
    }

    public function getModule()
    {
        return $_SESSION['module'];
    }
    public function redirect_dashboard()
    {
        if ($this->getModule() == "admin") {
            header("Location: /admin");
        } else if ($this->getModule() == "empresa") {
            header("Location: /empresa");
        }
    }
}
