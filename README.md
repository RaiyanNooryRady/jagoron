# jagoron
A New Jagoron WordPress Theme

# Some important topics used in the theme:

# NAMESPACES
▷ A way of encapsulating items
▷ Like a virtual folder or directory defined with
namespace keyword at the top of the class file
followed by the name you like.
▷ Allow you to have two or more classes with the
same name in different namespaced directories

# Using class in the standard way:
class Product {} // define
$product = new Product(); // use

# Using Namespaces:
namespace App;
class Product {}
$product = new App\Product();
or,
use App;
$product = new Product();