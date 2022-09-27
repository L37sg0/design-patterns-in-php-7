# Null Object
## Purpose:

- Null Object is not a GoF design pattern but a schema which appears
frequently enough to be considered a pattern. It has the following benefits:
1. Client code is simplified.
2. Reduces the chance of null pointer exceptions.
3. Fewer conditionals require less test cases.
- Method that return an object or null should instead return an object or
"NullObject". Null Objects simplify boilerplate code such as:
```php
if (!is_null($obj)) {
    $obj->callSomething();
}
```
to just:
```php
$obj->callSomething();
```
by eliminating the conditional check in client code.

###### [Examples:]

- Null logger or null output to preserve a standard way of interaction between
objects, even if it shouldn't do anything
- null handler in a Chain of Responsibilities pattern
- null command in a Command pattern