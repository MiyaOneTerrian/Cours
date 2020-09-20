
def ordonner(x,y):
    if x<y :
        xmini=x
        x=y
        y = xmini
    return(x,y)

a= int(input("a : "))
b= int(input("b : "))
c = int(input("c : "))

a,b=ordonner(a,b)
a,c=ordonner(a,c)
b,c=ordonner(b,c)

print("a=", a, "b=", b, "c=", c)