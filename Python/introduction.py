def sum(a,b):
    return (a + b)

a = int(input('Enter first number: '))
b = int(input('Enter second number: '))

print(f'Sum of {a} and {b} is {sum(a,b)}')




greeting = 'hello there'
print(greeting)

x = "python"
y = "is"
z = "awesome"

print(x,y,z)



#This is a comment
x = 5
y = "john"
print(x)
print(y)

x = "wonderful"
def myfunc():
    print("python is " + x)
myfunc()

x = "hello world" #str type
y = 20            #int 
z = 20.5          #float
v = ["apple","banana","cherry"]  #list
b = ("apple","banana","cherry")  #tuple
w = range(6)                      #range
p = {"name" : "pretty", "age" : "25"}  #dict
t = True  #boolean
t = frozenset({"apple","banana","cherry"})  #frozenset
u  = b"hello"   #bytes
q = bytearray(9)   #bytearray
o  = memoryview(bytes(6))   #memoryview

a = 200
b = 33
if b > a:
    print("b is geater than a")
else:
    print("b is not greater than a")

thisset = {"apple","banana","cherry"}
for x in thisset:
    print(x)

thisdict = {
    "brand": "ford",
    "model": "mustang",
    "year": 1964
}
print(thisdict)


a = "hello , world!"
print(a.upper)


