#include <iostream>
#include <string>
using namespace std;

int znajdz_tekst(string tekst, string wzorzec, int pozycja_startowa)
{
    int dl1 = tekst.length();
    int dl2 = wzorzec.length();

    for(int i = pozycja_startowa; i < dl1 - dl2; i++){
        int j;
        for (j = 0; j < dl2; j++)
        {
            if (tekst[i+j] != wzorzec[j])
            {
                break;
            }
            
            if (j == dl2)
            {
                return i;
            }   
        }
    }
    return -1;
}