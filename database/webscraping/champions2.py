import requests
from bs4 import BeautifulSoup
import json
import re

champions = ["Aatrox", "Thresh", "Tryndamere", "Gragas", "Cassiopeia", "AurelionSol", "Ryze", "Poppy", "Sion", "Annie", "Jhin", "Karma", "Nautilus", "Kled", "Lux", "Ahri", "Olaf", "Viktor", "Anivia", "Singed", "Garen", "Lissandra", "Maokai", "Morgana", "Evelynn", "Fizz", "Heimerdinger", "Zed", "Rumble", "Mordekaiser", "Sona", "KogMaw", "Katarina", "Lulu", "Ashe", "Karthus", "Alistar", "Darius", "Vayne", "Varus", "Udyr", "Leona", "Jayce", "Syndra", "Pantheon", "Riven", "Khazix", "Corki", "Azir", "Caitlyn", "Nidalee", "Kennen", "Galio", "Veigar", "Bard", "Gnar", "Malzahar", "Graves", "Vi", "Kayle", "Irelia", "LeeSin", "Illaoi", "Elise", "Volibear", "Nunu", "TwistedFate", "Jax", "Shyvana", "Kalista", "DrMundo", "Ivern", "Diana", "TahmKench", "Brand", "Sejuani", "Vladimir", "Zac", "RekSai", "Quinn", "Akali", "Taliyah", "Tristana", "Hecarim", "Sivir", "Lucian", "Rengar", "Warwick", "Skarner", "Malphite", "Yasuo", "Xerath", "Teemo", "Nasus", "Renekton", "Draven", "Shaco", "Swain", "Talon", "Janna", "Ziggs", "Ekko", "Orianna", "Fiora", "Fiddlesticks", "Chogath", "Rammus", "Leblanc", "Soraka", "Zilean", "Nocturne", "Jinx", "Yorick", "Urgot", "Kindred", "MissFortune", "MonkeyKing", "Blitzcrank", "Shen", "Braum", "XinZhao", "Twitch", "MasterYi", "Taric", "Amumu", "Gangplank", "Trundle", "Kassadin", "Velkoz", "Zyra", "Nami", "JarvanIV", "Ezreal", "Pyke", "Kaisa", "Zoe", "Ornn", "Kayn", "Rakan", "Xayah", "Camille", "Yuumi", "Sylas","Qiyana"]
champions_data = []

output = open('champions.json', 'w', encoding='utf-8')
for champ in champions:
    rqs = requests.get('https://ddragon.leagueoflegends.com/cdn/9.21.1/data/pt_BR/champion/' + champ + '.json')
    rqs = rqs.json()
    champ_data = { 
                "champion" : rqs['data'][champ]['name'],
                "title" : rqs['data'][champ]['title'],
                "lore" : rqs['data'][champ]['lore'],
                "tags" : rqs['data'][champ]['tags'],
                "stats" : rqs['data'][champ]['stats'],
                "passive" : {"name" : rqs['data'][champ]['passive']['name'],
                            "img" : "http://ddragon.leagueoflegends.com/cdn/9.21.1/img/passive/" + rqs['data'][champ]['passive']['image']['full']
                        },
                "q" : {"name" : rqs['data'][champ]['spells'][0]['name'],
                        "description" : rqs['data'][champ]['spells'][0]['description'],
                        "img" : "http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][0]['image']['full']
                    },
                "w" : {"name" : rqs['data'][champ]['spells'][1]['name'],
                        "description" : rqs['data'][champ]['spells'][1]['description'],
                        "img" : "http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][1]['image']['full']
                    },
                "e" : {"name" : rqs['data'][champ]['spells'][2]['name'],
                        "description" : rqs['data'][champ]['spells'][2]['description'],
                        "img" : "http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][2]['image']['full']
                    },
                "r" : {"name" : rqs['data'][champ]['spells'][3]['name'],
                        "description" : rqs['data'][champ]['spells'][3]['description'],
                        "img" : "http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][3]['image']['full']
                    }
                } 
    output.write("INSERT INTO CHAMPIONS (name, lore, subname, passive, passive_img, skill_q, skill_q_img, skill_w, skill_w_img, skill_e, skill_e_img, skill_r, skill_r_img, created_at, updated_at) VALUES ('" + rqs['data'][champ]['name'].replace("'", "") + "', '" + rqs['data'][champ]['lore'].replace("'", "") + "', '" + rqs['data'][champ]['title'].replace("'", "") + "', '" + re.sub('<[^>]+>', '',rqs['data'][champ]['passive']['description']).replace("'", "") + "', 'http://ddragon.leagueoflegends.com/cdn/9.21.1/img/passive/" + rqs['data'][champ]['passive']['image']['full'] + "', '" + re.sub('<[^>]+>', '', rqs['data'][champ]['spells'][0]['description']).replace("'", "") + "', 'http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][0]['image']['full']  + "', '" + re.sub('<[^>]+>', '', rqs['data'][champ]['spells'][1]['description']).replace("'", "") + "', 'http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][1]['image']['full']   + "', '" + re.sub('<[^>]+>', '', rqs['data'][champ]['spells'][2]['description']).replace("'", "") + "', 'http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][2]['image']['full'] + "', '" + re.sub('<[^>]+>', '', rqs['data'][champ]['spells'][3]['description']).replace("'", "") + "', 'http://ddragon.leagueoflegends.com/cdn/9.21.1/img/spell/" + rqs['data'][champ]['spells'][3]['image']['full'] + "', sysdate(), sysdate());\n")