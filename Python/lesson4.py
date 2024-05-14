import speech_recognition as speech_recognition

r = sr.Recognizer()

a = sr.AudioFile('1.wav')
with a as source :
    audio = r.record(source)

text = recogize_google(audio)