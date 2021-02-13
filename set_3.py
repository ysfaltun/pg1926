sayılar = []
print(sayılar)

while True: 
    sayı = input("Sayı giriniz ve enter tuşuna basınız. Çıkmak için y harfine basınız ")
    
    if sayı == "y":
        print("Sayıların hepsi bu kadar.")
        print(sayılar)
        break

    sayılar.append(sayı)
    print(sayılar)

print(sayılar.count('0'))
a = sayılar.count('0')
b = 0
sayılar.reverse()
print(sayılar)

while b < a:
    sayılar.remove('0')
    b = b+1

b = 0

print(sayılar)
# print(a)
# print(b)
while b < a:
    sayılar.append('0')
    b = b+1
sayılar.reverse()
print(sayılar)
    