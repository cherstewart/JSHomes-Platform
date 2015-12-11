# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

box = "phusion/ubuntu-14.04-amd64"
box_url = "https://atlas.hashicorp.com/phusion/boxes/ubuntu-14.04-amd64/versions/2014.04.30/providers/virtualbox.box"

shared_path = "platform/"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = box
  config.vm.box_url = box_url

  # Disable automatic box update checking. If you disable this, then
  # boxes will only be checked for updates when the user runs
  # `vagrant box outdated`. This is not recommended.
  # config.vm.box_check_update = false

  # Create a forwarded port mapping which allows access to a specific port
  # within the machine from a port on the host machine. In the example below,
  # accessing "localhost:8080" will access port 80 on the guest machine.
  config.vm.network "forwarded_port", guest: 9888, host: 9888

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  # config.vm.network "private_network", ip: "192.168.33.10"

  # Create a public network, which generally matched to bridged network.
  # Bridged networks make the machine appear as another physical device on
  # your network.
  # config.vm.network "public_network"

  # If true, then any SSH connections made will enable agent forwarding.
  # Default value: false
  # config.ssh.forward_agent = true

  # Share an additional folder to the guest VM. The first argument is
  # the path on the host to the actual folder. The second argument is
  # the path on the guest to mount the folder. And the optional third
  # argument is a set of non-required options.
  config.vm.synced_folder shared_path, "/home/vagrant/platform/"

  config.vm.provision "shell", inline: $SHELL
  # or use separated #bin/bash sh script by defining the file path
  # config.vm.provision :shell, path: "bootstrap.sh"

  config.vm.provider "virtualbox" do |vb|
    # Boot with headless mode or GUI mode
    vb.gui = false

    # Use VBoxManage to customize the VM. change memory:
    vb.customize ["modifyvm", :id, "--memory", "2048"]

    vb.destroy_unused_network_interfaces = true
  end
end

$SHELL = <<-CONTENTS

apt-key adv --keyserver hkp://keyserver.ubuntu.com:80 --recv-keys 36A1D7869245C8950F966E92D8576A8BA88D21E9

# refresh and get the latest docker version
sh -c "echo deb http://get.docker.io/ubuntu docker main > /etc/apt/sources.list.d/docker.list"

apt-get -yqq update

# Install basic dependencies
apt-get install -y curl

# Install Docker
apt-get -q -y --force-yes install lxc-docker

# Install docker-compose
curl -L https://github.com/docker/compose/releases/download/1.3.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
chmod +x /usr/local/bin/docker-compose

# add user `vagrant` to the docker group
gpasswd -a vagrant docker
service docker restart

docker run --rm -v /vagrant/platform:/app composer/composer install

CONTENTS
