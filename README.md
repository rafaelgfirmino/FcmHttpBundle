# FcmHttpBundle
Firebase Cloud Messaging Bundle of Symfony 


Installation
============

By composer
---------------------------

```bash
  composer require digitalap/fcmhttpbundle
```

Enable the Bundle
-------------------------

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new DigitalAp\FcmHttpBundle\FcmHttpBundle(),
        );

        // ...
    }

    // ...
}
```

 Configuration
---------------------


```yaml
# app/config/config.yml

fcm_http:
  autentication_api_key: keycode ....
```


Usage
-------------

The notification has multiple properties, see FCM [documentation] (https://firebase.google.com/docs/cloud-messaging/http-server-ref) to view.
You'll find everyone at FcmHttpBUndle with their getters and setters.
```php

        //A MESSAGE MAY HAVE A NOTIFICATION OR NO
        $notification = new Notification('Text','Body');
        $notification->enableSound();
        
        //Put that one or more relations_id. Message expects an array as parameter
        //If it is greater than a thousand relations_ids the bundle will send the messages in a thousand
        $message = new Message(array(
            '0'
            '1'
        ));
        
        //A message may not have a notification or a data, but it must have one of the two.
        $message->setNotification($notification);
        
        $guzzle = $this->get('fcm_http.send')->send($message);
        
        // response for server 
        dump(guzzle)
        //Each index of the array returned by the response means a lot of one thousand messages
        dump($guzzle[0]->getBody()->getContents());
```

----------


>  This bundle uses the [Guzzle](https://github.com/guzzle/guzzle) php library

-----------
**License**
FcmHttpBundle is licensed under the MIT license
