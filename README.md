# این یک پروزه تست برای ایجاد پکیج است

## نحوه استفاده:
بعد از نصب لاراول باید یک دیتابس ایجاد کنید و تنظیمات فایل env  را انجام دهیم
فقط کافی است یک نام برای دیتابیس تعیین کنید و در  phpmyadmin نیز آن را بسازید 
حالا نوبت این است با دستور: 
```python
Install :
```
```bash
 composer require fallah/crud
 ```


این پکیج را نصب کنید  بعد از اینکه مطمن شدید در پوشه vendor\fallah فایل های پکیج  قرار گرفته است باید به فایل\config\app.phpرفته و در قسمت providers   کد زیر را قرار دهیم :
 ```bash
 Fallah\Crud\CrudServiceProvider::class,
 ```
 همچنین در همین فایل باید در قسمت aliases نیز کد زیر را قرار دهید :
```bash
 'Crud'=> \Fallah\Crud\CrudFacade::class,
 ```


حالا نوبت publish کردن پکیج است در ترمینال این  دستور  را اجرا می کنیم :
 ```bash
 php artisan vendor:publish --provider="Fallah\Crud\CrudServiceProvider"
  ```
اکنون باید در مروگر ادرس زیر را وارد کنید تا اولین اطلاعات در دیتابیس ذخیره شود
 ```bash
 http://127.0.0.1:8000/admin/create
 ```
 

