# EncryptDecrypt
### Encrypt and Decrypt with a secret key

## Install via Composer
```sh
composer require micheledef/encrypt-decrypt
```

## Example of use

```sh
require 'vendor/autoload.php';

use Micheledef\EncryptDecrypt\Encrypt as Encrypt;
use Micheledef\EncryptDecrypt\Decrypt as Decrypt;

$string = "Hello World";
$secretkey = "secretkey";

$encrypt = new Encrypt($string, $secretkey);

echo $encrypt;
// wdjRz+GFy9rX5dc=

$decrypt = new Decrypt($encrypt, $secretkey);
echo $decrypt;
// Hello World

```
