sayilar = []

while True:
    sayi = int(input('Bir sayi girin, cikmak icin -1 girmelisiniz\nSayi: '))
    if sayi == -1:
        print('Sayi girme islemi tamamlandi!')
        break
    else:
        sayilar.append(sayi)

for var in sayilar:
    if var % 2 == 0:
        sayilar.remove(var)

sayilar.sort()
print(f'Listedeki en buyuk tek sayi: {sayilar[-1]}')