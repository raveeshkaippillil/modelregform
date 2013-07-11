<html>
<head>

<script src="//connect.facebook.net/en_US/all.js"></script>
</head>

<body>


<div id="fb-root"></div>
<script>

  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '176672709169017',                        // App ID from the app dashboard
      channelUrl : '//www.fotobrewer.com/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true                                  // Look for social plugins on the page
    });

    // Additional initialization code such as adding Event Listeners goes here
  
  };

  // Load the SDK asynchronously
  /*
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);

   }(document, 'script', 'facebook-jssdk'));
  */
  
 
  
  
</script>





<?php
require_once('../sdk/facebook.php');

$config = array();
$config['appId'] = '176672709169017';
$config['secret'] = '6425f468afe332a9674adf19e59dde21';

$facebook = new Facebook($config);
$user_id = $facebook->getUser();


var_dump($facebook);

/*
require_once('../sdk/facebook.php');

// Create our Application instance 
$facebook = new Facebook(array(
  'appId'  => '176672709169017',
  'secret' => '6425f468afe332a9674adf19e59dde21',
));

// Get User ID
$user = $facebook->getUser();
echo $facebook->api('/me');
// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.
if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

echo $user_profile;
*/


$signed_request = $_REQUEST['signed_request'];

    function parsePageSignedRequest() {
            if (isset($_REQUEST['signed_request'])) {
                    $encoded_sig = null;
                    $payload = null;
                    list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
                    $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
                    $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
                    return $data;
                }
            return false;
            }
        if($signed_request = parsePageSignedRequest()) {
            if($signed_request->page->liked) {

            //$this->assign('verify', $signed_request->page->liked);
			//echo "Application Under Construction. Please check back later !  ";
			//$user_id = trim($signed_request->user_id);
			//var_dump( $signed_request );
			//$pageContent = file_get_contents('http://graph.facebook.com/' . $signed_request->user_id);
			//$parsedJson  = json_decode($pageContent);
			//echo $parsedJson;
			
			//$graphUrl = 'http://graph.facebook.com/' . trim($signed_request->user_id) ;
			
			/*
			?>
            <script>
             FB.api('/<?php echo $signed_request->user_id; ?>', function(response) {
              alert(response.name);
			   alert(response.first_name);
			   alert(response.last_name);
			   alert(response.gender);
            });
			</script>
            <?php
			*/
			
			//$facebook = new Facebook();
			
			
			
			//$pageContent = file_get_contents( $graphUrl );
			
			//var_dump ($pageContent);
			//echo $signed_request->user_id;
			
			
			
			//echo "test";
            } 
            else {
                echo "Please click on the Like button to view our Offer!";
                exit();
            }
    } 
	
	

?>

</body>
</html>
