# Builder
## Purpose:

- Builder is an interface that build parts of a complex object.
- Sometimes, if the builder has a better knowledge of what it builds, this
interface could be an abstract class with default methods (adapter).
- If you have a complex inheritance tree for the object, it is logical to have
a complex inheritance tree for the builders too.

###### [Note] 
- Builders have often a fluent interface, see the mock builder 
of PHPUnit for example.