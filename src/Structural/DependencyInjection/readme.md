# Dependency Injection
## Purpose:

- To implement a loosely coupled architecture in order to get better testable,
maintainable and extendable code.

## Usage:

- "DatabaseConfiguration" gets
injected and "DatabaseConnection" will get all that it needs from $config.
- Without D.I. the configuration would be created directly in
"DatabaseConnection", which is not very good for testing and extending it.

###### [Examples:]

- The Doctrine2 ORM uses dependency injection e.g. for configuration that
is injected into a "Connection" object. For testing purposes, one can easily
create a mock object of the configuration and inject that into the
"Connection" object.
- Many frameworks already have containers for D.I. that create objects via
a configuration array and inject them where needed (i.e. in Controllers).