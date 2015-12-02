
$(document).ready(function(){
    var max_quiz_items;
    var allow_quiz;
    var quizPath;
    //set config
    $.ajax({
        type: "POST",
        url: "/versebuster2/quiz/quiz_admin/data_config/config.json",
        dataType: "json",
        success: function(dataConfig){
                allow_quiz = dataConfig.allow_quiz
                max_quiz_items = dataConfig.quizItems
                quizPath = dataConfig.quizPath
        },complete:function(data){
            //check configuration file if quiz is enable or disabled
            if (allow_quiz ? "true" : "false" == "false") {
                $('#run_quiz_btn').attr('id','x').css("cursor","default").html('Quiz not available at the moment. Thank you.');
            }
        }
    });
    
    $('#fun-btn').on('click', function(e) {
        quizModule.clearArray();
        uploadQuiz(quizPath,'f');        
    })
    $('#main-btn').on('click', function(e) {
        quizModule.clearArray();
        uploadQuiz(quizPath,'m');        
    })    
    $('#pros-btn').on('click', function(e) {
        quizModule.clearArray();
        uploadQuiz(quizPath,'p');  
    })    
    $('#nextQ').on('click', function(e){
    quizModule.nextQuestion();
    })//next question

    function uploadQuiz(jsonpath, qzType) {
        //code
    
        //1. query all question from mysql
        $.ajax({
            type: "POST",
            url: jsonpath,
            data: {qType: qzType},
            dataType: "json",
            success: function(data){
                // console.log(data)
                $.each(data, function(key, val){
                    $.each(val, function(inner_key, inner_value){
                        if (inner_key == "questions") {
                            //load each question to object
                            quizModule.addItem({
                                questionNo: val["questions"]["quiz_id"],
                                question: val["questions"]["quiz_question"],
                                choiceA: val["questions"]["quiz_an1"],
                                choiceB: val["questions"]["quiz_an2"],
                                choiceC: val["questions"]["quiz_an3"],
                                choiceD: val["questions"]["quiz_an4"],
                                correctAnswer: val["questions"]["quiz_ans"],
                            });                        
                        } 
                    })
                })

                quizModule.startQuizShow();
            },complete:function(data){
                    $('#close-btn').css('cursor','pointer').click($.unblockUI);
                    

                    $('body').on('click','#try_again', function() {//enable quiz again
                        quizModule.resetQuiz();
                        quizModule.startQuizShow();
                        $(this).remove();
                    })
            }
        });
    }

            
    var quizModule = (function () {
        // privates
        
        var quiz = [];
        var loaded_questions = new Array();
        var genNum = 0;
        var totalScore = 0;
        
        
        function randomizer(high_val){
            return randomnumber=Math.floor(Math.random()*high_val)
            //return(small_val + Math.floor(Math.random() * high_val));
        }
        
        function generateUniqueNum() {
            var uniqueness = false;
            var randomizer_result;
            var qzNo;
            
            while(uniqueness == false ){//loop till found a unique number from loaded_questions variable
                
                //2. random number base on the total number of question
                if(quizModule.getItemCount() == 1){
                    randomizer_result = 0;
                }else{
                    randomizer_result = randomizer(quizModule.getItemCount());
                }
                
                if (loaded_questions.length == 0) {
                    uniqueness = true;
                }else{
                    //3. get result of number and compare it to previous result
                    $.each( loaded_questions, function( key, value ) {
                        if (randomizer_result == value) {//if equal run random again
                            uniqueness = false;
                        }else{//else not equal
                            uniqueness = true;
                        }
                        return uniqueness; //if false exit this $.each loop if true continue
                    });
                }
                if (uniqueness) {//if reach the end of each with none equal
                    loaded_questions.push(randomizer_result)
                }
            }
            return randomizer_result;
        }
        
        function printQuestion() {
            genNum = generateUniqueNum();
            qzNo = quiz[genNum].questionNo;
            to_post = '<h3>' + quiz[genNum].question + '</h3>';
            to_post += '<h3><input class = "radioBtnClass" type="radio" name="' + qzNo + '" value="' + quiz[genNum].choiceA +'">' + quiz[genNum].choiceA +'</h3>';
            to_post += '<h3><input class = "radioBtnClass" type="radio" name="' + qzNo + '" value="' + quiz[genNum].choiceB +'">' + quiz[genNum].choiceB +'</h3>';
            to_post += '<h3><input class = "radioBtnClass" type="radio" name="' + qzNo + '" value="' + quiz[genNum].choiceC +'">' + quiz[genNum].choiceC +'</h3>';
            to_post += '<h3><input class = "radioBtnClass" type="radio" name="' + qzNo + '" value="' + quiz[genNum].choiceD +'">' + quiz[genNum].choiceD +'</h3>';
            console.log(to_post)
            return to_post;
        }
     
        
        // Return an object exposed to the public
        return {
            // Public alias to a  private function
            
            // Add items to our quiz
            addItem: function( values ) {
              quiz.push(values);
              // console.log(quiz)
            },
            
            // proceed to next question
            nextQuestion: function() {
                choosen = $('input[type="radio"]:checked').val()
                quizModule.checkAnswer(choosen)
                // console.log(loaded_questions.length + " | "+ quiz.length)
                if (loaded_questions.length < quiz.length  ) {//put this variable if you want limit:     max_quiz_items
                    $('#test-container').html(printQuestion())
                    
                }else{
                    
                    $('#nextQ').css('display','none');
                    $('#test-container').html('<h3>Your Total Score is: ' + quizModule.getTotalScore() + '</h3>');
                    $('#footer').html('<input id="try_again" name="try_again" type="button" class="button" value="try again" />')
                }
            },
            
            // Get the count of quiz
            getItemCount: function () {
              return quiz.length;
            },
            
            // Reset quiz
            resetQuiz: function () {
                $('#nextQ').show();
                loaded_questions = [];
                totalScore = 0;
                quiz = [];
            },

            clearArray:function(){
                quiz = [];
            },  
            
            startQuizShow: function(){
                loaded_questions = [];
                totalScore = 0;

                $('#nextQ').show()
                $('#test-container').html(printQuestion())
                $.blockUI({ message: $('#quiz_container') });
                $('#try_again').remove()
            },
            
            // check the answer
            checkAnswer: function ( values ) {
                var correct = false;
                if(quiz[genNum].correctAnswer == values){      
                    correct = true;
                    totalScore++;
                }
                return correct;
            },
            
            // Get the total score
            getTotalScore: function () {
                $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
                return totalScore;
            }
            
            
        };
    })();    



    


})