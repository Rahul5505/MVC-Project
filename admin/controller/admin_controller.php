<?php
    error_reporting(0);
    require_once("model/admin_model.php");
    //inherite to controller
    class controller extends adminmodel
    {
        public function __construct()
        {
            parent:: __construct();

             // display customer from register
             $fetch=$this->selectalldata('register');
             //fetch slot from database
             $slot=$this->selectalldata('tbl_slot');
             $city=$this->selectalldata('tbl_city');
            //display area city state from database
            $shw=$this->selectalldata('parkingslot');
            //display book slot in admin
            $viewslot=$this->selectalldata('tbl_bookslot');
            
            
            // manage all mobile sub category 
            // $shwcity=$this->getDataById('tbl_city','id',$id);
            
            // admin logged in logic 
                if(isset($_POST["btn_submit"]))
                {

                $email=$_POST["email"];
                $password=$_POST["password"];
                $chk=$this->adminlogin("admin",$email,$password);
                if($chk)
                {
                echo "<script>
                alert('You are Logged in as Admin Successfully')
                window.location='dashboard'
                </script>";
                }
                else 
                {

                echo "<script>
                alert('Your email and password are Incorrect try again')
                window.location='./';
                </script>";
                }

                }

                //insert a slot via admin
                if(isset($_POST['submit']))
                {
                    $raj=$_POST["rajkot"];
                    $ahem=$_POST["ahemdabad"];
                    $surat=$_POST["surat"];
                    $vadodara=$_POST["vadodara"];               
                    $data=array("Rajkot"=>$raj,"Ahemdabad"=>$ahem,"Surat"=>$surat,"Vadodara"=>$vadodara);
                    if($data)
                    {
    
                    $this->insertalldata('tbl_slot',$data);   
                    echo "<script>
                    alert('New slot Add sucessfully')
                    window.location='./slot';
                    </script>";
                    }
                    else 
                    {
                        echo "<script>
                        alert('Try Again to slot add')
                        window.location='/slot';
                        </script>";
                    }

                }
                   // edit food category in admin
                   if(isset($_GET["editid"]))
                   {
                       $edid=$_GET["editid"];
                       $edcat=$this->editalldata('tbl_slot','id',$edid);
                   }
                    // update category food
                if(isset($_POST["update-category"]))
                {

                $edid=$_GET["editid"];
                $where=array("id" => $edid);
                $raj=$_POST["rajkot"];
                 $ahe=$_POST["ahemdabad"];
                 $surat=$_POST["surat"];
                 $vadodara=$_POST["vadodara"];
                $data1=array("Rajkot"=>$raj,"Ahemdabad"=>$ahe,"Surat"=>$surat,"Vadodara"=>$vadodara);
                
                $chk=$this->upddata('tbl_slot',$data1,$where,'id',$edid);

                if($chk)
                {
                echo "<script>
                alert('Your slot successfully updated')
                window.location='./viewslot';
                </script>";
                }

            }
            if(isset($_GET["deletecid"]))
            {
            $deleteid=$_GET["deletecid"];
            $id=array("id"=>$deleteid);
            $chk=$this->deletedata('register',$id);

            if($chk)
            {
                
            echo "<script>
            alert('Your cart removed successfully')
            window.location='/dashboard';
            </script>";
            }
            }

            if(isset($_GET["deleteid"]))
            {
            $deleteid=$_GET["deleteid"];
            $id=array("book_id"=>$deleteid);
            $chk=$this->deletedata1('tbl_bookslot',$id);

            if($chk)
            {
                
            echo "<script>
            alert('Your cart removed successfully')
            window.location='/dashboard;
            </script>";
            }
            }
                // create a logic for logout as admin
                    if(isset($_GET["logout-here"]))
                    {
                    $chk=$this->logout();
                    echo "<script>
                    alert('You are Logout  as Admin Successfully')
                    window.location='./';
                    </script>";
                    }



            //load view via routing
            if(isset($_SERVER["PATH_INFO"]))
            {
                //routing for each pages using switch case
                switch($_SERVER["PATH_INFO"])
                {
                    case '/';
                    require_once("index.php");
                    require_once("login.php");
             
                    break;

                    case '/dashboard';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("content.php");
                    require_once("footer.php");
                    break;

                    case '/addarea';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addarea.php");
                    require_once("footer.php");
                    break;
                    
                    case '/managearea';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managearea.php");
                    require_once("footer.php");
                    break;

                    case '/managecustomer';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecustomer.php");
                    require_once("footer.php");
                    break;

                    case '/slot';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("slot.php");
                    require_once("footer.php");
                    break;

                    case '/editslot';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("editslot.php");
                    require_once("footer.php");
                    break;

                    
                    case '/viewslot';
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("viewslot.php");
                    require_once("footer.php");
                    break;

                    default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");
                    break;

                    

                }
            }
        }

    }
    $obj=new controller;



?>