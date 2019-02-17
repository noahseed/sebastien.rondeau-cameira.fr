<?php
    /**
     * Classe reCaptcha
     */
    class Recaptcha
    {
        private $api_site;
        private $api_secret;

        function __construct($api_site, $api_secret)
        {
            $this->api_site = $api_site;
            $this->api_secret = $api_secret;
        }

        public function html()
        {
            return '<div class="g-recaptcha" data-sitekey="' . $this->api_site . '" data-theme="dark"></div>';
        }

        public function checkCode($code, $ipVisiteur = null)
        {
            if (empty($code)) {
                return false;
            }

            $params = [
                'secret'   => $this->api_secret,
                'response' => $code
            ];

            if ($ipVisiteur) {
                $params['remoteip'] = $ipVisiteur;
            }

            $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);

            if (function_exists('curl_version')) {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_HEADER, false);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_TIMEOUT, 3);
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                $response = curl_exec($curl);
            } else {
                $response = file_get_contents($url);
            }

            if (empty($response) || is_null($response)) {
                return false;
            }

            $json = json_decode($response);
            return $json->success;
        }

        /**
         * Récupérer la véritable adresse IP d'un visiteur
         */
        public function get_ip() {
            // IP si internet partagé
            if (isset($_SERVER['HTTP_CLIENT_IP'])) {
                return $_SERVER['HTTP_CLIENT_IP'];
            }
            // IP derrière un proxy
            elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            // Sinon : IP normale
            else {
                return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
            }
        }
    }
