# Apple push notifications in Terminal
## Requirements
- OSX or macOS
- PHP installed 
- Port 2195 & 2196 opened 

## How to use 

1. Create the **ck.pem** file following the [manual](https://github.com/JDandini/PushNotifications/blob/master/Apple%20Push%20Notifications%20Manual.pdf) and ensure that the ck file is in the same directory of **push.php**
2. On the *AppDelegate.swift* file  on the method ```application(_ application: UIApplication, didRegisterForRemoteNotificationsWithDeviceToken deviceToken: Data)```paste the following code and copy the result of printing 
    ```swift let tokenAPNS = deviceToken.reduce("") { $0 + String(format: "%02x", $1) }
   print(tokenAPNS)```
   
3. On the ```push.php``` file replace the line 3 with the copied token and save
4. Open terminal and do ```$php push.php```
