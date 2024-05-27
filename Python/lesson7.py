from captcha.image import ImageCaptcha
from captcha.audio import AudioCaptcha

image = ImageCaptcha()
audio = AudioCaptcha()

data = audio.generate('1234')
audio.write('1234','1.wav')

data = image.generate('1234')
image.write('1234','1.png')