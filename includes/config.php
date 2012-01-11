<?php

error_reporting(E_ALL ^ E_NOTICE);


$info = array(
	'firstName'		=> 'Luis',
	'middleName'	=> 'Alberto.',
	'lastName'		=> 'Hernandez',
	'photoURL'		=> 'assets/img/photo.jpg',
	'birthDay'		=> strtotime('02-04-1986'),
	'city'			=> 'Naucalpan de Juarez',
	'country'		=> 'México',
	'street'		=> 'Calz. de los Remedios #26, Col. Adolfo Lopez Mateos',
	'zip'			=> '53070',
	'company'		=> 'Interactive Web Zone',
	'website'		=> 'http:/developer-luis-hernandez.com/',
	'email'			=> 'lhernandez@developer-luis-hernandez.com',
	'cellphone'		=> '12345678910',
	'description'	=> "Soy programador web, vivo en el Estado de méxico. Me gusta mucho diseñar y desarrollar aplicaciones web, me gusta construir cosas con madera en mi tiempo libre.\n\nSígueme en twitter.",
	'tags'			=> 'Desarrollador web, Diseñador',
	'facebook'		=> 'http://www.facebook.com/',
	'twitter'		=> 'http://twitter.com/devluis'
);


/*

	// Additional properties that can take part of the $info
	// array (will be visible in the generated vcard):

	'educationTitle', 'addon', 'nickname', 'company', 'organisation', 'department', 'jobTitle',
	'telephoneWork1', 'telephoneWork2', 'telephoneHome1', 'telephoneHome2', 'carphone', 'pager',
	'additionalTelephone','faxWork','faxHome','ISDN','preferredTelephone','telex', 'workStreet',
	'workZIP','workCity','workRegion','workCountry','homeStreet','homeZIP', 'homeRegion',
	'postalStreet','postalZIP','postalCity', 'postalRegion', 'postalCountry','role'

*/
?>