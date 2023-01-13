<?php

class UserManager {
	private $db;

	function __construct($db) {
		$this->db = $db;
	}

	public function insert(User $user) {
		$stmh = $this->db->prepare('INSERT INTO user(email, password, role, last_ip) VALUES(?, ?, ?, ?)');
		$stmh->execute([
			$user->email, $user->password, $user->role, $user->last_ip
		]);
		return $this->db->lastInsertId();
	}
    public function valideAccount($id , $role){
        echo ($role);
       
        
        $stmt = $this->db->prepare('UPDATE user SET role = ? WHERE id = ?');
        $stmt->execute([ 
            $role,
            $id ]);
    }
    
	public function createAccount($id, $currency , $amount){
		$stmt = $this->db->prepare('INSERT INTO account( currency_id , balance, user_id) VALUES(?, ?, ?)');
		$stmt->execute([$id, $currency, $amount]);


	}
   

	public function getByEmail($email) {
		$stmh = $this->db->prepare('SELECT * FROM user WHERE email = ?');
		$stmh->execute([$email]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
		$user = $stmh->fetch();
		return $user;
	}

	public function getById($id) {
		$stmh = $this->db->prepare('SELECT * FROM user WHERE id = ?');
		$stmh->execute([$id]);
		$stmh->setFetchMode(PDO::FETCH_CLASS, 'User');
		$user = $stmh->fetch();
		return $user;
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