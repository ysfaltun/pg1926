def mail():
    mailUzunluk = int(input("@ işaretinden sonraki uzunluğu giriniz: \n"))
    if mailUzunluk <= 3:
        print("kullanıcıAdı@websiteSağlayıcı.siteUzantısı.ülkeKodu \n")
        print("Mailinizi bu şekilde giriniz. \n")
        mailAdress = input("Mail adresinizi giriniz: \n")
        a = False
        for x in range(len(mailAdress.split('@')[0])):
            for y in range(len(str("~`!#$%^&*()+=}{[]|\/:;\"'<>,.?"))):
                if mailAdress.split('@')[0][x] == str("~`!#$%^&*()+=}{[]|\/:;\"'<>,.?")[y]:
                    a = True
        if a == False:
            if ("@" in mailAdress):
                noktaSonrasi = mailAdress.split('.')  
                if (len(noktaSonrasi) == mailUzunluk):
                    print("Mail adresiniz doğrudur.")
                else :
                    print("Mail adresiniz yanlıştır uyuşmayan uzaklık. Mail adresiniz uygun değildir.")
            else :    
                print("Mail adresiniz @ içermiyor. Mail adresiniz uygun değildir.")
        else:
            print("Harf rakam - ya da _ kullanınız. Mail adresiniz uygun değildir.")
    else:
        print("Uzunluk 3 e eşit ya da 3 ten küçük olmalı.")
    return (0)

mail()






# mailUzunluk = input("@ işaretinden sonraki uzunluğu giriniz.\n")
# mailAdress = input("Mail adresinizi giriniz.\n")
# print(mailAdress)
# print(mailUzunluk)
# print(uzunluk)