<?php
    //http request error
    if(!isset($_GET['account'])){
       $return=array('result'=>-1);
       echo json_encode($return);
       return;
    }
     
     
     //mysql server error
    $account =$_GET['account'];
    $conn = mysqli_connect('127.0.0.1','root','root','matt01',3306);
    if(mysqli_connect_error()){
       $return=array('result'=>-2);   //有問題出在賜福端的時候 連線問題會收到-2
       echo json_encode($return);
       return;
    }
    
    $sql="select * from member where account='{account}'";
    $rs= mysqli_query($conn,$sql);
    if(mysql_num_rows($rs)>0){
        //重複
     $return=array('result'=>1);
       echo json_encode($return);
       return;
    
    }else{
      //Ok
       $return=array('result'=>0);
       echo json_encode($return);
       return;
    
    
    }
    
    
    
?>