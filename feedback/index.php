<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback form</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="../footer/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../footer/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../footer/assets/css/styles.css">
    <link rel="stylesheet" href="../footer/assets/css/my-college-footer.css">
</head>

<body>
    <div>
        <img src="../banner.jpg" style="width: 100%">
        <div id="tag-line">
            <h1 id="tag">-: WELCOME TO GCETTB THE FEEDBACK PORTAL :-</h1></div>
        <div id="MRQ">
            <marquee>
            <p id="marquee-text">PLEASE FILL THE ALL FIELDS CORRECTLY. . . . . . . . YOUR FEEDBACK IS VALUABLE FOR US . . . . . . . . . . . . . .THANK YOU</p>
            </marquee>
        </div>
        <hr>
        <p id="atn">|| For GCETTB present student Or Alumni Or Facultiy member please press the GCETTBIAN OPTION... For OTHER Person please press the PUBLIC OPTION ||</p>
        <hr>
        <div id="frm-frame">
            <div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-1" role="tab" data-toggle="tab">GCETTBIAN</a></li>
                    <li><a href="#tab-2" role="tab" data-toggle="tab">PUBLIC </a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab-1">
                        <p id="gcettb-frm">THIS FORM FOR ALL GCETTB PRESNT AND EX MEMBERS&nbsp;</p>
                        <div id="GCETTBIAN">
                            <form method="post" action="gcettbianfeedbackproc.php">
                                <p id="p1">YOUR NAME : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="name" required  maxlength="40">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">YEAR OF PASSING : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="number" max="2020" min="1950"  name="yop" maxlength="4">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">DEPARTMENT : <span style="color: red; background: white;">*</span></p>
                                <select class="form-control" name="dept">
                                    <optgroup label="Department">
                                        <option value="TT">Textile Eng.</option>
                                        <option value="CSE">Computer Eng</option>
                                        <option value="EE">Electrical Eng</option>
                                        <option value="ME">Mechanical Eng</option>
                                        <option value="Faculty">Faculty</option>
                                        <option value="Others">Other</option>
                                    </optgroup>
                                </select>
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">CONTACT NUMBER : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="mob" required maxlength="10">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">EMAIL-ID : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="email" required maxlength="80">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">WORKING ORGANIZATION : </p>
                                <input class="form-control" type="text" name="org" maxlength="150">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">DESIGNATION :</p>
                                <input class="form-control" type="text" name="desig" maxlength="40">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">YOUR ADDRESS : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="address" maxlength="300">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">YOUR COMMENT : <span style="color: red; background: white;">*</span></p>
                                <textarea class="form-control" name="comment"  required maxlength="3000"></textarea>
								<center> <input id="sbmt"  type="submit"></center>
                                <br clear="all">
                                <br clear="all">
                                <hr>
                                
                                
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <p id="public">THIS FORM FOR ALL OTHERS (NON-GCETTBIANS)</p>
                        <div id="publicpp">
                            <form method="post" action="otherfeedbackproc.php">
                                <p id="p1">YOUR NAME : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="name" required maxlength="50">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">CONTACT NUMBER : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="mob" required maxlength="10">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">EMAIL-ID : <span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="email" required maxlength="80">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">WORKING ORGANIZATION : </p>
                                <input class="form-control" type="text" name="org" maxlength="150">
                                <br clear="all">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">YOUR ADDRESS :<span style="color: red; background: white;">*</span></p>
                                <input class="form-control" type="text" name="address"  maxlength="300">
                                <br clear="all">
                                <br clear="all">
                                <p id="p1">YOUR COMMENT : <span style="color: red; background: white;">*</span></p>
                                <textarea class="form-control" name="comment" required maxlength="3000"></textarea>
                                 <center> <input id="sbmt" type="submit"></center>
                                <br clear="all">
                                <br clear="all">
                                <hr>
                               
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript" type="text/javascript">
function limitText(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
		alert("Max Character Reached");
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
}
		</script>
 
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <?php
	include '../footer/footer.php';
	?>