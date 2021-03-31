#!/bin/sh

cd $(dirname $0)
sass --watch --style expanded style.scss:style.css