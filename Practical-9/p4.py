import datetime;
class Person:
    def __init__(self,nm="",bdt=datetime.datetime(2000,1,1),gen=""):
        self.name=nm;
        self.bdate=bdt;
        self.gender=gen;
    
    def set(self):
        self.name=input("Enter Name : ");
        self.bdate=input("Enter Date of Birth : ");
        self.gender=input("Enter Gender : ");

    def show(self):
        print("Name : ",self.name);
        print("Date of Birth : ",self.bdate);
        print("Gender : ",self.gender);

#
class Student(Person):
    def __init__(self,sem=0,pym=0,jm=0,phpm=0):
        self.semester = sem;
        self.py_marks = pym;
        self.j_marks = jm;
        self.php_marks = phpm;

    def set(self):
        self.semester = int(input("Enter Semester : "));
        self.py_marks = int(input("Enter Python Marks : "));
        self.j_marks = int(input("Enter Java Marks : "));
        self.php_marks = int(input("Enter Php Marks : "));

    def show(self):
        print("Semester : ",self.semester);
        print("Python Marks :",self.py_marks);
        print("Java Marks :",self.j_marks);
        print("Php Marks :",self.php_marks);

#
class Employee(Person):
    def __init__(self,b_salary=0):
        self.semester = sem;


p1=Person();
p1.show();
