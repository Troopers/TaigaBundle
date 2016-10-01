[![Troopers](https://cloud.githubusercontent.com/assets/618536/18787530/83cf424e-81a3-11e6-8f66-cde3ec5fa82a.png)](http://troopers.agency)


TaigaBundle
=================================================
TaigaBundle helps to use the [Taiga PHP SDK](https://github.com/Troopers/taiga-php-sdk) to work with
[Taiga REST API](https://taigaio.github.io/taiga-doc/dist/api.html).


Installation with Composer
-------------------------------------------------
A composer.json file is available in the repository and it has been referenced on packagist. 

Step 1 - Require it with Composer

    php composer.phar require troopers/taiga-bundle:^0.1 --update-with-dependencies

Step 2 - Declare the bundle in your `AppKernel.php`

    new TaigaBundle\TaigaBundle(),

Configuration
-------------------------------------------------

To authenticate requests, the taiga php-sdk expect a token.
Follow these instructions to [generate your token](https://taigaio.github.io/taiga-doc/dist/api.html#auth-normal-login).

Then declare the config like below:

```yml
taiga:
  api_token: %taiga_api_token%
```


Some use examples
-------------------------------------------------

###get Taiga API service

    $taiga = $this->container->get('taiga.api');


###get my projects

```php
    $projects = $taiga->projects->getList([
        'member' => $taiga->users->getMe()->id
    ]);
```

###get project's sprints (milestones)

```php
    $sprints[$project->name] = $taiga->milestones->getList(
        ['project' => $project->id]
    );
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
