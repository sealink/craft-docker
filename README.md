# Craft CMS Base Image

## Craft Version

This is the PHP base image for running Craft CMS.

To use this, include `FROM sealink/craft` in the Dockerfile.

The optional `CMD` entry will be executed before launching.  For example, it
can be used to write the `license.key` file.

## Development Environment

### Prerequisites

The only requirement is Docker.

### Testing

Run `docker build --rm .` in a terminal
