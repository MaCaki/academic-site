<?php  include 'inc/header.php';?>



  <!-- Begin page content -->
  <div class="container"">
    <div class="page-header  text-muted">
      <h1>Matthew Cadier Kim</h1>
       <p class="lead"> 
           San Francisco State University<br>
           Thorton Hall 912<br>
           </p>
    </div>
      
    <?php 
        $page = $_GET["page"];
        
        if (!empty($page)){
           include $page.".php";
        } else {
            include "home.php";
        }  
    ?>        
 
            
   
  </div>
 
  
<?php  include 'inc/footer.php';?>  