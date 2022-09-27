# Service Locator
## This is considered to be an anti-pattern!

- Service Locator is considered for some people as anti-pattern.
It violated the Dependency Inversion principle. Service Locator hides class
dependencies instead of exposing them as you would do using the Dependency
Injection. In case of changes of those dependencies you risk
to break the functionality of classes which are using them, making your system
- difficult to maintain.

## Purpose:

- To implement a loosely coupled architecture in order to get better testable,
maintainable and extendable code. DI pattern and Service Locator pattern are an
implementation of the Inverse of Control pattern.

## Usage:

- With Service Locator you can register a service for a given interface. By using
the interface you can retrieve the service and use it in the classes of the
application without knowing its implementation. You can configure and inject
the Service Locator object on bootstrap.