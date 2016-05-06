# Custom PHP Framework.
##This is custom MVC, based on PHP psr-4 standard.
###Support namespace and PhpActiveRecord.
---
#### See the documentation for database query [phpActiveRecord] (http://www.phpactiverecord.org/docs/index/main).
---
### How to configure?
Go to `config/config.php` file and set project base url and others settings.

#### Database configure.
Go to `config/database.php` file and configure database connection.

### How to call contoller method?
suppose your site url is `http://example.com`. you simply write controller name and function name as like `http://example.com/ControllerName/FunctionName`.

### How to load View page and send data?
Simply just call view function as like `views('PageName')` if you want to send data that page use second parameter as like `views('PageName',$data)`.

### How to check request and get Input data?
call request method pass check parameter as like `if($this->request('post'))`.If you want to know which request is just call `$this->request()`.

Call input method get input data as example `$this->input('firstname')` its return just single field data.If you want to get all data, call `$this->inputAll()` method.

#### How to get segment data ?
Just call segment method for get segment data as like `$this->segment(2)`.

---
#### Author :
 - **Name :** *Tarek Ahammed Monjur* 
 - **Email :** *tarekmonjur@gmail.com* 
 - **Mobile :** *+88 01832308565* 



