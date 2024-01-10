#include<iostream>
#include<map>
#include<vector>
using namespace std;

class Message{
    private:
        string message;
        int orderingKey;
        string publishTime;
        int delieveryAttempt;
        IAckHandler ackh;
    public:
        string getMessage(){
            return this->message;
        }
};

//Interface
class IAckHandler{
    public:
      virtual void OnAck() = 0;
      virtual void OnNack() = 0; 
};

class TopicSubsriber{
    private:
        std::atomic<int> offset;
        ISubsciber subscriber;
    public:
        TopicSubsriber(ISubsciber subscriber){
            this->subscriber = subscriber;
            this->offset = 0;
        }
};

class Topic{
    private:
        string name;
        string ID;
        vector<Message> messages;
        vector<TopicSubsriber> subscribers;
    public:
        Topic(){
            
        }

        void addMessage(Message message){
            messages.push_back(message);
        }

        void addSubscriber(TopicSubsriber subsciber){
            subscribers.push_back(subsciber);
        }
};

// Interface
class ISubsciber{
    public:
        virtual string getID() = 0;
        virtual void consume(Message message) = 0;
};

class TopicHandler{
    private:
        Topic topic;
    public:
        void publish(){
        }
};

class Queue{
  private:
    map<string, TopicHandler> topicProcessors; // to maintain multiple topic processors
  public:
    Queue(){
        
    } 

    Topic createTopic(string topicName){
        Topic topic;
        return topic;
    }
    
    void subscribe(Topic topic, ISubsciber subscriber){
        topic.addSubscriber(TopicSubsriber(subscriber));
        return;
    }
    
    void publish(Topic topic, Message message){
        topic.addMessage(message);
        return;
    }

};