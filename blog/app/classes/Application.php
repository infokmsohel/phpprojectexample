<?php
namespace App\classes;


class Application
{
    public function getAllPublishedBlogInfo() {
        $sql = "SELECT * FROM blogs WHERE publication_status = 1 ";
        if(mysqli_query(Database::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Database::dbConnection(), $sql);
            return $queryResult;
        } else {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }
}