#include <iostream>
#include <string.h>
using namespace std;

int main()
{
 char kata[15];
 int belakang;
 bool palindrome = true;
 
 cout<<"palindrom : ";
 cin.getline(kata,sizeof(kata));
 
 int panjang=strlen(kata);
 belakang=panjang-1;
 
 for(int a=0; a<panjang; a++)
 {
  if((char) tolower(kata[a])!=(char)tolower(kata[belakang]))
  {
   palindrome=false;
   break;
   
  }
  belakang--;
 }
 
 if(palindrome)
 	cout<<"Palindrom";
 else
 	cout<<"Bukan Kata Palindrom"<<endl;
 
 return 0;
}
