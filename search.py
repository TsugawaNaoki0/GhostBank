import itertools
import sys
import word_garage


args = sys.argv[1]

# word = args



print("<br>")
print("<br>")




# for i in range(len(args)+1):
#     for v in itertools.permutations(args, i):
#         # print(v)
#         # print(''.join(v))
#         args = ''.join(v)
        




aaa = word_garage.apple_class()
word_aaa = aaa.apple(args)

if (word_aaa == "りんご"):
    print("<a href='https://ja.wikipedia.org/wiki/%E3%83%AA%E3%83%B3%E3%82%B4'>" + str(word_aaa) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aab = word_garage.jimintou_class()
word_aab = aab.jimintou(args)

if (word_aab == "自民党"):
    print("<a href='https://www.jimin.jp/'>" + str(word_aab) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aac = word_garage.lazarus_class()
word_aac = aac.lazarus(args)

if (word_aac == "ラザルス"):
    print("<a href='./box/lazarus.html'>" + str(word_aac) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aad = word_garage.vermeer_class()
word_aad = aad.vermeer(args)

if (word_aad == "フェルメール"):
    print("<a href='./box/vermeer.html'>" + str(word_aad) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aae = word_garage.deathnote_class()
word_aae = aae.deathnote(args)

if (word_aae == "デスノート"):
    print("<a href='./box/deathnote.html'>" + str(word_aae) + "</a><br><br>")
