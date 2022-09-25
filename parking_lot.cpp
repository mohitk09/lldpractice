/*
Parking lot LLD

1. What kind of vechiles are allowed to enter
2. Parking lot -> multiple floors?
3. Are all the parking slots be the same? -> VIP, normal  
4. Charge people? -> yes
5. Charging strategy
6. All the spots open, some could be reserved?
7. multiple entry/exits
8. Payment options 
9. Do we need to show the current state of the sytem?
10. What order the spots should be filled? -> strategy
11. Should we limit on the parking time? -> NO
12. System admin can decide what car will be parked where?
13. Categories of cars -> Cars/ lighweight, trucks, 2 wheelers
*/

#include<iostream>
#include<set>
using namespace std;


typedef enum{
    CAR,
    MOTORBIKE,
    TRUCK
    
} VechileType;

typedef enum{
    COMPACT,
    MOTORBIKE,
    LARGE,
} ParkingSpotType;

// abstract class
class EntryPoint{
    public:
        virtual void tokenGeneration() = 0;
};

// abstract class
class ExitPoint{
    public:
        virtual void makePayment() = 0;
};

// could implement both
class AccessPoint{
    public:
        bool status;
};

// User -> Admin, Guest
// Parking Lot -> multiple parking floors -> spots -> vechiles

class ParkingFloor{
    public:
        // vector<EntryPoint> entryPoints;
        // vector<ExitPoint> exitPoints; 
        
};

class Vechile{
    public:
        int id;
};

class PaymentInterface{
  public:
    virtual void processPayment() = 0;  
};

// Decorator pattern for entry, exit points access points
// new Entry(new Exit(new AP())) // access point with both entry and exit points


class ParkingSpot{
    private:
        int id;
        bool availability;
        ParkingSpotType type; 
    public:
        ParkingSpot(ParkingSpotType type){
            this->type = type;            
        } 
        bool isParkingSpotFree(){
            return availability;
        }
        void assignVechile(){
            
        }
        void removeVechile(){
            
        }
};

class CompactSpot : ParkingSpot{
    public:
        CompactSpot() :  ParkingSpot(MOTORBIKE){
            
        }
};

class ParkingFloor{
    private:
        string name;
        string id;
        set<ParkingSpot> spots;
    public:
        void addParkingSpot(ParkingSpot spot){
            spots.insert(spot);
        }
        void assignVechileToSpot(){
            
        }
         
};