import random
a = int(random.randint(0,20))
while True:
	b = int(input("введите число от 0 до 20 :"))
	if b == a:
		print("угадал")
		break
	elif b >a:
		print("число меньше")
	elif b <a:
		print("число больше")
