<?php
require_once "database/Database.php";

function getProjects()
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM projecten");
    $query->execute();

    $projects=$query->fetchAll(PDO::FETCH_ASSOC );
    return $projects;

}

function getProject(int $id) {

    global $pdo;
    $query=$pdo->prepare("SELECT * FROM projecten");
    $query->bindParam("id",$projects);
    $query->execute();

    $project=$query->fetchAll(PDO::FETCH_CLASS,"Projects" );
    return $project;
}