<?php
include ('vendor/autoload.php');

phpCAS::client(CAS_VERSION_2_0, 'cas.u-bordeaux.fr', 443, '', 'http://dev.u-bordeaux.fr:8080/', false);
phpCAS::setNoCasServerValidation();
phpCAS::forceAuthentication();

$user = phpCAS::getUser();

var_dump($user);