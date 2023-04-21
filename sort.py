import itertools
import sys


args = sys.argv[1]

print("<textarea cols='25' rows='30'>")
for i in range(len(args)+1):
    for v in itertools.permutations(args, i):
        print(''.join(v))
print("</textarea>")
