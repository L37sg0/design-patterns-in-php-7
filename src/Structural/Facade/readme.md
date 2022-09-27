# Facade
## Purpose:

- The primary goal of a Facade Pattern is not to avoid you having
to read the manual of a complex API. It's only a side-effect. The first
goal is to reduce coupling and follow the Law of Demeter.
- A Facade is meant to decouple a client and a sub-system by embedding
many (but sometimes just one) interface, and of course to reduce complexity.
1. A Facade does not forbid you to access tho the sub-system.
2. You can (you should) have multiple facades for one sub-system.

- That is why a good facade has no "new" in it. If there are multiple
creations for each method, it is not a Facade.