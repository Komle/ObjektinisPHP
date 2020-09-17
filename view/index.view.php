<?php

use userApp\User;

$user = new User('39510143212', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143255', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143255', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143123', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510112341', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143246', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143243', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143212', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143212', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');
$user = new User('39510143212', 'Petrauskis', 'Antanavicius', 'Direktorius', 'petrauskis@one.lt', '500 pinigu', 'ahujena');

var_dump($user->showProfile());
?>
<ul>
    <?php foreach($user->showProfile() as $data):?>
    <li><?=$data;?></li>
    <?php endforeach;?> 

</ul>