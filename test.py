#coding=utf-8
import re
import urllib

def getHtml(url):
	page = urllib.urlopen(url)
	html = page.read()
	return html

def getImg(html):
	reg = r'src="(.*?\.jpg)"'
	imgre = re.compile(reg)
	imglist = re.findall(imgre,html)
	x = 0
	for imgurl in imglist:
		urllib.urlretrieve(imgurl,'/tmp/%s.jpg' % x);
		x+=1

html = getHtml("http://tieba.baidu.com/p/2738151262")
#print getImg(html)
getImg(html)
