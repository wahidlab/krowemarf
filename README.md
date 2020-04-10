# krowemarf
It is supposed to be a framework

##Installation

 To simplify and provides the same, easy workflow we use [Vagrant](|https://www.vagrantup.com).
 It will install all your software requirements, packages, operating system configuration.
 * ###### Download link: [https://www.vagrantup.com/downloads.html](https://www.vagrantup.com/downloads.html).
 After install Vagrant just run command bellow in project directory:
```bash
vagrant up
```
it take a few minute to download the requirements, here is a example of success build:
```bash
PLAY RECAP *********************************************************************
localhost                  : ok=15   changed=6    unreachable=0    failed=0
```
Here we go, here is the address `http://10.0.0.100`, you can see the home page. Also you can go to your host file and change it to any thing you like,
* mac os / linux: `/etc/hosts` 
* windows: `c:\Windows\System32\Drivers\etc\hosts` <br />
Open **hosts** file and add this `10.0.0.100    krowemarf.com` to end of the file and save it.