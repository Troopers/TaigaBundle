[![Troopers](https://cloud.githubusercontent.com/assets/618536/18787530/83cf424e-81a3-11e6-8f66-cde3ec5fa82a.png)](http://troopers.agency)


TaigaBundle
=================================================
TaigaBundle helps to use the [Taiga PHP SDK](https://github.com/Troopers/taiga-php-sdk) to work with
[Taiga REST API](https://taigaio.github.io/taiga-doc/dist/api.html).


Installation with Composer
-------------------------------------------------
A composer.json file is available in the repository and it has been referenced on packagist. 

The installation with Composer is easy, reliable : 
Step 1 - Add the Taiga SDK as a dependency in your composer.json file as follow :
```json
    "require": {
        ...
        "troopers/taiga-bundle": "^0.1"
    },
```

Step 2 - Update your dependencies with Composer

    php composer.phar update troopers/taiga-bundle

Configuration
-------------------------------------------------

To authenticate requests, the taiga php-sdk expect a token.
Follow these instructions to [generate your token](https://taigaio.github.io/taiga-doc/dist/api.html#auth-normal-login).

Then declare the config like below:

```yml
taiga:
  api_token: %taiga_api_token%
```


Examples
-------------------------------------------------

###get Taiga API service

    $taiga = $this->container->get('taiga.api');


###get my projects

```php
    $projects = $taiga->projects->getList([
        'member' => $taiga->users->getMe()->id
    ]);
```

###get projects stats

```php
    foreach ($projects as $project) {
        $project->stats = $taiga->projects->getProjectIssueStats($project->id);
    }
```

License
-------------------------------------------------
TaigaBundle and taiga/php-sdk are distributed under MIT license, see LICENSE file.


Contacts
-------------------------------------------------
Report bugs or suggest features using
[issue tracker at GitHub](https://github.com/Troopers/TaigaBundle/issues).