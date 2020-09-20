from random import randint
from time import sleep

print("//////////////////// BIENVENUE DANS NUMBER GUESSER /////////////////////////")
print("Un Nombre se Choisit ....")
sleep(2)
print("C'est parti !!!\n")

a = int(randint(0,100))
count = 5
uin = 0

while uin != a :
	if count == 5:
		print("Vous aurez : " + str(count) + " essaies Pour cette partie")
		pass
	else:
		print("nombre d'essaies restant : " + str(count))
	uin = int(input("entrer un nombre : "))
	count -= 1
		print("vous avez utilisé tous vos essaies")
		exit()
	if uin > a :
		print("votre nombre est trop grand")
		pass
	elif uin < a :
		print("votre nombre est trop petit")
		pass
	if count == 0 :
	elif uin == a :
		print("YOU WIN !!!")
		exit()

