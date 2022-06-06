<?php

function goto2 ($to,$Message){
	echo "<script language=\"JavaScript\">alert(\"".$Message."\") \n window.location = \"".$to."\"</script>";
}

function alert1 ($str){
	print "<script>alert(\"".$str."\")</script>";
}

function logincheck($u,$p){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"finalproject");
    $sql=" SELECT count(UserID) as L FROM `table_user`  where UserID='".$u."'  and Password='".$p."'";
    //echo $sql;
    $stmt = mysqli_query($conn,$sql);
    if ($stmt===false){
       // return 0;
    }
    $row=mysqli_fetch_assoc($stmt); //i can call L or i can call using mysqli_fetch_row ,
    // when call $row[0]x 
    //echo $row[0];
    if ($row['L']==1){
        return 1;
    } 
    else {
        return 0;
    }
}

function hold($uid){
    
    include("forgotpw2.php");
}

function questioncheck($u,$ans){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"finalproject");
    $sql=" SELECT count(UserID) as L FROM `table_user`  where UserID='".$u."'  and answer='".$ans."'";
    //echo $sql;
    $stmt = mysqli_query($conn,$sql);
    if ($stmt===false){
       // return 0;
    }
    $row=mysqli_fetch_assoc($stmt); //i can call L or i can call using mysqli_fetch_row ,
    // when call $row[0]x 
    //echo $row[0];
    if ($row['L']==1){
        return 1;
    } 
    else {
        return 0;
    }
}

function checkUType($u,$type=1){
    include('variable.php');
        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"finalproject");
        $sql=" SELECT
        table_category.Interface,table_category.UserType,table_user.Name
        FROM
        table_category
        INNER JOIN table_user ON table_user.UserType = table_category.UserType
         where UserID='".$u."' ";
         $result=mysqli_query($conn,$sql);
        $rowtype=mysqli_fetch_assoc($result);
        //echo $sql;
        if ($type==1){
            return $rowtype['UserType'];
        }else if ($type==2)
        {
            return $rowtype['Interface'];
         }
         else      if ($type==3){
        return $rowtype['Name'];
        }
};

function retrieveCategory($id){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"finalproject");
    $sql=" SELECT *    FROM     tblcategory
     where categoryID=".$id;
    $result=mysqli_query($conn,$sql);
    $rowtype=mysqli_fetch_assoc($result);
    //echo $sql;
    if ($id==1){
        return $rowtype['categoryname'];
    }else if ($id==2)
    {
        return $rowtype['categoryname'];
    }
       
};

function retrievePortFolio($i,$type=1){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"finalproject");
    $sql=" SELECT *    FROM     tblportfolio
     where portfolioID=".$i;
    $result=mysqli_query($conn,$sql);
    $rowtype=mysqli_fetch_assoc($result);
    //echo $sql;
    if ($type==1){
        return $rowtype['portfoliolabel'];
    }else if ($type==2)
    {
        return $rowtype['portfolioTitle'];
     }
     else if ($type==3){
    return $rowtype['portfolioTitle2'];
    }   
    else if($type==4){
        return $rowtype['portfolioDesc'];
        }   
};


function display($destination, $message){
    echo "<script> language=\"JavaScript\">alert(\"".$message."\") \n window.location = \"".$destination. "\"</script>";
}

?>