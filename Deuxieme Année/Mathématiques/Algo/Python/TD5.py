from random import *


# Function
def creation_liste(n):
	liste = []
	i = 0
	for count in range(n):
		liste.append(randint(-100, 100))
		i += 1
	return liste


def recherche_max(liste):
	max = liste[0]
	for result in liste:
		if result > max:
			max = result
	return max


def recherche_min(liste):
	min = liste[0]
	for result in liste:
		if result < min:
			min = result
	return min


def ordonner(liste):
	def swap(i, j):
		liste[i], liste[j] = liste[j], liste[i]

	n = len(liste)
	swapped = True

	x = -1
	while swapped:
		swapped = False
		x = x + 1
		for i in range(1, n - x):
			if liste[i - 1] > liste[i]:
				swap(i - 1, i)
				swapped = True

	return liste


def ordonner_decroissant(liste):
	def swap(i, j):
		liste[i], liste[j] = liste[j], liste[i]

	n = len(liste)
	swapped = True

	x = -1
	while swapped:
		swapped = False
		x = x + 1
		for i in range(1, n - x):
			if liste[i - 1] < liste[i]:
				swap(i - 1, i)
				swapped = True

	return liste


# Programme principal
n = int(input("Liste de quelle longueur ? "))
liste = creation_liste(n)
print(liste)
maximum = recherche_max(liste)
print(maximum)
minimum = recherche_min(liste)
print(minimum)
croissant = ordonner(liste)
print(croissant)
decroissant = ordonner_decroissant(liste)
print(decroissant)
