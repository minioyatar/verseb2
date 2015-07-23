<?php
require_once "includes/db_connections.php";
require_once "includes/functions.php";

?>
<!DOCTYPE html>

<html>
<head>
    <title>Page Title</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <style>

    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logo"></div>
            <div id="menu">
                <ul>
                    <li>Home</li>
                </ul>
            </div>
        </div><!--end of header-->


	<div id="box-containers">                
                <!-- Box -->
                <div class="box box-720">
                        <!-- Box Head -->
                        <div class="box-head">
                                <h2>Edit Question</h2>
                        </div>
                        <!-- End Box Head -->

                        <form action="includes/process_handler.php" method="post" enctype="multipart/form-data">                                
				    <!-- Form -->
                                <div class="form">
				
				    <!--if(isset($_GET['quiz_id'])){-->
					   <!-- Form -->
					   <input value="<?php echo $_GET['quiz_id']?>"  name="question_id" type="hidden"/>
					<div class="form">
						<p>
							<label>Question<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_question']?>"  name="input_question" type="text" class="field size1" />
						</p>
						<p>
							<label>Choice 1<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_an1']?>"  name="input_choice1" type="text" class="field size4" />
						</p>
						<p>
							<label>Choice 2<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_an2']?>" name="input_choice2" type="text" class="field size4" />
						</p>
						<p>
							<label>Choice 3<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_an3']?>"  name="input_choice3" type="text" class="field size4" />
						</p>
						<p>
							<label>Choice 4<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_an4']?>"  name="input_choice4" type="text" class="field size4" />
						</p>
						<p>
							<label>Answer<span>(Required Field)</span></label>
							<input value="<?php echo $_GET['quiz_ans']?>" name="input_ans" type="text" class="field size1"/>
						</p>
					</div>
					    <!-- End Form -->
				    <!--}-->
				
				    </div>
                                    <!-- End Form -->
                                
                                <!-- Form Buttons -->
				    
                                <div class="buttons">
                                        <input type="button" class="button" value="Cancel" onclick="window.location='index.php'"/>
                                        <input name="update_btn" type="submit" class="button" value="Update" />
                                </div>
                                <!-- End Form Buttons -->
                        </form>
						<!-- End Form -->				
                </div>
                <!-- End Box -->  
            
        </div><!--END of CONTENTS-->
        
        <div id="footer"></div><!--end of FOOTER-->
        

    </div>


</body>
</html>
