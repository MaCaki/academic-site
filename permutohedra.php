

<div class="row content">
    

<h2>Generalized Permutohedra: </h2><h3>investigating the properties of  
    deformations of type $A$ and type $BC$ orbit polytopes</h3>

The Geometry of Generalized type $A$ and type $BC$ Permutohedra
<br><br>

<a href= "./papers/Signed_Permutohedra_Arcila_Kim_Barbosa.pdf"> Signed Permutohedra</a>
- a paper written with Julian Romero and David Arcila of Universidad de los Andes
and Universidad Nacional respectively. 

<br><br>

<p class="bg-info"><b><i>Abstract </i></b>
Generalized permutohedra have been investigated by Alexander Postnikov and Federico Ardila as encoding
information corresponding to several different combinatorial structures such as
matroids, posets, trees, as well as Hopf monoids.  Generalized permutohedra have
shown up previously as polymatroids.  In particular
generalized permutohedra are simply submodular polytopes.  We have attempted to 
begin unifying the many structrual and characterizing theorems of generalized
permutohedra in their many forms, and translate them into the signed case. Our main
results so far have been to show that bisubmodular polyhedra are in fact generalized
signed permutohedra. We construct analogous theorems for the signed case, and discuss
their connection to $\Delta$-matroids and polymatroids.  </p>


<h4>What follows is an account of my investigations into generalized permutohedra of both
    type $A$ and type $BC$.</h4>     

<h5>What are Generalized Permutohedra?</h5>
<p>
The permutohedron is a convex polytope whose vertices correspond to permutations in 
$S_n$. We can construct a permutohedron by reflecting the point 
$(1,2, \dots , n)$ about the type $A_{n-1}$ hyperplane arrangement, which is also known as the
<i> braid arrangement. </i> This polytope is of dimension $n-1$ since it lives 
in the hyperplane $\sum_{i=1}^n x_i = \frac{n(n+1)}{2} $. 
</p>


<p>
A <b> generalized permutohedron </b> is a deformation
of a permutoherdron where we move the facets of a permutohedron along a direction
that is perpendicular to them.  In particular this means that all of the edges 
of a generalized permutohedron still have direction $e_i-e_j$ for some $i,j$.  
</p>

<p>

Another way of characterizing generalized permutohedra is to define 
 them as all the polytopes whose normal fan is <i> refined by </i> the braid
 arrangement.  And yet another way of describing these polytopes
 is given by the following theorem: 
</p>
<p>
<i><b><u>Theorem:</u></b> If $P$ is a generalized permutohedron in ${\bf R}^I$, then there exists a unique submodular
    function $f: 2^I\rightarrow {\bf R}$ such that 
    $$ P = \{ x\in {\bf R} \  | \ x(A) \leq f(A) \text{ for all } A\subset I 
        \text{ and } x(I) = f(I) \} $$
</i>
</p>

<p>
The above polytope is also called, the <i> base polytope </i>
of $f$.  In fact, we also have another theorem for the opposite direction: 

<br>
<p>
<i><b><u>Theorem</u></b> The base polytope for any submodular function $f: I \rightarrow {\bf R}$
is a generalized permutohedron.</i>
    </p>
<br>

The proof, which you can find in the paper linked above, basically combines some 
very nice combinatorial properties of the faces of the submodular polytope to deduce
that all of the edges must have direction $e_i-e_j$, and hence it's normal fan
is a coarsening of the braid arrangement.  Much in fact has already been said
about generalized permutohedra as submodular polytopes in the context of <b>polymatroids</b>.
Satoru Fujishige and  Alexander Schrijver in partiuclar have developed very 
elegant ways of talking about the geometry of polymatroids and their base polytopes
( which are our generalized permutohedra) in terms of the sets that the submodular
function is defined on.   
</p>



<h3>What's New?</h3>

<h4>Generalized Signed Permutohedra</h4>

<p>
David, Julian, and I have proved similar results for the Signed Permutohedra in 
the paper linked above. But first,
</p>
<h5><b>what is a signed permutohedron?</b></h5>

<p>
    Just like we constructed the regular (type $A$) permutohedron by reflecting
    the point $(1,2,\dots, n)$ around the type $A$ hyperplane arrangement, we will
    create a signed analogue by reflecting this same point across the type $BC$ 
    hyperplane arrangment. This is the set of hyperplanes in $R^n$ of the form
    $$ x_i=\pm x_j \text{  and  } x_i = 0 $$
    The resulting polytope will have vertices corresponding to the $2^n n!$ signed
    permutations on $[n]$.
