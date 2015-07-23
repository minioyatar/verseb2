$(document).ready(function(){
console.log('here na me')
	var winheight=parseInt($(window).height());
	var winwidth=parseInt($(window).width());

	
	$('#speakerTest, #speakerTest2').click(function() {
		$("#disclaimer").fadeIn(1000);
		$("#disclaimerlay").attr("style","left:"+((winwidth-530)/2)+"px;top:"+((winheight-360)/2)+"px;");
		lay_title = 'The following message is playing:'
		disclaimer_desc = 'Hi, welcome to Versebuster.  <br/><br/>'
		disclaimer_desc += 'We want to ensure you have the best possible user experience and, since an important part of what we offer is Audio, we just want to make sure you can hear us fine.<br/><br/>'
		disclaimer_desc += 'Headphones, earphones or proper speakers let you appreciate the subtleties and nuance of our Shakespeare recordings best. <br/><br/>'
		disclaimer_desc += 'Thank you. '
		$("#lay_title").html(lay_title)
		$("#disclaimer_desc").html(disclaimer_desc)		
	$("#jquery_jplayer_1").jPlayer("play"); 
	});

	$('#closeSpeakerTest').click(function() {
		$("#jquery_jplayer_1").jPlayer("stop"); 
		$("#disclaimer").fadeOut(1000);
	});
	
	$("#jquery_jplayer_1").jPlayer({
		ready: function () {
		    $(this).jPlayer("setMedia", {
			mp3: "media/track.mp3",
			wav: "media/track.wav",
		    }).jPlayer("pause"); // auto play
		},
		ended: function (event) {
		    $(this).jPlayer("stop");
		},
		swfPath: "swf",
		supplied: "mp3, wav"
	})
    .bind($.jPlayer.event.play, function() { // pause other instances of player when current one play
            $(this).jPlayer("pauseOthers");
    });

    //$("#jquery_jplayer_2").jPlayer({
    //    ready: function () {
    //        $(this).jPlayer("setMedia", {
    //            m4v: "media/tokyo.m4v",
    //            ogv: "media/tokyo.ogv",
    //            poster: "media/poster.jpg"
    //        });
    //    },
    //    ended: function (event) {
    //        $("#jquery_jplayer_2").jPlayer("play", 0);
    //    },
    //    swfPath: "swf",
    //    supplied: "m4v, ogv",
    //    cssSelectorAncestor: "#jp_interface_2"
    //})
    //.bind($.jPlayer.event.play, function() { // pause other instances of player when current one play
    //        $(this).jPlayer("pauseOthers");
    //});

});