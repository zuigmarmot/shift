#!/bin/bash
set -x
oc delete all --selector app=mydockerapp
oc delete all --selector name=mydockerapp
oc delete imagestream mydockerapp
