<?php

//define('PRIVATE_KEY', 'XXXXXXXXXXXXXXXXxxx');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo shell_exec("git pull");
}
