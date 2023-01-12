<?php

class account {
    public $account_id;
	public $currency_id;
	public $balance;
	public $user_id;
	

	public static function create($currency_id, $balance, $user_id) {
		$account = new account();
		$account->currency_id = $currency_id;
		$account->balance = $balance;
		$account->user_id = $user_id;
		return $account;
	}

	

	public function verify_Account_User($user_id) {
		$verifAccount = $user_id;
		return ($verifAccount === $this->id);
	}
}
?>