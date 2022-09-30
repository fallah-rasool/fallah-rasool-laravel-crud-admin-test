# این یک پروزه تست برای ایجاد پکیج است  
## نحوه استفاده:
بعد از نصب لاراول باید یک دیتابس ایجاد کنید و تنظیمات فایل env  را انجام دهیم
فقط کافی است یک نام برای دیتابیس تعیین کنید و در  phpmyadmin نیز آن را بسازید 
حالا نوبت این است با دستور: 

### composer require fallah/crud

این پکیج را نصب کنید  بعد از اینکه مطمن شدید در پوشه vendor\fallah فایل های پکیج  قرار گرفته است باید به فایل\config\app.phpرفته و در قسمت providers   کد 
### Fallah\Crud\CrudServiceProvider::class,
قرار دهیم همچنین در همین فایل باید در قسمت aliases نیز کد زیر 
### 'Crud'=> \Fallah\Crud\CrudFacade::class,
ار قرار دهید

حالا نوبت publish کردن پکیج است در ترمینال این  دستور  را اجرا می کنیم :
### php artisan vendor:publish --provider="Fallah\Crud\CrudServiceProvider"
اکنون باید در مروگر ادرس
### http://127.0.0.1:8000/admin/create
را وارد کنید تا اولین اطلاعات در دیتابیس ذخیره شود 

