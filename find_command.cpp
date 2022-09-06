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
#include <vector>
using namespace std;

struct File{
    string name;
    int size;
    bool isDirectory;
    vector<File> children;
};

class Filter{
    public:
        virtual bool apply(File file) = 0;
};

class MinSizeFilter : Filter{
  int minSize;
  public:
    MinSizeFilter(int minSize){
        minSize = minSize;
    }
    bool apply(File file){
        return file.size > minSize;
    }
};

class FindCommand{
    public:
       vector<File> findWithFilters(File directory, vector<MinSizeFilter> filters){
            cout<<"bname "<<directory.name<<endl;
            if(!directory.isDirectory){
                throw std::invalid_argument("Invalid argument passed");
            }
            vector<File> output;
            findWithFilters(directory, filters, output);
            return output;
       }
    private:
        void findWithFilters(File directory, vector<MinSizeFilter> filters, vector<File> output){
            if(!directory.children.size()){
                return;
            }
            for(File file: directory.children){
                if(file.isDirectory){
                    findWithFilters(file, filters, output);
                }else{
                    bool isSelectedFile = true;
                    for(MinSizeFilter filter : filters){
                        if(!filter.apply(file)){
                            isSelectedFile = false;
                        }
                    }
                    if(isSelectedFile){
                        output.push_back(file);
                    }
                }
            }
        }
};

int main(){
    FindCommand f;
    File file;
    file.name = "Mohit";
    file.isDirectory = true;
    file.size = 2;
    MinSizeFilter mn(5);
    vector<MinSizeFilter> temp;
    temp.push_back(mn);
    f.findWithFilters(file, temp);
}