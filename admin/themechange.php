<?php

    define('page_title',"Change Theme");

    include('../includes/functions.php');

    $table='website-props';
    $id="name";


    function get_colors(){      //Getting value from database for prefilling input fields

      global $table; global $id;

      $GLOBALS['primary1']=getDataByProp($table, $id, "'primarycolor1'");
      $GLOBALS['primary1']=$GLOBALS['primary1']['value'];

      $GLOBALS['primary2']=getDataByProp($table, $id, "'primarycolor2'");
      $GLOBALS['primary2']=$GLOBALS['primary2']['value'];

      $GLOBALS['secondary1']=getDataByProp($table, $id, "'secondarycolor1'");
      $GLOBALS['secondary1']=$GLOBALS['secondary1']['value'];
    }

    get_colors();
    


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      global $errors;

      stopRR();

      if(isset($_POST['submit_colors']))
      {

        if(!empty($_POST['primarycolor1']) || $_POST['primarycolor1']!="")
        {
          if(!updatedb($table, 'value',$_POST["primarycolor1"],$id,"'primarycolor1'" ))
          {
            array_push($errors, "Error: Could not update Primary Color 1"); 
          }
        }
        if(!empty($_POST['primarycolor2']) || $_POST['primarycolor2']!="")
        {
          if(!updatedb($table, 'value',$_POST["primarycolor2"],$id,"'primarycolor2'" ))
          {
            array_push($errors, "Error: Could not update Primary Color 2"); 
          }
        }

        if(!empty($_POST['secondarycolor1']) || $_POST['secondarycolor1']!="")
        {
          if(!updatedb($table, 'value',$_POST["secondarycolor1"],$id,"'secondarycolor1'" ))
          {
            array_push($errors, "Error: Could not update Secondary Color 1"); 
          }
        }

        unset($_POST['submit_colors']);
       


      }

      elseif(isset($_POST['load_default']))
      {
        if(!updatedb($table, 'value','#2e2751',$id,"'primarycolor1'" ))
          {
            array_push($errors, "Error: Could not load Primary Color 1"); 
          }
          if(!updatedb($table, 'value','#179E66',$id,"'primarycolor2'" ))
          {
            array_push($errors, "Error: Could not load Primary Color 2"); 
          }
          if(!updatedb($table, 'value','#f3a712',$id,"'secondarycolor1'" ))
          {
            array_push($errors, "Error: Could not load Secondary Color 1"); 
          }

      }
      get_colors();

    }



    

    include('includes/header.php');

?>




<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">


            <?php
            include('../includes/show-errors.php');
            ?>



            <form action="" method="POST" class="form-row p-0 m-0">

            <div id="primarycolor1" class="input-group col-sm-6 my-3" >
            
            <input type="text" name="primarycolor1" class="form-control input-lg" value="<?php print_r($GLOBALS['primary1'])?>"  placeholder="Choose Primary Color 1"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>

            <div id="primarycolor2" class="input-group col-sm-6 my-3">
            
            <input type="text" name="primarycolor2" class="form-control input-lg" value="<?php print_r($GLOBALS['primary2'])?>"  placeholder="Choose Primary Color 2"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>

            <div id="secondarycolor1" class="input-group col-sm-6 my-3" >
            
            <input type="text" name="secondarycolor1" class="form-control input-lg" value="<?php print_r($GLOBALS['secondary1'])?>"  placeholder="Choose Secondary Color 1"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>
            <div class="col-sm-6"></div>

            <input type="submit" name="submit_colors" value="Save" class="btn btn-primary">
            
            <input type="submit" name="load_default" value="Load Defaults" class="btn btn-warning mx-3">
            

            </form>
        
    </div>
</div>


<?php

    include('includes/footer.php');

?>

<script>
  $(function () {
    $('#primarycolor1, #primarycolor2, #secondarycolor1').colorpicker({
      format: null
    });
  });
</script>