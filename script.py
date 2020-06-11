#!/bin/python
from subprocess import PIPE, Popen

cmd = 'ls -la'
stream = Popen(['ssh', 'd3vcr4ck@192.168.100.71', cmd],
                    stdin=PIPE, stdout=PIPE)
rsp = stream.stdout.read().decode('utf-8')
print(rsp) 
