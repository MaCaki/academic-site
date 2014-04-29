
<div class="container-fluid">
    
    
    
    
    
    <div class="row content">
        
           <!--   Main course content will go here -->
            <div class="col-md-8" id="course_content">


            <h3> A Course in Combinatorial Optimization  </h3>
                <div class ="entry">
                    <p>
                    &nbsp For the Spring semester of 2014, I will be conducting independent research 
                    under the direction of <a href="http://math.sfsu.edu/federico/"> Federico Ardila</a>
                    in combinatorial optimization.  In particular, I will be
                    looking at the role of submodular functions in optimization
                    problems such as machine learning algorithms, and then exploring the
                    possibility of extending results on submodularity to bi-submodularity. 
                    </p>
                </div>  
                
               
   <!--  WEEK   1 -------------------------------------------------->         
                <div class="entry ">
                    <div>On <b>Friday February 7th</b>, I attended the monthly <a 
                            "href=https://sites.google.com/site/piotrzwiernik/home/algebraic-statistics-seminar-2014">
                    Algebraic Statistics seminar</a>.  I went primarily to see 
                    <a href="http://www.cs.berkeley.edu/~stefje/">Stefanie Jegelka's</a>
                    talk on submodular functions in machine learning (check the side bar for a link to her presentation).
                    Her approach 
                    does not spend much time on the geometric or combinatorial aspects of the base polytope of a submodular 
                    function.  It was in fact Bernd Sturmfels who pointed out
                    as a side note, that the submodular polytope, which in other contexts is called a 
                    polymatroid, is in fact a permutohedra. I'm hoping
                    that this indicates room for work to be done, especially on the
                    geometry of the bi-submodular base polytope. 
                    
                        <div id="summary" class ="panel panel-info">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#summary"href="#SMsummary">
                                    Here are some selective notes from the talk.
                                </a>
                            </div>

                            <div id="SMsummary" class="panel-collapse collapse">
                                <div class="panel-body">  
                                 <p> Submodular functions are simply set functions defined on 
                                 the subsets of base set $V$ that satisfy a sort of discrete
                                 convexity. Schematically, $f$ is submodular iff
                                 $$ f:2^V \rightarrow \mathbb{R} \quad \text{and} \quad 
                                 \forall \ A,B  \in V \quad f(A)+f(B) \geq f(A\cap B) + f(A\cup B)$$
                                 In words, this says that the function $f$ evaluated on two subsets
                                 of $V$ is greater than the sum of $f$ evaluated on the 
                                 intersection and the union.   <br>

                                 Equivalently, we can think of a submodular
                                 function in terms of diminishing returns. That is if $f$
                                 is submodular, then it's "discrete derivative" decreases
                                 as the set we're evaluating it on grows.  
                                 Symoblically: 
                                 $$ \forall / A,B,e\in S, \ s.t. \ A\subset B \quad f(A\cup\{e\}
                                 -f(A) \geq f(B\cup \{e\}) -f(B) $$
                                 We call the terms in the above inequality the marginal 
                                 gain of $f$ on a given subset: 
                                 $$\Delta_f(e|A) = f(A\cup\{e\}-f(A)$$ 
                                 
                                 When $f$ is submodular the marginal gain of 
                                 $f$ decreases as we add elements to $A$. 
                                 This characterization makes clear the importance
                                 of submodular functions in optimization problems.  </p>

                                 <p>
                                 The main example in the talk of a situation modeled by 
                                 a submodular function was a set covering problem where
                                 we are trying to maximize the area observed by a set
                                 of sensors while tying to minimize the number of sensors
                                 we have to use.  The ground set in this case are the positions
                                 of the sensors (we assume I guess that we have a finite discrete
                                 set of possible installation points).  <br><br>

                                 The function $f$ in this case will map subsets of the
                                 positions to the total area effectively observed. 
                                 Here it is clear that if we have a set $A$ of positions
                                 and a larger set $B$ such that $A\subset B$, then 
                                 adding more sensors to $A$ will increase our total observed
                                 area at least as much as if we added sensors to $B$. 
                                 The situation in $A$ is more <i>sensitive</i> to 
                                 introducing new sensors. </p>

                                 <p>


                                 </p>
                                </div>
                            </div>
                        </div>                                  
                    </div>
                </div>
 <!--  WEEK   2 -------------------------------------------------->             
                <div class="row week ">
                    
                    <p>To do: some background study in basic polytope theories.</p>
                    
                </div>
                
 <!--  WEEK   3 -------------------------------------------------->                 
              
  <!--  WEEK   4 -------------------------------------------------->                
                
                
                
                
                
                
                <!-- End of Course Content div -->
            </div>
         

       
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
       <!--  List of resources -->       
        <div class ="col-md-4">
            <div class="panel panel-default pull-right">
                <div class="panel-heading">
                    <h3 class="panel-title">Resources</h3>
                </div>
                <div class="panel-body">
                <p class="text-info"> I have tried to compile the main sources for this course. 
                Everything that is accessible online has a hyperlink. </p>
              </div>
                <div class="panel-heading">
                    <h4 class="panel-title">Books</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"> 
                        <i>Combinatorial Optimization </i> by Alexander Schrijver.
                        In particular chapters par IV in volume B on Matroids
                        and Submodular Functions.                  
                    </li>
                    <li class="list-group-item">
                        <i>Lectures on Polytopes</i> by Gunter M. Ziegler
                    </li>
                    <li class="list-group-item"><i>Matroid Theory</i>
                    by D. J. A. Welsh</li>
                    <li class="list-group-item"> <i>Submodular Functions and Optimization</i>
                    by Satoru Fujishige</li>
                    <li class="list-group-item"></li>
                </ul>
                
                 <div class="panel-heading">
                    <h4 class="panel-title">Papers</h4>
                </div>
                
                <ul class="list-group">
                    <li class="list-group-item"> 
                        Alexander Postnikov's paper <a href="http://arxiv.org/abs/math/0507163">
                        Permutohedra, associahedra, and beyond </a>    
                    </li>
            
                   
                </ul>
                
                
                
                <div class="panel-heading">
                    <h4 class="panel-title">Sites</h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"> 
                        A<a href="http://www.cs.berkeley.edu/~stefje/submodularity_icml.html">
                        Tutorial on submodularity in Machine learning   
                        </a> presented by Andreas Krause and Stefanie Jegelka.                  
                    </li>
                    <li class="list-group-item"> Federico Ardila's 
                        <a href="http://www.youtube.com/playlist?list=PL-XzhVrXIVeQ298S6uCyoDGWNActWwnzZ">
                            Course on Polytopes</a> hosted on youtube.
                    </li>
                   
                </ul>
                
                
                 <div class="panel-heading">
                    <h4 class="panel-title">Interesting Excursions</h4>
                </div>
                
                <ul class="list-group">
                    <li class="list-group-item"> 
                        <a href ="http://citeseerx.ist.psu.edu/viewdoc/download;jsessionid=956C0D6CAF7CB98C5C21816AF149745A?doi=10.1.1.207.6285&rep=rep1&type=pdf">
                            A Class of Submodular Functions for Document Summarization
                        </a> by Hui Lin and Jeff Bilmes.
                 
                    </li>
                    <li class ="list-group-item">
                        <a href="http://citeseerx.ist.psu.edu/viewdoc/download?doi=10.1.1.308.4667&rep=rep1&type=pdf">
                            Summarization Through Submodularity and Dispersion</a>
                        
                    </li>
                   
                </ul>
                
                
            </div>
        </div>   
    </div>



</div>
