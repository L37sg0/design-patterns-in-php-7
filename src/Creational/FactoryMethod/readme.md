# Factory Method
## Purpose:

- The good point over is the SimpleFactory is you can subclass it to
implement different ways to create objects.
- For simple cases, this abstract class could be just an interface.
- This pattern is a "real" Design Pattern because it achieves
the Dependency Inversion principle aka the "D" in SOLID principles.
- It means the FactoryMethod class depends on abstractions, not concrete
classes. This is the real trick compared to SimpleFactory or StaticFactory.