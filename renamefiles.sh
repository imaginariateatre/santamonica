#!/bin/bash
shopt -s globstar  ##globstar will let us match files recursively
files=( ./*/*.jpg )  ##Array containing matched files, mention where to search and what files here
old=""
foo=1
for i in "${files[@]}"; do 
    echo $i
    d="${i%/*}"  ##Parameter expansion, gets the path upto the parent directory
    d_="${d##*/}"  ##gets the name of parent directory
    if [ "$old" = "$d_" ];
    then 
        foo=$((foo+1)) 
    else
        old=${d_}
        foo=1
    fi
    f="${i##*/}"  ##gets the file name
        #echo "$d"/"${d_}"_"$(date -r "$i" +"%Y%m%d" )_"${foo}".jpg"
        mv -n "$i" "$d"/"${d_}"_"$(date -r "$i" +"%Y%m%d" )_"${foo}".jpg"
done