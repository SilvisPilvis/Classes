#include <iostream>
using namespace std;

class Dog {
    public:
        string name;

        Dog(string n, int a){
            name = n;
            age = a;
        }
        
        void birthday(){
            age++;
        }
        
        void woof(){
            cout << "Woof!";
        }

    private:
        int age;
};

int main() {
    
    Dog reksis("Reksis", 6);
    reksis.woof();

    return 0;
}