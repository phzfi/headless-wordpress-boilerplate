#!/usr/bin/env bash

source ./.env

if [[ $WP_HOME == *"https://"* ]]
  then
    WP_HOME=${WP_HOME%8}
fi

if [[ $WP_HOME == *"http://"* ]]
  then
    WP_HOME=${WP_HOME%7}
fi

DIRVAR=${PWD##*/}
DIR=$(dirname $DIRVAR)
BASE=$(basename $DIRVAR)

hs-wp-create -nvced $WP_HOME -o $DIR -f $BASE
