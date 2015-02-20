<?php

	return Affinity\Config::create([
		'connections' => [
			'default' => [
				'driver'   => 'postgresql', // mssql, mysql, postgresql
				'database' => 'cook_night',
				'username' => 'caker',
				'password' => NULL,
				'host'     => 'localhost'
			]
		]
	]);
