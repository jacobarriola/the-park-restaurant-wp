<?php

	/*
		Template Name:  Contact Page

	*/

?>


<?php get_header(); ?>

<div id="content">

		<div class="grid_12">

			<h1>Contact us</h1>
			
		</div>

		<div class="grid_6">

			<div class="contact-method">

				<div class="contact-icon phone-icon"></div>

				<h2>Phone</h2>

				<p>Feel free to call 213-482-9209 for any questions regarding reervations, catering, parties and whatever comes to mind.</p>
			
			</div>	

			<div class="contact-method">

				<div class="contact-icon mail-icon"></div>

				<h2>Email</h2>

				<p>For email inquiries, email us @ <a href="mailto:info@thepark1400sunset.com" title="Email The Park Restaurant">info@thepark1400sunset.com</a>.  We will try to get back to you as soon as we can.</p>
			
			</div>	

			<div class="contact-method">

				<div class="contact-icon web-icon"></div>

				<h2>Web</h2>

				<p>If you prefer, you can always fill out a web form and we will get back to you as soon as we can.</p>

				<div id="wufoo-m1tm49en1xztdqk"></div>
					<script type="text/javascript">var m1tm49en1xztdqk;(function(d, t) {
					var s = d.createElement(t), options = {
					'userName':'thepark1400', 
					'formHash':'m1tm49en1xztdqk', 
					'autoResize':true,
					'height':'497',
					'async':true,
					'host':'wufoo.com',
					'header':'hide', 
					'ssl':true};
					s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
					s.onload = s.onreadystatechange = function() {
					var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
					try { m1tm49en1xztdqk = new WufooForm();m1tm49en1xztdqk.initialize(options);m1tm49en1xztdqk.display(); } catch (e) {}};
					var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
					})(document, 'script');</script>


			</div>	

		</div>	

		<div class="grid_6 omega">

		<div class="contact-method contact-location">

				<div class="contact-icon map-icon"></div>

				<h2><span>The Park Restaurant</span></h2>
				
				<p>1400 Sunset Blvd, Echo Park, CA 90026</p>

				<iframe width="416" height="295" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1400+Sunset+Blvd,+Los+Angeles,+CA+%E2%80%8E&amp;aq=&amp;sll=34.077607,-118.42188&amp;sspn=0.34323,0.403748&amp;ie=UTF8&amp;hq=&amp;hnear=1400+Sunset+Blvd,+Los+Angeles,+California+90026&amp;t=m&amp;ll=34.074275,-118.252373&amp;spn=0.020973,0.03562&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
			
			</div>	

		</div>

		<div class="grid_6">

		<!--form-->	

		</div>	

</div> <!-- END content -->

<?php get_footer(); ?>