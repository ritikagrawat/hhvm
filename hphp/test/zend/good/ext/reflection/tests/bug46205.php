<?hh <<__EntryPoint>> function main(): void {
$x = new reflectionmethod('reflectionparameter', 'export');
$y = function() { };

try {
    $x->invokeArgs(new reflectionparameter('trim', 'str'), array($y, 1));
} catch (Exception $e) { }
echo "ok";
}
