FROM gitpod/workspace-mysql:latest

# optional: use a custom apache config.
COPY apache.conf /etc/apache2/apache2.conf

# optional: change document root folder. It's relative to your git working copy.
ENV APACHE_DOCROOT_IN_REPO="public"

# Export environment variables
ENV DATABASE_USER=root
ENV DATABASE_HOST=127.0.0.1
ENV DATABASE_PASSWORD=