## General Idea
* Explain yourself in code as much as possible
* Avoid comments, unless its really necessary to have it

### Legal comments

### Explanation of Intent

This is something that you had to do to achieve the intended behaviour. Changing this could lead to destructive behaviour. Hence you could leave an abstract comment informing the same

```
//This is our best attempt to get a race condition
//by creating large number of items.
for ($i = 0; $i < 25000; i++) {
    // ...
}
```

### Warning
```
// Don't run unless you have some time to kill.
public function _testWithReallyBigFile() {
    // ...
}
```

### TODO or @FixMe comments

* This is something that you have already planned to do something in the near future.
* You know that is very much needed.
* Leave a reference that typing everything in the comment itself.
* TODO's should never be present in master, unless its really needed

```
// TODO: We expect this to go away when we do the checkout model. See ticket ABC-5654 for more context
protected function makeVersion()
{
    return null;
}
```