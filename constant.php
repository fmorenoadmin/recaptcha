<?php
	//HTTPS LOCAL
		//define('HTTP', 'http://');
		//define('HTTP2', 'http://www.');
	//HTTPS HOSTING
		define('HTTP', 'https://');
		define('HTTP2', 'https://www.');
	//titulo
	define('TIT', ' | ReCaptcha | Frank Moreno Alburqueque');
	//directorio de acciones
	define('DIRACT', 'ACTIONCL/');
	//directorio de clases
	define('DIRMOR', 'MORENOCL/');
	//URL LOCAL
		//url con /
		define('URL', HTTP.'localhost/recaptcha/');
		//url sin /
		define('URL2', HTTP.'localhost/recaptcha');
	//URL HOSTING
		//url con /
		//define('URL', HTTP2.'dominio.com/');
		//url sin /
		//define('URL2', HTTP2.'dominio.com');
	//url de las Aciones
		define('ACTI', URL.DIRACT);
	//url las impagenes del sistema
	define('IMGSIST', URL.'assets/img/');
	//url plugins
	define('PLUG', URL.'plugins/');
	//---------------------------------------------------------------------
	define('PK_RCAPTCHA', '6LeV4fYdAAAAAP2GfdnBsyyBgOht7CTwohT80kJG');//reCAPTCHA_PK
	define('SK_RCAPTCHA', '6LeV4fYdAAAAAD8ocxju85Vke5vEi1kT5JikkvKJ');//reCAPTCHA_SK
	//---------------------------------------------------------------------
	date_default_timezone_set('America/Lima');