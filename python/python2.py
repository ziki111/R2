name = input(" ваше имя ?: ")
age = int(input("ваш возраст? :"))

if age < 18:
	print(name,"вам меньше 18 лет")
if age >= 18:
	print(name,"вам больше 18 лет")