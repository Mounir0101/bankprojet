<?php
ob_start();
include('./../src/db.php');
$page_title = "Admin user - monsite.com";


$users = $db->query('SELECT DISTINCT * FROM user WHERE role = 1');
$requete = $users->fetchAll();


$admin = 'admin';
$_admin = 1000;

$manager = 'manager';
$_manager = 200;

$verif = 'vérifié';
$_verif = 10;

$ban = 'banni';
$_ban = 0;


?>

<h1>Admin user</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Created_At</th>
      <th scope="col">Last_IP</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody><?php
    foreach ($requete as $row) {
        ?><tr>
            <td><?=$row['id']?></td>
            <td><?=$row['email']?></td>
            <td>
                <select>
                    <option>attribuez un rôle</option>
                    <option><?= $verif  ;?></option>
                    <?php if ($user->role == 1000){ ?>
                    <option><?= $manager  ;?></option>
                    <?php }  ?>
                    <?php if ($user->role == 1000) { ?>
                    <option><?= $admin = $user->role ==1000 ;?></option>
                    <?php } ?>
                    <option><?= $ban ;?></option>
                </select>
            </td>
            <td><?=$row['created_at']?></td>
            <td><?=$row['last_ip']?></td>
            <td>
                <form action="/actions/update.php" method="post">
                <button  type="submit" id="valider" class="btn btn-success btn-sm"><a href="update.php" style="color: white">Valider</a></button>
                <button type="submit" id="refuser" class="btn btn-danger btn-sm"><a href="delete.php" style="color: white">Refuser</a></button>
                </form>
            </td>
        </tr><?php
    }?>
    
  </tbody>
</table>

<?php
$page_content = ob_get_clean();