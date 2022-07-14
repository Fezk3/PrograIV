<?php

session_start();
unset($SESSION['username']);
session_destroy();
// devolver al index.html
//header("Location: ../index.html");
header('Location: http://52.14.251.163/Sesion/');
