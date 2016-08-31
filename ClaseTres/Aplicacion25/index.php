<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <title>Aplicacion 25</title>
        
        <link rel="stylesheet" type="text/css" href="styles.css" />
        
    </head>
    
    <body>

    	<div class="section" id="page"> <!-- Defining the #page section with the section tag -->
    
            
            <div class="section" id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
                
                <div class="article" id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <h2>Ingrese los datos</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                        <form method="POST">
                            Base: <input type="text" name="rBase">
                            Altura: <input type="text" name="rAltura">
                            <input type="submit" value="Calcular">
                        </form>
                        <?php 
                           
                            #var_dump($_REQUEST); /*siempre en mayusculas*/                        
                            #var_dump($_POST);
                             if (isset($_POST['rBase'], $_POST['rAltura']))
                             {
                                $Base=$_REQUEST['rBase'];
                                $Altura=$_REQUEST['rAltura'];
                                $sup=$Altura*$Base;
                                echo "<br><p>La superficie del rectangulo es: ".$sup;
                             }
                            else
                            {
                                echo "<br><p>Primer ingreso";
                            }
                        ?>
                        
                    </div>
                </div>
                
				<!-- Article 1 end -->



			


            </div>

        <div class="footer"> <!-- Marking the footer section -->

          <div class="line"></div>
           
           <p>Aplicacion 25</p> <!-- Change the copyright notice -->
           

           

        </div>
            
		</div> <!-- Closing the #page section -->
        
        <!-- JavaScript Includes -->
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
        <script type="text/javascript" src="jquery.scrollTo-1.4.2/jquery.scrollTo-min.js"></script>
        <script type="text/javascript" src="script.js"></script>
    </body>
</html>
