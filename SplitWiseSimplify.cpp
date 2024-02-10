#include <iostream>
#include <unordered_map>

using namespace std;

class SplitWiseSpimplify{
public:
    int minTransfers(vector<vector<int>> transactions){
        unordered_map<int, int> member_vs_balance;
        
        for(int i=0;i<transactions.size();i++){
            int from = transactions[i][0];
            int to = transactions[i][1];
            int amount = transactions[i][2];
            
            if(member_vs_balance.find(from) != member_vs_balance.end()){
                int existing_val = member_vs_balance[from];
                member_vs_balance[from] = existing_val-amount;
            }else{
                member_vs_balance[from] = -amount;
            }
            
            if(member_vs_balance.find(to) != member_vs_balance.end()){
                int existing_val = member_vs_balance[to];
                member_vs_balance[to] = existing_val+amount;
            }else{
                member_vs_balance[to] = amount;
            }
            
            vector<int> balances;
            for(auto it: member_vs_balance){
                if(it.second != 0){
                    balances.push_back(it.second);
                }
            }
            
            return dfs(balances, 0);
            
            // [70, -200, 300, -40, -100, -30]
            
        }   
    }  
    
    int dfs(vector<int> balances, int cur_index){
        if(balances.size() == 0 || cur_index >= balances.size())    return 0;
        
        if(balances[cur_index] == 0){
            return dfs(balances, cur_index+1);
        }  
        
        int cur_val = balances[cur_index];
        int min_val = INT_MAX;
        for(int i=cur_index+1;i<balances.size();i++){
            int next_val = balances[i+1];
            // A transaction can happen
            if(cur_val*next_val < 0){
               balances[i] = next_val+cur_val; 
               min_val = min(min_val, 1+dfs(balances, cur_index+1));
               balances[i] = next_val; 
               
               if(cur_val + next_val == 0){
                    break;
               }
            }
        }
        return min_val;
          
        // [100, -50, -50]
    }
};

