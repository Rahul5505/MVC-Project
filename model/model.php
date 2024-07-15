<?php

class model
{
        
        public $con="";
        public function __construct()
        {
            try
            {
                $this->con=mysqli_connect("localhost","root","","eparking");
                //echo "connect sucess";
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->con));
            }    
        }
        //public function for search
        public function selectalldata($table,$input)
        {
            
       $select="select * from $table where Area like '%$input%' or City like '%$input%' or State like '%$input%'";
        $query=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($query))
        {
             $arr[]=$fetch;

        }
        return $arr;
    }
    //select all data from database
    public function selectdata($table)
    {
        
   $select="select * from $table";
    $query=mysqli_query($this->con,$select);
    while($fetch=mysqli_fetch_array($query))
    {
         $arr[]=$fetch;

    }
    return $arr;
}

    //create a member function for insert all data
    public function insertalldata($table,$data)
    {

        $key=array_keys($data);
        $key1=implode(',',$key);

        $value=array_values($data);
        $value1=implode("','",$value);

        $insert="insert into $table($key1) values ('$value1')";
        // echo $insert; exit();
        $query=mysqli_query($this->con,$insert);
        // echo $query; exit();
        return $query;
    }

        // create a member function for select and join tables
        public function selectjoin($table,$table1,$where)
        {
            $select="select * from $table join $table1 on $where";
            $query=mysqli_query($this->con,$select);
            while($fetch=mysqli_fetch_array($query))
            {
                $arr[]=$fetch;

            }
            return $arr;
        }




    public function login($table,$uname,$password)
    {
    $select="select * from $table where username='$uname' and password='$password'";
        $query=mysqli_query($this->con,$select);
        $fetch=mysqli_fetch_array($query);
        $num_row=mysqli_num_rows($query);
        if($num_row==1)
        {
        $_SESSION["id"]=$fetch["id"];
        $_SESSION["name"]=$fetch["name"];
        $_SESSION["username"]=$fetch["username"];
        $arr[]=$fetch;
        return $arr;
        }
        else 
        {
            return false;
        }
    } 
    // create a member function for logout as user
    public function logout()
    {
        // unset a set id from session
        unset($_SESSION["id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }
}


?>