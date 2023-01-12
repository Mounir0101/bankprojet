<?php

class Deposit {
    public $id;
    public $id_user;
    public $id_account_user;
    public $deposit_value;


    public static function create($id_user, $id_account_user, $Deposit_value) {
        $Deposit = new Deposit();
        $Deposit ->id_user = $id_user;
        $Deposit ->id_account_user = $id_account_user;
        $Deposit ->deposit_value = $Deposit_value;
        return $Deposit;
    }


    public function verify_Account_User($id_account_user) {
        $verifAccount = $id_account_user;
        return ($verifAccount === $this->id_account_user);
    }
}
?>

