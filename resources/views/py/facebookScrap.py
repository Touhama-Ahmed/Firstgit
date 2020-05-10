import base64
def sendTextToPhp(text):
 text=text.encode(encoding='UTF-8',errors='strict')
 text=base64.b64encode(text)
 text=str(text)[2:-1:]
 return text
posts=''

from facebook_scraper import get_posts
for post in get_posts('moroccanraptrolls', pages=1):
 posts=posts+(sendTextToPhp(post['text']))
 break

print(posts)