</p>

<p>
    Since the type $BC$ arrangement can be viewed as a reflection of the type $A$
    arrangement across all of the hyperplanes $x_i = 0 $, it's clear to see that
    $2^n$ faces of the signed permutohedron will in fact be regular permutohedra. 
  
</p>

<p>
    The analogue of submodular functions for the signed case is the <b>bi-submodular
    function</b>.  Before we define what this is, lets first establish some notation
    that will make facilitate the discussion about signed permutatahera.
</p>

<br>

<p>
    A <b> signed set $S$ </b> of $I$ is simply a pair of disjoint subsets $S_-, S_+$. 
    The indices signify which set we consider to be the positive 
    elements, and which are negative.   
    We will denote by $\mathcal{S}(I)$ the set of signed subsets of $I$. <b>Note</b>
    that $\mathcal{S}(I) \cong 3^I$.
    This definition requires us to clarify 
    what it means for one signed set to be contained in another.   If $S$ and 
    $T$ are two signed sets, then $$ S\sqsubseteq T  \Leftrightarrow  S_-\subset
    T_- \text{ and } S_+ \subset T_+$$
</p>

<p>
    We are also required to redefine what it means to be the intersection and
    union of two signed subsets $S$ and $T$: 
    <br>  
    If $ U = S \vee T$
    then
    $$  U _+ = ( S_+ \cup T_+) \setminus ( S_-\cup T_-)  \text{ and } 
    U_- = ( S_-\cup T_-) \setminus( S_+ \cup T_+) $$
    
    If $X = S\wedge T $ then
    $$  X_+ = S_+\cap T_+ \text{ and } X_- = S_-\cap T_-$$ 
</p>


<p>
    <br>
    Now we are ready to define a <b>bi-submodular
    function </b> $f :  \mathcal{S}(I) \rightarrow {\bf R}$ :
    
    <br>
    
    <br>
    <i><b><u>Definition: </u></b></i>  A function $f: \mathcal{S}(I)\rightarrow {\bf R}$
        is bi-submodular if
        $$ f(S) + f(T) \geq f(S\vee T) + f(S\wedge T) $$
    
    
</p>



<p>
    As in the case of type $A$ permutohedra, there is a bijection between
    the faces of dimension $k$ and
    the ordered set partition of $I$ of length $n-k$.  
    <br>
    The $k$ dimensional faces of the signed permutohedron are in bijection with 
    ordered partitions of $I$ into signed subsets. 
</p>


<p>
    Also, as in the case with the type $A$ permutohedron, we were able to characterize
    all of the generalizations that preserve edge direction, or coarsen the normal 
    fan.   In the signed case, the normal fan is the type $BC$ hyperplane arrangement. 
    
    We have shown that all generalized signed permutohdra are in fact <b> bi-submodular
        base polytopes</b>
    
    A to define a bi-submodular polytope we have to make some careful changes. 
    Above $x(A)$ meant $\sum_{i \in A} s_i$.  However if $T$ is a signed subset
    $$ x(T) = \sum_{i\in T_+} x_i - \sum_{j \in T_-} x_i $$
    
    Therefore, if $f:\mathcal{S}\rightarrow {\bf R}$ is a bi-submodular function, 
    we can define the bi-submodular polytope as
    
    $$ P(f) := \{ x\in {\bf R}^I  \ \ |\ \  x(T) \leq f(T) \text{   for all  } T\in\mathcal{S}(I) \} $$
    
    
    We show this in the paper above by proving that a bi-submodular polytope has
    edge directions $e_i$, $e_i-e_j$, or $e_i+e_j$, and hence, its normal fan
    coarsens the fan associated with the $BC$ hyperplane arrangement. 
    
</p>

<p>
    Many of the nice properties of permutohedra carry over into the signed case
    after appropriate translation.    For example, we have shown that just as
    the regular permutohedron on $[n]$ is the graphical zonotope of the complete graph
    on $n$ vertices, the signed permutohedron is the graphical zonotope of the 
    complete directed graph. 
    
</p>

<p>
    In one of the few papers that talks about bisubmodular functions and bisubmodular
    polyhedra, Bill Cunningham's and André Bouchet's <a href ="http://www.math.uwaterloo.ca/~whcunnin/step.pdf"
   >Delta-matroids, Jump Systems and Bisubmodular Polyhedra</a> we see how they are related
   to $\Delta-$matroids and jump systems, which are sets of integral points satisfying
   a two step axiom.   
</p>
        







</div>