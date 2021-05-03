<?php

    if(isset($successes))
    {

    if(count($successes)>0)
    {
        echo '<div class="alert alert-success"> <ul>';
        foreach($successes as $x => $success) {
        echo "<li> $success </li>";
        
        }
        echo "</ul></div>";
    }

    }


?>