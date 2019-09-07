#!/usr/bin/env python
# -*- coding: utf-8 -*-
import requests
from bs4 import BeautifulSoup
from requests.auth import HTTPBasicAuth

linknoticia = ""
imagemnoticia = ""
tag = ""
manchete = ""
info = ""
jornalista = ""
data = ""
insertArray = []

newswrite = open("news.sql", "a")
newsread = open("news.sql", encoding="utf-8").readlines()
r = requests.get("https://vs.com.br/")
if r.status_code == 200:
    soup = BeautifulSoup(r.content, "html.parser", from_encoding='latin-1')
    sections = soup.findAll('section', class_='kivgmc-0 knOKmt article-list')
    for section in sections:
        if 'article-list' in section['class']:
            for a in section.find_all('a'):
                linknoticia = str(a.get('href'))
                picture = a.find('picture')
                if picture is not None:
                    img = picture.find('img')
                    imagemnoticia = img.get('data-src')
                    imagemnoticia = imagemnoticia.replace("quality=65", "quality=80")
                article = a.find('article')
                if article is not None:
                    for element in article.find_all():
                        if element.name == "h3":
                            manchete = element.get_text()
                        elif element.name == "span" and 'ksRZpU' in element['class']:
                            tag = element.get_text()
                        elif element.name == "span" and 'ksRZpW' in element['class']:
                            info = element.get_text()
                        elif element.name == "div" and 'ksRZpX' in element.find('address')['class'] and 'ksRZpY' in element.find('time')['class']:
                            jornalista = element.find('address').get_text()
                            data = element.find('time').get_text()
                insert = "insert into news (link, img, tag, title, body, author, date) values ('https://vs.com.br" + linknoticia + "', '"  + imagemnoticia + "', '"  + tag + "', '"  + manchete + "', '"  + info + "', '"  + jornalista + "', '"  + data + "');"
                newswrite.write(insert + "\n")               
