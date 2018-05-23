<?php

require_once '../lib/Repository.php';

class HaushaltRepository extends Repository
{
    protected $tableName = 'haushalt';


    public function create($name, $password, $mntlAusgaben, $mntlEinnahmen)
    {
        $password = sha1($password);

        $query = "INSERT INTO $this->tableName (name, password, mntlAusgaben, mntlEinnahmen) VALUES (?, ?, ?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ssii',$name, $password, $mntlAusgaben, $mntlEinnahmen);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }
}
