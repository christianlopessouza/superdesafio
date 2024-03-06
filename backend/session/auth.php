<?
include('../init.php');

session_start();
$user = SQLite3::escapeString($_POST['login']);
$password = SQLite3::escapeString($_POST['password']);

$login_usuario = new user($user, $password);

$_SESSION['user'] = $login_usuario;
if ($_SESSION['user']->login()) {
    $_SESSION['user']->redirect_dashboard();
};
