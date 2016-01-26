<?php
    if(Token::check(Input::get('token'))){

        if(Input::get('login')){//DAYA HAY PARA SA LOGIN
            $validation = $validate->check($_POST, array(
                'username' => array(
                    'required' => true
                    ),
                'password' => array(
                    'required' => true
                    )
                ));

            if($validation->passed()){
                $remember = (Input::get('remember') === 'on') ? true : false;
                $login = $user->login(Input::get('username'), Input::get('password'), $remember);

                if($login){
                    Redirect::to(Config::get('svrInfo/site_url') . 'index.php');//dapat mag rekta sa ana user profile page
                }//else {
                 //echo "Sorry, Incorrect username or password.";
                     // Session::flash('home', 'Sorry, Incorrect username or password.');
                //}
            }else{
                foreach ($validation->errors() as $error) {
                    echo $error, "<br>";
                }
            }

        }elseif(Input::get('registration')) {//DAYA HAY PARA SA REGISTRATION
            $autoRenew = 0;


            if(empty($_POST['planType'])){
                $validate->addError('Please select plan Type');
            }
            if(empty($_POST['chk_tbl'])){
                $validate->addError('Make sure you checked and understand the table of savings.');
            }
            if(empty($_POST['chk_tc'])){
                $validate->addError('Make sure you checked and understand the Terms & Conditions.');
            }
            if(!empty($_POST['autoRenew'])){
                $autoRenew = Input::get('autoRenew');
            }

            $plan =  $_db->get('membershipplans', array('planType','=',Input::get('planType')));
            $credits = intval($plan->first()->planCredits);//<<may saea kara
            //kung mag blanko du plan hay gapili imaw it owa sa database

            $validation = $validate->check($_POST, array(
                'fname' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50
                    ),
                'lname' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50
                    ),
                'email' => array(
                    'required' => true,
                    'email' => true,
                    'unique' => 'members_tbl'
                    ),
                'username' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 30,
                    'unique' => 'members_tbl',//table name here
                    'alphanumeric' => true
                ),
                'password' =>array(
                    'required' => true,
                    'min' => 6
                    ),
                'password_again' => array(
                    'required' => true,
                    'matches' => 'password'
                    ),
                'country' => array(
                    'required' => true
                    )

                ));

            if($validation->passed()){
                $salt = Hash::salt(32);
                // $transCode = md5('username' + microtime());

                try{
                    $user->create(array(
                        'fname' => Input::get('fname'),
                        'lname' => Input::get('lname'),
                        'username' => Input::get('username'),
                        'password' => Hash::make(Input::get('password'), $salt),
                        'email' => urldecode(Input::get('email')),
                        'joinedDate' => date('Y-m-d H:i:s'),
                        'credits' => $credits,
                        'planType' => Input::get('planType'),
                        'autoRenew' => $autoRenew,
                        'salt' => $salt,
                        'grp' => 0,
                        // 'transStatus' => 'pending',
                        'country' => Input::get('country')
                        ));

                    $lastInsertId = $_db->lastInsertedId();

                    $_db->insert('survey_tbl', array(
                        'transacID'         =>$lastInsertId,
                        'dramaDepSchool'    =>Input::get('dramaDepSchool'),
                        'actor'             =>Input::get('actor'),
                        'director'          =>Input::get('director'),
                        'highSchool'        =>Input::get('highSchool'),
                        'uniCol'            =>Input::get('uniCol'),
                        'academic'          =>Input::get('academic'),
                        'other'             =>Input::get('other'),
                        'agebrack'          =>Input::get('agebrack'),
                        'internet'          =>Input::get('internet'),
                        'advertisement'     =>Input::get('advertisement'),
                        'talk'              =>Input::get('talk'),
                        'work'              =>Input::get('work'),
                        'mouth'             =>Input::get('mouth'),
                        'news'              =>Input::get('news')
                        ));
                    $postUrl = Payment::postPayment(Input::get('planType'), $lastInsertId);
                    Redirect::to($postUrl);

                }catch(Exception $e){
                    //redirect to failed page
                    Redirect::to(404);
                    die($e->getMessage());
                }
            }else {
                // print_r($validation->errors());
                foreach ($validation->errors() as $error) {
                    echo $error, '<br>';
                }
            }

        }elseif(Input::get('newsletter')){//daya hay sa newsletter

            $validation = $validate->check($_POST, array(
                'news_name' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 30,
                    'unique' => 'newsSubscriber_tbl',
                    'alphanumeric' => true
                    ),
                'news_email' => array(
                    'required' => true,
                    'email' => true,
                    'unique' => 'newsSubscriber_tbl'
                    )
                ));

            if($validation->passed()){
                //update newsSubscriber_tbl

                $_db->insert('newsSubscriber_tbl', array(
                    'news_name' => Input::get('news_name'),
                    'news_email' => Input::get('news_email')
                    ));

                Session::flash('home', 'Thank you for subscribing.');
                Redirect::to('index.php');
            }else{
                foreach ($validation->errors() as $error) {
                    echo $error, "<br>";
                }
            }

        }elseif(Input::get('advertise')){//daya hay sa newsletter

            $validation = $validate->check($_POST, array(
                'adsname' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 30,
                    'alphanumeric' => true
                    ),
                'orgname' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 50,
                    'alphanumeric' => true
                    ),
                'country' => array(
                    'required' => true
                    ),
                'contact' => array(
                    'required' => true,
                    'min' => 2,
                    'max' => 20,
                    'numeric' => true
                    ),
                ));

            if($validation->passed()){
                //update newsSubscriber_tbl

                $to = "advertise@versebuster.com";
                $subject = "You have a message sent from your site"; 

                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                $fields = array(); 
                $fields{"adsname"} = "adsname"; 
                $fields{"orgname"} = "orgname"; 
                $fields{"country"} = "country"; 
                $fields{"contact"} = "contact"; 
                $fields{"fax"} = "fax"; 
                $fields{"skype"} = "skype"; 
                $fields{"message"} = "message";
                // More headers
                $headers .= 'From: <advertise@versebuster.com>' . "\r\n";

                $body = "Here is what was sent:\n\n  <br>"; 
                    foreach($fields as $a => $b){   
                        $body .= sprintf("%20s: %s\n <br>",$b,$_REQUEST[$a]); 
                    }

                mail($to,$subject,$body,$headers);

                Session::flash('home', 'We will notify you soon. Thank you.');
                Redirect::to('index.php');
            }else{
                foreach ($validation->errors() as $error) {
                    echo $error, "<br>";
                }
            }
        }
    }
?>