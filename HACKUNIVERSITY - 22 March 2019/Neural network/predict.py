import sys

from PIL import Image
# import PIL.ImageOps  
import numpy as np
from keras.models import load_model


CATEGORIES = (
			  'футболка', 'джинсы / брюки / штаны', 'кофта', 'платье', 
			  'куртка / пальто', 'рубашка', 'открытая обувь',
			  'ботинки / кроссовки', 'сумка', 'высокая обувь'
			  )

with open('../input/{}.jpg'.format(sys.argv[1]), 'rb') as file:
	img = Image.open(file).convert('LA')
	# img = PIL.ImageOps.invert(img)
	# img.show()
	img = img.resize((28, 28))
	pixels = np.asarray(img)[:,:,0].reshape((1,-1))
	# # print(pixels)
	# pixels = pixels[0]
	# pixels = [255 - i for i in pixels]
	# pixels = np.array([pixels])
	# # print(pixels)
	pixels = pixels.reshape((-1, 28, 28, 1))

	model = load_model('../model.txt')

	print(CATEGORIES[list(map(int, model.predict(pixels)[0])).index(1)])