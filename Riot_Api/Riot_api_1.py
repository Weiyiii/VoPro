from riotwatcher import LolWatcher, ApiError
import pandas as pd

# golbal variables
api_key = 'RGAPI-9bc4ef92-8d9c-4f24-894e-d5f77cac9a31'
watcher = LolWatcher(api_key)
my_region = 'euw1'

me = watcher.summoner.by_name(my_region, 'lmport Korean')
print(me)
