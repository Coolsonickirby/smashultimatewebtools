import struct
import sys

def read_from_hex_offset(file, hex_offset):
    offset = int(hex_offset, base=16)
    file.seek(offset)
    return file.read(4)


f = open(sys.argv[1], "rb")

loop_start_bytes = read_from_hex_offset(f, "0x68")

loop_end_bytes = read_from_hex_offset(f, "0x6C")

f.close()

loop_start = struct.unpack(">i", loop_start_bytes)

loop_end = struct.unpack(">i", loop_end_bytes)

if sys.argv[2] == "start":
    print(loop_start[0])
elif sys.argv[2] == "end":
    print(loop_end[0])
else:
    print("0")
