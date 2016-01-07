
<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="inputType">Type</label>
    <div class="controls">
      <input type="text" id="inputType" placeholder="Type">
    </div>
  </div>
</form>



  ====================


<form id="accountCreation_form" class="form-horizontal" role="form">

   <h2>Sign Up</h2>
   <h3 class="selectModule">
      <span class="step">Step <span>One</span></span>
      <span class="title">Enter personal information</span>
      <span class="linkPolicy">Your information will be used in accordance with our <a href="#" target="_blank" title="Privacy Policy" style="color:#B00071; text-decoration:none">Privacy Policy</a></span>
   </h3>
   <div class="content">
      <div class="intro">
         <h4>Enter your details below</h4>
         <p>*required field</p>
      </div>
      

         <div class="field form-group title">
            <label for="title">Title <span class="mandatory">*</span> </label>
            <div class="styled-select title titleIcon">
               <select name="title" id="title" class="validated" style="width:100%">
                  <option disabled="disabled" selected="selected" label="Title" value="">Title</option>
                  <option value="Mr">Mr</option><option value="Mrs">Mrs</option><option value="Miss">Miss</option><option value="Ms">Ms</option>
                  <option value="other">Other</option>
               </select>
            </div>
            <span class="validity-icon is-valid" tabindex="-1"></span>
         </div>

         <div class="field form-group firstname">
            <label for="firstName">First Name <span class="mandatory">*</span> </label>
            <input type="text" id="firstName" name="firstName" class="validated detailsIcon" autocomplete="off" placeholder="Letters only" data-format="" data-label="First Name" data-required="true"/>
            <!-- <span class="validity-icon is-valid" tabindex="-1"></span> -->
         </div>
         <div class="field form-group lastname">
            <label for="lastName">Last Name <span class="mandatory">*</span> </label>
            <input type="text" id="lastName" name="lastName" class="validated nameIcon" autocomplete="off" placeholder="Letters only" data-format=""data-label="Last Name" data-required="true"/>
            <!-- <span class="validity-icon is-valid" tabindex="-1"></span> -->
         </div>
         <div class="field form-group email">
            <label for="email">Email address <span class="mandatory">*</span> </label>
            <input type="email" id="email" name="email" class="validated emailIcon"  autocomplete="off" placeholder="email@example.co.uk" data-format="" data-label="Email address" data-required="true" maxlength=""/>
            <!-- <p class="help">Type carefully - you'll need to use this email address to login into your Times/Sunday Times account</p> -->
         </div>
         <div class="field form-group confirmEmail">
            <label for="confirmEmail">Confirm email address <span class="mandatory">*</span> </label>
            <input type="email" id="confirmEmail" name="confirmEmail" class="validated emailIcon" autocomplete="off" placeholder="email@example.co.uk" data-format="" data-label="Confirm email address" data-required="true" maxlength="80"/>
         </div>
         <div class="field form-group password">
            <label for="password">Password <span class="mandatory">*</span> </label>
            <input type="password" id="password" name="password" class="validated passwordIcon"  autocomplete="off" placeholder="6 - 20 characters" data-format="" data-label="Password" data-required="true" maxlength="20" minlength="6" />
            <span class="validity-icon is-valid" tabindex="-1"></span>
            <p class="help">Please enter a password between 6 and 20 characters</p>
         </div>
         <div class="field form-group confirm-password">
            <label for="confirmPassword">Confirm password
               <span class="mandatory">*</span>
            </label>
            <input type="password" id="confirmPassword" name="confirmPassword" class="validated passwordIcon" autocomplete="off"placeholder="6 - 20 characters"data-format=""data-label="Confirm password"data-required="true"maxlength="20"minlength="6" /> <span class="validity-icon is-valid" tabindex="-1"></span>
         </div>
         <div class="field dob">
            <p class="label" for="dateOfBirthDay">Date of birth
               <span class="mandatory">*</span>
               <div class="field form-group day styled-select">
                  <label for="dateOfBirthDay" class="visuallyhidden">Day</label>
                  <select name="dateOfBirthDay" id="dateOfBirthDay" class="dateOfBirthComponent dateOfBirthDay">
                  </select>
               </div>
               <div class="field form-group month styled-select">
                  <label for="dateOfBirthMonth" class="visuallyhidden">Month</label>
                  <select name="dateOfBirthMonth" id="dateOfBirthMonth" class="dateOfBirthComponent dateOfBirthMonth">
                  </select>
               </div>
               <div class="field form-group year styled-select">
                  <label for="dateOfBirthYear" class="visuallyhidden">Year</label>
                  <select name="dateOfBirthYear" id="dateOfBirthYear" class="dateOfBirthComponent dateOfBirthYear">
                  </select>
               </div>
               <label for="dateOfBirth" class="hidden-element">Date of Birth</label>
               <input type="hidden" name="dateOfBirth" class="dateOfBirthHiddenField form-group validated" id="dateOfBirth"/>
               <span class="validity-icon is-valid"></span>
            </div>
            <div class="field form-group phone">
               <label for="phone">Phone number </label>
               <input type="text" id="phone" name="phone" class="validated phoneIcon phone-formatter"placeholder="xxxx xxxxxx"data-format=""data-label="Phone number"data-required="false"/> <span class="validity-icon is-valid" tabindex="-1"></span>
            </div>
            <div class="field form-group screen-name">
               <label for="screenName">Screen Name</label>
               <input type="text" maxlength="100" id="screenName" name="screenName detailsIcon" class="validated" autocomplete="off"placeholder=""data-format=""data-label="Screen Name"data-required=""/> </div>
         
         <div class="buttonHolder"><button id="accountCreationButton" type="submit" class="button">Continue to Payment Information</button></div>
      </div>
   </form>