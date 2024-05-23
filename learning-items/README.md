# Some important topics used in the theme:

# NAMESPACES
- A way of encapsulating items
- Like a virtual folder or directory defined with
namespace keyword at the top of the class file
followed by the name you like.
- Allow you to have two or more classes with the
same name in different namespaced directories

# Using class in the standard way:
▷ Standard way:
- class Product {} // define
- $product = new Product(); // use

▷ Using Namespaces:

- namespace App;
- class Product {}
- $product = new App\Product();
- or,
- use App;
- $product = new Product();

# AUTOLOADERS
- Loading classes or interfaces automatically
- to avoid include_once, required_once several times

▷ SPL_AUTOLOAD_REGISTER()
- Registers any no. of autoloaders
- Enables classes and interfaces to be automatically
loaded if they are currently not defined
- Explained in my-php folder

# TRAITS
- Earlier we could only inherit properties and
Functions from one class to another, by
extending them.
- If we want the properties/methods of inherited
class into another, we need to extend it again which creates chain of inheritance.
- PHP (5.4+) introduced a mechanism for code
reusability called traits
![alt text](traits.png)