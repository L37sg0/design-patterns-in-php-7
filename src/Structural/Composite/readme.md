# Composite
## Purpose:

- To treat a group of objects the same way as a single instance of the object.
###### [Examples:]

- A form class instance handles all its form elements like a 
single instance of the form, when render() is called, it subsequently runs
through all its child elements and calls render() on them.