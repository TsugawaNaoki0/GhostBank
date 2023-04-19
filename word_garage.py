class apple_class():                    # クラス名、関数名は単語と同じ
    def apple(self, search_word):
        path = "./data/apple"                # パスを変える(単語と同じ)
        with open(path) as f:
            l = f.readlines()
        for i in range(len(l)):
            l[i] = l[i][:-1]
        for i in range(len(l)):
            if(search_word == l[i]):
                return "りんご"           #　代表的なものを一つ決める

# -----------------------------------------------------------------------
class jimintou_class():                    # クラス名、関数名は単語と同じ
    def jimintou(self, search_word):
        path = "./data/jimintou"                # パスを変える(単語と同じ)
        with open(path) as f:
            l = f.readlines()
        for i in range(len(l)):
            l[i] = l[i][:-1]
        for i in range(len(l)):
            if(search_word == l[i]):
                return "自民党"           #　代表的なものを一つ決める

# -----------------------------------------------------------------------
