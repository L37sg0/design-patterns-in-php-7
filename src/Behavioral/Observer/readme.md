# Observer
## Purpose:

- To implement a publish/subscribe behaviour to an object, whenever a "Subject"
object changes its state, the attached "Observers" will be notified. It is used
to shorten the amount of coupled objects and uses loose coupling instead.

###### [Examples:]

- A message queue system is observed to show the progress of a job in a GUI

###### [Note:]

- PHP already defines two interfaces that can help to implement this pattern:
1. SplObserver
2. SplSubject