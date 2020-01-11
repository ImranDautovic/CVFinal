

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>


    <link rel ="stylesheet" style="text/css" href="cvUpdate.css">
    <meta charset="utf-8" />
    <title>CV-Curriculum Vitae</title>
    <script>
            function myFunction() {
              alert("WELCOME TO CV of Imran Dautović");
            }
            </script>
    

    <!--
        Name: Imran Dautović
        Course: FENS/CS/CS412.1 Web Application Development
        Assignment: Lab3/Assignment3, making our own CV using knowledge of HTML,CSS and JavaScript covered during classes.
        Due Date: 15.12.2019
        Purpose: The purpose of this lab/assignment is to gain a better understanding of basic HTML,CSS and JavaScript.
        -->

</head>


<body onload="myFunction()">
  

    <div class="navbar">
       
        <a href="#work">WORK EXPERIENCE</a>
        <a href="#edu">EDUCATION</a>
        <a href="#project">PROJECTS</a>
        <div class="dropdown">
                 <button class="dropbtn">GITHUB</button>
                <div class="dropdown-content">
               
                
                <a href="https://github.com/ImranDautovic/CVImrankoo">Repository 1</a>
            <a href="https://imrandautovic.github.io/CVImrankoo/">Progress 1</a>
            <a href="https://github.com/ImranDautovic/CVUpdate">Repository 2</a>
            <a href="https://imrandautovic.github.io/CVUpdate/">Progress 2</a>
                </div>
              </div>
    
      
        <a href="#skils">SKILLS AND EXPERTISE</a>

    </div>

    <div class="row">
            <div class="column">

  <div id="contact">
        <h2 onmouseover="style.color='green'" onmouseout="style.color='black'">CONTACT INFORMATION</h2>
        
                Name:Imran Dautović<br><br>
                Mobile: 062-473-083<br><br>
                Social Networks: No<br><br>
                Date of Birth: 6.4.1995, Zenica<br><br>
                GitHub/BigBucket: No<br><br>
                Websites/Blog: No 
        
            

            <address>
                    <p>Email:<a href=" mailto:imrankoo@hotmail.com"> imrankoo@hotmail.com </a></p>
                    <p>Address: Bosanska110, Travnik</p>
                </address>

</div>

            </div>
            <div class="column">
                
    <figure>
   <p> <img src="imroo.jpg" alt="Picture of Imran Dautović" title="Imran Dautović" /> </p>
     
    </figure>
            </div>
          </div>
  




<div id="work">
    <h2 onmouseover="style.color='green'" onmouseout="style.color='black'">WORK EXPERIENCE</h2>

    <blockquote>
        <p>
            <div>
                During my life I didn`t have any experience which is related to programming or some other work with <ins>computers</ins> at all.<br />
                My first meeting with programming was at college during my studies. <br />
                In the other hand I just want to mention that I was working as a driver of people who are comming from Middle East.<br /> <dfn>
                    Middle East - the Middle East is a transcontinental region centered on Western Asia, Turkey (both Asian and European), and Egypt (which is mostly in North Africa).
                    <br />Saudi Arabia is geographically the largest Middle Eastern nation while Bahrain is the smallest.
                </dfn> <br />
                I was in need of it because of earning money for my scholarship. It`s all about my 24 life work experience.
            </div>
        </p>

    </blockquote>
</div>

    <div id="edu">
        <h2 onmouseover="style.color='green'" onmouseout="style.color='black'">EDUCATION</h2>

    <blockquote>
        <p>
            <div>
                I`m studing at <a href="http://www.ius.edu.ba"> International University of Sarajevo ( IUS ) </a> – Faculty of Engineering and Natural Sciences ( Computer Science and Engineering – CS ).<br />
                I`m not graduate this year, I hope next year I will graduate. <br />
                I have still one more year to go on.<br />
                I graduated from high school in 2014 in my hometown Travnik.<br />
                I graduated as a student of <a href="http://medresa.edu.ba/">Elči-Ibrahim pašina medresa.</a> It was a beautiful experience to be a part of that school.<br />
                Its not just educational school, its more about upbringing school.
            </div>
        </p>
    </blockquote>
</div>

  <div id="project">
      <h2 onmouseover="style.color='green'" onmouseout="style.color='black'">PROJECTS</h2>
    <blockquote>
        <p>
            <div>
                I wish always to work some real things about programming but my knowledge is not on that level.<br />
                I couldn`t make any project that is enough good ( don`t mean small or big ) to implement it on Github or some similar sites for sharing code.<br />
                Now on this Web Application Development course I will give my best to gain knowledge so that I have some serious projects to implement.
            </div>
        </p>
    </blockquote>   
  </div>

   

<div id="skils">
    <H2 onmouseover="style.color='green'" onmouseout="style.color='black'">SKILL AND EXPERTISE</H2>


    <blockquote>
        <p>
            <div>
                At college we were learning or studing programming languages like C, C++, Java, C# with ASP.NET framework using <acronym title="Model-View-Controller ">MVC</acronym> pattern. <br />
                To be honest I`m not expertise in any of these languages which I enlisted. <br />
                We just covered basic things about it.<br />
                I would like to work (learn how to work) as a developer. <br />
                I had that desire from before but I didn`t have a chance to start doing it. <br />
                I never did anything about development so I have to start doing it from scratch.<br />
                Now I have chance that I won`t miss during this semester to learn <acronym title="HyperText Markup Language"> HTML </acronym>, <acronym title="Cascading Style Sheets">CSS</acronym>, JavaScript, so I will have good background to start working.<br />
                I hope with our <abbr title="Professor">Prof</abbr> Ali Abd Almisreb we will gain much more powerful knowledge then we used to get until now.
                We are using a book an <cite>HTML & CSS: Design and Build Web Sites </cite> by Jon Duckett.
            </div>
        </p>

    </blockquote>

</div>

    <p>For more information about me you can insert your data so we can get closer</p>

      

    <form action="includes/signup.inc.php" method="POST"  > 
        <p style="color:black; font-weight:bold; font-size:20px;">Name:</p>
        <input type="text" name="first" placholder="Firstname">
        <p style="color:black; font-weight:bold; font-size:20px;">Surname:</p>
        <input type="text" name="last" placholder="Lastname">
        <p style="color:black; font-weight:bold; font-size:20px;">Email:</p>
        <input type="text" name="email" placholder="E-mail">
        <p style="color:black; font-weight:bold; font-size:20px;">Username:<p>
        <input type="text" name="uid" placholder="Username">
        <p style="color:black; font-weight:bold; font-size:20px;">Password:</p>
        <input type="password" name="pwd" placholder="Password">
        <br>
        <button type="submit" name="submit"> Sign up </button>
    </form>

    



</body>
</html>