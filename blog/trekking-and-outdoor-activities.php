<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Blog | VIT Trekking CLub</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel=icon href="../images/favicon.png ">
	<meta name='viewport' content="width=device-width, height=device-height, initial-scale=1">
	<meta charset="utf-8" />
	<meta property="op:markup_version" content="v1.0">
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Trekking and Outdoor Activities as a way of Life" />
  	<meta property="og:image" content="../images/trekking-and-outdoor.jpg" />
</head>
<body>
	<?php	include ("header.php");	?>
	<div id="virt" style="background-color: #eaeaea; font-family: rob;">
		<div id="blog-wrap">
			<div id="blog-image" style="padding-left: 0;"><img src="../images/trekking-and-outdoor.jpg"></div>
				<div class="blog" style="margin-bottom: 0; height: initial;">
					<div class="blog-image" id="heading">
						<h1>Trekking and Outdoor Activities as a way of Life</h1>
						<div style="height: 5px; width: 100px; background: #FF4081; border-radius: 2px;"></div><br><br>
					</div>
					<div class="blog-title" id="para">
						<h2 style="font-family: rob;">A healthy lifestyle not only changes your body, it changes your mind and your attitude. One of the activities which lead to a healthy and better lifestyle is trekking.</h2>
						<p style="text-align: justify;">All life is an experiment. The more experiments a person takes part in, the better it is. The urge to test one’s physical endurance, discover the unknown territories, understand the fragility of mountain ecology, study the existence of flora and fauna at all altitudes and learning about distinct geography is what drives people towards trekking. The scope of discovering the many hidden secrets of Nature in a fun-filled environment makes trekking no less than a crash course of Nature itself. Trekking is an activity that challenges the physical as well as the mental aspects of an adventure fanatic. This adventure activity offers an amazing adrenaline rush and also leads to some permanent benefits. One of the major benefits of trekking is that it leads to a whole-body workout that helps in improving the human health significantly. It is an activity that continuously tests strength (particularly of the legs) of individuals. During trekking, the body is constantly on the move due to which the muscles get stretched, like when a trekker tries to cross a lake or climb a rock. When trekkers heads home after completing their trekking expedition, they carry along a newfound energy and peace of mind. Many people from different parts of the world carry out trekking expeditions just to get away from the troubles of day-to-day life and to give themselves a much-needed break and what better way to achieve spiritual fulfillment? Trekking is a proven solution for reducing stress while at the same time having an amusing time. It is indeed a great outdoor activity that offers a wonderful opportunity to the adventure lovers to feel refreshed and knock out their negative thoughts. During the trekking expedition, a person gets many opportunities to marvel at the enchanting vistas of nature and it helps in erasing many of their worries.<br><br>It cannot be denied that trekking requires great stamina since it involves physical tasks like crossing rugged terrains, bridges, climbing high mountain peaks and so on. Trekking in the Indian sub-continent is invariably an unforgettable and pleasurable experience. According to several physicians and health experts, trekking, besides being an adventure activity can also be considered as a very good exercise to build muscles of the arms and legs. That is not all, as the continuous walking over long periods of time helps in minimizing blood pressure and reduces the pain in the joints. Forget the caffeine. Those looking for a brainpower boost need not look further than the closest trail. Research shows that spending time outdoors increases attention spans and creative problem-solving skills by as much as 50 percent.<br><br>Hitting the trail works your body out as much as it does your brain. Just one hour of trekking can burn well over 500 calories, depending on the level of the incline and the weight of the pack you're carrying. Hiking is a great way to get a serious workout without putting too much pressure on your joints. Trekking is a great bet for those who wish to keep their hearts healthy and agile. While trekking, a person climbs up and down which makes the heart pump blood vigorously and builds cardiac muscles.<br><br>Time spent in outdoor recreation leads to a range of benefits, from reduced obesity rates to strengthened family ties. Along with an increase in physical activity, outdoor recreation offers the chance to socialize, an important benefit in itself. For instance, bird watching incorporates several activities, including the physical movement of walking, interpreting visual and auditory input, and speaking to other birdwatchers. Outdoor activities lead to an increased confidence, improved creativity and better self-esteem.<br><br>Natural settings rejuvenate and calm the mind, improves outlook and increases positivity. In contrast, artificial environments may cause feelings of exhaustion, irritability, inattentiveness and impulsivity. Both physical activity and outdoor settings reduce stress, anxiety and depression. Spending time exercising in a park leads to an increase in positive moods and a reduction in cortisol levels, a hormone released when the body feels stress. Similarly, increased access to green space for activities such as walking decreases stress.<br><br>Hiking is a bit like life- The journey only requires the person to put one foot in front of the other, again and again and again. And if the person allows oneself the opportunity to be present throughout the entirety of the trek, then beauty at every step of the way shall be witnessed and not just at the summit. A person should do more than just exist and the outdoor activities particularly trekking is one of the best way to do so.</p><br><br>
						<button id="shareBtn" class="btn btn-success clearfix">Share</button>
					</div>
				</div>
		</div>
		<?php	include ("footer.php");	?>
	</div>
	
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script type="text/javascript" src=../scripts/script.js></script>
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '131721800887367',
	      xfbml      : true,
	      version    : 'v2.10'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){	
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	  document.getElementById('shareBtn').onclick = function() {
	  FB.ui({
	    method: 'share',
	    display: 'popup',
	    href: 'http://vittrekkingclub.co.in/blog/trekking-and-outdoor-activities.html',
	  }, function(response){});
	}
	</script>