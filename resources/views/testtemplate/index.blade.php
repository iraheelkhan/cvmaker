<!DOCTYPE html>
<html style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; background: #181818; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;">
<head>
<title>{{Auth::user()->name}}</title>

<meta name="viewport" content="width=device-width">
<meta name="description" content="The Curriculum Vitae of Joe Bloggs.">
<meta charset="UTF-8"> 

<style>
@media all and (min-width: 602px) and (max-width: 800px) {
  #headshot {
    display: none;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}
@media all and (max-width: 601px) {
  #cv {
    width: 95%;
    margin: 10px auto;
    min-width: 280px;
  }

  #headshot {
    display: none;
  }

  #name,
#contactDetails {
    float: none;
    width: 100%;
    text-align: center;
  }

  .sectionTitle,
.sectionContent {
    float: none;
    width: 100%;
  }

  .sectionTitle {
    margin-left: -2px;
    font-size: 1.25em;
  }

  .keySkills {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}
@media all and (max-width: 480px) {
  .mainDetails {
    padding: 15px 15px;
  }

  section {
    padding: 15px 0 0;
  }

  #mainArea {
    padding: 0 25px;
  }

  .keySkills {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }

  #name h1 {
    line-height: .8em;
    margin-bottom: 4px;
  }
}
@media print {
  #cv {
    width: 100%;
  }
}
</style>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Lato', helvetica, arial, sans-serif; font-size: 16px; color: #222;">
<div id="cv" class="instaFade" style="border: 0; font: inherit; font-size: 100%; padding: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 1.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 1.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 1.5s; animation-timing-function: ease-in; width: 90%; max-width: 1200px; background: #f3f3f3; margin: 30px auto;">
	<div class="mainDetails" style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; padding: 25px 35px; border-bottom: 2px solid #cf8a05; background: #ededed;">
		<div id="headshot" class="quickFade" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 2.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 2.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 2.5s; animation-timing-function: ease-in; width: 12.5%; float: left; margin-right: 30px;">
			
		</div>
		
		<div id="name" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: left;">
			<h1 class="quickFade delayTwo" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 2.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 2.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 2.5s; animation-timing-function: ease-in; -webkit-animation-delay: 0, 1s; -moz-animation-delay: 0, 1s; animation-delay: 0, 1s; font-size: 2.5em; font-weight: 700; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; margin-bottom: -6px;">{{Auth::user()->name}}</h1>
			<h2 class="quickFade delayThree" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 2.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 2.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 2.5s; animation-timing-function: ease-in; -webkit-animation-delay: 0, 1.5s; -moz-animation-delay: 0, 1.5s; animation-delay: 0, 1.5s; font-size: 2em; margin-left: 2px; font-family: 'Rokkitt', Helvetica, Arial, sans-serif;">{{Auth::user()->email}}</h2>
		</div>
		
		@foreach($personals as $personal)
		@endforeach
		<div id="contactDetails" class="quickFade delayFour" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 2.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 2.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 2.5s; animation-timing-function: ease-in; -webkit-animation-delay: 0, 2s; -moz-animation-delay: 0, 2s; animation-delay: 0, 2s; float: right;">
			<ul style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; list-style-type: none; font-size: 0.9em; margin-top: 2px;">
				<li style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; margin-bottom: 3px; color: #444;">e: <a href="mailto:joe@bloggs.com" target="_blank" style="color: #444; text-decoration: none; -webkit-transition: all .3s ease-in; -moz-transition: all .3s ease-in; -o-transition: all .3s ease-in; -ms-transition: all .3s ease-in; transition: all .3s ease-in;">{{Auth::user()->email}}</a></li>
				<li style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; margin-bottom: 3px; color: #444;">w: <a href="http://www.bloggs.com" style="color: #444; text-decoration: none; -webkit-transition: all .3s ease-in; -moz-transition: all .3s ease-in; -o-transition: all .3s ease-in; -ms-transition: all .3s ease-in; transition: all .3s ease-in;">{{$personal->website}}</a></li>
				<li style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; margin-bottom: 3px; color: #444;">{{$personal->phone}}</li>
			</ul>
		</div>
		<div class="clear" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; clear: both;"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive" style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; -webkit-animation-name: reset, fade-in; -webkit-animation-duration: 2.5s; -webkit-animation-timing-function: ease-in; -moz-animation-name: reset, fade-in; -moz-animation-duration: 2.5s; -moz-animation-timing-function: ease-in; animation-name: reset, fade-in; animation-duration: 2.5s; animation-timing-function: ease-in; -webkit-animation-delay: 0, 2.5s; -moz-animation-delay: 0, 2.5s; animation-delay: 0, 2.5s; padding: 0 40px;">
		<section style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; display: block; padding: 20px 0 0; border-top: 0;">
			<article style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; display: block;">
				<div class="sectionTitle" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: left; width: 25%;">
					<h1 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-style: italic; font-size: 1.5em; color: #cf8a05;">Personal Profile</h1>
				</div>
				
				<div class="sectionContent" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: right; width: 72.5%;">
					<p style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-size: 1em; line-height: 1.4em; margin-bottom: 20px; color: #444;">{{$personal->objective}}</p>
				</div>
			</article>
			<div class="clear" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; clear: both;"></div>
		</section>
		
		
		<section style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; display: block; border-top: 1px solid #dedede; padding: 20px 0 0;">
			<div class="sectionTitle" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: left; width: 25%;">
				<h1 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-style: italic; font-size: 1.5em; color: #cf8a05;">Work Experience</h1>
			</div>
			
			<div class="sectionContent" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: right; width: 72.5%;">
			@foreach($experiences as $exp)
				<article style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; display: block;">
					<h2 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-size: 1.5em; margin-bottom: -2px;">{{$exp->designation}} at {{$exp->company_name}}</h2>
					<p class="subDetails" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; line-height: 1.4em; color: #444; font-size: 0.8em; font-style: italic; margin-bottom: 3px;">{{$exp->from_date}} - {{$exp->to_date}}</p>
					<p style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-size: 1em; line-height: 1.4em; margin-bottom: 20px; color: #444;">{{$exp->description}}</p>
				</article>
			@endforeach
			</div>
			<div class="clear" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; clear: both;"></div>
		</section>
		
		
		<section style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; display: block; border-top: 1px solid #dedede; padding: 20px 0 0;">
			<div class="sectionTitle" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: left; width: 25%;">
				<h1 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-style: italic; font-size: 1.5em; color: #cf8a05;">Key Skills</h1>
			</div>
			
			<div class="sectionContent" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: right; width: 72.5%;">
				<ul class="keySkills" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; list-style-type: none; -moz-column-count: 3; -webkit-column-count: 3; column-count: 3; margin-bottom: 20px; font-size: 1em; color: #444;">
					@foreach($skills as $skill)
					<li style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline;">
						<table>
							<tr>
								<td style="width: 300px;">{{$skill->title}}</td>
								<td>{{$skill->level}}</td>
							</tr>
						</table>
						 

					</li>
					@endforeach
					
				</ul>
			</div>
			<div class="clear" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; clear: both;"></div>
		</section>
		
		
		<section style="border: 0; font: inherit; font-size: 100%; margin: 0; vertical-align: baseline; display: block; border-top: 1px solid #dedede; padding: 20px 0 10px;">
			<div class="sectionTitle" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: left; width: 25%;">
				<h1 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-style: italic; font-size: 1.5em; color: #cf8a05;">Education</h1>
			</div>
			
			<div class="sectionContent" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; float: right; width: 72.5%;">
				@foreach($educations as $edu)
				<article style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; display: block;">
					<h2 style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-family: 'Rokkitt', Helvetica, Arial, sans-serif; font-size: 1.5em; margin-bottom: -2px;">{{$edu->name}}</h2>
					<p class="subDetails" style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; line-height: 1.4em; color: #444; font-size: 0.8em; font-style: italic; margin-bottom: 3px;">{{$edu->institute}} | {{$edu->passing_year}}</p>
					<p style="border: 0; font: inherit; margin: 0; padding: 0; vertical-align: baseline; font-size: 1em; line-height: 1.4em; margin-bottom: 20px; color: #444;">{{$edu->description}}</p>
				</article>
				
				@endforeach
			</div>
			<div class="clear" style="border: 0; font: inherit; font-size: 100%; margin: 0; padding: 0; vertical-align: baseline; clear: both;"></div>
		</section>
		<P style="page-break-before: always">	</P>
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>