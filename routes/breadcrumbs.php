<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
 
Breadcrumbs::for('users.api', function (BreadcrumbTrail $trail): void {
    $trail->push('Users', route('users.api'));
});

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('user.card', function (BreadcrumbTrail $trail, $user): void {
    $trail->parent('users.api');
    $trail->push('Profile', route('user.card', $user));
});

?>