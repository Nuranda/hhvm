<?hh

CLASS D IMPLEMENTS IDisposable {
  PUBLIC FUNCTION __dispose() {
    ECHO "DISPOSING\n";
  }
}

FUNCTION test() {
  ECHO "BEFORE CREATE\n";
  USING NEW D();
  ECHO "AFTER CREATE\n";
}

test();
