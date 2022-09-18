#include<iostream>
#include<unordered_map>
using namespace std;

class AckHandler{
    public:
        virtual void onAck() = 0;
        virtual void onNack() = 0;
};

class Message : AckHandler{
    private:
        int id;
        string publish_time;
        int delievery_attempt;
    public:
        string data;
        unordered_map<string, string> tags;
        int ordering_key;     
        void onAck(){
            return;
        }
        void onNack(){
            return;
        }        
};

