<?php
ob_start();
include('./../src/db.php');
$page_title = "Creation Account - monsite.com";
show_error();


$users = $db->query('SELECT DISTINCT * FROM user WHERE role = 10');
$requete = $users->fetchAll();


$euro = 'euro';


$dollar = 'dollar';


$chf = 'franc suisse';


$yen = 'yen jpn';



?>

<h1>Admin user</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Currency</th>
      <th scope="col">Created_At</th>
      <th scope="col">Last_IP</th>
      <th scope="col"> Amount</th>
    </tr>
  </thead>
  <tbody><?php
    foreach ($requete as $row) {
        ?><tr>
            <td><?=$row['id']?></td>
            <td><?=$row['email']?></td>
            <td>
            <form action="/actions/createAccount.php" method="post">
                <select id="createAccount" name="createAccount">
                    <option value="">selectionner la devise du compte</option>
                    <option value=<?=""?>><?= $euro  ;?></option>
                   
                    <option value=<?=""?>><?= $dollar  ;?></option>
                    
                    
                    <option value=<?=""?>><?= $chf ;?></option>
                    
                    <option value=<?=""?>><?= $yen;?></option>
                </select>
            </td>
            <td><?=$row['created_at']?></td>
            <td><?=$row['last_ip']?></td>
            <td> <input id="amount" name="amount"> </td>
            <td>
                 <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
                  
                 <button type="submit" class="btn btn-success btn-sm">Create Account</button>
               
            </form>

            </td>
        </tr><?php
    }?>
    
  </tbody>
</table>

<?php
$page_content = ob_get_clean();