class Student:
    count = 0;
    def __init__(self):
        print("__init__(self) is called");
        Student.count += 1;

    def set(self):
        self.rno = int(input("Enter Roll Number :"));
        self.name = input("Enter Name :");
        
    def show(self):
        print("Roll Number : ",self.rno);
        print("Name : ",self.name);

    @classmethod
    def show_count(cls):
        print("Total Student",cls.count);

#
s1 = Student();
s1.set();
s1.show();
#print("Total Studenst :",Student.count);
Student.show_count();

s2 = Student();
s2.set();
s2.show();
#print("Total Studenst :",Student.count);
Student.show_count();
