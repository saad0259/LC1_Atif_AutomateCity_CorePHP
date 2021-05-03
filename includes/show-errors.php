<?php

    if(isset($errors))
    {

    if(count($errors)>0)
    {
        echo '<div class="alert alert-danger"> <ul>';
        foreach($errors as $x => $error) {
        echo "<li> $error </li>";
        
        }
        echo "</ul></div>";
    }

    }


?>