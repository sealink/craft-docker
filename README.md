# Craft CMS Base Image

## Craft Version

`sealink/craft:0.1` is mapped to Craft CMS 2.6.x.  You can expect it to contain
the latest Craft patch version of 2.6.

## Development Environment

### Prerequisites

The only requirement is Docker.

### Testing

Run `docker build --rm .` in a terminal

## Extra Notes

### Configuration overriding

About the Craft configuration files in `config/craft`, you can override
`general.php` with `overrides/general.php` in your project as per your project
requirements, while `db.php` and `rediscache.php` should never be overridden
because they are fully controlled via the environment variables.

### Support zero-downtime deployment

When upgrading Craft schema or plugins, i.e. data migration, the default Craft
behaviour requires us to press a button on the admin page.  This base image
automates that so that upgrading Craft schema and plugins is done automatically
before starting the web server.

Parallel deployment is supported.  When deploying a new version to multiple
instances at the same time, one of the instances will start the data migration;
all other instances will wait for the data migration to finish first before
continuing to prevent race conditions.

This logic is as follows.

1. Obtain the Redis lock.
1. Halt the deployment if the previous migration failed.
1. Mark the migration failed first as a precaution against extreme cases, e.g.
   complete network failure.
1. Run the migration task.
1. If the task failed, halt the deployment.
1. Remove the failure marker from Redis.
1. Release the lock.
1. Start the webserver.

In case of migration failure, all the other deployment will not start because
Redis will have a key named as `migration-failed` as the failure marker.
`/container-scripts/synchronised-migration/clear-error` can be used to remove
the failure marker after the issue is fixed manually.
