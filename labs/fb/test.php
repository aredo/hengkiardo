<html xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="https://www.facebook.com/2008/fbml">
  <head>
    <title>Request Tester C</title>
  </head>


  <body>
    <div id="fb-root"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <p>
      <input type="button"
        onclick="sendRequestToRecipients(); return false;"
        value="Send Request to Users Directly"
      />
      <input type="text" value="User ID" name="user_ids" />
      </p>
    <p>
    <input type="button"
      onclick="sendRequestViaMultiFriendSelector(); return false;"
      value="Send Request to Many Users with MFS"
    />
    </p>
    
    <script>
      FB.init({
        appId  : '139078612843743',
        status : true,
        cookie : true,
        oauth: true,
		xfbml  : true  // parse XFBML
      });

      function sendRequestToRecipients() {
        var user_ids = document.getElementsByName("user_ids")[0].value;
        FB.ui({method: 'apprequests',
          message: 'My Great Request',
          to: user_ids, 
        }, requestCallback);
      }

      function sendRequestViaMultiFriendSelector() {
        FB.ui({method: 'apprequests',
          message: 'My Great Request'
        }, requestCallback);
      }
      
      function requestCallback(response) {
        // Handle callback here
      }
    </script>
	
	<br /><br />
	<fb:serverFbml style="width: 500px;">
		<script type="text/fbml">
			<fb:fbml>
				<fb:request-form action="http://labs.hengkiardo.com/fb/sendinvite.php" target="_top" method="POST" invite="true" type="Test Invite Form" content="<fb:req-choice url='http://labs.hengkiardo.com/fb' label='Accept' />">
					<fb:multi-friend-selector showborder="false" actiontext="This is a demo invite form">
				</fb:request-form>
			</fb:fbml>
		</script>
	</fb:serverFbml>

  </body>
</html>