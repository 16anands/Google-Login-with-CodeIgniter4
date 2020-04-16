<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Login with CodeIgniter 4!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="218510653429-fr3oju28p86sbrucgbrosh60289mk2rm.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- STYLES -->
	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		header {
			background-color: rgba(247, 248, 249, 1);
			padding: .4rem 0 0;
		}
		header .heroe {
			margin: 0 auto;
			max-width: 1100px;
			padding: 1rem 1.75rem 1.75rem 1.75rem;
		}
		header .heroe h1 {
			font-size: 2.5rem;
			font-weight: 500;
		}
		section {
			margin: 0 auto;
			max-width: 1100px;
			padding: 2.5rem 1.75rem 3.5rem 1.75rem;
		}
		section h1 {
			margin-bottom: 2.5rem;
		}
		section pre {
			background-color: rgba(247, 248, 249, 1);
			border: 1px solid rgba(242, 242, 242, 1);
			display: block;
			font-size: .9rem;
			margin: 2rem 0;
			padding: 1rem 1.5rem;
			white-space: pre-wrap;
			word-break: break-all;
		}
		section code {
			display: block;
		}
	</style>
</head>
<body>
<!-- HEADER: MENU + HEROE SECTION -->
<header>
	<div class="heroe">
		<h1>Google Login with CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
	</div>
</header>
<!-- CONTENT -->
<section>
	<h1>Google Login</h1>

	<div class="g-signin2" data-onsuccess="onSignIn" data-data-onfailure="onSignInFailure" data-theme="dark" data-longtitle="true"></div>
           
	<p>Signed-in  as </p>

	<pre><code id="name">Signed-in Name</code></pre>

	<p>with</p>

	<pre><code id="email">Signed-in User's Email</code></pre>

</section>  
<!-- SCRIPTS -->
<script>
    //Google SDK for Javascript
    function onSignInFailure() {
        alert(error);
    }
    function onSignIn(googleUser) {
        // get user profile information
        var profile = googleUser.getBasicProfile();
        document.getElementById('name').innerHTML = profile.getName();
        document.getElementById('email').innerHTML = profile.getEmail();
    }
</script>
<!-- -->
</body>
</html>
