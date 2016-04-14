/*
Project Name: versebuster.com
Project Description: A website dedicated to speaking Shakespeare
Project Started: Nov. 2013
Website: versebuster.com
Comments: Sorry for the mess! 
*/
$(document).ready(function() {

//FUNCTIONS   

        //1.  speaker test margin computation
        function setMargins() {
            width = $("#top-main-nav").width();
            speakerholderWidth = $("#speaker-holder").width();
            leftMargin = (width-speakerholderWidth-450)/2;
            $("#speaker-holder").css("left", leftMargin + "px");
        }//1. END

        //2. main nav class state change 
        function getPageName(url) {

            var index = url.lastIndexOf("/") + 1;
            var filenameWithExtension = url.substr(index);
            var filename = filenameWithExtension.split(".")[0]; // 
            console.log(filename)                
            if(filename == ""){
                filename = "index"
            }            
                return filename;                                    // 
        }//2. END

        //3 NEWS 
        $(".news-list").bootstrapNews({
            newsPerPage: 1,
            autoplay: true,
            pauseOnHover: true,
            navigation: true,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
            //console.log(this);
            }
        }); //3 END

        // 4 DEMO BOX HOVER
        function demohoverInOut(boxHit,demoBoxColor){
            if(boxHit == "demo-mp3"){
                imgHoverSet = 'images/hovers/mp3'+ demoBoxColor +'512.png';
            }else if (boxHit == "demo-doc") {
                imgHoverSet = 'images/hovers/doc'+ demoBoxColor +'512.png';
            }else if (boxHit == "demo-pdf"){
                imgHoverSet = 'images/hovers/pdf'+ demoBoxColor +'512.png';
            }          
            return imgHoverSet;  
        }
        // 4 END

        // 5 SCROLL
        function scrollToTop() {
            verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
            element = $('body');
            offset = element.offset();
            offsetTop = offset.top;
            $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
        }
        // 5 END OF SCROLL

        // 6 MODAL WINDOW GET CENTERED
        var discwidth = 0, disheight  = 0, winwidth = 0, winheight = 0;
        function modalGetWidthHeight(){
            $("#disclaimer").fadeIn(1000); // show pop up
            discwidth=parseInt($("#disclaimerlay").width()); //get disclaimerlay width
            disheight=parseInt($("#disclaimerlay").height()); //get disclaimerlay width

            winwidth=parseInt($(window).width()); //get window width
            winheight=parseInt($(window).height()); //get window height

            $("#disclaimerlay").attr("style","left:"+((winwidth-discwidth)/2)+"px;top:"+((winheight-disheight)/2)+"px;"); //COMPUTE WIDTH HEIGHT FOR CENTER POSITIONING         
        }
        // 6 END MODAL WINDOW GET CENTERED 

        //7 randomize for quiz
        function randomizer(high_val){
            return randomnumber=Math.floor(Math.random()*high_val)
            //return(small_val + Math.floor(Math.random() * high_val));
        }
        //7 End randomize

        //8 find generate random for quiz
        /*function generateUniqueNum(numTotal) {
            var uniqueness = false;
            var randomizer_result;
            var qzNo;
            
            
            while(uniqueness == false ){//loop till found a unique number from loaded_questions variable
                
                //2. random number base on the total number of question
                randomizer_result = randomizer(numTotal);
                
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
        }*/
        //8 END find generate random            


//====================END FUNCTIONS==================================

        //1.1 speaker test margin computation
            setMargins();

            $(window).resize(function() {
                setMargins();    

            });
        //1.1  END  

        //2.1 main navigation change active class
            // var urlPath = getPageName(window.location.pathname);
            // $('.' +  urlPath).addClass("sub-menu-active");
            // var str=location.href.toLowerCase();
            
            // $(".navi a").each(function() {
            //     // console.log(this.href.toLowerCase() + "====" + str)
            //     if (str.indexOf(this.href.toLowerCase()) > -1) {
            //         $("li.highlight").removeClass("highlight");
            //         $(this).parent().addClass("highlight");
            //         // console.log("true-----" + str )
            //     }else{
            //         // console.log("false")
            //     }
            // });
    // currentPage = location.pathname.match(/[^\/]+$/)[0];
    // var url = window.location.href;
    // $('.navi a[href*="'+curFilePage+'"]').parent().addClass('highlight');
    // console.log(window.location.href.substr(window.location.href.lastIndexOf("/")+1));
    // var curFilePage = url.substr(url.lastIndexOf('/')+1);

    // var curFilePage = window.location.href.substr(window.location.href.lastIndexOf("/")+1);

    // $('.navi a[href$="'+curFilePage+'"]').parent().addClass('highlight');

    // if(!curFilePage){
    //     $('.navi a[href$="index.php"]').parent().addClass('highlight');
    // }

        //2.1 END main navigation change active class    
    
        /* show/hide side menu #menu-toggle*/
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        /* end #menu-toggle*/

        // READ MORE AND READ LESS
            $('.read-more-content').addClass('contentHider'); /*Hide the extra content initially, using JS so that if JS is disabled, no problemo.*/

            // Set up the toggle.
            $('.read-more-toggle').on('click', function() {
                $(this).next('.read-more-content').slideToggle(2000);
            });

            $('.read-less-toggle').on('click', function() {
                $(this).parent().slideToggle(1000);
            });
        //END READ MORE

        //4.1 DEMO BOX
            $(".demo-box").hover(
                function() {
                    $("img", this).attr('src', demohoverInOut($(this).attr('id'), "-blue-"));
                },
                function() {
                    $("img", this).attr('src', demohoverInOut($(this).attr('id'), "-"));
                }
            )
        //4.1 END DEMO BOX

        // NEWS READ MORE POP UP
            $("#news-titles").on('click','.news-more',function(){
                modalGetWidthHeight();
                lay_title = 'NEWS' // set title
                disclaimer_desc = $(this).next().html() //get content of full news includes html tags inside
                $("#lay_title").html(lay_title)
                $("#disclaimer_desc").html(disclaimer_desc)
            })
        // END OF NEWS READ MORE POP UP

        // mirko ilic show info
            $('#mirko').on('click',function(event) {
                event.preventDefault();
                modalGetWidthHeight();
                $("#lay_title").html('Mirko Ilić Corp') // set title
                $("#disclaimer_desc").html("Jelly jelly-o bonbon candy canes unerdwear.com sweet roll chupa chups oat cake. Jelly-o muffin soufflé oat cake marzipan oat cake topping gummies. Liquorice powder pastry toffee dessert carrot cake soufflé cheesecake gummi bears."); //get content of full news includes html tags inside
            });            
        // end of mirko ilic show info

        //CLOSE MODAL WINDOW
            $('#closePopUp').click(function() {
                $("#disclaimer").fadeOut(1000);
            });
        //END CLOSED MODAL WINDOW
            
        //5.1 SCROLL TOP
            $(document).on( 'scroll', function(){
         
                if ($(window).scrollTop() > 100) {
                    $('.scroll-top-wrapper').addClass('show');
                } else {
                    $('.scroll-top-wrapper').removeClass('show');
                }
            });
         
            $('.scroll-top-wrapper').on('click', scrollToTop);
        //5.1 END OF SCROLL TOP

        //6.0 ACCORDION
            var icons = {
                  header: "ui-icon-circle-arrow-e",
                  activeHeader: "ui-icon-circle-arrow-s"
                };
            $( "#accordion" ).accordion({
                icons: icons,
                heightStyle: "content"  
            });
            $( "#toggle" ).button().click(function() {
                if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                    $( "#accordion" ).accordion( "option", "icons", null );
                } else {
                    $( "#accordion" ).accordion( "option", "icons", icons );
                }
            });
        //6.0 END OF ACCORDION



