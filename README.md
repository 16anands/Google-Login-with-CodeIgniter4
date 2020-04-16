# Google-Login-with-CodeIgniter
A secure, fast, and convenient way for users to log into your app, and for your app to ask for permissions to access data.
##  Prerequisite
* **XAMPP**
-- [x] XAMPP is a completely free, easy to install Apache distribution containing MariaDB, PHP, and Perl. The XAMPP open source package has been set up to be incredibly easy to install and to use.
[XAMPP Download Link](https://www.apachefriends.org/index.html)
* **CodeIgniter Web Framework**
-- [x] CodeIgniter is a powerful PHP framework with a very small footprint, built for developers who need a simple and elegant toolkit to create full-featured web applications.
[CodeIgniter Download Link](https://codeigniter.com/)
* **Google API Console Project**
-- [x] Every third party app that integrates Google login needs to create a Google API Console Project. A console project helps Google track the third party app and provides additional configuration options.
[Build anything with Google](https://developers.google.com/docs/api)
### Step 1. **Download and Install XAMPP**
### Step 2. **Creating Google API Console Project**
* Go to the Google API Console.
* Select an existing project from the projects list, or click NEW PROJECT to create a new project:
** Enter the Project Name.
** Under the Project Name, you will see the Google API console automatically creates a project ID. Optionally you can change this project ID by the Edit link. But project ID must be unique worldwide.
** Click on the CREATE button and the project will be created in some seconds.
* In the left side navigation panel, select Credentials under the APIs & Services section.
* Select the OAuth consent screen tab, specify the consent screen settings.
** In Application name field, enter the name of your Application.
** In Support email filed, choose an email address for user support.
** In the Authorized domains, specify the domains which will be allowed to authenticate using OAuth.
** Click the Save button.
* Select the Credentials tab, click the Create credentials drop-down and select OAuth client ID.
** In the Application type section, select Web application.
** In the Authorized redirect URIs field, enter the redirect URL.
** Click the Create button & note the Client ID.
### Step 3. **Creating a CodeIgniter App**
* Clone https://github.com/16anands/Google-Login-with-CodeIgniter.git 
* Place it in _**C:\xampp\htdocs**_
* Open  C:\xampp\htdocs\Google-Login-with-CodeIgniter-v1.0.0\app\Views\home.php
* Replace **'CLIENT ID'** with your google _**client_id**_.
* Open web browser and type _[http://localhost/Google-Login-with-CodeIgniter-v1.0.0/public/]
* Click _**Sign in With Google**_ button.
* Enter your Credentials which you used to create the Developer Account on Google.
> _**OR**_ 
* Download CodeIgniter Web Framework https://github.com/codeigniter4/framework/archive/v4.0.2.zip
* Extract the folder and place it in _**C:\xampp\htdocs**_
* Rename the folder to something simpler like : __Google_login__
* Open web browser and type _[http://localhost/Google_login/public/](http://localhost/Google_login/public/)_
* CodeIgniter Welcome page will load.
* Open _C:\xampp\htdocs\Google_login\app\Controllers\Home.php_
* Change the _View_ name to _**home**_.
* Open  C:\xampp\htdocs\Google_login\app\Views
* Create a new file named _**home.php**_
* Add the following code :
```php
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Google Login with CodeIgniter 4!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="CLIENT ID">
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
```
* Replace **'CLIENT ID'** with your google _**client_id**_.
* Refresh the web page and Click _**Sign in With Google**_ button.
* Enter your Credentials which you used to create the Developer Account on Google.
