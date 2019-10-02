# Codeigniter Bootstrap alert message
You need to check on the controller and the view folder to see how to use this small code. It is just a small step which will not even take time to understand its usage
OR
Try this

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

then on the view part try this

```php
echo $this->alert->get('login_msg');
```
That is all there is no big deal to it
