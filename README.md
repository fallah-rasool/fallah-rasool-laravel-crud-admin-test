# این یک پروژه تست برای ایجاد پکیج است
![2022-09-30_105359](https://user-images.githubusercontent.com/34611256/193328732-0bf52750-e673-4f33-b394-b8f19263e096.png)
بعد از نصب این پکیج می توانیم 4 عملیات اصلی را انجام داد می توانیم یک پست ایجاد کنیم ویرایش یا حذف کنیم یا لیست تمام پست ها را مشاهده کنیم 
## نحوه استفاده:
بعد از نصب لاراول باید یک دیتابس ایجاد کنید و تنظیمات فایل env  را انجام دهیم
فقط کافی است یک نام برای دیتابیس تعیین کنید و در  phpmyadmin نیز آن را بسازید 
حالا نوبت این است با دستور زیر این پکیج را نصب کنید  
```python
Install :
```
```bash
 composer require fallah/crud
 ```


 بعد از اینکه مطمن شدید در پوشه vendor\fallah فایل های پکیج  قرار گرفته است باید به فایل\config\app.phpرفته و در قسمت providers   کد زیر را قرار دهیم :
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
 اینجا جایی است که باید اطلاعات خود را وارد کنید :
 ![2022-09-30_105002](https://user-images.githubusercontent.com/34611256/193328256-46f3d1a4-c50e-44eb-bc97-38d0b1f1e82e.png)
 
اینجا لیست مطالب ایجاد شده را می بنید :

![2022-09-30_105359](https://user-images.githubusercontent.com/34611256/193328732-0bf52750-e673-4f33-b394-b8f19263e096.png)

اینجا می توانیم محتوای هر یک از مطالب را ببنید :

![2022-09-30_110001](https://user-images.githubusercontent.com/34611256/193329666-ca939da9-a21f-4858-8227-013ba8b701d7.png)

