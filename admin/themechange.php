<?php

    include('includes/header.php');

?>




<div class="main_content_iner ">
    <div class="container-fluid p-0 sm_padding_15px">

            <form action="" class="form-row p-0 m-0">

            <div id="primarycolor1" class="input-group col-sm-6 my-3" >
            
            <input type="text" class="form-control input-lg" placeholder="Choose Primary Color 1"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>

            <div id="primarycolor2" class="input-group col-sm-6 my-3">
            
            <input type="text" class="form-control input-lg" placeholder="Choose Primary Color 2"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>

            <div id="secondarycolor1" class="input-group col-sm-6 my-3" >
            
            <input type="text" class="form-control input-lg" placeholder="Choose Secondary Color 1"/>
            <span class="input-group-append">
                <span class="input-group-text colorpicker-input-addon"><i></i></span>
            </span>
            
            </div>
            <div class="col-sm-6"></div>

            <input type="submit" value="Save" class="btn btn-primary">
            
            <input type="submit" value=" Load Defaults" class="btn btn-warning mx-3">
            

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