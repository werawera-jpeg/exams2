<?php

require("connect/connect.php");

ini_set("display error", "1");

 function adduser($nom,$date_naissance,$genre,$ville,$email,$mdp){
        $sql = "insert into final_membre(email,mdp,nom,date_naissance,genre,ville,image_profil) values ('%s','%s','%s','%s','%s','%s','default.png')";
        $sql= sprintf($sql, $email,$mdp,$nom,$date_naissance,$genre,$ville);

        echo $sql;
        $result = mysqli_query(dbconnect(), $sql);
    }
    
    function verifyuser($email,$mdp){
        $sql = "select * from final_membre(email,mdp) where email= '%s' && mdp = '%s'";
        $sql = sprintf($sql, $email, $mdp);
        $ql = mysqli_query(dbconnect(), $sql);
        
        if($list=mysqli_fetch_assoc($ql)){
            return $list['id_membre'];
        }    
        else{
            return 0;
        }    
    }


?>