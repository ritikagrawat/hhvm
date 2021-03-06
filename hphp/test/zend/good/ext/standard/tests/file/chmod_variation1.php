<?hh

const PERMISSIONS_MASK = 0777;
<<__EntryPoint>> function main(): void {
$test_dir = getenv('HPHP_TEST_TMPDIR') ?? dirname(__FILE__);
$dirname = $test_dir . "/" . basename(__FILE__, ".php") . "testdir";
mkdir($dirname);

for ($perms_to_set = 0777; $perms_to_set >= 0; $perms_to_set--) {
    chmod($dirname, $perms_to_set);
    $set_perms = (fileperms($dirname) & PERMISSIONS_MASK);
    clearstatcache();
    if ($set_perms != $perms_to_set) {
        printf("Error: %o does not match %o\n", $set_perms, $perms_to_set);
    }
}

var_dump(chmod($dirname, 0777));
rmdir($dirname);

echo "done";
}
