// Program zamienia w wyrazie litere "a" na "b"

#include <iostream> // zaimportowanie bibliotek do wyświetlania i dla ciagów znaków "string"
#include <string>
using namespace std; // typ przestrzeni nazw

int main()
{
    string wyraz; // zadeklarowanie zmiennej wyraz o typie string/ciag znaków 
    
    cout << "Podaj wyraz: "; // wypisanie na ekran polecenia o wpisanie wyrazu 
    cin >> wyraz; // zapisanie wpisanego wyrazu do zmiennej "wyraz"
    cout << "Wprowadzony wyraz: " << wyraz; // wypisanie na ekran zapisanego "wyrazu"
    
    for (int i=0;i < wyraz.length(); i++){ // petla ktora przechodzi przez kazdy znak w wyrazie 
        if (wyraz[i]=='a'){ // jezeli dany znak jest == "a" to wykonaj warunek 
            wyraz[i]='b'; // podmien wybrany element na "b" | czyli kazda litera "a" zostaje zamieniona na litere "b"
        }
    }
    cout << "Wyraz po przetowrzeniu: " << wyraz << endl; // wypisanie na ekran zmienionego wyrazu 
    return 0; // zakonczenie programu 
}