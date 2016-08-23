# workshops

This repository is a collection of workshops.

# Usage of Examples

In this repository are working code examples. To get them run do the steps described next.

## Requirements

* [Git](https://git-scm.com/)
* [PHP](http://php.net/) > 5.6 or > 7.0
* [Composer](https://getcomposer.org/)
* [Oracle VirtualBox](https://www.virtualbox.org/)
* [Vagrant](https://www.vagrantup.com/)

## Setup

First execute the following on a command line interface of your host system:

    git clone https://github.com/rebel-l/workshops.git
    composer install
    vagrant up
    
Now connect with an ssh client to virtual machine:

    ssh workshop.dev
    sudo apt-get install php7.0-xml
    switchXdebug 1  # shortcut enabling xdebug
    cdproj          # shortcut to get to project folder
    
To execute the examples do it the following way:

    vendor/bin/phpunit -c AutomatedTests/examples/php/04/good/phpunit.xml
