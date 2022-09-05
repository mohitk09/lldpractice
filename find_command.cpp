/*
Requirements
1. Find all files which are greater than 5 MB
2. Find all the XML files
file class{
    getname() 
    directorylistfile()
    getfile()
}
*/

#include <iostream>
using namespace std;

struct File{
    string name;
    int size;
    string content;
    bool isDirectory;
    File* children[];
};

class Filter{
    public:
        virtual bool apply(File* file) = 0;
};

class MinSizeFilter : Filter{
  int minSize;
  public:
    MinSizeFilter(int minSize){
        minSize = minSize;
    }
    bool apply(File* file){
        return file->size > minSize;
    }
};

class FindCommand{
    
};