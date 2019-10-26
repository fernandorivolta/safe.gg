from bs4 import BeautifulSoup
import requests

file = open("champions.html", 'r', encoding="utf8")
file2 = open("champions.sql", 'w', encoding="utf8")
soup = BeautifulSoup(file, "html.parser")
tabela = soup.find_all('p')
errorChamp = []
champions = ["Aatrox", "Thresh", "Tryndamere", "Gragas", "Cassiopeia", "AurelionSol", "Ryze", "Poppy", "Sion", "Annie", "Jhin", "Karma", "Nautilus", "Kled", "Lux", "Ahri", "Olaf", "Viktor", "Anivia", "Singed", "Garen", "Lissandra", "Maokai", "Morgana", "Evelynn", "Fizz", "Heimerdinger", "Zed", "Rumble", "Mordekaiser", "Sona", "KogMaw", "Katarina", "Lulu", "Ashe", "Karthus", "Alistar", "Darius", "Vayne", "Varus", "Udyr", "Leona", "Jayce", "Syndra", "Pantheon", "Riven", "KhaZix", "Corki", "Azir", "Caitlyn", "Nidalee", "Kennen", "Galio", "Veigar", "Bard", "Gnar", "Malzahar", "Graves", "Vi", "Kayle", "Irelia", "LeeSin", "Illaoi", "Elise", "Volibear", "Nunu", "TwistedFate", "Jax", "Shyvana", "Kalista", "DrMundo", "Ivern", "Diana", "TahmKench", "Brand", "Sejuani", "Vladimir", "Zac", "RekSai", "Quinn", "Akali", "Taliyah", "Tristana", "Hecarim", "Sivir", "Lucian", "Rengar", "Warwick", "Skarner", "Malphite", "Yasuo", "Xerath", "Teemo", "Nasus", "Renekton", "Draven", "Shaco", "Swain", "Talon", "Janna", "Ziggs", "Ekko", "Orianna", "Fiora", "Fiddlesticks", "ChoGath", "Rammus", "LeBlanc", "Soraka", "Zilean", "Nocturne", "Jinx", "Yorick", "Urgot", "Kindred", "MissFortune", "Wukong", "Blitzcrank", "Shen", "Braum", "XinZhao", "Twitch", "MasterYi", "Taric", "Amumu", "Gangplank", "Trundle", "Kassadin", "Vel'Koz", "Zyra", "Nami", "JarvanIV", "Ezreal", "Pyke", "Kaisa", "Zoe", "Ornn", "Kayn", "Rakan", "Xayah", "Camille", "Yuumi", "Sylas"]
for line in tabela:
	for champ in champions:
		if champ in line.get_text():
			for h2 in soup.find_all('h2'):
				if champ in h2.get_text():
					if h2.find('i') is not None:
						r = requests.get("https://leagueoflegends.fandom.com/pt-br/wiki/" + champ)
						if r.status_code == 200:
							try:
								soup2 = BeautifulSoup(r.content, "html.parser")
								passive = soup2.find('div', class_="skill_innate").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
								passiveimg = soup2.find('div', class_="skill_innate").find('img')['src'] if 'base64' not in soup2.find('div', class_="skill_innate").find('img')['src'] else soup2.find('div', class_="skill_innate").find('img')['data-src']
								skillq = soup2.find('div', class_="skill_q").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
								skillqimg = soup2.find('div', class_="skill_q").find('img')['src'] if 'base64' not in soup2.find('div', class_="skill_innate").find('img')['src'] else soup2.find('div', class_="skill_q").find('img')['data-src']
								skillw = soup2.find('div', class_="skill_w").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
								skillwimg = soup2.find('div', class_="skill_w").find('img')['src'] if 'base64' not in soup2.find('div', class_="skill_innate").find('img')['src'] else soup2.find('div', class_="skill_w").find('img')['data-src']
								skille = soup2.find('div', class_="skill_e").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
								skilleimg = soup2.find('div', class_="skill_e").find('img')['src'] if 'base64' not in soup2.find('div', class_="skill_innate").find('img')['src'] else soup2.find('div', class_="skill_e").find('img')['data-src']
								skillr = soup2.find('div', class_="skill_r").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
								skillrimg = soup2.find('div', class_="skill_r").find('img')['src'] if 'base64' not in soup2.find('div', class_="skill_innate").find('img')['src'] else soup2.find('div', class_="skill_r").find('img')['data-src']
								file2.write("INSERT INTO CHAMPIONS (name, lore, subname, passive, passive_img, skill_q, skill_q_img, skill_w, skill_w_img, skill_e, skill_e_img, skill_r, skill_r_img) values ('" + champ + "','" + line.get_text() + "','" + h2.find('i').get_text() + "','" + passive + "','" + passiveimg + "','" + skillq + "','" +skillqimg + "','" + skillw + "','" + skillwimg + "','" + skille + "','" + skilleimg + "','" + skillr + "','" + skillrimg + "');\n")
							except:
								r = requests.get("https://leagueoflegends.fandom.com/pt-br/wiki/" + champ + "/Habilidades")
								if r.status_code == 200:
									try:
										soup3 = BeautifulSoup(r.content, "html.parser")
										passive = soup3.find('div', class_="skill_innate").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
										passiveimg = soup3.find('div', class_="skill_innate").find('img')['src'] if 'base64' not in soup3.find('div', class_="skill_innate").find('img')['src'] else soup3.find('div', class_="skill_innate").find('img')['data-src']
										skillq = soup3.find('div', class_="skill_q").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
										skillqimg = soup3.find('div', class_="skill_q").find('img')['src'] if 'base64' not in soup3.find('div', class_="skill_innate").find('img')['src'] else soup3.find('div', class_="skill_q").find('img')['data-src']
										skillw = soup3.find('div', class_="skill_w").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
										skillwimg = soup3.find('div', class_="skill_w").find('img')['src'] if 'base64' not in soup3.find('div', class_="skill_innate").find('img')['src'] else soup3.find('div', class_="skill_w").find('img')['data-src']
										skille = soup3.find('div', class_="skill_e").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
										skilleimg = soup3.find('div', class_="skill_e").find('img')['src'] if 'base64' not in soup3.find('div', class_="skill_innate").find('img')['src'] else soup3.find('div', class_="skill_e").find('img')['data-src']
										skillr = soup3.find('div', class_="skill_r").find_all('table')[1].find('tr').get_text().strip(' \n').replace("'", "")
										skillrimg = soup3.find('div', class_="skill_r").find('img')['src'] if 'base64' not in soup3.find('div', class_="skill_innate").find('img')['src'] else soup3.find('div', class_="skill_r").find('img')['data-src']
										file2.write("INSERT INTO CHAMPIONS (name, lore, subname, passive, passive_img, skill_q, skill_q_img, skill_w, skill_w_img, skill_e, skill_e_img, skill_r, skill_r_img) values ('" + champ + "','" + line.get_text() + "','" + h2.find('i').get_text() + "','" + passive + "','" + passiveimg + "','" + skillq + "','" +skillqimg + "','" + skillw + "','" + skillwimg + "','" + skille + "','" + skilleimg + "','" + skillr + "','" + skillrimg + "');\n")
									except:
										print(champ)
										pass