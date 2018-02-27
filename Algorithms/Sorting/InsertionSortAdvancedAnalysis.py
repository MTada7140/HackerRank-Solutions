#*//////////////////////////////////////////////////////////////////////////////////
#//             Insertion Sort Advanced Analysis
#/////////////////////////////////////////////////////////////////////////////////*/ 
#!/bin/python
import sys
def popBITree(BITree,n):
    updateBIT(BITree, n, -1) 
    return BITree

def constructBITree(n):
    BITree = []
    for i in range (0, n+1) :
        BITree.append(0)
    for  i in range (1, n+1) :
        updateBIT(BITree, i, 1) 
    return BITree

def updateBIT(BITree, index, val):
    n=len(BITree)-1
    while (index <= n):
        BITree[index] += val;
        index += index & (-index)
    return

def getSum(BITree, index):
    sum = 0
    index = index
 
    while (index>0):
        sum += BITree[index]
        index -= index & (-index);
    return sum

#################################################

def insertionSort(arr):
    swap  =0
    bit   = constructBITree(len(arr))
    order = []
    for i in range(1,len(arr)+1):
        order.append(i)
    z = zip(arr,order)
    z.sort()
    for i in range(0,len(arr)):
        popBITree(bit,z[i][1])
        addS= getSum(bit,z[i][1]-1)
        swap += addS
#        print "z= %d swap= %d /%d swap added "%(z[i][1],swap,addS)
    return swap
    
if __name__ == "__main__":
    t = int(raw_input().strip())
    for a0 in xrange(t):
        n = int(raw_input().strip())
        arr = map(int, raw_input().strip().split(' '))
        result = insertionSort(arr)
        print result

