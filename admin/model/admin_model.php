<?php
    //create a model
    class adminmodel
    {
        //delacre a globle variable
        public $con="";
        
        public function __construct()
        {
            session_start(); //temporary variables that is used to store data one page to another page
            //database connection
            try
            {
                $this->con=new mysqli("localhost","root","","eparking");
               //echo "connect successfully";
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->con));
            }
        }
         // create a member function for select all data
        public function selectalldata($table)
        {
        $select="select * from $table";
        $query=mysqli_query($this->con,$select);
        while($fetch=mysqli_fetch_array($query))
        {
             $arr[]=$fetch;

        }
        return $arr;
    }
         // create a member function for select and jin tables
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

         

        //create a member function for admin login
        public function adminlogin($table,$email,$password)
        {
       $select="select * from $table where email='$email' and password='$password'";
            $query=mysqli_query($this->con,$select);
            $fetch=mysqli_fetch_array($query);
            $num_row=mysqli_num_rows($query);
            if($num_row==1) 
            {
                $_SESSION["id"]=$fetch["id"];
                $_SESSION["email"]=$fetch["email"];
            $arr[]=$fetch;
            return $arr;
            }
            else 
            {
                return false;
            }
        }
        // create a member function for logout as admin
        public function logout()
        {
            // unset a set id from session
            unset($_SESSION["id"]);
            unset($_SESSION["email"]);
            session_destroy();
            return true;
        }
          // create a member function for edit   data
          public function editalldata($table,$id,$edid)
          {
          $select="select * from $table where $id='$edid'";
          $query=mysqli_query($this->con,$select);
          $fetch=mysqli_fetch_array($query);
          $arr[]=$fetch;
          return $arr;
          }
        
        // create a member function for update data
        public function upddata($table,$data1,$where,$id,$edid)
        {
        //we stored $data in array using array_keys and array_values
        $kk=array_keys($data1);
        $vv=array_values($data1);
        //we stored $where in array keys and array values 
        $key=array_keys($where);
        //print_r($key);
        $value=array_values($where);
        $i=0;
        $k=0;
        $sql="update $table set "; 
        $size=sizeof($data1);
        foreach($data1 as $v)
        {
            if($size==$i+1)
            {
                $sql.="".$kk[$i]."='".$vv[$i]."'";
            }
            else
            {
                $sql.="".$kk[$i]." = '".$vv[$i]."',";

            }
            $i++;
        }
        // for $where
        $sql.=" where $id='$edid'";

        if(count($where) > 1){
            foreach($where as $val)
            {
                $sql.=" and ".$key[$k]." = '".$value[$k]."' ";
                $k++;
            }
        }
        


        $query=mysqli_query($this->con,$sql);
        return $query;
    
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
            //delete customer and slot from database
            public function deletedata($table,$id)
            {
            
            $key=array_keys($id);
            $key1=implode(',',$key);
            $value=array_values($id);
            $value1=implode("','",$value);
            $delete="delete from  $table where $key1='$value1'";
            //echo $delete; exit();
            $query=mysqli_query($this->con,$delete);
            // echo $query; exit();
            return $query;    
            }

            //delete customer and slot from database
            public function deletedata1($table,$id)
            {
            
            $key=array_keys($id);
            $key1=implode(',',$key);
            $value=array_values($id);
            $value1=implode("','",$value);
            $delete="delete from  $table where $key1='$value1'";
            //echo $delete; exit();
            $query=mysqli_query($this->con,$delete);
            // echo $query; exit();
            return $query;    
            }
            
            
                 }
  




?>