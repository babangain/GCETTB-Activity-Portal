<!DOCTYPE html>
<?php
require 'conn.php';
			$sql="SELECT * FROM recent ";
			$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)) {
	$progno=$row["progno"];
	$title=$row["name"];
	$pic=$row["pic"];
	$cat=$row["cat"];
	$picfinal="$cat"."/"."$progno"."/"."$pic";
	}
			?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GCETTB Activity Portal</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    
</head>

<body>
	<img src="banner.jpg" style="height: auto" width="100%">
   <br>
	<strong><h1 id="wlcm">WELCOME TO GCETTB ACADEMIC & CULTURAL ACTIVITY PORTAL</h1></strong>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="item active"><img src="assets/img/pic1.jpg" alt="Slide Image" height="2000px" width="2000px"></div>
            <div class="item"><img src="assets/img/pic22.jpg" alt="Slide Image" height="2000px" width="2000px"></div>
            <div class="item"><img src="assets/img/pic6.jpg" alt="Slide Image" height="2000px" width="2000px"></div>
            <div class="item"><img src="assets/img/pic7.jpg" alt="Slide Image" height="2000px" width="2000px"></div>
        </div>
        <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
        </ol>
    </div>
    <div id="fott-text">
        <marquee><p>Govt. College of Engineering & Textile Technology Berhampore 4, Cantonment Road, P.O.- Berhampore Dist -Murshidabad, West Bengal,India Pin- 742101 </p></marquee>
    </div>
	<center> <h2 id="list" style="font-family: arial; font-size: 100; margin-bottom: 0;"><font size="+5">LIST OF ACTIVITIES</font> </h2>
   <font size="+3" style="margin-top: 0;">
	   (Category Wise)</font></center>
    <?php
	$i=1;
	$sql="SELECT * from category order by slno";
	$result=mysqli_query($conn,$sql);
	while($row = mysqli_fetch_assoc($result)) {
		$name[$i]=$row["name"];
		$about[$i]=$row["about"];
		$i=$i+1;
		
	}
	
	
	?>
   
    <div id="whole-cat">
        <div id="cat-1" class="cat">
            <div class="jumbotron" id="c1">
            
             
                <?php
					if(isset($name[1])){
					echo "<h2>".strtoupper("$name[1]"). " </h2>";
                echo "<p>".$about[1]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[1]'><font color='blue'><font color='blue'>Click Here For All Programmes</font></font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-2" class="cat">
            <div class="jumbotron" id="c1">
                 <?php
					if(isset($name[2])){
					echo "<h2>".strtoupper("$name[2]"). " </h2>";
                echo "<p>".$about[2]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[2]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-3" class="cat">
            <div class="jumbotron" id="c1">
               <?php
					if(isset($name[3])){
					echo "<h2>".strtoupper("$name[3]"). " </h2>";
                echo "<p>".$about[3]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[3]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-4" class="cat">
            <div class="jumbotron" id="c1">
               <?php
                if(isset($name[4])){
					echo "<h2>".strtoupper("$name[4]"). " </h2>";
                echo "<p>".$about[4]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[4]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-5" class="cat">
            <div class="jumbotron" id="c1">
               <?php
                if(isset($name[5])){
					echo "<h2>".strtoupper("$name[5]"). " </h2>";
                echo "<p>".$about[5]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[5]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        
        <div id="cat-1" class="cat">
            <div class="jumbotron" id="c1">
             
                <?php
					if(isset($name[6])){
					echo "<h2>".strtoupper("$name[6]"). " </h2>";
                echo "<p>".$about[6]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[6]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-2" class="cat">
            <div class="jumbotron" id="c1">
                 <?php
					if(isset($name[7])){
					echo "<h2>".strtoupper("$name[7]"). " </h2>";
                echo "<p>".$about[7]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[7]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-3" class="cat">
            <div class="jumbotron" id="c1">
               <?php
					if(isset($name[8])){
					echo "<h2>".strtoupper("$name[8]"). " </h2>";
                echo "<p>".$about[8]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[8]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-4" class="cat">
            <div class="jumbotron" id="c1">
               <?php
                if(isset($name[9])){
					echo "<h2>".strtoupper("$name[9]"). " </h2>";
                echo "<p>".$about[9]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[9]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
        <div id="cat-5" class="cat">
            <div class="jumbotron" id="c1">
               <?php
                if(isset($name[10])){
					echo "<h2>".strtoupper("$name[10]"). " </h2>";
                echo "<p>".$about[10]."</p>";
                echo "<p><a class='btn btn-default' role='button' href='/list?dept=$name[10]'><font color='blue'>Click Here For All Programmes</font></a></p>";
					}
					?>
            </div>
        </div>
    </div>
   
    <div id="recent-pgr">
        <h2 class="text-center text-warning bg-danger" id="rcnttt">
        
        
        
        <font face="algerian">
        <strong>Recent program</strong>
			</font></h2>
        <div class="jumbotron" id="rcnt"   style='background-image:url(<?php echo "$picfinal";?>) '; >
            <h1 id="rcnth1"><?php echo "$title";
				
				?> 
            </h1>
            <p><a class="btn btn-default" role="button" href='<?php echo "view/?progno=$progno"; ?>'>Read more</a></p>
        </div>
    </div>
    <br>
    <div id="buttons"><a class="btn btn-default" role="button" href="feedback/">Give FeedBack</a><a class="btn btn-default" role="button" href="http://gcettb.ac.in">Goto College Main website</a><a class="btn btn-default" role="button" href="#" target="_top">Go to Top</a></div>
    <br>
    <br>
        <div id="foot">
            <footer>
                <div class="row">
                    <div class="col-md-4 col-sm-6 footer-navigation">
                        <h3><a href="#">GCETTB </a></h3>
                        <p class="links">|| <a href="/">Home</a><strong> || </strong> <a href="http://gcettb.ac.in/about_gcettb">About</a><strong> ||</p>
                    </div>
                    <div class="col-md-4 col-sm-6 footer-contacts">
                        <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                            <p id="clg-"> 4, Cantonment Road, Berhampore, Murshidabad-742101</p>
                        </div>
                        <div><i class="fa fa-phone footer-contacts-icon"></i>
                            <p class="footer-center-info email text-left">03482-250142 </p>
                        </div>
                        <div><i class="fa fa-envelope footer-contacts-icon"></i>
                            <p> gcettbcse@gmail.com</p>
                        </div>
                    </div>
                    <div class="clearfix visible-sm-block"></div>
                    <div class="col-md-4 footer-about">
                        <h4> CONTACT US </h4>
                        <p> Govt. College of Engineering &amp; Textile Technology Berhampore 4, Cantonment Road, P.O.- Berhampore Dist -Murshidabad, West Bengal,India Pin- 742101 Telephone: 03482-250142 Fax: 03482-250142 E-mail: gcettb@gmail.com&nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </p>
                        <hr>
                        <p id="DVLP">Developed By : BABAN GAIN &amp; PURNENDU DAS</p>
                    </div>
                </div>
            </footer>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>