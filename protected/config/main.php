<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Speedmark - Accounting Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'gii',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'localtime'=>array(
        	'class'=>'LocalTime',
        ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		// uncomment the following to use a Postgresql database
		'db'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=accounting',
			'emulatePrepare' => true,
			'username' => 'postgres',
			'password' => 'postgres',
			'charset' => 'utf8',
		),
		'sm'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=speedmark',
			'emulatePrepare' => true,
			'username' => 'postgres',
			'password' => 'postgres',
			'charset' => 'utf8',
			'class'  => 'CDbConnection'
		),
		'temp'=>array(
			'connectionString' => 'pgsql:host=localhost;dbname=accounting_temp',
			'emulatePrepare' => true,
			'username' => 'postgres',
			'password' => 'postgres',
			'charset' => 'utf8',
			'class'  => 'CDbConnection'
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			//'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'paidVia'=>array(''=>'', 'Transfer'=>'Transfer', 'Cash'=>'Cash', 'Cheque'=>'Cheque', 'Giro'=>'Giro'),
		'cashType'=>array('In'=>'In', 'Out'=>'Out'),
		'TFBooleanValue'=>array(''=>'', 'T'=>'Ya/Sudah', 'F'=>'Tidak/Belum'),
		'datePickerDateFormat'=>'yy-mm-dd',
		'gridDateFormat'=>'Y-m-d'
	),
);