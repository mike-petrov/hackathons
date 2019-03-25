from flask import Flask, jsonify, request

import os
import re
import requests
import base64
from flask_cors import CORS


from predict import predict
# import sys

# from PIL import Image
# # import PIL.ImageOps  
# import numpy as np
# import keras
# from keras.models import load_model

app = Flask(__name__)
CORS(app, resources={r'/*': {'origins': '*'}})

LINK = '0.0.0.0:5000'
CATEGORIES = (
			  'футболка', 'джинсы / брюки / штаны', 'кофта', 'платье', 
			  'куртка / пальто', 'рубашка'
			  )

# Загрузка изображения

def max_image(url):
	x = os.listdir(url)
	k = 0
	for i in x:
		j = re.findall(r'\d+', i)
		if len(j) and int(j[0]) > k:
			k = int(j[0])
	return k+1

# def load_image(data, url, name=None, form='png', type='base64'):
# 	# Декодирование Base64

# 	if type == 'base64':
# 		if 'data:' in data:
# 			ind = data.index('base64,')
# 			data = data[ind+6:]

# 		print(data[:-10])

# 		data = base64.b64decode(data)

# 	# Имя файла

# 	if name:
# 		name = str(name)

# 		for i in os.listdir(url):
# 			if re.search(r'^' + name + '\.', i):
# 				os.remove(url + '/' + i)
# 	else:
# 		name = str(max_image(url))
	
# 	# Запись

# 	with open('{}/{}.{}'.format(url, name, form), 'wb') as file:
# 		file.write(data)
	
# 	#

# 	return name

# def reimg(s):
# 	k = 0

# 	while True:
# 		x = re.search(r'<img ', s[k:])

# 		if x:
# 			st = list(x.span())
# 			st[1] = st[0] + s[k+st[0]:].index('>')
# 			vs = ''

# 			if 'src="' in s[k+st[0]:k+st[1]]:
# 				if re.search(r'image/.*;', s[k+st[0]:k+st[1]]) and 'base64,' in s[k+st[0]:k+st[1]]:
# 					start = k + st[0] + s[k+st[0]:].index('base64,') + 7
# 					stop = start + s[start:].index('"')

# 					b64 = s[start:stop]
# 					form = re.search(r'image/.*;', s[k+st[0]:start]).group(0)[6:-1]
# 					adr = load_image(b64, 'load', form=form)

# 					# vs = '<img src="{}static/load/{}.{}">'.format(LINK, adr, form)
# 					vs = '<img src="/load/{}.{}">'.format(adr, form)

# 				else:
# 					start = k + re.search(r'src=".*', s[k:]).span()[0] + 5
# 					stop = start + s[start:].index('"')
# 					href = s[start:stop]

# 					if href[:4] == 'http':
# 						b64 = str(base64.b64encode(requests.get(href).content))[2:-1]
# 						form = href.split('.')[-1]
# 						if 'latex' in form:
# 							form = 'png'

# 						adr = load_image(b64, 'load', form=form)
# 						vs = '<img src="/load/{}.{}">'.format(adr, form)

# 			if vs:
# 				s = s[:k+st[0]] + vs + s[k+st[1]+1:]
# 				k += st[0] + len(vs)
# 			else:
# 				k += st[1]
# 		else:
# 			break

# 	return s

#

@app.route('/', methods=['POST'])
def index():
	# x = request.json
	# print(x)
	# load_image(x['data'], 'load')

	data = request.files['file']
	# print(data)

	n = max_image('load')

	name = 'load/{}.png'.format(n)
	data.save(name)

	# load_image(data, 'load', type=None)

	# ML


	return jsonify({'category': predict(name)})
	# keras.backend.clear_session() 
	# with open(name, 'rb') as file:
	# 	img = Image.open(file).convert('LA')
	# 	img = img.resize((28, 28))
	# 	pixels = np.asarray(img, dtype='int32')[:,:,0].reshape((1,-1))
	# 	# # print(pixels)
	# 	# pixels = pixels[0]
	# 	# pixels = [255 - i for i in pixels]
	# 	# pixels = np.array([pixels])
	# 	# # print(pixels)
	# 	pixels = pixels.reshape((-1, 28, 28, 1))

	# 	model = load_model('../model.txt')

	# 	pred = model.predict(pixels)
	# 	# print(pred)
	# 	pred = list(map(int, pred[0]))
	# 	# print(pred)
	# 	if pred in CATEGORIES:
	# 		# print(pred)
	# 		pred = pred.index(1)
	# 		category = CATEGORIES[pred]
	# 		# print(category)

	# 		return jsonify({'category': category})
		
	# 	else:
	# 		return jsonify({'category': None})

app.run('0.0.0.0', port=5000)