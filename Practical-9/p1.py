class String:
    def __init__(self,st=""):
        print("__init__(self) is called");
        self.str=st;

    def set(self,st=""):
        self.str=st;

    def get(self):
        return self.str;

    def length(self):
        return (len(self.str));

    def join(self,st1):
        self.str = self.str + st1.str;

    def compare(self,st1):
        if self.str == st1.str:
            return 1;
        else:
            return 0;
    def reverse(self):
        self.str = self.str[::-1];

    def ispalindrome(self):
        str1 = self.str[::-1];
        if self.str == str1:
            return 1;
        else:
            return 0;
    def check(self,st1):
        if st1.str in self.str:
            return 1;
        else:
            return 0;
#
s1=String();
print("s1 = ",s1.get());
s2=String("ddu");
print("s2 = ",s2.get());
tmp = input("Enter a String : ");
s1.set(tmp);
print("s1 = ",s1.get());

print("Length of s1 : ",s1.length());
print("Length of s2 : ",s2.length());

s1.join(s2);
print("s1 Join S2 :",s1.get());

if s1.compare(s2):
    print("s1 is same as s2");
else:
    print("s1 is not same as s2");


#s1.reverse();
print("s1 in reverse= ",s1.get());

if s1.ispalindrome():
    print("S1 is Palindrome");
else:
    print("S1 is Not Palindrome");


print("s1 = ",s1.get());
if s1.check(s2):
    print("S2 is in S1");
else:
    print("S2 not in S1");
