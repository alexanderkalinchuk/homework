<ul>

    <?php
   // print_r($menu);

    foreach($menu as $key=>$val)
    {
        echo "<li><a href='".$key."'>".$val."</a></li>";
    }
        ?>
</ul>