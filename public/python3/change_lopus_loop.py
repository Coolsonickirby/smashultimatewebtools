import sys, struct

def write(filename,data,offset):
    try:
        f = open(filename,'r+b')
    except IOError:
        f = open(filename,'wb')
    f.seek(offset)
    f.write(data)
    f.close()

write(sys.argv[1], int(sys.argv[2]).to_bytes(4, byteorder='big', signed=False), 20)
write(sys.argv[1], int(sys.argv[3]).to_bytes(4, byteorder='big', signed=False), 24)
