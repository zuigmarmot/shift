#!/bin/bash
set -x
oc create -f templates/imagestream.yaml
oc create -f templates/buildconfig.yaml

oc new-app mydockerapp --allow-missing-imagestream-tags
oc start-build mydockerapp -F

oc create -f templates/service.yaml
oc expose service mydockerapp
