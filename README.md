**Daemon Yii2** its like a 'service' in UNIX OS.

You can run start-stop-daemon that execute php script with arguments which you set as parameters of 'service'.

In example implemented part of Yii 2 console controller action.

This action have endless loop with requests to some market.

**For example**, you want to see goods of your competitors and compare prices.

You can select market in yor UI and make request for getting goods of your competitor.

But processing will be long time and you still waiting for response.

You looking for loading spinner rotation and you don`t know what server is doing now.

Maybe fall down, maybe works. You dont know.

Solution for this issue will be from time to time getting latest information about goods in background.

You will work with own database but not with shop directly.

You keep time for looking and comparing prices.

There are 2 ways of solution for developers: execution script by cron job or running service;

If you use first way you cant stop running of script because for this action you should remove task from cron.

As for second way you can stop service in any time from server or from web interface.

## Steps
1. Create file in `/etc/init.d/` directory with name `daemon_yii2`
2. Paste code of 'service'
3. Save
4. Change mod `chmod +x /etc/init.d/daemon_yii2`
5. Run command `/etc/inid.d/daemon_yii2 start 20`

As a result you had stared next command in background

```/usr/bin/php /var/www/yii background-runner/parse-shop -m=20 ```
 
 and can see in process list running of your script
 
 If you want stop 'service' you should run ```/etc/inid.d/daemon_yii2 stop 20```. It correctly will stopped process.
 
 

