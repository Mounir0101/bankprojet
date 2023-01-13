<?php

$page_title = "Conversion de monnaie virtuelle bitcoin";

ob_start();

?>

<nav >
    <div>
        
    </div>
</nav>
<div></div>
<div>
    <h3 >bitcoin convertiseur</h3>
    <hr style="border-top:1px dotted #000;"/>
    <form method="POST" action="">
        <div >

    
            
            <input type="text" name="txt_digit"/>
            <label>Choix de la monnaie : </label>
            <select name="currency">
                <option value="">Selection de la monnaie</option>
                <option value="Dollar americain">Dollar americain</option>
                <option value="Euro">Euro</option>
            </select>
            <br /><br />
            <center><button type="submit" name="btn_submit" style="width:30%;">Conversion</button></center>
            <br />
            
        </div>

    </form>
</div>



<?php
if(ISSET($_POST['btn_submit'])){
    $digit = $_POST['txt_digit'];
    $currency = $_POST['currency'];
    if($digit != ""){
        switch($currency){
            case "Dollar americain":
                $output = $digit * 18896.60;
                echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
            break;
            
            case "Euro":
                $output = $digit * 17463.92;
                echo"<center><label class='text-success' style='font-size:25px;'>&#8383;".$output."</label></center>";
            break;
        }
    }
}




$page_content = ob_get_clean();

?>