<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function index() {
		$sql = "SELECT * FROM category WHERE category_level = 0 ORDER BY category_title DESC";
		$data['category'] = $this->db->query($sql)->result();
		$this->load->view('home/index', $data);
	}
	public function login()
	{
		include_once BASEPATH.'../asset/google/src/Google/autoload.php';
		// Store values in variables from project created in Google Developer Console
		$client_id = '214026116751-5tc7qjs3tcjf93up8l352difrfleubqe.apps.googleusercontent.com';
		$client_secret = 'DHrX1EPDPFWSeLjEuXM1tYg5';
		$redirect_uri = site_url('home/login');
		$simple_api_key = 'AIzaSyC-OkAkIa6oSYANt_kF9HFl-1r-ThsXP4w';

		// Create Client Request to access Google API
		$client = new Google_Client();
		$client->setApplicationName("WEBSHOP");
		$client->setClientId($client_id);
		$client->setClientSecret($client_secret);
		$client->setRedirectUri($redirect_uri);
		$client->setDeveloperKey($simple_api_key);
		$client->addScope("https://www.googleapis.com/auth/userinfo.email");
		$client->addScope("https://www.googleapis.com/auth/userinfo.profile");
		// Send Client Request
		$objOAuthService = new Google_Service_Oauth2($client);

		// Add Access Token to Session
		if (isset($_GET['code'])){
			$client->authenticate($_GET['code']);
			$_SESSION['access_token'] = $client->getAccessToken();
			header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
		}

		// Set Access Token to make Request
		if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
			$client->setAccessToken($_SESSION['access_token']);
		}

		// Get User Data from Google and store them in $data
		if ($client->getAccessToken()) {
			$userData = $objOAuthService->userinfo->get();
			$data['userData'] = $userData;
			$_SESSION['access_token'] = $client->getAccessToken();
		} else {
			$authUrl = $client->createAuthUrl();
			$data['authUrl'] = $authUrl;
		}
		// Load view and send values stored in $data
			if(isset($data['authUrl']))
				{
					echo anchor($data['authUrl'], 'Login', 'attributes');
				}
			else {
				echo anchor(site_url('home/logout'), 'Logout', 'attributes');
				echo "<pre>";
				 print_r ($data['userData']);
				 echo "</pre>";
			}
		}
		public function logout() {
			unset($_SESSION['access_token']);
			redirect(site_url('home/login'));
		}

		public function time($value='')
		{
			echo date("l, F jS, Y h:i:s", time());
		}
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */