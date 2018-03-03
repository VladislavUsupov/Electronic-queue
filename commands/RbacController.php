<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
/**
 * Инициализатор RBAC выполняется в консоли php yii rbac/init
 */
class RbacController extends Controller {

    public function actionInit() {
        $auth =  \Yii::$app->authManager;

        // add "createPost" permission
        $createTicket = $auth->createPermission('createTicket');
        $createTicket->description = 'Создание билета';
        $auth->add($createTicket);


        // add "author" role and give this role the "createPost" permission
        $window = $auth->createRole('window');
        $auth->add($window);
        $auth->addChild($window, $createTicket);


        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($window, 3);
        
    }
}