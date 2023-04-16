import itertools
import sys
import word_garage


args = sys.argv[1]

# word = args

aaa = word_garage.apple_class()
word = aaa.apple(args)

print("<br>")
print("<br>")

if (word == "りんご"):
    print("<a href='https://ja.wikipedia.org/wiki/%E3%83%AA%E3%83%B3%E3%82%B4'>" + str(word) + "</a>")
elif (word == 0):
    print("検索結果はありません")
