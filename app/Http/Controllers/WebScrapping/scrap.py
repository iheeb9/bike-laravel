from bs4 import BeautifulSoup
import requests
import json
response = requests.get("https://www.2roueselectriques.fr/meilleures-trottinettes-electriques/?op=1&keyword=speedtrott%20st12&gclid=CjwKCAjw2OiaBhBSEiwAh2ZSP7t_fs7j63L1xIsOwRcPcHbH2PdT19BWO1YhA967qtU83Skob1pyABoC2w0QAvD_BwE")
soup = BeautifulSoup(response.text, 'html.parser')
table = soup.find('table')
rows=list()
imgs=list()
for row in table.findAll("img"):
    rows.append(row)
for image in rows:
        #print image source
    imgs.append(image['src'])
    print(image['src'])
#print(imgs)
