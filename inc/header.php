<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>MaCaKi</title>

        <link href="./style/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="./style/pure.css">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
      
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
        </script>
        <script type="text/javascript"
            src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
        </script>
        
        <style type="text/css">
      

            html,
            body {
              height: 100%;
              background-image: url("./pictures/noisy_grid.png");
               /* The html and body elements cannot have any padding or margin. */
            }
            * {
            }
            /* Wrapper for page content to push down footer */
            #wrap {
              min-height: 100%;
              height: auto !important;
              height: 100%;
              /* Negative indent footer by its height */
              margin: 0 auto -100px;
              /* Pad bottom by footer height */
              padding: 0 0 100px;
            }

            /* Set the fixed height of the footer here */
            #footer {
              color: white;
              height: 100px;
              background-color: #595959;
            }


            /* Custom page CSS */


            #wrap > .container {
              padding: 60px 15px 0;
            }
            .container .credit {
              margin: 20px 0;
            }

            #footer > .container {
              padding-left: 15px;
              padding-right: 15px;
              padding-top: 10px;
            }

            #footer > .link {
              padding-left: 10px;
              padding-right: 10px;
            }

            code {
              font-size: 80%;
            }
            
            .week {
                padding-top: 10px;
                padding-bottom: 10px;
                border-bottom: solid black;
                border-bottom-width: thin;    
                border-top: solid thin;                
            }

            .content {
              padding-top: 10px;
              padding-bottom: 10px;
              padding-left: 15%;
              padding-right: 15%;
            }

            .content .entry{
              padding-top: 20px;
              padding-bottom: 10px;  
              border-bottom: solid thin;  
            }
            
            
            .no-radius{
                border-radius:0 !important;
                -moz-border-radius: 0 !important;
                -o-border-radius: 0 !important;
                -webkit-border-radius: 0 !important;
                }
            
        </style>
    </head>
    
    
    
    <body>
        
        <!-- Wrap all page content here -->
<div id="wrap">
  
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="?page=home">matthew cadier kim</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teaching <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?page=online_calculus">Calculus </a></li>
              <li><a href="?page=algebra">Algebra I and II</a></li>
              
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learning <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?page=optimization">optimization</a></li>
              <li><a href="?page=permutohedra">permutohedra</a></li>
            </ul>
          </li>  
           <li <?php echo ($_GET["page"]=='making'? "class=\"active\"" : "") ?>>
              <a href="?page=making">Making</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
