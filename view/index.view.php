<?php

use userApp\User;

$user = new User();
$user->name = "Petras";
$user->email = "petras@gmail.com";
$user->role = "admin";

var_dump($user->showProfile());
?>
<ul>
    <?php foreach($user->showProfile() as $data):?>
    <li><?=$data;?></li>
    <?php endforeach;?> 

</ul>