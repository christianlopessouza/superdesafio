<?
include('../init.php');


$user = SQLite3::escapeString($_POST['login']);
$password = SQLite3::escapeString($_POST['password']);

$login_usuario = new user($user, $password);
var_dump($login_usuario->login());
if ($login_usuario->login()) {
    $login_usuario->redirect_dashboard();
};
