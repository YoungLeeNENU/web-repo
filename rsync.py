#!/usr/bin/python
#-*- coding:utf-8 -*-
import os
import sys

rsync_taomee = "sudo rsync -avz . '-e ssh -p22000' maverick@10.1.1.27:project"

def Rsync():
    os.system(rsync_taomee)

if __name__ == '__main__':
    Rsync()    
