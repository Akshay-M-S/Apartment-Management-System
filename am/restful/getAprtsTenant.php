<?php



if(isset($_GET['bid'])){
    
        $bid=$_GET['bid'];
        include '../conn.php';
         $qry="select * from apartment where bid=$bid and id Not In(select apartment from tenant);";
                                if ($result = $con->query($qry)) {
                                   
                                    
    /* fetch object array */
                                    ?>

<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                       
                        <option value=" " >Select Apartment</option>        
      <?php
    while ($row = $result->fetch_assoc()) {
                    ?>
     
                    <option value="<?php echo $row['id']; ?>" ><?php echo $row['apartmentNum']; ?>
                        </option>
                   
                        
               <?php 
    }
    ?>
    
<?php
}else{
    echo ' <option value=" " >No Apartments Left for allocation</option>        ';
}
}
               ?> 

