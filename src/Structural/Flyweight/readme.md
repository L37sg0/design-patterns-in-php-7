# Flyweight
## Purpose:

- To minimise memory usage, a Flyweight shares as much as possible memory with
similar objects.
- It is needed when a large amount of objects is used that don't differ much
in state.
- A common practice is to hold state in external data structures and pass them
to the flyweight object when needed.