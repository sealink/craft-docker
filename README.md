# Craft CMS Base Image

## Development Environment

### Prerequisites

The only requirement is Docker.

### Testing

Run `docker build --rm .` in a terminal

### Extra Notes

About the Craft configuration files in `config/craft`, you can override
`general.php` with `overrides/general.php` in your project as per your project
requirements, while `db.php` and `rediscache.php` should never be overridden
because they are fully controlled via the environment variables.
