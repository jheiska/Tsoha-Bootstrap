<?php

class Record extends BaseModel {

    public $id, $name, $artist, $year;

    public function __construct($attributes) {
        parent::__construct($attributes);
    }

    public static function all() {
        $query = DB::connection()->prepare('SELECT * FROM Record');
        $query->execute();
        $rows = $query->fetchAll();
        $records = array();
        
        foreach($rows as $row){
            $records[] = new Record(array(
                'id' => $row['id'],
                'name' => $row['name'],
                'artist' => $row['artist'],
                'year' => $row['year']               
                ));
        }
        
        return $records;
        
    }
    
    public static function find($id){
    $query = DB::connection()->prepare('SELECT * FROM Record WHERE id = :id LIMIT 1');
    $query->execute(array('id' => $id));
    $row = $query->fetch();

    if($row){
      $record[] = new Record(array(
                'id' => $row['id'],
                'name' => $row['name'],
                'artist' => $row['artist'],
                'year' => $row['year']
                
                ));

      return $record;
    }

    return null;
  }

}