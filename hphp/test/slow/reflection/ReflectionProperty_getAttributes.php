<?hh

class C {
  <<A, B(1, "two", array(3))>>
  public $p;
  <<C, D('a', dict['b' => 'c'])>>
  public static $sp;
  public function __construct(
    <<E, F('promote', vec['me'])>>
    public $pp,
  ) {}
}
var_dump((new ReflectionProperty(C::class, 'p'))->getAttributes());
var_dump((new ReflectionProperty(C::class, 'sp'))->getAttributes());
var_dump((new ReflectionProperty(C::class, 'pp'))->getAttributes());
$c = new C(false);
$c->dynamic = 'lol';
var_dump((new ReflectionProperty($c, 'dynamic'))->getAttributes());