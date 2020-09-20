l = int(input("Entrer la longueur en cm : "))
L = int(input("Entrer la Largeur en cm : "))
h= int(input("Entrer la hauteur en cm : "))

#volume = l*L*h
#air_total = 2*(L*l+L*h+l*h)
#longueur_total = 4*(L+l+h)
# print("le parallélépipède rectangle a un volume de : " + str(volume) + " cm^3, une aire totale de : " + str(air_total) + " cm², et une longueur d'arete totale de : " + str(longueur_total) + " cm.")

print("le volume est de : " + str(l*L*h) + " cm^3, l'air total de " + str(2*(L*l+L*h+l*h)) + " cm² et un longueur total d'arrete de : " + str(4*(L+l+h)))
