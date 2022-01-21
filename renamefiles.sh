#!/bin/bash
shopt -s globstar  ##globstar will let us match files recursively
files=( /home/ccordero/imaginaria-git/santamonica/entreacte/*/*.jpg )  ##Array containing matched files, mention where to search and what files here
for i in "${files[@]}"; do 
    d="${i%/*}"  ##Parameter expansion, gets the path upto the parent directory
    d_="${d##*/}"  ##gets the name of parent directory
    f="${i##*/}"  ##gets the file name
        mv -n "$i" "$d"/"${d_}"_"$(date -r "$i" +"%Y%m%d_%H%M%S").jpg"
done