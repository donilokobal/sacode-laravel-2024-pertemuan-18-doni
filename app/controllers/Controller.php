<?php
class Controller {

public function index()
{
    require_once('../app/views/index.php');
}

public function kontak ()
{
    require_once('../app/views/contact.php');

}
public function profile ()
{
    require_once('../app/views/profile.php');

}

}



?>