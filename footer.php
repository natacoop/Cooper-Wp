	<!-- CONTACT // -->
	<div id="contact" class="contact">
		<div class="container">
			<div class="formWrap">
				<h2>Get in touch</h2>
				<p>I love building digital things - what can I create for you? Feel free to get in touch with me by using the contact form below.</p>
				<form name="contactForm" method="post" action="send_form_email.php">			 
				<table width="100%">		 
				<tr>			 
				 <td valign="top">			 
				  	<!-- <label for="first_name">Name:</label> -->
				 </td>			 
				 <td valign="top">		
				  <input class="contactInput" type="text" name="first_name" maxlength="50" size="30" placeholder="Name">
				 </td>
				</tr>
				 <td valign="top">
				  <!-- <label for="email">Email Address:</label> -->
				 </td>
				 <td valign="top">
				  <input class="contactInput" type="text" name="email" maxlength="80" size="30" placeholder="Email Address">
				 </td>
				</tr>
				<tr>
				 <td valign="top">
				  <!-- <label for="comments">Message:</label> -->
				 </td>
				 <td valign="top">
				  <textarea class="contactInput" name="comments" maxlength="1000" rows="6" placeholder="Leave a message for me here."></textarea>
				 </td>
				</tr>
				<tr>
				 <td colspan="2" style="text-align:center">			 
				  <input class="submit" type="submit" value="Submit">
				 </td>
				</tr>
				</table>
				</form>
			</div>
			<div class="twitterWrap">
				<a class="twitter-timeline" href="https://twitter.com/natacoops" data-widget-id="489130995887505408">Tweets by @natacoops</a>
			</div>
		</div>
	</div>
	<!-- // CONTACT -->

<!-- :::::: SCRIPTS ETC :::::: -->
<script>
window.onload = function() {
    // Add GifLinks to all anchor tags on the page!
    var element = document.querySelector( '.gifsurprise' );
    GifLinks( element );
}
</script>
	 <!-- Script taken from HTML5 Design - GRINY http://griny.frosenka.ru/ -->
	  <script type="text/javascript">
	  		
	  		function EasyPeasyParallax() {
			var	windowWidth = jQuery(window).width();
			if(windowWidth > 980){
			scrollPos = jQuery(this).scrollTop();
			jQuery('.parallax').not('.no-animate').css({
				'background-position' : '50%' + (-scrollPos/4)+"px"
			});
			var text = jQuery('.text').not('.no-animate');
			text.css({
				'margin-top': (scrollPos/4)+"px",
				'opacity': 1-(scrollPos/250)
			});
			var opacityValue = text.css('opacity');
			if(opacityValue == 0){
				text.hide();
			}else{
				text.show();
			}
			if(navigator.userAgent.match(/(iPhone|iPad|iPod)/i) || jQuery('html').hasClass('touch')) {
				jQuery('.parallax').css({
					'background-attachment' : 'scroll'
				}).addClass('no-animate');
				text.addClass('no-animate');
				jQuery('.logotext').css({
					'position': 'absolute'
				});
				opacityValue = 1;
			}
		}	
	}
		jQuery(document).ready(function(){
			EasyPeasyParallax();
			});
		jQuery(window).scroll(function() {
				EasyPeasyParallax();
			});
	  </script>
	 <!-- //GRINY http://griny.frosenka.ru/ -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>
jQuery(function() {
  jQuery('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = jQuery(this.hash);
      target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>

<!-- EXPAND+COLLAPSE -->
<script>
function toggleHeight(e, maxHeight) {
    e = document.getElementById("folio"); // e = the portfolio div
    
    if(e.style.height != '20px') {
        e.style.height = '20px'; // height of one line: 20px
    } else {
        e.style.height = maxHeight + 'px';
    }
}
toggleHeight("folio", 550);
</script>
<!-- // :::::: SCRIPTS ETC :::::: -->
<?php wp_footer(); ?>
</body>
</html>