#!/bin/bash

set -xe

if [[ -z "$SSH_AGENT_PID" ]]
then
    exec ssh-agent bash -c "ssh-add; $0"
fi

cd ~webprosjekt-gruppe31/webprosjekt-gruppe31/
git pull

rsync -av --delete -e "ssh -T" www/ s193364@studssh.cs.hioa.no:www/webprosjekt-gruppe31/
