<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$errors   = array(); 


function sayhelo(){
    echo "Hello from fucntion.php";
}
include("db-info.php");

// $con=mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName); #parameters(hostname, username, password, database_name)

$conn = new PDO("mysql:host=$serverName;dbname=$dBName", $dBUsername, $dBPassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// if ($conn->connect_error) {
//     array_push($errors, "Error: Database connection failed"); 
//     die("Connection failed: " . $conn->connect_error);
//   }

function stopRR(){ // Stop-Request-Reload: Stop POST request from reloading
    echo'<script>
            if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
            }
        </script>';
}



if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


function check_login(){
    
  //  echo 1;die;
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
   // var_dump($_SESSION);die;
    if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id']))
        {//	echo 1;die;
        
            $host = $_SERVER['HTTP_HOST'];
            $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
            $extra="./login.php";
            header("Location: http://$host$uri/$extra?session=unauthorized");
            exit();
        }
}

function check_admin(){

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // var_dump($_SESSION);die;
    if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) && !isset($_SESSION['is_admin'])  && empty($_SESSION['is_admin']))
        {//	echo 1;die;
        
            
                $host = $_SERVER['HTTP_HOST'];
                $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra="./login.php";
                header("Location: http://$host$uri/$extra?session=unauthorized");
                exit();
            
        }

        else{
            if(!$_SESSION['is_admin']==2)
            {
                $host = $_SERVER['HTTP_HOST'];
                $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra="./index.php";
                header("Location: http://$host$uri/$extra?session=unauthorized");
                exit();
            }
        }
}


function check_mod(){

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    // var_dump($_SESSION);die;
    if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id']) && !isset($_SESSION['is_admin'])  && empty($_SESSION['is_admin']))
        {//	echo 1;die;
        
            
                $host = $_SERVER['HTTP_HOST'];
                $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra="./login.php";
                header("Location: http://$host$uri/$extra?session=unauthorized");
                exit();
            
        }

        else{
            if(!$_SESSION['is_admin']==1 || !$_SESSION['is_admin']==2)
            {
                $host = $_SERVER['HTTP_HOST'];
                $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                $extra="./index.php";
                header("Location: http://$host$uri/$extra?session=unauthorized");
                exit();
            }
        }
}
  






function insertRecord2($table, $data){

    global $con;
    $sql = "INSERT INTO ".$table." (" . implode(',' , array_keys($data)) . ") VALUES";

    $sql .= "('" . implode("','" , array_values($data)) . "')";
    $resp = mysqli_query($con, $sql);
    if(!$resp )
    {
        return mysqli_error($con);
    }
    return $resp;

}


function updatedb($table, $name, $val, $condition, $c_val){


    try {
        global $conn;
      
        $sql = "UPDATE `".$table."` SET ".$name."='".$val."' WHERE ".$condition."=".$c_val;
      
  
        // Prepare statement
        $stmt = $conn->prepare($sql);
        
      
        // execute the query
        $stmt->execute();
      
        // echo a message to say the UPDATE succeeded
        // echo $stmt->rowCount() . " records UPDATED successfully";
        return true;
    } catch(PDOException $e) {
        // echo $sql . "<br>" . $e->getMessage();
        return false;
      }
}


function updatedb2($table, $name, $val, $condition, $c_val)
{
    global $con;
    $sql = "UPDATE `".$table."` SET ".$name."='".$val."' WHERE ".$condition."=".$c_val;
           
    $stmt = mysqli_stmt_init($con);
    $dbresponse=mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
   
    
        if (!$dbresponse)
        {
          
           return false;
        }
        else
        {
            
           return true;

        }
}




function upload_file($filename,$newfilename, $dir,  $file_type,$max_filesize, $max_height, $max_width, $must_have, $unique){
    $file_size_allowed= $max_filesize*1000000;
    $file_uploaded_check=false;
    $file_exist_check=true;
 
    $ext_check=true;
    $size_check=true;
  
    
    if (! file_exists($_FILES[$filename]["tmp_name"]))
    {

        if($must_have)
        return "No File selected";
        else 
        return 1;
    }
    else{


        
        if($file_type=='pdf')
        {
            //$uploaddir = '../uploads/files/';
            $uploaddir=isset($dir)?$dir:'../uploads/files/';
            $allowed_file_extension = array(
                "pdf",
                "PDF",
                "docx"
                
                
            );
        }
        elseif($file_type=='image')
        {
            $fileinfo = @getimagesize($_FILES[$filename]["tmp_name"]);
            
            
            
            $uploaddir=isset($dir)?$dir:'../uploads/images/';
            $allowed_file_extension = array(
                "png",
                "PNG",
                "jpg",
                "JPG",
                "jpeg",
                "JPEG"
            );

            if ($width > $max_width || $height > $max_height){
                return "file should be atmost ".$max_width."x".$max_height;

            }



        }
        else{
            return 'Not a valid Filetype';
        }


        $file_extension = pathinfo($_FILES[$filename]["name"], PATHINFO_EXTENSION);
        
        if (! in_array($file_extension, $allowed_file_extension))
        {
            return "Extension not identified : ".$file_extension;
            
        }
        
        else{
            

            if(($_FILES[$filename]["size"] > $file_size_allowed)){
                return "file size should be less than ".$file_size_allowed." bytes";
                
            }

            
        }
        



    }
    




    if($size_check && $ext_check && $file_exist_check)
    {

        
        if(file_exists($uploaddir.$_FILES[$filename]['name']))
        {
            if($unique)
            return "This File Already Exists";
            else 
            return 1;
            
        }
        else{

            $uploadfile = $uploaddir . basename($_FILES[$filename]['name']);

            //echo "<p>";

            
          

            
            
            if (move_uploaded_file($_FILES[$filename]["tmp_name"], $uploaddir . $newfilename)) {
            return 1;
            
            }
            else {
                
            return "File Upload failed";
            }


           /*  echo "</p>";
            echo '<pre>';
            echo 'Here is some more debugging info:';
            print_r($_FILES);
             print "</pre>";*/

        }

    

            
   

    }

    
}





/////////////////////////////////////////// CUSTOM FUNCTIONS ##########################################



function getDataByProp2($table,$name,$val){
    global $con;
    $query = "SELECT * FROM `".$table."` WHERE ".$name."=" . $val;
    
    $response = mysqli_query($con, $query);

    if(!$response){                                   
        //echo mysqli_error($con);
        
    }
    else{

        if(mysqli_num_rows($response)>0)
        {
            return mysqli_fetch_array($response);
        }
        else{
            return false;
        }
        

        
    }
  
}

function getDataByProp($table,$name,$val){
    

    try {
        global $conn;
        $sql = "SELECT * FROM `".$table."` WHERE ".$name."=" . $val;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
      
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $data=$stmt->fetch();
        return $data;

      } catch(PDOException $e) {
        // echo "Error: " . $e->getMessage();
        return false;
      }
      $conn = null;

}


function getDataById2($id, $table){
    global $con;
    $query = "SELECT * FROM ".$table." WHERE user_id=" . $id." LIMIT 1";
    $response = mysqli_query($con, $query);

    if(!$response){                                   
        //echo mysqli_error($con);
        
    }
    else{

        if(mysqli_num_rows($response)>0)
        {
           return mysqli_fetch_array($response);
        }
        else{
            return "user not Found";
        }
        

        
    }
  
}





function strip_bad_chars( $input ){
    $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
    return $output;
}

function e($val){
    global $con;
    return mysqli_real_escape_string($con, trim($val));
}

/////////////////////////////////////////// UNIQUE FUNCTIONS: Functions unique to this website ##########################################







?>

                        
