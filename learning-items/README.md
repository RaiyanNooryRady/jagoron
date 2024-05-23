# Some important topics used in the theme:

# NAMESPACES
▷ A way of encapsulating items
▷ Like a virtual folder or directory defined with
namespace keyword at the top of the class file
followed by the name you like.
▷ Allow you to have two or more classes with the
same name in different namespaced directories

# Using class in the standard way:
class Product {} // define.
$product = new Product(); // use.

# Using Namespaces:
namespace App;
class Product {}
$product = new App\Product();
or,
use App;
$product = new Product();

# AUTOLOADERS
▷ Loading classes or interfaces automatically
▷ to avoid include_once, required_once several times

# SPL_AUTOLOAD_REGISTER()
▷ Registers any no. of autoloaders
▷ Enables classes and interfaces to be automatically
loaded if they are currently not defined