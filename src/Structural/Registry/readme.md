# Registry
## Purpose:

- To implement a central storage for objects often used throughout the application,
is typically implemented using an abstract class with only static methods (or
using the Singleton pattern).
- Remember that this introduces global state, which should be avoided at all
times. Instead, implement it using Dependency Injection.