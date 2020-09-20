def findindex(list, char):
	char_time = []
	for i in range(len(list)):
		if list[i] == char:
			char_time.append(i)
	return char_time


ma_list = 'Portez ce vieux whisky au juge blond qui fume'
print(findindex(ma_list, 'e'))
for i in range(len(findindex(ma_list, 'e'))):
	print(findindex(ma_list, 'e')[i])
