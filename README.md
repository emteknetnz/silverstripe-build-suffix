# Silverstripe Build Suffix

## Introduction
This module updates the ?m= suffix used js and css files by Requirements to a ?b= suffix that is the timestamp of the last dev/build.

The general idea is that front-end assets will be cached on a per-deployment basis, because dev/build is (or at least should be) run as part of the deployment process.

If your deployment process does not include a dev/build, then you probably should not use this module. 

## Usage
Just install the module and the suffix will be automatically used on test and live environments.

Dev environments will continue to use the default ?m= suffix so that newly built front end assets don't get stuck in a browser cache.

You can change this behaviour for different environments by updating config.yml in your mysite folder, e.g.

BuiltAtRequirementsBackend:
  use_backend_dev: true

## Requirements
SilverStripe 3

There is currently no SilverStripe 4 version of this module

## Installation
composer require emteknetnz/silverstripe-build-suffix:^1
