<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">

  <div id="navbarNav" > 
    <ul class="navbar-nav">
      <?php

        foreach($menupontok as $key => $value) {
            $active = '';
            if($_SERVER['REQUEST_URI'] == '/szakdolgozat/'.$key) $active = ' active';

            if($key == 'felhasznalo') $key.='&action='.$action;
            ?>
            <li class="nav-item<?php echo $active; ?>">
                <a class="" href="index.php?page=<?php echo $key; ?>"><?php echo $value; ?></a>
                
            </li>
            
            <?php  
           
      }

      ?>
    </ul>
  </div>
</nav>