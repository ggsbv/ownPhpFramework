<?php
class QueryBuilder{

  protected $pdo;

  public function __construct($pdo){
    $this->pdo = $pdo;
  }

  public function selectAll($table){
    //prepare the query
    $statement = $this->pdo->prepare("select * from {$table}");

    //execute the prepared statement
    $statement->execute();

    //fetch all
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function insert($table, $parameters){

    $sql = sprintf(
      'insert into %s (%s) values (%s)',
      $table,
      implode(', ', array_keys($parameters)), //implode = split('');
      ':' .  implode(', :', array_keys($parameters))
    );

    try {
      $statement = $this->pdo->prepare($sql);
      $statement->execute($parameters);
    } catch (PDOException $e) {
      echo $e->getMessage();
      die();
    }
  }

}

?>
