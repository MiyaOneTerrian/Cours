user_nbr = int(input("Entrer le nombre d'années lumières à convertir en km : "))

speed_of_light = int(user_nbr * 9.460528405E+15 / 1000)

print("en " + str(user_nbr) + " d'années lumière, vous aurez parcouru : " + str(speed_of_light) + " de kilomètres !")

