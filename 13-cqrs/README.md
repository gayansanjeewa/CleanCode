# CQRS - Command Query Responsibility Segregation

### What? 
It states that every method should either be a command that performs an action, or a query that returns data to the caller, but **not both**.

<br>
<br>

**Traditional way**

![](../images/66254935-eb4a3680-e79a-11e9-8496-821f9ca5c78a.png)

<br>
<br>

**CQRS**

![](../images/66254944-05841480-e79b-11e9-9569-50f2fa8ff86b.png)

<br>
<br>

### When?
CQRS is not suitable for small applications that do not require a high degree of scalability and that do not have complex domain logic, and for applications that have a direct impact on life or health.

<br>
<br>

### Why?
  * Maintainability
  * Scalability
  * Easy to implement event sourcing and DDD

<br>
<br>

### How?