<?php
return $config = [
	'DATAFORSEO_LOGIN' => 'login',
	'DATAFORSEO_PASSWORD' => 'password',
	'timeoutForEachRequests' => 120,
	'apiVersion' => '/v3/',
	'url' => 'https://api.dataforseo.com',
	// You can set extra paths for Entities. It will be broken the psr4 standard. (for all entity we use namespace: DFSClientV3\Entity\Custom)
	// last index will have the priority. For example, if you have a same Entity name in different directories, DFSClient will use entity, loaded from last path.
	'extraEntitiesPaths' => [
		'your full path to extra entity',
		'your full path to extra entity'
	],
];
