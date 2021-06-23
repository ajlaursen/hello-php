<?php

namespace App\Models;

use PDO;
use PDOException;

class Post
{

  public static function getAll()
  {
    $host = '127.0.0.1';
    $dbname = 'MVC';
    $username = 'root';
    $password = 'rootpass';

    try {
      $db = new PDO("mysql host=$host;dbname=$dbname;charset=utf8", $username, $password);

      $stmt = $db->query('SELECT id, title, content FROM posts | ORDER BY created_at');
      $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $results;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
  }
}
