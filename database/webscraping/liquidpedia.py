import requests
from bs4 import BeautifulSoup
from requests.auth import HTTPBasicAuth

prowrite = open("pro.sql", "w")
pro = ['CeRq','jw','flusha','krimz', 'olofmeister', 'f0rest', 'Golden', 'kennyS', 's1mple', 'coldzera', 'fer', 'fallen', 'kng', 'guardian', 'rain', 'shox', 'nbk', 'taco', 'lucas', 'hen1', 'tarik', 'elige', 'stewie2k', 'Twistzz', 'gla1ve', 'nitr0', 'dupreeh', 'brehze', 'kscerato', 'ablej', 'niko', 'device', 'zywoo', 'sergej', 'xyp9x', 'magiskb0y']
roundcontribution = ""
deathperround = ""
mapsplayed = ""
kddiff = ""
team = ""
age = ""
nacionality = ""
proplayername = ""
nick = ""
steamlink = ""
for proname in pro:
    r = requests.get("https://csgopedia.com/players/" + proname)
    infolist = []
    if r.status_code == 200:
        try:
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
            insert = "INSERT INTO proplayercs (roundcontribution, deathperround, mapsplayed, kddiff, team, age, nationality, proplayername, nick, steamlink, created_at, updated_at) values ('" + roundcontribution + "','" + deathperround + "','" + mapsplayed + "','" + kddiff + "','" + team + "','" + age + "','" + nacionality + "','" + proplayername + "','" + nick + "','" + steamlink + "', sysdate(), sysdate());"  
            prowrite.write(insert + "\n")

        except:
            pass
    