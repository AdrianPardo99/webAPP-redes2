#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(int argc, char *argv[]) {
  if(argc<2){
    exit(1);
  }
  int t=argc-1,j=0;
  for(j=0;j<t;j++){
    int i=0;
    char *d=*(argv+1+j);
    for(i=0;i<strlen(d);i++){
      if(*(d+i)=='_'){
        printf("\t");
      }else if(*(d+i)=='\n'){}else if(*(d+i)==';'){
        printf(";\n");
      }else if(*(d+i)==' '){
        printf("\n");
      }else{
        printf("%c",*(d+i));
      }
    }
  }
  return 0;
}
