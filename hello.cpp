#include <iostream>
using namespace std;

class Solution{
    private: 
        int size;
    public:
        int property;
        Solution(int val){
            property = val;
        }
        int sum(int n){
            return property+n;
        }  
        void setSize(int val){
            size = val;
        }
        int getSize(){
            return size;
        }
};

class MySolution : public Solution{
    public:
        int l;
        MySolution(int dum) : Solution(dum){
            l = dum;
        }
        string model;
};

int main(){
    cout<<"hello";
    MySolution obj(5);
    obj.setSize(23232);
    int val = obj.sum(2);
    cout<<"val "<<val<<endl;
    cout<<"size "<<obj.getSize();
    cout<<obj.model<<endl;
}