# Mediator
## Purpose:

- This pattern provides an easy way to decouple many components working
together. It is a good alternative to "Observer" if you have a "central intelligence",
like a controller (but not in the sense of the MVC).
- All components, called "Colleague", are only coupled to the Mediator interface
and it is a good thing because in OOP, one good friend is better than many.
This is the key-feature of this pattern.