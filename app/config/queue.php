<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Default Queue Driver
	|--------------------------------------------------------------------------
	|
	| The Laravel queue API supports a variety of back-ends via an unified
	| API, giving you convenient access to each back-end using the same
	| syntax for each one. Here you may set the default queue driver.
	|
	| Supported: "sync", "beanstalkd", "sqs", "iron"
	|
	*/

	'default' => 'sync',

	/*
	|--------------------------------------------------------------------------
	| Queue Connections
	|--------------------------------------------------------------------------
	|
	| Here you may configure the connection information for each server that
	| is used by your application. A default configuration has been added
	| for each back-end shipped with Laravel. You are free to add more.
	|
	*/

	'connections' => array(

		'sync' => array(
			'driver' => 'sync',
		),

		'beanstalkd' => array(
			'driver' => 'beanstalkd',
			'host'   => 'localhost',
			'queue'  => 'default',
		),

		'sqs' => array(
			'driver' => 'sqs',
			'key'    => 'AKIAIZDWP5GLXDQKFO5A',
			'secret' => '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',
			'queue'  => 'https://sqs.us-west-2.amazonaws.com/522588239378/que-test',
			'region' => 'us-west-2',
		),

		'iron' => array(
			'driver'  => 'iron',
			'project' => '529d6000897e950005000030',
			'token'   => 'FGylLDFnEOYzDT2W_H09bcmkkOQ',
			'queue'   => 'meter-submission',
		),

	),

);
