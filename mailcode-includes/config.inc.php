<?

ini_set( 'SMTP', 'mail.consultorasebgon.com' );
ini_set( 'sendmail_from', 'registro@consultorasebgon.com' );

// Your e-mail address
$to = "ventas@consultorasebgon.com";

// "Subject:" line in the e-mail
$subject = "Mensaje de sitio Consultora Sebgon";

// Date format
$date = date ("l, F jS, Y");

// Time format
$time = date ("h:i A");

// Message at the beginning of the e-mail body
$intro = "Mensaje enviado el dia $date a las $time.\n\n <br>";

// Url to your "Thank You" page
$thanks = "../servicios-de-consultoria-de-recursos-humanos-respuesta.php?respuesta=Gracias";
// $thanks = "gracias.php";

// Url to your "Empty form field" page
$emptyfield = "../empresa-consultora-sebgon-respuesta.php?respuesta=Formulario incompleto";
// $emptyfield = "formulario_incompleto.php";

// Url to your "Wrong Security Code" page
$wrong = "../empresa-consultora-sebgon-respuesta.php?respuesta=Codigo invalido";
//$wrong = "codigo_invalido.php";

// Url to your "Invalid Email Address" page
$invalid = "../empresa-consultora-sebgon-respuesta.php?respuesta=Email invalido";
// $invalid = "email_invalido.php";

// Url to your "File too big" page
$bigfile = "../empresa-consultora-sebgon-respuesta.php?respuesta=Peso excesivo";
// $bigfile = "error_archivo.php";

// Url to your "File type not accepted" page
$badfile = "../empresa-consultora-sebgon-respuesta.php?respuesta=Archivo invalido";
// $badfile = "error_extension.php";

// Enable/Disable form validation: Set to 1 to enable, set to 0 to disable
$formval = 1;

// Enable/Disable email address validation: Set to 1 to enable, set to 0 to disable
$emailval = 0;

// Enable/Disable logging: Set to 1 to enable, set to 0 to disable
$logging = 1;

// Enable/Disable file attachments: Set to 1 to enable, set to 0 to disable
$attachments = 0;
// Acceptable file types
$file_types = array(
	"jpe",
	"jpg",
	"jpeg",
	"gif",
	"pdf",
	"png",
	"avi",
	"mpg",
	"mpeg",
	"mov",
	"ram",
	"qt",
	"au",
	"wav",
	"mid",
	"midi",
	"wmv",
	"mp3",
	"ra",
	"flv",
	"txt",
	"doc",
	"xls",
	"ppt",
	"zip",
	"tar",
	"tgz",
	"gz",
	"gzip",
	"rar",
);
// Maximum file size for attachments (measured in bytes)
$max_file_size = 2097152;

// path to your logfile directory
$logpath = "logs";

?>