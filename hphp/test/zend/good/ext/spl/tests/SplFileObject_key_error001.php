<?hh
//line 2
//line 3
//line 4
//line 5
$s = new SplFileObject(__FILE__);

$s->seek(12);
$s->next();
var_dump($s->key());
var_dump($s->valid());
