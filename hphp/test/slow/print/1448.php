<?hh


// disable array -> "Array" conversion notice
<<__EntryPoint>>
function main_1448() {
error_reporting(error_reporting() & ~E_NOTICE);

serialize(array("\0" => 1));
serialize(array("\0" => "\0"));
serialize(array("\0" => "\\"));
serialize(array("\0" => "\'"));
serialize(array("\\" => 1));
serialize(array("\\" => "\0"));
serialize(array("\\" => "\\"));
serialize(array("\\" => "\'"));
serialize(array("\'" => 1));
serialize(array("\'" => "\0"));
serialize(array("\'" => "\\"));
serialize(array("\'" => "\'"));
serialize(array("\a" => "\a"));
serialize(!array("\0" => "\0"));
serialize((array("\0" => "\0")));
serialize((int)array("\0" => "\0"));
serialize((int)array("\0" => "\0"));
serialize((bool)array("\0" => "\0"));
serialize((bool)array("\0" => "\0"));
serialize((float)array("\0" => "\0"));
serialize((float)array("\0" => "\0"));
serialize((float)array("\0" => "\0"));
serialize((string)array("\0" => "\0"));
$a = "0x10";
serialize($a);
serialize("\0");
$a = array("\0" => 1);
serialize($a);
$a = array("\0" => "\0");
serialize($a);
$a = array("\0" => "\\");
serialize($a);
$a = array("\0" => "\'");
serialize($a);
$a = array("\\" => 1);
serialize($a);
$a = array("\\" => "\0");
serialize($a);
$a = array("\\" => "\\");
serialize($a);
$a = array("\\" => "\'");
serialize($a);
$a = array("\'" => 1);
serialize($a);
$a = array("\'" => "\0");
serialize($a);
$a = array("\'" => "\\");
serialize($a);
$a = array("\'" => "\'");
serialize($a);
$a = array("\a" => "\a");
serialize($a);
}
