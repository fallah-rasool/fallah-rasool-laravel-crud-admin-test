# این یک پروزه تست برای ایجاد پکیج است
![2022-09-30_105359](https://user-images.githubusercontent.com/34611256/193328732-0bf52750-e673-4f33-b394-b8f19263e096.png)

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
 ![2022-09-30_105002](https://user-images.githubusercontent.com/34611256/193328256-46f3d1a4-c50e-44eb-bc97-38d0b1f1e82e.png)
 

