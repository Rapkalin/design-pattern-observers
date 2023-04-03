<?php

namespace Config;

class SQLiteConnection
{

  /**
   * @var
   */
  private $pdo;

  /**
   * return in instance of the PDO object that connects to the SQLite database
   * @return \PDO
   */
  public function connect() {
    if ($this->pdo == null) {
      $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
    }
    return $this->pdo;
  }

}