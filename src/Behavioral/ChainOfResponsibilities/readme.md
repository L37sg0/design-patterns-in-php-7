# Chain Of Responsibilities
## Purpose:

- To build a chain of objects to handle a call in sequential order. If one cannot
handle a call, it delegates the call to the next in the chain and so forth.

###### [Examples:]

- Logging framework, where each chain element decides autonomously what to do
with a log message.
- A Spam filter.
- Caching: first object is an instance of e.g. a Memcached Interface, if that
"misses" it delegates the call to the database interface.