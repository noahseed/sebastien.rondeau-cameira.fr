<?php
	class User
	{
		public $user_id;

		public $user_username;

        public $user_email;
        
		public $user_password;
		
		public $user_confirmation_token;
		
		public $user_confirmed_at;
		
		public $user_reset_token;
		
		public $user_reset_at;
		
		public $user_remember_token;
		
		public $user_is_admin;
		
		public $user_is_vip;

		public function __construct()
		{

		}
	}