/*<!-- 6 STEP WIZARD (WORKING)"-->*/    
    var navListItems = $('ul.setup-panel li a'),
        allWells = $('.setup-content');

    allWells.hide();

    navListItems.click(function(e)
    {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this).closest('li');
        
        if (!$item.hasClass('disabled')) {
            navListItems.closest('li').removeClass('active');
            $item.addClass('active');
            allWells.hide();
            $target.show();
        }
    });
    
    $('ul.setup-panel li.active a').trigger('click');
    
    $('#activate-step-2').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
        //$(this).remove();
    })
    
    $('#activate-step-3').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
        //$(this).remove();
    })

    $('#activate-step-4').on('click', function(e) {
        $('ul.setup-panel li:eq(3)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
        //$(this).remove();
    })
/*<!-- 6 STEP WIZARD (WORKING)"-->*/





    //DISABLING RIGHT CLICK FUNCTIONS
/*
        var tenth = ''; 
             
        function ninth() { 
            if (document.all) { 
                (tenth); 
                alert("Right Click Disable"); 
             return false; 
           } 
         } 
         
        function twelfth(e) { 
            if (document.layers || (document.getElementById && !document.all)) { 
                if (e.which == 2 || e.which == 3) { 
                    (tenth); 
                return false; 
                } 
            } 
        } 
        if (document.layers) { 
            document.captureEvents(Event.MOUSEDOWN); 
            document.onmousedown = twelfth; 
        }else { 
            document.onmouseup = twelfth; 
            document.oncontextmenu = ninth; 
        } 
            document.oncontextmenu = new Function('alert("Right Click Disable"); return false') 
*/
    //END RIGHT CLICK FUNCTIONS -->

    //Text Select Disable -->
/*
        //Disable select-text script (IE4+, NS6+)  
             
        function disableselect(e) { 
            return false 
        }
         
        function reEnable() { 
            return true 
        } 
         //if IE4+  
        document.onselectstart = new Function("return false") 
        //if NS6  
        if (window.sidebar) { 
            // document.onmousedown = disableselect 
            document.onclick = reEnable 
        } 
*/
    //END DISABLING RIGHT CLICK FUNCTIONS



// RESERVED AJAX CALL
/*
var quizQuestion = [];
    // $('#run_quiz_btn').on('click',function(event) {
        $.ajax({
                type: "POST",
                url: "/data/questions.json",
                dataType: "json",
                success: function(data){
                    var numberOfElements = data.quiz.length -1;

                    // generateUniqueNum(numberOfElements)

                    $.each(data.quiz,function(key,val){
                        quizQuestion.push({
                            // as: val["answer"],
                            // av: val["question"]
                        })

                    })
               },
                error: function(jqXHR, exception) {
                    if (jqXHR.status === 0) {
                        console.log('Not connect.\n Verify Network.');
                    } else if (jqXHR.status == 404) {
                        console.log('Requested page not found. [404]');
                    } else if (jqXHR.status == 500) {
                        console.log('Internal Server Error [500].');
                    } else if (exception === 'parsererror') {
                        console.log('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        console.log('Time out error.');
                    } else if (exception === 'abort') {
                        console.log('Ajax request aborted.');
                    } else {
                        console.log('Uncaught Error.\n' + jqXHR.responseText);
                    }
                },complete:function(data){
                    // console.log(quizQuestion)
                }
        });
    // })
*/



});/*END document.ready functions*/  


