# Sagawa module
A project for Sagawa Api.

# Step by step use this package:

## 1. Install composer
You can use Composer to install and manage this package easily.

## 2. Install package:
Use composer to install this package:

composer require sagawa/sagawa

## 3. How to use this package:
* If you don't use framework.You need add first:<br/><br/>
<blockquote>
require_once __DIR__ . '/vendor/autoload.php';<br/>
use oro\Sagawa\Sagawa;<br/>
$sagawa = new Sagawa($Username,$Password,$RequestData);
</blockquote>

* If you don't use framework. You just include this and use:<br/><br/>
<blockquote>
use oro\Sagawa\Sagawa;<br/>
$sagawa = new Sagawa($Username,$Password,$RequestData);
</blockquote>

Note:
- $Username is username from Sagawa.
- $Password is password from Sagawa.
- $RequestData is data format from Sagawa

## 4. Methods in package:
* Create order:
<blockquote>
$sagawainfo = $sagawa->receive_order();
</blockquote>

* Tracking order:
<blockquote>
$sagawainfo = $sagawa->tracking_order();
</blockquote>

* Fee order:
<blockquote>
$sagawainfo = $sagawa->fee();
</blockquote>
