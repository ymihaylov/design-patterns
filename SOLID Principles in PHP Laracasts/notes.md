# Single Responsibility
One class / one method should have single responibility
You should have only one reason to change

# Open/Close Principles
https://en.wikipedia.org/wiki/Open/closed_principle
Entities (Class, methods, functions etc.) should be open for extension but closed for modification.
## Open for extension
    - We can simple change a behavior of the enitity. We can add new fields new methods etc.
    - A module will be said to be open if it is still available for extension. For example, it should be possible to add fields to the data structures it contains, or new elements to the set of functions it performs.
## Closed for modification
    - Its a goal. Its very difficult to follow perfectly. Change behavior without source code.
    - A module will be said to be closed if it is available for use by other modules. This assumes that the module has been given a weill-defined, stable description (the interface in the sense of information hiding).

## Separate extensible behaviour behind an interface and flip the dependencies.
Type checking breaking the principle

# Liskov Substitution
Code to interface is goot pratice
Let q(x) be a property provable about objects x of type T.
Then q(y) should be provable for objects y of type S where S is subtype of T

Derived classes must be substitutable for their base classes.

1. Signature must match
2. Preconditions cant be greater
3. Post conditions at least equal to
4. Exception types must match

# Interface segregation
A client shoul not be forcet to implement an interface that it doesnt use

# Dependancy Inversion
https://en.wikipedia.org/wiki/Dependency_inversion_principle
https://laracasts.com/series/solid-principles-in-php/episodes/5?autoplay=true
Depend on abstractions not on concretions.
Dependancy Inversion != Dependency Injection
High level modules should not depend low level modules.

High level code isn't as concerned with details.
Low level code is more concerned with details and specifics.

One class shouldnt depend on specific implementation

Inversion of control

All of this is about decoupling code.
