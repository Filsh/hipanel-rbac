<?php
/**
 * RBAC implementation for HiPanel
 *
 * @link      https://github.com/hiqdev/hipanel-rbac
 * @package   hipanel-rbac
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016-2018, HiQDev (http://hiqdev.com/)
 */

return [
    'components' => [
        'authManager' => [
            'class' => \hipanel\rbac\AuthManager::class,
        ],
    ],
    'container' => [
        'definitions' => [
            \hipanel\rbac\RbacIniterInterface::class => \hipanel\rbac\Initer::class,
        ],
    ],
];
