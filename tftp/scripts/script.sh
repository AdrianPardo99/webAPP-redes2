#!/usr/bin/expect
set ip [lindex $argv 0]
set port [lindex $argv 1]
set timeout 5
spawn telnet $ip $port
expect "'^]'."
send "\r"
expect "R"
send "\r\rcopy running-config tftp\r"
expect "?"
send "192.168.1.10\r"
expect "?"
send "\r"
sleep 2
