# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = "Ubuntu14.04LTS"
    config.vm.box_url = "https://www.dropbox.com/s/gzbxpgjih67uu2t/ubuntu1404lts5018.box?dl=1"
    config.ssh.insert_key = false

    # Host manager setup
    config.hostmanager.enabled				= true
    config.hostmanager.manage_host			= true
    config.hostmanager.manage_guest			= true
    config.hostmanager.ignore_private_ip	= false
    config.hostmanager.include_offline		= true

    config.vm.define "Workshop" do |ws|
        ws.vm.network "private_network", ip: "192.168.35.10"
        ws.vm.hostname = 'workshop.dev'

        ws.vm.provider "virtualbox" do |vb|
            vb.name = "Workshop"
        end

        # Chef Configuration
        ws.vm.provision "chef_solo" do |chef|
            chef.cookbooks_path = "./vendor/rebel-l/sisa/cookbooks"
            chef.roles_path = "./vendor/rebel-l/sisa/roles"
            chef.environments_path = "./vendor/rebel-l/sisa/environments"
            chef.data_bags_path = "./vendor/rebel-l/sisa/data_bags"
            chef.add_role "Default"
            chef.environment = "development"
            chef.add_recipe "NodeJs"
            chef.add_recipe "Php::cli"
            chef.add_recipe "Php::composer"
        end
    end
end
