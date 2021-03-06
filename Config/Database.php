<?php
	/*
		RaGEWEB :: Web Application used to emulate the current build of Habbo.com
		Developers
			- Cobe 'Makarov' Johnson :: Project Team Leader, designed database, folder structure, reviews code before github push, etc.
			- Ashley 'nobrain' Davidson :: Writes code, rips public files.
			- Leon Hartley :: Writes code, designs layout.
			
		Project protected under the DBAD License

		DBAD Information
			- Creator :: Phil Sturgeon
			- Created :: December, 2009
			- Local Location :: \Documentation\DBAD.txt

		RaGEWEB Information
			- Started :: July 18, 2012
			- Languages Used :: PHP, Javascript, CSS
			- Code Pattern :: MVC
			- Extensions Used :: memcache

		File Information
			- Name :: Database
			- Location :: \Config\Database.php
			- Author :: Cobe 'Makarov' Johnson
			- Description :: Holds the configuration data for the database
			- Created :: 7-18-2012
	*/

	/*
		Allowed Model Types
			- MySQL
			- MySQLi
			- PDO
			- ADO_MySQL
	*/
	$Config['Database']['Type'] = 'MySQL';

	/*
		Where your database is located.
	*/
	$Config['Database']['Host'] = 'localhost';

	/*
		The port in which your database is running on
		* Leave this alone if you don't know what you're doing! *
	*/
	$Config['Database']['Port'] = 3306;

	/*
		The name of the database you're trying to connect to!
	*/
	$Config['Database']['Name'] = 'rage_project';

	/*
		A user that has permissions for the database you specified above.
	*/
	$Config['Database']['Username'] = 'root';

	/*
		The password associated with the username specified above.
	*/
	$Config['Database']['Password'] = '';

	/*
		What emulator are you using?!?!

		Supported Emulators
			- Uber
			- Phoenix
			- RaGE

	*/
	$Config['Database']['Emulator'] = 'RaGE';
?>