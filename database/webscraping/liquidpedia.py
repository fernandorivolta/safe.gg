import requests
from bs4 import BeautifulSoup
from requests.auth import HTTPBasicAuth

proplayername = ""

r = requests.get("https://csgopedia.com/players/s1mple/")
infolist = []
if r.status_code == 200:
    soup = BeautifulSoup(r.content, "html.parser", from_encoding='latin-1')
    white = soup.find('div', id="white")
    userbox = white.find('div', class_="user-box")
    littlecard = userbox.find('div', class_="row row_10")
    namelist = littlecard.find('h1', class_="m-b-1 fs_24").find_all('strong')
    proplayername = namelist[0].get_text() + " " + namelist[2].get_text()
    nick = namelist[1].get_text()
    listinfo = littlecard.find('ul', class_="list-inline").find_all('li')
    nacionality = listinfo[0].get_text()
    age = listinfo[1].get_text().split(' ')[0]
    steamlink = listinfo[2].find('a').get('href')
    team = littlecard.find('div', class_="m-b-1 fs_14").find_all('span')[2].get_text()
    userinfocard = littlecard.find('div', class_="user-info-stats")
    left = userinfocard.find_all('div', class_="col-sm-5")
    right = userinfocard.find_all('div', class_="col-sm-7")
    kd = left[0].get_text().split(' ')[0]
    rating = left[1].get_text().split(' ')[0]
    killsperround = left[2].get_text().split(' ')[0]
    headshotpercentage = left[3].get_text().split(' ')[0]
    kddiff = right[0].get_text().split(' ')[0]
    mapsplayed = right[1].get_text().split(' ')[0]
    deathperround = right[2].get_text().split(' ')[0]
    roundcontribution = right[3].get_text().split(' ')[0]
 
print(roundcontribution)
print(deathperround)
print(mapsplayed)
print(kddiff)
print(team)
print(age)
print(nacionality)
print(proplayername)
print(nick)
print(steamlink) 