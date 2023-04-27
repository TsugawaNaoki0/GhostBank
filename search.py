import itertools
import sys
import word_garage


args = sys.argv[1]

print("<br>")
print("<br>")

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
# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aag = word_garage.amamiyuuki_class()
word_aag = aag.amamiyuuki(args)

if (word_aag == "天海祐希"):
    print("<a href='./box/amamiyuuki.html'>" + str(word_aag) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aah = word_garage.tanakatetsuji_class()
word_aah = aah.tanakatetsuji(args)

if (word_aah == "田中哲司"):
    print("<a href='./box/tanakatetsuji.html'>" + str(word_aah) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aai = word_garage.hayamimokomichi_class()
word_aai = aai.hayamimokomichi(args)

if (word_aai == "速水もこみち"):
    print("<a href='./box/hayamimokomichi.html'>" + str(word_aai) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aaf = word_garage.kinkyutorishirabeshitsu_class()
word_aaf = aaf.kinkyutorishirabeshitsu(args)

if (word_aaf == "緊急取調室"):
    print("<a href='./box/kinkyutorishirabeshitsu.html'>" + str(word_aaf) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aaj = word_garage.suzukikousuke_class()
word_aaj = aaj.suzukikousuke(args)

if (word_aaj == "鈴木浩介"):
    print("<a href='./box/suzukikousuke.html'>" + str(word_aaj) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aak = word_garage.ookurakouji_class()
word_aak = aak.ookurakouji(args)

if (word_aak == "大倉孝二"):
    print("<a href='./box/ookurakouji.html'>" + str(word_aak) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aal = word_garage.takahashiissei_class()
word_aal = aal.takahashiissei(args)

if (word_aal == "高橋一生"):
    print("<a href='./box/takahashiissei.html'>" + str(word_aal) + "</a><br><br>")

# 00000000000000000000000000000000000000000000000000000000000000000000000000000000
aam = word_garage.rohan_au_louvre_class()
word_aam = aam.rohan_au_louvre(args)

if (word_aam == "岸辺露伴"):
    print("<a href='./box/rohan_au_louvre.html'>" + str(word_aam) + "</a><br><br>")
