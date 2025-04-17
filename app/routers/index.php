<?php
// ROUTE users.index
// PATTERN: /?users
// CTRL: usersController
// ACTION: index
if (isset($_GET['users'])):
    include_once '../app/controllers/usersController.php';
    indexAction($connexion);

// ROUTE users.show
// PATTERN: /?userID=x
// CTRL: usersController
// ACTION: show
elseif (isset($_GET['userID'])):
    include_once '../app/controllers/usersController.php';
    showAction($connexion, $_GET['userID']);

// ROUTE monsters.show
// PATTERN: /?monsterID=x
// CTRL: monstersController
// ACTION: show
elseif (isset($_GET['monsterID'])):
    include_once '../app/controllers/monstersController.php';
    showAction($connexion, $_GET['monsterID']);

// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: monstersController
// ACTION: index
else:
    include_once '../app/controllers/monstersController.php';
    indexAction($connexion);
endif;
