from bs4 import BeautifulSoup

file = open("flinstons.html", 'r', encoding="utf8")
soup = BeautifulSoup(file, "html.parser")
tabela = soup.find_all('p')
champions = ["Aatrox", "Thresh", "Tryndamere", "Gragas", "Cassiopeia", "AurelionSol", "Ryze", "Poppy", "Sion", "Annie", "Jhin", "Karma", "Nautilus", "Kled", "Lux", "Ahri", "Olaf", "Viktor", "Anivia", "Singed", "Garen", "Lissandra", "Maokai", "Morgana", "Evelynn", "Fizz", "Heimerdinger", "Zed", "Rumble", "Mordekaiser", "Sona", "KogMaw", "Katarina", "Lulu", "Ashe", "Karthus", "Alistar", "Darius", "Vayne", "Varus", "Udyr", "Leona", "Jayce", "Syndra", "Pantheon", "Riven", "KhaZix", "Corki", "Azir", "Caitlyn", "Nidalee", "Kennen", "Galio", "Veigar", "Bard", "Gnar", "Malzahar", "Graves", "Vi", "Kayle", "Irelia", "LeeSin", "Illaoi", "Elise", "Volibear", "Nunu", "TwistedFate", "Jax", "Shyvana", "Kalista", "DrMundo", "Ivern", "Diana", "TahmKench", "Brand", "Sejuani", "Vladimir", "Zac", "RekSai", "Quinn", "Akali", "Taliyah", "Tristana", "Hecarim", "Sivir", "Lucian", "Rengar", "Warwick", "Skarner", "Malphite", "Yasuo", "Xerath", "Teemo", "Nasus", "Renekton", "Draven", "Shaco", "Swain", "Talon", "Janna", "Ziggs", "Ekko", "Orianna", "Fiora", "Fiddlesticks", "ChoGath", "Rammus", "LeBlanc", "Soraka", "Zilean", "Nocturne", "Jinx", "Yorick", "Urgot", "Kindred", "MissFortune", "Wukong", "Blitzcrank", "Shen", "Braum", "XinZhao", "Twitch", "MasterYi", "Taric", "Amumu", "Gangplank", "Trundle", "Kassadin", "Vel'Koz", "Zyra", "Nami", "JarvanIV", "Ezreal", "Pyke", "Kaisa", "Zoe", "Ornn", "Kayn", "Rakan", "Xayah", "Camille", "Yuumi", "Sylas"]
for line in tabela:
	for champ in champions:
		if champ in line.get_text():
			for h2 in soup.find_all('h2'):
				if champ in h2.get_text():
					if h2.find('i') is not None:
						print("INSERT INTO CHAMPIONS (name, lore, subname) values ('"+champ+"','"+line.get_text()+"','" + h2.find('i').get_text() + "')")

