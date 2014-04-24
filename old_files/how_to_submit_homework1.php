<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <!--  to be put in a style.css file-->
        <style>  
            body {
            padding : 20px;
            min-width: 850px;
            font-family: sans-serif;
            }
            
            [class*='grid-']:after {
              content: "";
              display: table;
              clear: both;
            }
            
            *, *:after, *:before{
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }


            .east {
                float : right;
            }
            .west {
                float : left;
            }
            .grid-1{
                width: 100%;
            }
            .grid-2-3{
                padding : 5px;
                width : 65%;
            }
            .grid-2 {
                padding : 5px;
                width : 50%;  
            }
            .grid-3 {
                padding : 5px;
                width : 33.33%;    
            }
            .grid-4 {
                padding : 5px;
                width : 25%; 
            }
            .grid-5 {
                padding : 5px;
                width : 20%;    
            }
            .grid-6 {
                padding : 5px;
                width : 16.66%;    
            }
            .grid-7 {
                padding : 5px;
                width : 14.2%;    
            }
            .grid-8 {
                padding : 5px;
                width : 12.5%;    
            }
            .grid-9 {
                padding : 5px;
                width : 11.11%;    
            }
            .blue{
                background-color : rgb(185, 216, 255);
            }
            .boxed{
                border-style: solid;
                border-width: 2px;
                border-color: darkgray;
            }
        </style>
        
    </head>
    <body>
        
       
           
    <h3> math 226, calculus I: how to submit homework  </h3>

    <p class="grid-2-3">
              No homework assignment requires you to write much (usually 3 pages maximum) 
        but you do need to think at times for several hours what to write. A homework solution set 
        is a single pdf file containing the pictures of handwritten, legible, properly rotated 
        solutions. Students who have special needs that prevent them to handwrite neatly should
         let Dr. Goetz know to arrange alternative submission methods. 



    <!-- To insert: Example pdf of a homework. -->

        We will only accept a pdf file attachment sent from your email which is in the sfsu system 
        to :
        <br>
        &nbsp&nbsp &nbsp <span >
            <b>calculus+1+
            <?php echo empty($_GET["first"]) ? "first_name" : $_GET["first"];?>
            +
            <?php echo empty($_GET["last"]) ? "last_name" : $_GET["last"];?>
            @mangoroot.com,</b></span>
        <br>
        and titled by the lesson number.
         [Professor Goetz owns mangoroot].

   </p>
           
            
            
       <p class="grid-2">
            <?php  
            if (empty($_GET["last"])&&empty($_GET["first"])&&empty($_GET["email"])&& empty($_GET["hw"]))
                echo "If Joe Alpha who is an SFSU student and he wants to submit homework 7,
                        then he sends a single pdf attachment from his email";
            
            else echo "You can use the template below to send your homework assignments
                        as pdf attachments to an email";
            ?>
            : <br>

       </p>
       
        <div class="grid-1">
           <div class="grid-2 blue west">

               <div class="grid-1 boxed" style="background-color:white"> 

                   <b> From:</b> &nbsp 
                       <?php echo empty($_GET["email"])? "joe_alpha@mail.sfsu.edu" :$_GET["email"] ; ?> 

                   <hr>
                   <b> To: </b>  &nbsp &nbsp 
                       <?php
                           echo "calculus+1+"; 
                           echo empty($_GET["first"]) ? "Joe" : $_GET["first"]; 
                           echo "+";
                           echo empty($_GET["last"]) ? "Alpha" : $_GET["last"];
                           echo "@mangoroot.com"?>   

               </div>
               
               
               <br>
               
                    <div class="grid-1 boxed" style="background-color:yellow">
                    <b> Subject: </b> &nbsp 
                        <?php 
                            echo "Homework ";
                            echo empty($_GET["hw"]) ? "7": $_GET["hw"]; ?>  
               </div>
               <br>

               <div class="grid-1 boxed" style="background-color:white">	
               Attached: 
                   "<?php echo empty($_GET["first"])?"Joe": $_GET["first"]; 
                          echo "_";
                          echo empty($_GET["last"]) ? "Alpha" : $_GET["last"];
                          echo "_hw_";
                          echo  empty($_GET["hw"]) ? "7": $_GET["hw"]; ;
                          echo ".pdf"?>" *
               </div>

               <br>
               
               Body:
               <div class="grid-1 boxed" style="background-color:white">
                
                   It's best not to put urgent questions here, as we do not 
                   go through the calculus@mangoroot.com email looking for student
                   communications.  Send all queries directly to your grader or to the instructor. 
               </div>
               *Sometimes scanner apps make it difficult to rename files. In this
               case just make sure that your subject line is standard. 
               
               
               <br>   
               
            </div>

           <div class="grid-2 east">
           To see what your email should look like enter your information below:
           <form action="how_to_submit_homework1.php" method="get">
                     <input type="text" name="first" placeholder="First Name" size="30"><br>   
                     <input type="text" name="last" placeholder="Last Name" size="30"><br>                    
                     <input type="text" name="email" placeholder="email you registered with" size="30" ><br>
                     <input type="text" name="hw" placeholder="homework #" size="30"><br>
                    <input type="submit">
                    </form>
            </div>
        </div>     
       
       
        <p class="grid-2-3">
        From the entire list of problems our staff picks a subset which is graded. Usually three 
        or more problems are chosen. If a student wishes to receive written feedback on a particular 
        problem, she/he should request this on page 1. 

        Each problem is marked according to this scale:
        </p>
        
        <br>
        
        <div class="grid-4 blue">
            <span style=font-weight:bold;color:#CC229C;background:#A99 >
                mangenta - missing</span>
            <br>
            <span style=font-weight:bold;color:#F0F0FF;background:#F00>
                [0] red - wrong</span>
            <br>
            <span style=font-weight:bold;color:#F0F0FF;background:#F80 >
                [1/3] orange - mostly wrong with some correct parts</span>
            <br>
            <span style=font-weight:bold;color:#F0F0FF;background:#DDCC00>
                [2/3] yellow - mostly correct with no major errors</span>
            <br>
            <span style=font-weight:bold;color:#F0F0FF;background:#071 >
                [1] green - correct</span>
        <br>
        </div>
        
        <p class="grid-2-3">
            Credit can be obtained by showing a process leading to the final answers. 
            Final answers without a full explanation how you obtained them do not carry any credit 
            (they are marked as "[brown] missing") and they can be usually checked on the forum before submission.

            <div class="grid-2-3">
            <b>Late homework.</b>
            Solutions are published exactly 6 hours after deadline, so under no circumstances solutions
             received after the publication time can receive any  credit. 
            </div>

            <div class="grid-2-3">
            Late homework received before the solutions are published will be graded and marked 
            as late (valued at roughly 2/3 of homework submitted within time) 
            </div>

            <div class="grid-2-3">
            <br><b>Dispute your grade.</b> While our staff have worked with me for many years and they
             are careful, occasionally we might make some errors as well. In such cases we would be 
             more than happy to promptly update students homework. To request a reconsideration the 
             student must reply to the staff email within 48 hours after the receipt of the original
              homework feedback. After 48 hours the homework grade is final.
              </div>

            <div class="grid-2-3">
            <b>How many homeworks can I miss?</b> If you miss one or two homeworks, 
            then you would be able to make it up by submitting an optional lesson 26. If you miss more
             than 4 homeworks, then no passing grade will be assigned. Only emergencies documented by 
             medical professionals, funeral homes, or police are a basis for an exception. 
             </div>

            <div class="grid-2-3">
            <b>Submitting homework written by another person.</b> Students in the class are 
            encouraged to exchange ideas and hints about homework. However, each pdf file must be 
            handwritten by the student who submits the homework. If we notice that two students have 
            identical parts of the pdf file, we immediately will stop helping these students learn and 
            these students will not receive a passing course grade. In more serious cases we will notify
             the student school of suspecting cheating.
             </div>

         </p>
    </body>
</html>
