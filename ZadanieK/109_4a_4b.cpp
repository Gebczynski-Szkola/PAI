#include <iostream>
#include <string>
using namespace std;

int main()
{
    string wyraz;
    
    cout << "Podaj wyraz: ";
    cin >> wyraz;
    cout << "Wprowadzony wyraz: " << wyraz;
    
    cout << "Litery wyrazu: " << wyraz << " w kolumnie" << endl;
    
    for (int i=0; i < wyraz.length(); i++){
        cout << wyraz[i] << endl;
    }
    return 0;
}