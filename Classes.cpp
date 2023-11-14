#include <iostream>
using namespace std;

class Animal{
    public:
        string name;
        void birthday(){
            age++;
        };
        virtual void makeSound() = 0;
    protected:
        int age;
        Animal(string n, int a){
            name = n;
            age = a;
        }

};

class Dog : Animal{
    public:
        Dog(string name, int age) : Animal(name, age){};
        
        void birthday(){
            age++;
        }
        
        void makeSound(){
            cout << "Woof!\n";
        }
};

class Cat : Animal{
    public:
        Cat(string name, int age) : Animal(name, age){};
        
        void birthday(){
            age++;
        }
        
        void makeSound(){
            cout << "Meow!\n";
        }
};

int main() {
    Dog reksis("Reksis", 6);
    reksis.makeSound();
    Cat mincis("Mincis", 2);
    mincis.makeSound();
    Animal wierd();
    return 0;
}