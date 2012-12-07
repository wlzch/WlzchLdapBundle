WlzchLdapBundle
===============

Using ldap authentication with FOSUserBundle and SonataUserBundle.

# Installation
1. Download WlzchLdapBundle using composer
2. Enable the Bundle
3. Configure your application's security.yml

## Step 1: Download WlzchLdapBundle using composer
```json
{
    "require": {
        "wlzch/ldap-bundle": "*"
    }
}
```

## Step 2: Enable the bundle
```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    bundles = array(
        // ...
        new Wlzch\LdapBundle\WlzchLdapBundle()
    )
}
```
