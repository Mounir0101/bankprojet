<?php

class Withdraw {
	public $id;
	public $id_user;
	public $id_account_user;
	public $withdraw_value;
	

	public static function create($id_user, $id_account_user, $withdraw_value) {
		$Withdraw = new Withdraw();
		$Withdraw->id_user = $id_user;
		$Withdraw->id_account_user = $id_account_user;
		$Withdraw->withdraw_value = $withdraw_value;
		return $Withdraw;
	}
}
?>