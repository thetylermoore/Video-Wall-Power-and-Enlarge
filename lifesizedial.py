#!/usr/bin/python
# coding: utf-8
import pexpect
import time
child = pexpect.spawn('telnet 1.1.1.1 10008')
time.sleep(2)
child.expect('Login:')
time.sleep(2)
child.sendline('admin')
time.sleep(2)
child.expect('Password:')
time.sleep(2)
child.sendline('admin_password')
time.sleep(2)
child.sendline ('POWR   0')
#time.sleep(2);
#child.expect ('Chn2');
#time.sleep(2);
#child.sendline ('2!');
#time.sleep(2)
#child.close()
#time.sleep(2)
#child.sendline('^]')
#time.sleep(2)
#child.expect('telnet>')
#time.sleep(2)
#child.sendline('quit')
print "turned off TV Q1"
#child = pexpect.spawn('telnet 1.1.1.1 10008')
#time.sleep(2)
#child.expect('Login:')
#time.sleep(2)
#child.sendline('admin')
#time.sleep(2)
#child.expect('Password:')
#time.sleep(2)
#child.sendline('admin_password')
#time.sleep(2)
#child.sendline ('POWR   0')
#child.close()
#time.sleep(2)
#print "turned off TV Q?"
#child = pexpect.spawn('telnet 1.1.1.1 10008')
#time.sleep(2)
#child.expect('Login:')
#time.sleep(2)
#child.sendline('admin')
#time.sleep(2)
#child.expect('Password:')
#time.sleep(2)
#child.sendline('admin_password')
#time.sleep(2)
#child.sendline ('POWR   0')
#print "turned off TV Q??"
#child = pexpect.spawn('telnet 1.1.1.1 10008')
#time.sleep(2)
#child.expect('Login:')
#time.sleep(2)
#child.sendline('admin')
#time.sleep(2)
#child.expect('Password:')
#time.sleep(2)
#child.sendline('admin_password')
#time.sleep(2)
#child.sendline ('POWR   0')
#child.close()
#time.sleep(2)
#print "turned off TV Q???"
