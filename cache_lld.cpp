#include <iostream>
#include<unordered_map>

using namespace std;

class Cache{
    private:
        LRUEvictionPolicy evictionPolicy;
        Storage storage;
    public:
        Cache(LRUEvictionPolicy policy, Storage storage){
            this->evictionPolicy = policy;
            this->storage = storage;
        }

        void put(string key, string value){
            this->storage.add(key, value);
            this->evictionPolicy.keyAccessed(key);
            return;
        }
        
        string get(string key){
            string val = this->storage.get(key);
            this->evictionPolicy.keyAccessed(key);
            return val;
        }
};

class DLL{
  public:
    string key;
    string val;
    DLL* next;
    DLL* prev;
    DLL(){
        
    }
    DLL(int k, int v){
        key = k;
        val = v;
    } 
    void detatchNode(DLL* node){
        return;
    } 
    void attachNode(DLL* node){
        return;
    }
};

class Storage{
    private:
        int capacity;
    public:
        unordered_map<string, string> store;
        Storage(){
            
        }
        Storage(int capcity){
            this->capacity = capacity;
        }
        void add(string key, string value){
            store[key] = value;
        }

        string get(string key){
            return store[key];
        }
        
        void remove(string key){
            if(store.find(key) == store.end()){
                return;
            }
            store.erase(key);
        }
};

class LRUEvictionPolicy{
  private:
    DLL dll;
    unordered_map<string, DLL*> mapper;
  public:
    LRUEvictionPolicy(){
    }
    void evictKey(string key){
        dll.detatchNode(mapper[key]);
        return; 
    }
    
    void keyAccessed(string key){
        dll.detatchNode(mapper[key]);
        dll.attachNode(mapper[key]);
        return;   
    }
};

