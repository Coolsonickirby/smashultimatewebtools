import sys, soundfile

music_path = sys.argv[1]

music_data, sample_rate = soundfile.read(music_path, dtype='float32')

print(sample_rate)

exit()
