a = []
for i  in range(5):
  a.append(int(input("ведите число :")))
print(a)

x = a.index(0)
a[x]= "нуль"

print(a)