<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Engine Yard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/ey.min.css" rel="stylesheet">
  </head>
  <body>
	<div id="container">
		<div id="header">
	  		&nbsp;
		</div>
		
		<div id="logo">
	  		<img src="images/logo.png" width="500px">
		</div>
		
		<div class='newsletter'>
			<h2 class='newsletter'>
				Get Ruby on Rails & PHP news, tips and more
			</h2>
			<script type="text/javascript"> 
				var profiling = {
				  isEnabled: false,
				  numberOfProfilingFields: 3,
				  alwaysShowFields: [ 'mktDummyEntry']
				};
			</script>
			<script type="text/javascript">function mktoGetForm() {return document.getElementById('mktForm_1002'); }</script>
			<form class="lpeRegForm formNotEmpty newsletter" method="post" enctype="application/x-www-form-urlencoded" action="http://na-f.marketo.com/index.php/leadCapture/save" id="mktForm_1002" name="mktForm_1002">
			  <fieldset>

			    <div class="mktFormReq mktField">
			      <input class='mktFormText mktFormEmail mktFReq' name="Email" id="Email" type='text' value="" maxlength='255' tabIndex='2' placeholder="Email Address" />
			      <input id='mktFrmSubmit' type='submit' class="cta button" value='Subscribe' name='submitButton' onclick='formSubmit(document.getElementById("mktForm_1002")); return false;' />
			      <div class='mktFormMsg'></div>
			    </div>
			    <input type="text" name="_marketo_comments" value="" class="hidden" />
			    <input type="hidden" name="lpId" value="1009" />

			    <input type="hidden" name="subId" value="121" />
			    <input type="hidden" name="kw" value="" />
			    <input type="hidden" name="cr" value="" />
			    <input type="hidden" name="searchstr" value="" />
			    <input type="hidden" name="lpurl" value="http://pages.engineyard.com/Blank-Newsletter.html?cr={creative}&kw={keyword}" />
			    <input type="hidden" name="formid" value="1002" />
			    <input type="hidden" name="returnURL" value="http://pages.engineyard.com/SubscribeThanks.html" />
			    <input type="hidden" name="retURL" value="http://pages.engineyard.com/SubscribeThanks.html" />
			    <input type="hidden" name="_mkt_disp" value="return" />

			    <input type="hidden" name="_mkt_trk" value="%MC0%" />
			  </fieldset>
			</form>
			<script type="text/javascript" src="http://na-f.marketo.com/js/mktFormSupport.js"></script>
			<script type="text/javascript">
				function formSubmit(elt) {
				  return Mkto.formSubmit(elt);
				}
				function formReset(elt) {
				  return Mkto.formReset(elt);
				}
			</script>
		</div>
		
		<div class="info">
			<h2>PHP Info</h2>
			
			<p><strong>Version:</strong> <?php echo phpversion()?></p>
			<p><strong>Server:</strong> <?php echo $_SERVER['SERVER_SOFTWARE']?></p>
			<p><strong>Modules:</strong> <?php echo join(", ", get_loaded_extensions())?></p>
		</div>
	</div>
  </body>
</html>
