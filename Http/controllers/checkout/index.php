<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$user = \Core\Session::get('user');

view('checkout.view.php');