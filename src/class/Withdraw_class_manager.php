<?php

class Withdraw_class {
	private $db;

	function __construct($db) {
		$this->db = $db;
	}

	public function insert(Withdraw $Withdraw) {
		$stmh = $this->db->prepare('INSERT INTO Withdraw(id_user, id_account_user, withdraw_value) VALUES(?, ?, ?)');
		$stmh->execute([
			$Withdraw->id_user, $Withdraw->id_account_user, $Withdraw->withdraw_value
		]);
		return $this->db->lastInsertId();
	}//pour l'admin 

	public function getByWithdrawUser($id_user) {
		$stmh = $this->db->prepare('SELECT * FROM Withdraw INNER JOIN user ON Withdraw.id_user = user.id WHERE id_user = ?');
		$stmh->execute([$id_user]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'Withdraw');
		$Withdraw = $stmh->fetch();
		return $Withdraw;
	}

	public function getIdAccount($id_account_user) {
		$stmh = $this->db->prepare('SELECT * FROM Withdraw INNER JOIN account ON Withdraw.id_account_user = account.id WHERE id_account_user = ?');
		$stmh->execute([$id_account_user]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'Withdraw');
		$Withdraw = $stmh->fetch();
		return $Withdraw;
	}

	// public function save_contact_form($fullname, $phone, $email, $message) {
	// 	$stmh = $this->db->prepare('INSERT INTO contact_forms(fullname, phone, email, message) VALUES(:fullname, :phone, :email, :message)');
	// 	$stmh->execute([
	// 		'fullname' => $fullname,
	// 		'phone' => $phone,
	// 		'email' => $email,
	// 		'message' => $message,
	// 	]);
	// }

	// public function get_forms() {
	// 	$stmh = $this->db->prepare("SELECT * FROM contact_forms");
	// 	$stmh->execute();

	// 	$forms = $stmh->fetchAll(PDO::FETCH_CLASS, 'ContactForm');
	// 	return $forms;
	// }
}
?>