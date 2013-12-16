#!/bin/bash
echo "Compiling css..."
for i in ./*.css;
do
	echo "File:" $i
	java -jar css_compiler.jar $i -o ./compiled/$i
done
echo "...complete"