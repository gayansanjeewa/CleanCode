# Liskov substitution principle

![Illustration: Liskov substitution principle](../storage/3-intro-liskov-substitution-principle.png)

### "Let q(x) be a property provable about objects x of type T. Then q(y) should be provable for objects y of type S, where S is a subtype of T"

* What it simply means is,
  * If `B` is a sub-class of `A`, then objects of class `A` may be replaced with
        objects of class `B`.
  * Derived classes must be substitutable for their base classes.

```php
class A
{
    public function __invoke($foo)
    {
        // ...
    }
}

class B extends A
{
    public function __invoke($foo)
    {
        // Overide parent method...
    }
}

$x = new X();
$x->doSomething(new A());
$x->doSomething(new B());
```