import requests
from bs4 import BeautifulSoup
title = []

def page_crawler():
    url = 'https://www.tabroom.com/index/tourn/results/ranked_list.mhtml?event_id=28523&tourn_id=3024'
    source_code = requests.get(url)
    plain_text = source_code.text
    soup = BeautifulSoup(plain_text, "html.parser")
    # add all numbers to list:
    for link in soup.findAll({'td':'smallish centeralign'}):
    	string = link.string
    	title.append(string)
    print(title) #testing
    fx = open("debate.txt", "w")
    fx.write(str(title))
    fx.close()
    """except UnboundLocalError:
        print('wtf')"""

def delete_text():
    for i in title:
       if i == ("None"):
           title.remove(i)



page_crawler()
delete_text()