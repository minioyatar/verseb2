<?php

require_once('127.0.0.1' == $_SERVER["REMOTE_ADDR"] ?  $_SERVER['DOCUMENT_ROOT'] . "/versebuster/core/init.php" : $_SERVER['DOCUMENT_ROOT'] . "/core/init.php");;
$_db = DB::getInstance();
$user = new User();
$validate = new Validate();
// print_r($_POST);
// echo "string- " . Input::get('pck');

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
                    Redirect::to(SITE_URL_FILE . 'index.php');//dapat mag rekta sa ana user profile page
                }//else {
                 //echo "Sorry, Incorrect username or password.";
                     // Session::flash('home', 'Sorry, Incorrect username or password.');
                //}
            }else{
                $err = '';
                foreach ($validation->errors() as $error) {
                    $err .= $error . "<br>";
                }
                Session::flash('loginError', $err);
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
    // else{
        // Redirect::to(require_once $_SERVER['DOCUMENT_ROOT'] . '/versebuster/index.php');
    // }
?>