!#/bin/bash
set -x

oc edit bc/mydockerapp
oc start-build mydockerapp
