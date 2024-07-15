<?php
    error_reporting(0);
    require_once("model/model.php");
        
    
    class controller extends model
    {
        public function __construct()
        {

            session_start();
            parent :: __construct();

            //fetch all record from register
            $fetch2=$this->selectdata('register');
            //fetch all record from city
            $fetch=$this->selectdata('tbl_city');

            $fetch1=$this->selectdata('parkingslot');

            $shwslot=$this->selectdata('tbl_bookslot');

            //fetch slot from database
            $slot=$this->selectdata('tbl_slot');
            
            // manage all mobile sub category 
            $shwcity=$this->selectjoin('tbl_city','tbl_bookslot','tbl_city.id=tbl_bookslot.city');


                
            

            $slotList = array();
            if(!empty($slot)){
                $i=0;
                foreach ($slot as $key => $value) {
                    if($value['Rajkot'] != "booked")
                    $slotList['RAJKOT'][$i++] = $value['Rajkot']; 
                }
            }

            $expRajkotSlot = implode("|",$slotList['RAJKOT']);

            $slotList = array();
            if(!empty($slot)){
                $i=0;
                foreach ($slot as $key => $value) {
                    if($value['Ahemdabad'] != "booked")
                    $slotList['Ahemdabad'][$i++] = $value['Ahemdabad']; 
                }
            }

            $expahemdabadSlot = implode("|",$slotList['Ahemdabad']);

            $slotList = array();
            if(!empty($slot)){
                $i=0;
                foreach ($slot as $key => $value) {
                    if($value['Surat'] != "booked")
                    $slotList['Surat'][$i++] = $value['Surat']; 
                }
            }

            $expsuratSlot = implode("|",$slotList['Surat']);

            $slotList = array();
            if(!empty($slot)){
                $i=0;
                foreach ($slot as $key => $value) {
                    if($value['Vadodara'] != "booked")
                    $slotList['Vadodara'][$i++] = $value['Vadodara']; 
                }
            }

            $expvadodaraSlot = implode("|",$slotList['Vadodara']);

            // echo "<pre>";
            // print_r($slotList);
            // exit;

            if(isset($_GET['submit']))
            {
                $input=$_GET['search'];
            $shw=$this->selectalldata('parkingslot',$input);

            }
            
            if(isset($_POST['submit']))
            {
                $user_id=$_POST["id"];
                $name=$_POST["name"];
                $uname=$_POST["uname"];
                $email=$_POST["email"];
                $pwd=base64_encode($_POST["password"]);
                               
                $data=array("user_id"=>$user_id,"name"=>$name,"username"=>$uname,"email"=>$email,"password"=>$pwd);
                if($data)
                {

                $this->insertalldata('register',$data);   
                echo "<script>
                alert('Thanks for created Your account with Us')
                window.location='./login';
                </script>";
                }
                else 
                {
                    echo "<script>
                    alert('Password and conifrmed password does not matched')
                    window.location='/register';
                    </script>";
                }

            }
            //book slot by user
            if(isset($_POST["bookslot"]))
            {
                $username=$_POST["uname"];
                $email=$_POST["email"];
                $city1=$_POST["city"];
                $area1=$_POST["area"];
                $bookslot=$_POST["slot"];
                $mobile=$_POST["mobile"];
                $date1=$_POST["date1"];
                $date2=$_POST["date2"];
                $rate=$_POST["rate"];
                $status=$_POST["status"];       
                $data=array("username"=>$username,"email"=>$email,"city"=>$city1,"area"=>$area1,"slot"=>$bookslot,"mobile"=>$mobile,"start_date"=>$date1,"end_date"=>$date2,"rate"=>$rate,"status"=>$status);

                
                if($data)
                {


                // echo "<pre>";
                // print_r($result);
                // exit;
                  
                  $this->insertalldata('tbl_bookslot',$data);
                    
                echo "<script>
                alert('Yout Sot book is Confirm.')
                window.location='./';
                </script>";
                }

            }




            // customer logged in logic 
            if(isset($_POST["login"]))
            {

            $uname=$_POST["username"];
            $password=base64_encode($_POST["password"]);
            $chk=$this->login('register',$uname,$password);

            if($chk)
            {
            echo "<script>
            alert('You are Logged Successfully')
            window.location='./';
            </script>";
            }
            else 
            {

            echo "<script>
            alert('Your email and password are Incorrect try again')
            window.location='./login';
            </script>";
            }

            }
              // create a logic for logout as admin
              if(isset($_GET["logout-here"]))
              {
              $chk=$this->logout();
              echo "<script>
              alert('You are Logout Successfully')
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
                     require_once("header.php");
                     require_once("content.php");
                     require_once("footer.php");
                     break;

                     case '/about';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("about.php");
                     require_once("footer.php");
                     break;

                     case '/parkingslot';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("parkingslot.php");
                     require_once("footer.php");
                     break;

                     case '/contact';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("contact.php");
                     require_once("footer.php");
                     break;

                     case '/rate';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("rate.php");
                     require_once("footer.php");
                     break;

                     case '/register';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("register.php");
                     require_once("footer.php");
                     break;
                    
                     case '/search';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("search.php");
                     require_once("footer.php");
                     break;

                     case '/bookslot';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("bookslot.php");
                     require_once("footer.php");
                     break;

                     case '/manageslot';
                     require_once("index.php");
                     require_once("header.php");
                     require_once("manageslot.php");
                     require_once("footer.php");
                     break;

                     case '/login';
                     require_once("index.php");
                     require_once("login.php");
                     break;
                 
                     default;
                     require_once("index.php");
                     require_once("header.php");
                     require_once("content.php");
                     require_once("footer.php");
                     break;
               }
            }
    
          }
          
    }



    $obj=new controller;



?>