<?

if (stristr($_SERVER['PHP_SELF'], "main.php")) {
	header("Location: index.php");
	exit();
}

//error_reporting(E_ALL);

//session_start();

include("config.php");

/* Gets */
$i = $_GET['i'];
$g = $_GET['g'];
$t = $_GET['t'];
$u = $_GET['u'];

$q = $_GET['q'];
$p = $_GET['p'];
$lang = $_GET['lang'];

$op = $_GET['op'];
$id = $_GET['id'];

$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['REQUEST_URI'];

/* Url */
function url($text) {
	$text = str_replace("-", " ", $text);
	$text = str_replace("   ", " ", $text);
	$text = str_replace("  ", " ", $text);
	$text = str_replace(" ", "-", $text);
	$text = str_replace("(", "", $text);
	$text = str_replace(")", "", $text);
	$text = strtolower($text);
  return $text;
}
/* Name */
function name($text) {
	$text = str_replace("-", " ", $text);
	$text = strtolower($text);
	$text = ucwords($text);
  return $text;
}
/* Tags */
function tags($text, $url) {
	$text = explode(',', $text);
	$count = count($text);
	$tags = "";
	for($i = 0; $i < $count; $i++){
		$tags.="<a href=\"".$url."".url($text[$i])."/\">".name($text[$i])."</a>";
	}
  return $tags;
}
/* Page */
function page($sql, $lines) {
 global $p, $pages;

	if ($p) {
		$page = ($p - 1) * $lines;
	} else {
		$p = 1;
		$page = 0;
	}
	$pages = mysql_query($sql);
	$pages = mysql_num_rows($pages);
	$pages = ceil($pages / $lines);

	$sql = $sql." LIMIT ".$page.",".$lines."";

 return $sql;
}
/* Lang */
if ($lang) {
	if (file_exists("lang/".$lang.".php")) {
		include("lang/".$lang.".php");
		setcookie("lang", $lang, time() + 604800, "/", "");
	} else {
		include("lang/es.php");
	}
} else {
	if ($_COOKIE['lang']) {
		$lang = $_COOKIE['lang'];
	} else {
		$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$explode = explode("-", $lang);
		$lang = $explode[0];
	}
	if (file_exists("lang/".$lang.".php")) {
		include("lang/".$lang.".php");
	} else {
		include("lang/es.php");
	}
}

?>