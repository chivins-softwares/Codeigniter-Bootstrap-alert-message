# Codeigniter Bootstrap alert message
You need to check on the controller and the view folder to see how to use this small code. It is just a small step which will not even take time to understand its usage
This snippet came with two main method for client or developer usage
<br />
**First load library**
First we will need to load our library either autoload through `application => config => autoload.php` look for ``php $autoload[libraries'] `` then add this ``php $autoload['libraries'] = array('alert'); 
`` or we just load it through our controller, model, libraries as ```php $this->load->library('alert'); ```

1. **set($msg, $alert_type, $alert_identification_key)** <br />
**Description:**
This method is used to set the alert message. Mind you, this snippet uses three parameters<br />
$msg 				=> The message you want to pass to the user<br />
$alert_type 			=> The alert type you are trying to trigger e.g error, success, info, and warning<br />
$alert_identification_key	=> the key to use identify the particular message you want to display to the user<br />**usage:**
```php
$this->alert->set('Hello Chivins fans. You have successful view our snippet', 'success', 'snippet_alert');
```
<br />
<br />

2. **get($alert_identification_key)** <br />
**Description:**
This method is used to return the alert message base on its identification key. Mind you, this snippet uses one parameter<br />
$alert_identification_key	=> the key to use identify the particular message you want to return to the user<br />
**usage:**
```php
echo $this->alert->get('snippet_alert'); // Output: Hello Chivins fans. You have successful view our snippet
```
<br />
You can go ahead to try this to make your alert work in your project

**Try this**

```php
  class Login extends CI_Controller {
	  public function __construct()
		{
			parent::__construct();
			
			$this->load->library('alert');
		}
	
		public function index()
		{
			if (!$this->chivins_users->isLogin()) {
				// Set the alert error message if the user is not logged in
				$this->alert->set('You are not logged in. Login to access this page', 'error', 'login_msg');
			}
			else{
				$this->alert->set('Welcome you have successfully logged in to your account', 'success', 'login_msg');
			}
		}
	
	}
```

**then on the view part try this**

```php
echo $this->alert->get('login_msg');
```
That is all. There is no big deal to it
More update is coming
