#!/usr/bin/python
# -*- coding:utf-8 -*-
import os
import sys

cmd = "ssh maverick@10.1.1.27 -p22000"

def Ssh():
    # print cmd
    os.system(cmd)

if __name__ == "__main__":
    # pwd: 111111
    Ssh()
