#include <stdio.h>
#include <stdlib.h>
#include <string.h>
int main(int argc, char *argv[]) {
  if(argc<3){
    exit(1);
  }
  int i=argc-2,j=0,k=0,ban=1;
  FILE *out=fopen(*(argv+i+1),"a");
  if(out==NULL){
    exit(2);
  }
  for(j=0;j<i;j++){
    for(k=0;k<strlen(*(argv+j+1));k++){
      if(*(*(argv+j+1)+k)==';'){
        fprintf(out,"%c\n",*(*(argv+j+1)+k));
        ban=0;
      }else{
        ban=1;
        fprintf(out,"%c",*(*(argv+j+1)+k));
      }
    }
    if(ban){
      fprintf(out,"\t");
    }
  }
  fclose(out);
  return 0;
}
