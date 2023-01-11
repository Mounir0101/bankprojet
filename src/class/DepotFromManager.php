<?php

class DepositFromManager {
    private $db;

    function __construct($db) {
        $this->db = $db;
    }

    public function insert(deposit $deposit) {
        $stmh = $this->db->prepare('INSERT INTO deposit(id_user, id_account_user, deposit_value) VALUES(?, ?, ?)');
        $stmh->execute([
            $deposit->id_user, $deposit->id_account_user, $deposit->deposit_value
        ]);
        return $this->db->lastInsertId();
    }
    
    
    
    //pour l'admin 

    public function getByDepositUser($id_user) {
        $stmh = $this->db->prepare('SELECT * FROM deposit INNER JOIN user ON deposit.id_user = user.id WHERE id_user = ?');
        $stmh->execute([$id_user]);
        $stmh->setFetchMode(PDO::FETCH_CLASS, 'Deposit');
        $deposit = $stmh->fetch();
        return $deposit;
    }

    public function getIdAccount($id_account_user) {
        $stmh = $this->db->prepare('SELECT * FROM deposit INNER JOIN account ON deposit.id_account_user = account.id WHERE id_account_user = ?');
        $stmh->execute([$id_account_user]);
        $stmh->setFetchMode(PDO::FETCH_CLASS, 'deposit');
        $deposit = $stmh->fetch();
        return $deposit;
    }

}

?>