#!/bin/bash

openssl req -x509 -nodes -newkey rsa:4096 -days 30\
    -keyout "/etc/nginx/data/privkey.pem" \
    -out "/etc/nginx/data/fullchain.pem" \
    -subj "/CN=App"

exec "$@"
