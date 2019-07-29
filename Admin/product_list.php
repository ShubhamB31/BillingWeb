<?php
		include('../lib/conn.php');
        $sql = mysql_query('select * from product_details;');
        while($list = mysql_fetch_array($sql))
        {
            echo '<option value="'.$list['id'].'">'.$list['name'].'</option>';
        } 
?>