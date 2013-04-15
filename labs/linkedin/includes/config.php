<?php

/*
 * 
 */

define('CALLBACK_URL', 'http://hengkiardo.com/linkedin');
define('BASE_API_URL', 'https://api.linkedin.com');

define('REQUEST_PATH', '/uas/oauth/requestToken?oauth_callback=' . urlencode(CALLBACK_URL));
define('AUTH_PATH', '/uas/oauth/authorize');
define('ACC_PATH', '/uas/oauth/accessToken');

define('CUSTOMER_KEY', 'n0hru2tzpv3z');
define('CUSTOMER_SECRET', 'Nu4UarCZnH06wv9V');

$profileFields = array(	'id',
						'first-name',
						'last-name',
						'headline',
						'location',
						'industry',
						'distance',
						'relation-to-viewer',
						'current-status',
						'current-status-timestamp',
						'connections',
						'summary',
						'specialties',
						'proposal-comments',
						'honors',
						'positions',
						'educations',
						'member-url-resources',
						'picture-url',
						'site-standard-profile-request',
						'api-standard-profile-request');