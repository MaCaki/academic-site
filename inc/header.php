<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>MaCaKi</title>

        <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" type="text/css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="/bootstrap/img/favicon.ico">
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
        
        <script type="text/x-mathjax-config">
            MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
        </script>
        <script type="text/javascript"
            src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
        </script>







        <!-- CSS code from Bootply.com editor -->
        
        <style type="text/css">
                        /* Sticky footer styles
            -------------------------------------------------- */

            html,
            body {
              height: 100%;
              background-image: url("./pictures/noisy_grid.png");
               /* The html and body elements cannot have any padding or margin. */
            }
            * {
                /* color: white; */
            }
            /* Wrapper for page content to push down footer */
            #wrap {
              min-height: 100%;
              height: auto !important;
              height: 100%;
              /* Negative indent footer by its height */
              margin: 0 auto -60px;
              /* Pad bottom by footer height */
              padding: 0 0 60px;
            }

            /* Set the fixed height of the footer here */
            #footer {
              color: white;
              height: 60px;
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
          <li <?php echo ($_GET["page"]=='cv'? "class=\"active\"" : "") ?>>
              <a href="?page=cv ">Curriculum Vitae</a></li>
          <li <?php echo ($_GET["page"]=='contact'? "class=\"active\"" : "") ?>>
              <a href="?page=contact">Contact</a></li>
          <li <?php echo ($_GET["page"]=='papers'? "class=\"active\"" : "") ?>>
              <a href="?page=papers">Papers</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teaching <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Calculus I</a></li>
              <li><a href="#">Calculus II</a></li>
              <li><a href="#">Math 70</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Tutoring</li>
              <li><a href="#">ISEEED</a></li>
              <li><a href="#">Private Tutoring</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Learning <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="?page=math899">Math 899 Spring 2014</a></li>
              <li><a href="?page=permutohedra">Permutohedra</a></li>
            </ul>
          </li>  
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  
