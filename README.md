# Craft CMS Base Image

## Development Environment

### Prerequisites

The only requirement is Docker.

### Testing

Run `docker build --rm .` in a terminal

### Extra Notes

About the Craft configuration files in `config/craft`, `general.php` is provided
as an example and probably needs to be overridden as per your project
requirements, while `db.php` and `rediscache.php` should never be overridden
because they are fully controlled via the environment variables.
