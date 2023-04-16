import itertools
import sys


args = sys.argv[1]
# print(args)

# l = ['a', 'b', 'c', 'd']

for i in range(len(args)+1):
    for v in itertools.permutations(args, i):
        print(''.join(v))
        print("<br>")
