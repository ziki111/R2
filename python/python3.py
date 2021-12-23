class Dom():


	def __init__(self, year , name , numberOfFloors):
		self.year = year
		self.name = name
		self.numberOfFloors = numberOfFloors

	def doma(self):
		print("Год постройки дома", self.year,"\n"
			"Название дома",self.name,"\n"
			"Количество этажей в дома",self.numberOfFloors)

dom1 = Dom(1990,"ульяновский",15)
dom2 = Dom(1998,"пушкинский",19)

dom1.doma()
print()
dom2.doma()