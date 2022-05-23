# Drupal Pantheon Integration
This project integrates all the required dependencies for pantheon. It uses `drupal/core-composer-scaffold` for integration of scripts.

It includes
- [pantheon-systems/drupal-integrations](https://github.com/pantheon-systems/drupal-integrations)
- [Quicksliver Hooks](https://github.com/pantheon-systems/quicksilver-examples)
- [Github Action Scripts](https://docs.github.com/en/actions)
- [Redis](https://drupal.org/project/redis)
- [Pantheon Advanced Page Cache](https://www.drupal.org/project/pantheon_advanced_page_cache)

## Setup
This project must be enabled in the top-level composer.json file, or it will be ignored and will not perform any of its functions.

- Add this project to your Drupal 9 codebase via composer.
```
composer require digitalpolygon/pantheon-drupal-integration
```

- Permit scaffolding from the project by adding
```
{
    ...
    "extra": {
        "drupal-scaffold": {
            "allowed-packages": [
                "digitalpolygon/pantheon-drupal-integration",
                "pantheon-systems/drupal-integrations"
            ]
        }
    }
}
```

- If you already have a settings.php, please remove it to allow it to create its own settings.php for pantheon. Please make sure to take backup.
