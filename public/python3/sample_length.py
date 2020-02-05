import sys, soundfile

music_path = sys.argv[1]

music = soundfile.SoundFile(music_path)

print('{}'.format(len(music)))

exit()
