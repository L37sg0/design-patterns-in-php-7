# Command
## Purpose

- To encapsulate invocation and decoupling.
- We have an Invoker and Receiver. This pattern uses a "Command" to delegate the
method call against Receiver and presents the same method "execute". Therefor,
the Invoker just knows to call "execute" to process the Command of the client.
The Receiver is decoupled from the Invoker.
- The second aspect of this pattern is the "undo()", which undoes the method
"execute()". Command can also be aggregated to combine more complex commands
with minimum copy-paste and relying on composition over inheritance.

###### [Examples:]

- A text editor: all events are commands which can be undone, stacked and saved.
- Big CLI tools use subcommands to distribute various tasks and pack them in
"modules", each of these can be implemented with the Command pattern (e.g. vagrant).