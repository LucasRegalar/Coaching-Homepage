<?php

$router->get("/", "index.php");
$router->get("/einzelcoaching", "einzelcoaching.php");
$router->get("/beziehungscoaching", "beziehungscoaching.php");
$router->get("/businesscoaching", "businesscoaching.php");
$router->get("/impressum", "impressum.php");
$router->get("/ueber-mich", "uebermich.php");

$router->get("/kontakt", "kontakt/index.php");
$router->post("/kontakt", "kontakt/store.php");
$router->get("/kontakt/gesendet", "kontakt/success.php");
$router->get("/kontakt/fehler", "kontakt/fail.php");






