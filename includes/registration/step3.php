	<div class="row setup-content" id="step-2">
	    <div class="col-lg-12">
			<div class="col-lg-12 well">
			    <h1 class="text-center">Step 2</h1>
	    <!--	add tabel here	-->
			    <div class="col-lg-4 col-sm-6">
	    
				    <fieldset>
						<legend>I am a / an</legend>
						
						<!-- Inputs Radios -->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="radios">Drama Dept / Drama School</label>
						    <div class="col-sm-6">
							<!--Drama department-->
							<div class="radio">
							    <label for="dramaDepSchool"><input name="dramaDepSchool" id="drama-stud" value="student" type="radio">Student</label>
							</div>
							<div class="radio">
							    <label for="dramaDepSchool"><input name="dramaDepSchool" id="drama-tech" value="teacher" type="radio">Teacher/Coach</label>
							</div>
							
							<!--actor-->
							<div class="checkbox">
							    <label for="actor"><input name="actor" id="actor" value="1" type="checkbox">Actor</label>
							</div>
							
							<!--director-->
							<div class="checkbox">
							    <label for="director"><input name="director" id="director" value="1" type="checkbox">Director</label>
							</div>
							
						
						    </div>
						</div>
			
						<!--highschool department-->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="radios">High School</label>
						    <div class="col-sm-6">
							<div class="radio">
							    <label for="highSchool"><input name="highSchool" id="high-stud" value="student" type="radio">Student</label>
							</div>
							<div class="radio">
							    <label for="highSchool"><input name="highSchool" id="high-tech" value="teacher" type="radio">Teacher/Coach</label>
							</div>	
						    </div>
						</div>
						
						<!--University / College-->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="uniCol">University / College</label>
						    <div class="col-sm-6">
							<div class="radio">
							    <label for="uniCol"><input name="uniCol" id="university" value="student" type="radio">Student</label>
							</div>
							<div class="radio">
							    <label for="uniCol"><input name="uniCol" id="college" value="professor" type="radio">Professor</label>
							</div>
							
							<!--Academic-->
							<div class="checkbox">
							    <label for="academic"><input name="academic" id="acad" value="1" type="checkbox">Academic</label>
							</div>
							<!--actor-->
							<div class="checkbox">
							    <label for="other"><input name="other" id="other" value="1" type="checkbox">Other</label>
							</div>
							    <input id="other" name="other" placeholder="Please specify" class="form-control input-md" type="text">
						    </div>
						</div>			
					</fieldset>
			    </div>
			    
			    <!--AGE BRACET		-->
			    <div class="col-lg-4 col-sm-6">
				    <fieldset>
						<legend>Age Bracket</legend>
						<!-- Inputs Radios -->
						<div class="form-group">
						    <label class="col-sm-4 control-label" for="uniCol"></label>
						    <div class="col-sm-6">
							<!--age bracket-->
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="under18" value="under18" type="radio">Under 18</label>
								</div>
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="eight21" value="eight21" type="radio">18-21</label>
								</div>
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="twenty25" value="twenty25" type="radio">22-25</label>
								</div>
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="twenty34" value="twenty34" type="radio"> 26-34</label>
								</div>
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="twenty49" value="thirty49" type="radio">35-49</label>
								</div>
								<div class="radio">
								    <label for="agebrack"><input name="agebrack" id="fiftyplus" value="fiftyplus" type="radio">50+</label>
								</div>
						    </div>
						</div>
				    </fieldset>
			    </div>
			    <div class="col-lg-4 col-sm-6">
				    <fieldset>
						<legend>How did you hear about us?</legend>
					
						<!-- Inputs Radios -->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="radios"> </label>
						    <div class="col-sm-6">
							<div class="checkbox">
							    <label for="internet"><input name="internet" id="intserch" value="1" type="checkbox">Internet search</label>
							</div>
						    </div>
						</div>
						<!-- Advertisement Radios -->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="radios">Advertisement </label>
						    <div class="col-sm-6">
							<div class="radio">
							    <label for="advertisement"><input name="advertisement" id="online" value="online" type="radio">Online</label>
							</div>
							<div class="radio">
							    <label for="advertisement"><input name="advertisement" id="printed" value="printed" type="radio">Printed</label>
							</div>
						    </div>
						</div>
	    
						<!-- A Versebuster  Radios -->
						<div class="form-group">
						    <label class="col-sm-6 control-label" for="radios">A Versebuster </label>
						    <div class="col-sm-6">
							<div class="checkbox">
							    <label for="talk"><input name="talk" id="talk" value="1" type="checkbox">Talk</label>
							</div>
							<div class="checkbox">
							    <label for="work"><input name="work" id="work" value="1" type="checkbox">Workshop</label>
							</div>
							<div class="checkbox">
							    <label for="mouth"><input name="mouth" id="wom" value="1" type="checkbox">Word of mouth</label>
							</div>
							<div class="checkbox">
							    <label for="news"><input name="news" id="newa" value="1" type="checkbox">News article</label>
							</div>					    
						    </div>
						</div>				    
					
				    </fieldset>
			    </div>
			    
			    <!-- Button (Double) -->
			    <div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
					    <div class="pull-right">
							<div class="col-lg-12">
								<input id="activate-step-3" type="button" value='Proceed to Step 3' class="btn btn-primary btn-lg"/>
<!-- <input id="activate-step-4" type="submit" value='Finish!' name='registration' class="btn btn-primary btn-lg "/> -->
							    <!-- <input type='image' name='paypal_submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Pay with PayPal'/> -->
							    
							</div>
					    </div>
					</div>
			    </div>
			    <!--Button (Double)-->
	    <!--	end add table here	-->
			</div>
	    </div>
	</div>