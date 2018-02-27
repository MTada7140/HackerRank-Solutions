#*//////////////////////////////////////////////////////////////////////////////////
#//               Halloween Sale
#/////////////////////////////////////////////////////////////////////////////////*/ 
#!/bin/python

import sys

def howManyGames(p, d, m, s):
    # Return the number of games you can buy
    gCount = 0
    cPrice = p
    
    s -=   cPrice
    if s >= 0: gCount = 1
    else     : return 0
    
    while s > 0:
        if cPrice - d > m: cPrice  -= d
        else             : cPrice  =  m 
        s -=   cPrice
        if s >= 0        : gCount  += 1
    return gCount

if __name__ == "__main__":
    p, d, m, s = raw_input().strip().split(' ')
    p, d, m, s = [int(p), int(d), int(m), int(s)]
    answer = howManyGames(p, d, m, s)
    print answer

