#include<stdio.h>
int main()
{
int a[20],b[20],c[40],i,j,k,m,n;
printf("enter how many value in A List\n");
scanf("%d",&m);
printf("Enter %d value in sorted order \n",m);
for(i=0;i<m;i++)
scanf("%d",&a[i]);
printf("enter how many value in B List\n");
scanf("%d",&n);
printf("Enter %d value in sorted order \n",n);
for(i=0;i<n;i++)
scanf("%d",&b[i]);

i=j=k=0;

while(i<m&&j<n)
if(a[i]>=b[j])
c[k++]= b[j++];
else
c[k++]=a[i++];

while(i<m)
c[k++]=a[i++];

while(j<n)
c[k++]= b[j++];

printf("\nC list is :\n");
for(i=0;i<m+n;i++)
printf("%5d",c[i]);


}